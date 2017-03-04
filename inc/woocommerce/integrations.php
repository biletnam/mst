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

/**
 * Change checkout form field placeholder and label
 *
 */  
function granolaecommerce_checkout_fields_placeholder( $fields ) {
	$fields['billing']['billing_first_name']['placeholder'] = 'First Name *';

	$fields['billing']['billing_last_name']['placeholder'] = 'Last Name *';

	$fields['billing']['billing_company']['placeholder'] = 'Company Name';

	$fields['billing']['billing_email']['placeholder'] = 'Email Address *';

	$fields['billing']['billing_phone']['placeholder'] = 'Phone *';


	$fields['billing']['billing_address_1']['placeholder'] = 'Address *';

	$fields['billing']['billing_state']['label'] = 'Town / City';

	$fields['billing']['billing_postcode']['placeholder'] = 'Postcode *';


	return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'granolaecommerce_checkout_fields_placeholder' );

/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function woo_archive_custom_cart_button_text() {
 
        return __( 'Buy Now', 'mst' );
 
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );

/**
 * Change post type product featured meta title
 *
 */  
function change_product_featured_meta_box_title() {
    remove_meta_box( 'postimagediv', 'product', 'side' );
    add_meta_box('postimagediv', __('Seating Image'), 'post_thumbnail_meta_box', 'product', 'side', 'high');
}
add_action( 'admin_head', 'change_product_featured_meta_box_title' );

// function change_product_featured_image_link($content) {
//     $content = str_replace(__('Set product image'), __('Set seating image'), $content);
//     $content = str_replace(__('Remove product image'), __('Remove seating image'), $content);

//     return $content;
// }
// add_filter('admin_post_thumbnail_html', 'change_product_featured_image_link');


function mst_text_row_one() {
    // Print a custom text field
    woocommerce_wp_text_input( array(
        'id' => 'text_row_one',
        'label' => 'Text Row 1',
        //'description' => 'Check if fast shipping available.',
        //'desc_tip' => 'true',
    ) );
}
add_action( 'woocommerce_product_options_general_product_data', 'mst_text_row_one' );

function mst_text_row_one_save( $post_id ) {
    if ( ! empty( $_POST['text_row_one'] ) ) {
        update_post_meta( $post_id, 'text_row_one', esc_attr( $_POST['text_row_one'] ) );
    }
}
add_action( 'woocommerce_process_product_meta', 'mst_text_row_one_save' );


function mst_text_row_two() {
    // Print a custom text field
    woocommerce_wp_text_input( array(
        'id' => 'text_row_two',
        'label' => 'Text Row 2',
        //'description' => 'Check if fast shipping available.',
        //'desc_tip' => 'true',
    ) );
}
add_action( 'woocommerce_product_options_general_product_data', 'mst_text_row_two' );

function mst_text_row_two_save( $post_id ) {
    if ( ! empty( $_POST['text_row_two'] ) ) {
        update_post_meta( $post_id, 'text_row_two', esc_attr( $_POST['text_row_two'] ) );
    }
}
add_action( 'woocommerce_process_product_meta', 'mst_text_row_two_save' );

function mst_product_template() {
    // Print a custom text field
    woocommerce_wp_select( array(
        'id' => 'product_template',
        'label' => 'Template',
        'options' => array(
            '' => __('Choose a template', 'mst'),
            'one' => __('Template 1', 'mst'),
            'two' => __('Template 2', 'mst')
        ),
        //'description' => 'Check if fast shipping available.',
        //'desc_tip' => 'true',
    ) );
}
add_action( 'woocommerce_product_options_general_product_data', 'mst_product_template' );

function mst_product_template_save( $post_id ) {
    if ( ! empty( $_POST['product_template'] ) ) {
        update_post_meta( $post_id, 'product_template', esc_attr( $_POST['product_template'] ) );
    }
}
add_action( 'woocommerce_process_product_meta', 'mst_product_template_save' );