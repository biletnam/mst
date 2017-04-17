<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MST
 */


?>


			</div><!-- /content -->

			<footer id="footer">
				<div class="site-info text-center" style="background: <?php echo getTaxField('store_color'); ?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12 ol-sm-12 col-xs-12">
								<h1 class="site_title"><?php bloginfo( 'name' ); ?></h1>

								<?php $description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-tagline"><?php echo $description; ?></p>
								<?php endif; ?>

								<?php $headline_text = get_theme_mod( 'mst_header_headline' ); if($headline_text) : ?>
									<p class="site-tagline"><?php echo $headline_text; ?></p>
								<?php endif; ?>

								<?php if (get_theme_mod('mst_social_switcher')) { social_media(); } ?>
							</div>
						</div>
					</div>
				</div>
			</footer><!-- #colophon -->
		<?php wp_footer(); ?>
	</body>
</html>