(function ($) {
	"use strict";

	/**
	 * Header Nav Toggle
	 *
	 */
	$('.navbar-toggle').click(function(){
        $(this).toggleClass('in');
    });

	/**
	 * Header Mini cart hover ajaxfy
	 *
	 */
	$('.cart-toggler').hover(function(){
		var data = {
	   	'action': 'mode_theme_update_mini_cart'
		 };
		 $.post( woocommerce_params.ajax_url, data, function(response){
		     $('.mini-cart-items').html(response);
		   }
		 );
	});

	//$('[data-remodal-id=modal]').remodal(options);
	
	/**
	 * Smooth scroll
	 *
	 */
	$(function() {
	  $('.smoothScroll, .smoothScroll>a').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	// Preloader 
	$(window).on('load', function() {  
		$('#preloader > .site-info').fadeOut();
		$('#preloader').delay(500).fadeOut('slow');  
		$('body').delay(3000).css({'overflow':'visible'});
	})

	/* process tickets */
	$('form.tickets').submit(function(e){
		e.preventDefault();
		var _that = $(this);
		var data = { action: 'processTickets' };
		$.each($(this).serializeArray(), function(key, value){
			data[value.name] = value.value;
		});

		$.ajax({
			type: 'POST',
			url: woocommerce_params.ajax_url,
			data: data,
			dataType: 'json',
			success: function(resp) {
				console.log(resp);
				_that.prev().find('span').text(resp.availableseats); // update available seats frontend
				$('[data-remodal-id=modal]').remove(); // remove previous modal messages
				var content = '<div class="remodal cart-after-popup text-center" data-remodal-id="modal"><h4 class="message"><span>'+ resp.title +'</span> '+ resp.message +' </h4>\
					<div class="form-inline">\
						<div class="form-group">\
							<a href="" class="button" data-remodal-action="close" style="background-color: '+ resp.storecolor +'">continue shopping</a>\
							<a href="'+ resp.checkouturl + '" class="button"  style="background-color: '+ resp.storecolor +'">checkout</a>\
						</div>\
					</div></div>';
				$(content).appendTo('body');
				let modal = $('[data-remodal-id=modal]').remodal(); // initiate modal
				modal.open();
			},
			error: function(req, status, err){
				console.log(err);
			}
		});

	});

}(jQuery));	