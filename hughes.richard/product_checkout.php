<?php include_once "lib/php/functions.php";?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Checkout Page</title>

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

<div class="grid gap">
		<div class="col-xs-12 col-md-7">
<div class="card soft">
	<h1>Product Checkout</h1>
<form class="form">
	<h3>Address</h3>
	
		<div class="form-control">
			<label  for="address-street" class="form-label">Street</label>
			<input id= "address-street" type="text" placeholder="Street Name" class="form-input">
		</div>

		<div class="form-control">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<label  for="address-city" class="form-label">City</label>
					<input id= "address-city" type="text" placeholder="City" class="form-input">
				</div>

				<div class="col-xs-12 col-md-6">
					<label  for="address-state" class="form-label">State</label>
					<input id= "address-state" type="text" placeholder="State" class="form-input">
				</div>
			</div>
		</div>

		<div class="form-control">
			<label  for="address-zip" class="form-label">Zip Code</label>
			<input id= "address-zip" type="text" placeholder="Zip Code" class="form-input">
		</div>

		<div class="form-control">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<label  for="address-country" class="form-label">Country</label>
					<input id= "address-country" type="text" placeholder="Country" class="form-input">
				</div>
			</div>
		</div>

	
	<H3>Payment</H3>
		<div class="form-control">
			<label  for="payment-name" class="form-label">Full Name</label>
			<input id= "payment-name" type="text" placeholder="Name" class="form-input">
		</div>

		<div class="form-control">
			<label  for="payment-number" class="form-label">Card Number</label>
			<input id= "payment-number" type="text" placeholder="####-####-####-####" class="form-input">
		</div>

		<div class="form-control">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<label  for="payment-expiration" class="form-label">Expiration</label>
					<input id= "payment-expiration" type="text" placeholder="MM-YY" class="form-input">
				</div>

				<div class="col-xs-12 col-md-6">
					<label  for="payment-cvv" class="form-label">CVV</label>
					<input id= "payment-cvv" type="text" placeholder="CVV" class="form-input">
				</div>
			</div>
		</div>

		<div class="form-control">
			<label  for="address-zip" class="form-label">Zip Code</label>
			<input id= "address-zip" type="text" placeholder="Zip Code" class="form-input">
		</div>

		<div class="form-control">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<label  for="address-country" class="form-label">Country</label>
					<input id= "address-country" type="text" placeholder="Country" class="form-input">
				</div>
			</div>
		</div>

		<div class="form-control">
			<!-- <input type="submit" class="form-button" value="submit"> -->
			<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
		</div>
	</form>


</div>
</div>
</div>
</div>






</body>
</html>