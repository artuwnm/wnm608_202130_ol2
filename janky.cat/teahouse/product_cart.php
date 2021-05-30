<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10,12)");

$cart_items = getCartItems();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>	
<body>

	<?php include "parts/navbar.php"; ?>

	<br>

<div class="container">
		<h2>In Your Cart</h2>

		<?php

		if(count($cart_items)) {
			?>


		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?=array_reduce($cart_items,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				<div class="card-section">
					<a href="product_checkout.php" class="form-button">Checkout</a>
				</div>
				</div>
			</div>
		</div>
		<?php
	}else {
		?>
		<div class="card soft">
			<p>Your Cart is Empty</p>
		</div>

<br>		
	
<h3>Top Recommendations</h3>
<?php recommendedAnything(6); ?>
		
<?php

	}
	?>
</div>

<br>

	<div>
	<?php include "parts/newsletter.php"; ?>
	</div>

	<div>
	<?php include "parts/fatfooter.php"; ?>
	</div>

	<div>
	<?php include "parts/footer.php"; ?>
	</div>

</body>
</html>