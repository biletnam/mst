<?php
/**
 * The template for displaying stores single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MST
 */
$seating_image = get_field('seating_image');

get_header(); ?>
	<div id="purchase">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="entry-header text-center">
						<h3 class="entry-title"><span  style="color: <?php echo getTaxField('store_color'); ?>"><?php the_field('team_artist'); ?></span> <?php the_field('misc_text'); ?> <?php the_field('teamvenue'); ?></h3>

						<?php if ($seating_image): ?>
							<img src="<?php echo $seating_image; ?>" class="img-responsive" alt="Seating Image">
						<?php endif ?>
					</div>
				</div>
			</div>

			<div class="row">

				<?php

					global $event_id;
				 	$event_id = get_the_ID();

				 	$seating = get_field('seating');
				 	$seat_ids = wp_list_pluck($seating, 'seat_id');

					$args = array(
						'post_type' => 'product',
						'posts_per_page' => -1,
						'post__in' => $seat_ids,
						'orderby'  => 'post__in'
					);

					$loop = new WP_Query( $args );

					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();

						include(locate_template( 'template-parts/products/product-one.php'));
						
						endwhile;
					} else {
						echo __( '<div class="tickets-not-found text-center"><h1>No products found!</h1><p>Sorry, there are no products for this game.</p></div>' );
					}
					wp_reset_postdata();
				?>

				<style type="text/css">.purchase-item:before{border-color: <?php echo getTaxField('store_color'); ?>}</style>
			</div><!-- /row -->
		</div>
	</div>

<?php get_footer();