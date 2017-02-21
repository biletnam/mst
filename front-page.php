<?php
/*
Template name: FrontPage 
*/
 get_header(); ?>
	<div class="site-info text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ol-sm-12 col-xs-12">
					<h1 class="site_title">Made The Show</h1>
					<p class="site-tagline">Toronto Concerts, Theatre & Sporting Events</p>

					<ul class="social-media list-inline">
						<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-ios-email"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="category-list">
		<div class="container">
			<div class="row">
				<a href="">
					<div class="category-item blue_color">
						<div class="category-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category-1.png" alt="">
						</div>
						<div class="category-title">
							<h4>Toronto Raptors</h4>
						</div>
					</div>
				</a>

				<a href="">
					<div class="category-item">
						<div class="category-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category-2.png" alt="">
						</div>
						<div class="category-title">
							<h4>Toronto Maple Leafs</h4>
						</div>
					</div>
				</a>

				<a href="">
					<div class="category-item">
						<div class="category-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category-3.png" alt="">
						</div>
						<div class="category-title">
							<h4>Toronto Fc</h4>
						</div>
					</div>
				</a>

				<a href="">
					<div class="category-item">
						<div class="category-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category-4.png" alt="">
						</div>
						<div class="category-title">
							<h4>Toronto Blue Jays</h4>
						</div>
					</div>
				</a>

				<a href="">
					<div class="category-item">
						<div class="category-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/category-5.png" alt="">
						</div>
						<div class="category-title">
							<h4>Toronto Concerts</h4>
						</div>
					</div>
				</a>

			</div>
		</div>
	</div>
<?php get_footer(); ?>