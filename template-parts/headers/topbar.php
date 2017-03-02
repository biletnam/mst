<div class="topbar" style="background: #000000">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<span class="phoneNumber">Phone: <a href="tel+416-817-8787">416-817-8787</a></span>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<ul class="top-menu list-inline text-right">
					<li class="cart-toggler">
						<a class="ajaxify-cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>" >Cart (<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>)
							</a>
							<div class="mini-cart-items"></div>
					</li>
					<li><a href="<?php echo wc_get_checkout_url(); ?>">Checkout</a></li>
				</ul>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /topbar -->