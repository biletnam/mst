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

}(jQuery));	