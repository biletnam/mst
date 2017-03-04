<?php 
	global $product; 
	$regular_price = get_post_meta( get_the_ID(), '_regular_price', true );
	$textrowone = get_post_meta( get_the_ID(), 'text_row_one', true );
	$textrowtwo = get_post_meta( get_the_ID(), 'text_row_two', true );
	$product_template = get_post_meta( get_the_ID(), 'product_template', true );

?>

<?php if ($product_template == 'one'): ?>
	<!-- purchase-item -->
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="purchase-item text-center">

			<h4 class="title" title="<?php echo get_the_title(); ?>" style="color: <?php echo getTaxField('store_color'); ?>"><?php echo $textrowone; ?><br> <?php echo $textrowtwo; ?></h4>

			<span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $regular_price; ?></span>

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
<?php elseif($product_template == 'two'): ?>	
	<!-- purchase-item -->
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="purchase-item-img">
				<?php the_post_thumbnail('product_img', array( 'class' => 'img-responsive' ) ); ?>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="purchase-item text-center">
				<h4 class="title" title="<?php echo get_the_title(); ?>" style="color: <?php echo getTaxField('store_color'); ?>"><?php echo $textrowone; ?><br> <?php echo $textrowtwo; ?></h4>
				<span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $regular_price; ?></span>
				<h4 class="remaining-quantity">Only <span  style="color: #1E3F7C;">8</span> Left</h4>

				<form class="cart form-inline" method="post">
				 	<div class="form-group">
				 		<label for="quantity">Quantity:</label>
				 		<div class="quantity">
							<input type="number" name="quantity" id="quantity" value="1" class="qty" size="4">
						</div>
						<button type="submit" class="single_add_to_cart_button button"  style="background-color: <?php echo getTaxField('store_color'); ?>">Buy Now</button>

						<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>

				 	</div>
				</form>
			</div>
		</div><!-- /purchase-item -->
	</div>
<?php endif ?>