<?php
/*
Template name: Purchase 1
*/
 get_header(); ?>
	<div id="purchase" class="with-images">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="entry-header text-center">
						<h3 class="entry-title"><span  style="color: #1E3F7C;">TORONTO RAPTORS</span> vs DETORIT PISTONS</h3>
					</div>
				</div>
			</div>

			<div class="row">

				<!-- purchase-item -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="purchase-item-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Purchase.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="purchase-item text-center">
							<h4 class="title" style="color: #1E3F7C;">Section 112, Row 21<br> Seats 1-2</h4>
							<span class="price">$220</span>
							<h4 class="remaining-quantity">Only <span  style="color: #1E3F7C;">8</span> Left</h4>

							<form class="cart form-inline" method="post">
							 	<div class="form-group">
							 		<label for="quantity">Quantity:</label>
							 		<div class="quantity">
										<input type="number" name="quantity" id="quantity" value="1" class="qty" size="4">
									</div>
		 							<button type="submit" class="single_add_to_cart_button button"  style="background-color: #1E3F7C">Buy Now</button>
							 	</div>
							</form>
						</div>
					</div><!-- /purchase-item -->
				</div>

				<!-- purchase-item -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="purchase-item-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Purchase.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="purchase-item text-center">
							<h4 class="title" style="color: #1E3F7C;">Section 112, Row 21<br> Seats 1-2</h4>
							<span class="price">$220</span>
							<h4 class="remaining-quantity">Only <span  style="color: #1E3F7C;">8</span> Left</h4>

							<form class="cart form-inline" method="post">
							 	<div class="form-group">
							 		<label for="quantity">Quantity:</label>
							 		<div class="quantity">
										<input type="number" name="quantity" id="quantity" value="1" class="qty" size="4">
									</div>
		 							<button type="submit" class="single_add_to_cart_button button"  style="background-color: #1E3F7C">Buy Now</button>
							 	</div>
							</form>
						</div>
					</div><!-- /purchase-item -->
				</div>

				<!-- purchase-item -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="purchase-item-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/Purchase.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="purchase-item text-center">
							<h4 class="title" style="color: #1E3F7C;">Section 112, Row 21<br> Seats 1-2</h4>
							<span class="price">$220</span>
							<h4 class="remaining-quantity">Only <span  style="color: #1E3F7C;">8</span> Left</h4>

							<form class="cart form-inline" method="post">
							 	<div class="form-group">
							 		<label for="quantity">Quantity:</label>
							 		<div class="quantity">
										<input type="number" name="quantity" id="quantity" value="1" class="qty" size="4">
									</div>
		 							<button type="submit" class="single_add_to_cart_button button"  style="background-color: #1E3F7C">Buy Now</button>
							 	</div>
							</form>
						</div>
					</div><!-- /purchase-item -->
				</div>

				<style type="text/css">.purchase-item:before{border-color: #1E3F7C;}</style>
			</div><!-- /row -->
		</div>
	</div>

<?php get_footer(); ?>