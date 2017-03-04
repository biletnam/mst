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

					while ( have_posts() ) : the_post(); ?>

					<!-- event-item -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="event-item text-center">
							<a href="<?php the_permalink(); ?>">
								<h4 class="artist" style="color: <?php echo getTaxField('store_color'); ?>"><?php the_field('team_artist'); ?></h4>

								<span class="misc-text" style="color: #000000;"><?php the_field('misc_text'); ?></span>

								<h4 class="venue" style="color: #000000;"><?php the_field('teamvenue') ?></h4>

								<h4 class="date" style="color: <?php echo getTaxField('store_color'); ?>"><?php the_field('date_time'); ?></h4>

								<div class="logo">
									<?php $logo = get_field('logo'); $logo = wp_get_attachment_image_src($logo, 'event_logo'); ?>
									<img src="<?php echo $logo[0]; ?>" alt="">
								</div>
							</a>
						</div>
					</div><!-- /event-item -->

				<?php endwhile; ?>

				<style type="text/css">.event-item:before{border-color: <?php echo getTaxField('store_color'); ?>}</style>
			</div>
		</div>
	</div>

<?php get_footer(); ?>