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

	if($product_template == 'template_two') {
		get_template_part('template-parts/events/template-2');
	} else {
		get_template_part('template-parts/events/template-1');
	}

get_footer();