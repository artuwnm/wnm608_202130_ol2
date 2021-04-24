<?php

include_once "../lib/php/functions.php";

include_once "../parts/templates.php";

$cart= makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN(4,7,10,14)");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shopping Bag</title>


<?php include "../parts/meta.php"; ?>
		
	
</head>
<body>

<?php include "../parts/navbar.php"; ?>


<div class="container">
	<div class= "card soft">
	<h2>Your Shopping Bag</h2>

	<div class="container">
		<h2>In Your Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?=array_reduce($cart,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;170.00</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;15.00</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;185.00</div>
					</div>

	<div class="form-control">
	<a href="product_checkout.php" class="form-button">Checkout</a>
	</div>
	</div>
</div>

<?php include "../parts/footer.php"; ?>

</body>
</html>