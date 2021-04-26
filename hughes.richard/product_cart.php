<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1,3,5,6,8,10)");

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Cart Page</title>

	<?php include "parts/meta.php";?>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>

	<?php include "parts/navbar.php"; ?>



	
	




	
<div class="container">
<h1>In Your Cart</h1>
<div class="card soft">
	
	<div class="grid gap">
	
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<?=array_reduce ($cart, 'cartListTemplate') ?>
			</div>
		</div>
		<div class="col-xs-12 col-md-5">
			<div class="card soft flat">
				<div class="card-section display-flex">
					<div class="flex-stretch"><strong>Sub Total</strong></div>
					<div class="flex-none">&dollar;45.00</div>
				</div>

				<div class="card-section display-flex">
					<div class="flex-stretch"><strong>Tax</strong></div>
					<div class="flex-none">&dollar;45.00</div>
				</div>

				<div class="card-section display-flex">
					<div class="flex-stretch"><strong>Total</strong></div>
					<div class="flex-none">&dollar;45.00</div>
				</div>
				<div class="card-section">
					<a href="product_checkout.php" class="form-button">Checkout Now</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>






</body>
</html>