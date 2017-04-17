<?php
/*
Template name: FrontPage 
*/
 get_header(); ?>
	<div class="site-info text-center">
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

	<div class="category-list">
		<div class="container">

			<?php if (get_theme_mod('mst_headline_switcher')): ?>
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
						<?php $headline_spacing = get_theme_mod('mst_headline_spacing'); ?>
						<div class="sub-heading text-center" style="margin: <?php echo $headline_spacing['top'] ?> <?php echo $headline_spacing['right']; ?> <?php echo $headline_spacing['bottom']; ?> <?php echo $headline_spacing['left']; ?>">
							<p><?php echo get_theme_mod('mst_headline'); ?></p>
						</div>
					</div>
				</div>
			<?php endif ?>

			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<ul>
						<?php 
		    				$stores = get_terms('stores');
							foreach ($stores as $store) {
		    					$storecolor = get_field('store_color', $store);
		    					$storeicon = get_field('icon', $store);
		    					$icon = wp_get_attachment_image_src($storeicon, 'store_icon');
								echo '<li class="category-item '.$store->slug.'" style="background: '.$storecolor.';">
									<a href="'.get_category_link($store->term_id).'">
										<div class="category-logo">
											<img src="'.$icon[0].'" alt="">
										</div>
										<div class="category-title">
											<h4>'.$store->name.'</h4>
										</div>
									</a>
								</li>';
							}
						?>
					</ul>
					
				</div>
			</div><!-- /row -->

			<?php if (get_theme_mod('mst_disclaimer_switcher')): ?>
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
						<?php $disclaimer_spacing = get_theme_mod('mst_disclaimer_spacing'); ?>
						<h4 class="category-item-footer"  style="margin: <?php echo $disclaimer_spacing['top'] ?> <?php echo $disclaimer_spacing['right']; ?> <?php echo $disclaimer_spacing['bottom']; ?> <?php echo $disclaimer_spacing['left']; ?>"><?php echo get_theme_mod('mst_disclaimer'); ?></h4>
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
<?php get_footer(); ?>