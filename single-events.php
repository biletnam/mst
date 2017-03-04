<?php
/**
 * The template for displaying stores single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MST
 */

get_header(); ?>

	<div id="purchase" class="with-images">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="entry-header text-center">
						<h3 class="entry-title"><span  style="color: <?php echo getTaxField('store_color'); ?>">TORONTO RAPTORS</span> vs DETORIT PISTONS</h3>
					</div>
				</div>
			</div>

			<div class="row">

				<?php 
					$ids = get_field('tickets', get_the_ID());
					if ($ids) {
						mst_product($ids);
					} else {
						echo __( '<div class="tickets-not-found text-center"><h1>No tickets found!</h1><p>Sorry, there are no tickets for this game.</p></div>' );
					} 
				?>

				<style type="text/css">.purchase-item:before{border-color: <?php echo getTaxField('store_color'); ?>}</style>
			</div><!-- /row -->
		</div>
	</div>

<?php get_footer();