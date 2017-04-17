<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MST
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="preloader">
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

							<div class='preloader-bar'><span></span><span></span><span></span><span></span><span></span><span></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<header id="header">
			<?php locate_template( 'template-parts/headers/topbar.php', true ); ?>
			<div class="navbar navbar-default primary-menu" style="background: <?php echo getTaxField('store_color'); ?>">
			  	<div class="container">
					<div class="navbar-header">
					  	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
					  	</button>
			
					 	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</div>
			
					<div class="collapse navbar-collapse">

					  	<?php wp_nav_menu( 
								array(
								'menu'               => 'primary_menu',
								'theme_location'	 => 'menu-1',
								'depth'				 => 2,
								'container'			 => 'false',
								'menu_class' 		 => 'nav navbar-nav navbar-right',
								'menu_id' 			 => '',
								'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
								'walker' 			 => new wp_bootstrap_navwalker()
								) 
							); 
						?>
			
					</div><!-- /collapse -->
			  	</div><!-- /container -->
			</div><!--/ Navbar -->
		</header><!-- /header -->
		
		<?php if (is_tax('stores') || is_singular('events') ): ?>
			<div class="header-image" style="background-image: url(<?php echo getTaxField('banner_image'); ?>)">
				<div class="container">
					<div class="row">
						
					</div>
				</div>
			</div>
		<?php endif ?>
		
		<div id="content" class="site-content">