<?php 
	global $product; 
	$seat_id = get_the_ID();
	$regular_price = get_post_meta( $seat_id, '_regular_price', true );
	$textrowone = get_post_meta( $seat_id, 'text_row_one', true );
	$textrowtwo = get_post_meta( $seat_id, 'text_row_two', true );
	$store_color = getTaxField('store_color', $event_id);

?>
	<!-- purchase-item -->
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="purchase-item text-center">

			<h4 class="title" title="<?php echo get_the_title(); ?>" style="color: <?php echo $store_color; ?>"><?php echo $textrowone; ?><br> <?php echo $textrowtwo; ?></h4>

			<span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $regular_price; ?></span>

			<h4 class="remaining-quantity">Only <span  style="color: <?php echo $store_color; ?>"><?php echo getAvailableSeats($event_id, $seat_id); ?></span> Left</h4>

			<form class="cart form-inline tickets" method="post">
			 	<div class="form-group">
			 		<label for="quantity">Quantity:</label>
			 		<div class="quantity">
						<input type="number" name="quantity" id="quantity" value="1" class="qty" size="4">
						<input type="hidden" name="eventid" value="<?php echo $event_id; ?>">
						<input type="hidden" name="seatid" value="<?php echo $seat_id; ?>">
					</div>
					<input type="submit" class="single_add_to_cart_button button" style="background-color: <?php echo $store_color; ?>" value="Call Now">
			 	</div>
			</form>
		</div>
	</div><!-- /purchase-item -->