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
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-ios-email"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="category-list">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<div class="sub-heading text-center">
						<p>HEADLINE TEXT. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<ul>
						<li class="category-item" style="background: #CA0C26;">
							<a href="#">
								<div class="category-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/category-1.png" alt="">
								</div>
								<div class="category-title">
									<h4>Toronto Raptors</h4>
								</div>
							</a>
						</li>
						<li class="category-item" style="background: #1E3F7C;">
							<a href="#">
								<div class="category-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/category-2.png" alt="">
								</div>
								<div class="category-title">
									<h4>Toronto Maple Leafs</h4>
								</div>
							</a>
						</li>
						<li class="category-item" style="background: #ED202D;">
							<a href="#" >
								<div class="category-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/category-3.png" alt="">
								</div>
								<div class="category-title">
									<h4>Toronto Fc</h4>
								</div>
							</a>
						</li>
						<li class="category-item" style="background: #0D4C8F;">
							<a href="#">
								<div class="category-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/category-4.png" alt="">
								</div>
								<div class="category-title">
									<h4>Toronto Blue Jays</h4>
								</div>
							</a>
						</li>
						<li class="category-item" style="background: #B2A174;">
							<a href="#">
								<div class="category-logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/category-5.png" alt="">
								</div>
								<div class="category-title">
									<h4>Toronto Concerts</h4>
								</div>
							</a>
						</li>
					</ul>
					
				</div>
			</div><!-- /row -->

			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<h4 class="category-item-footer">tickets in limited quantities</h4>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>