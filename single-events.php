<?php
/**
 * The template for displaying stores single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MST
 */

get_header();
	
	$product_template = get_field('product_template');

	if($product_template == 'single_column') {
		get_template_part('template-parts/events/single-column');
	} else {
		get_template_part('template-parts/events/double-column');
	}

get_footer();