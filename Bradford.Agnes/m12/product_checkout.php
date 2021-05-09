<?php

include_once "../lib/php/functions.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Checkout</title>


<?php include "../parts/meta.php"; ?>
		
	
</head>
<body>

<?php include "../parts/navbar.php"; ?>


<div class="container">
	<div class="card soft">
		<h2>Checkout</h2>
<form>
		<h3>Your Name</h3>
			<div class="form-control">
					<label for="first-name" class="form-label">First Name</label>
					<input type="text" placeholder="First Name" class="form-input">
			</div>
								
			<div class="form-control">
					<label for="last-name" class="form-label">Last Name</label>
					<input type="text" placeholder="Last Name" class="form-input">
			</div>
</form>	

<form>
		<h3>Shipping Address</h3>
				<div class="form-control">
					<label for="address-street" class="form-label">Street</label>
					<input type="text" placeholder="Street" class="form-input">
				</div>

				<div class="form-control">
					<label for="address-linetwo" class="form-label">Apt or Unit Number</label>
					<input type="text" placeholder="Apt or Unit Number" class="form-input">
				</div>
								
				<div class="form-control">
					<label for="address-city" class="form-label">City</label>
					<input type="text" placeholder="City" class="form-input">
				</div>

				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
								<label for="address-state" class="form-label">State</label>
								<input type="text" placeholder="State" class="form-input">
						</div>

						<div class="col-xs-12 col-md-6">
								<label for="address-zipcode" class="form-label">Zipcode</label>
								<input type="text" placeholder="Zipcode" class="form-input">
						</div>
				</div>
		</div>
				
</form>	

<form>
	<h3>Payment Method</h3>
		<div class="form-control">
				<label for="payment-name" class="form-label">Name as it appears on credit card.</label>
				<input id="payment-name" type="text" placeholder="Full name" class="form-input">
		</div>

		<div class="form-control">
				<label for="payment-number" class="form-label">Card Number</label>
				<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
		</div>

		<div class="form-control">
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
				<label for="payment-expiration" class="form-label">Expiration</label>
				<input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
				</div>

				<div class="col-xs-12 col-md-6">
				<label for="payment-cvv" class="form-label">CVV</label>
				<input id="payment-cvv" type="text" placeholder="###" class="form-input">
				</div>
			</div>
		</div>
</form>	
				
	<div class="form-control">
	<a href="product_confirmation.php"><button type="button"class="form-button">Place Order</button></a>
	</div>
</div>

</body>
</html>