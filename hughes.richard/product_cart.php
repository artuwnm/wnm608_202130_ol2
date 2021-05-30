<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1,3,5,6,8,10)");

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Cart Page</title>

	<?php include "parts/meta.php";?>

<style>
		body {
  		background-image: url('images/cement.jpg');
  		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
		}
	</style>


</head>
<body>

	<?php include "parts/navbar.php"; ?>

			<div class="container">
			<h2>In Your Cart</h2>

			<?php 

			if(count($cart)){
				?>
				<div class="grid gap">
					<div class="col-xs-12 col-md-7">
						<div class="card soft flat">
							<?=array_reduce ($cart_items, 'cartListTemplate') ?>
						</div>
					</div>
					<div class="col-xs-12 col-md-5">
						<div class="card soft flat">
							<?= cartTotals() ?>
							<div class="card-section">
								<a href="product_checkout.php" class="form-button">Checkout Now</a>
							</div>
						</div>
					</div>
				</div>
					<?php
				} else {
				?>
					<div class="card soft">
							<p>Nothing In Cart</p>
					</div>
						<h2>Other Recommendations</h2>
						<?php recommendedAnything(6); ?>
					
					<?php
				}
				?>
		 	
			</div>

</body>
</html>