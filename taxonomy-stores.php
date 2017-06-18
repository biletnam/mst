<?php
/**
 * The template for displaying events stores archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MST
 */

get_header(); ?>

	<div id="events">
		<div class="container">
			<div class="row">

			<?php
			 // query
			$store = get_queried_object();
			$l = new WP_Query(array(
				'post_type'   		=> 'events',
				'posts_per_page' 	=> -1,
				// ONLY THIS STORE EVENTS
			    'tax_query' 		=> array(
			        array(
			            'taxonomy' 	=> 'stores',
			            'terms' 	=> $store->slug,
			            'field' 	=> 'slug',
			        )
			    ),
			    // ONLY FUTURE EVENTS
			    'meta_query'		=> array(
					array(
						'key' 		=> 'date_time',
						'value' 	=> date("Y-m-d"),
						'compare' 	=> '>',
						'type'		=> 'DATE'
					)
				),
				// SORT EVENTS BY event custom date field 'date_time'
				'meta_key'   		=> 'date_time',
				'orderby'   		=> 'meta_value',
				'order'    			=> 'ASC'
			));

     		while ( $l->have_posts() ) : $l->the_post(); ?>

 			<!-- event-item -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<a href="<?php the_permalink(); ?>">
						<div class="event-item text-center">
							<h4 class="artist" style="color: <?php echo getTaxField('store_color'); ?>"><?php the_field('team_artist'); ?></h4>

							<span class="misc-text" style="color: #000000;"><?php the_field('misc_text'); ?></span>

							<h4 class="venue" style="color: #000000;"><?php the_field('teamvenue') ?></h4>

							<h4 class="date" style="color: <?php echo getTaxField('store_color'); ?>"><?php the_field('date_time'); ?></h4>

							<div class="logo">
								<?php 
									$logo = get_field('logo'); 
									$logo = wp_get_attachment_image_src($logo, 'event_logo'); 

									$taxLogo = getTaxField('icon');
									$taxLogo = wp_get_attachment_image_src($taxLogo, 'event_logo');
									$selected_logo = $logo[0] ? $logo[0] : $taxLogo[0];


									?>
								<img src="<?php echo $selected_logo; ?>" alt="">
							</div>
						</div>
					</a>
				</div><!-- /event-item -->

				<?php endwhile; wp_reset_postdata(); ?>

				<style type="text/css">.event-item:before{border-color: <?php echo getTaxField('store_color'); ?>}</style>
			</div>
		</div>
	</div>

<?php get_footer(); ?>