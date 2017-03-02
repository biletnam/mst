<?php

/**
 * Header right mini cart number ajaxify
 *
 */
function mst_header_ajaxify_add_to_cart( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<a class="ajaxify-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'mst'); ?>">Cart (<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'mst'), $woocommerce->cart->cart_contents_count);?>)</a>
	<?php
	
	$fragments['.ajaxify-cart'] = ob_get_clean();
	
	return $fragments;
	
}
add_filter('add_to_cart_fragments', 'mst_header_ajaxify_add_to_cart');

/**
 * Header right mini cart hover load cart item ajaxify
 * Js Part settings.js File
 */
function mode_theme_update_mini_cart() {
  echo wc_get_template( 'cart/mini-cart.php' );
  die();
}
add_filter( 'wp_ajax_nopriv_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
add_filter( 'wp_ajax_mode_theme_update_mini_cart', 'mode_theme_update_mini_cart' );
