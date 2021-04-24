<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Checkout</title>


<?php include "../parts/meta.php"; ?>
		
	
</head>
<body>

<?php include "../parts/navbar.php"; ?>


<div class="container">
	<div class= "card soft">

	<h2>Product Checkout</h2>
	<form class="form">
<h3>Address</h3>

<div class="form-control">
		<label class="form-label" for="address-street">Street</label>
		<input class="form-input" id="address-street" type ="text" placeholder="Street Address">
</div>
<div class="form-control">
<div class="grid-gap">
	<div class="col-xs-12 col-md-6">
		<label class="form-label" for="address-city">City</label>
		<input class="form-input" id="address-city" type ="text" placeholder="City">
	</div>
	<div class="col-xs-12 col-md-6">
		<label class="form-label" for="address-state">State</label>
		<input class="form-input" id="address-state" type ="text" placeholder="State">
	</div>
</div>
</div>

<div class="form-control">
<div class="grid-gap">
	<div class="col-xs-12 col-md-6">
		<label class="form-label" for="address-zip">Zip Code</label>
		<input class="form-input" id="address-zip" type ="text" placeholder="Zip Code">
	</div>
	<div class="col-xs-12 col-md-6">
		<label class="form-label" for="address-country">Country</label>
		<input class="form-input" id="address-country" type ="text" placeholder="Country">
	</div>
</div>
</div>

<h3>Payment</h3>
<div class="form-control">
		<label class="form-label" for="payment-name">Name</label>
		<input class="form-input" id="payment-name" type ="text" placeholder="Name">
</div>
<div class="form-control">
		<label class="form-label" for="payment-number">Card Number</label>
		<input class="form-input" id="payment-number" type ="text" placeholder="####-####-####-####">
</div>
<div class="form-control">
<div class="grid-gap">
	<div class="col-xs-12 col-md-6">
		<label class="form-label" for="payment-expiration">Expiration</label>
		<input class="form-input" id="payment-expiration" type ="text" placeholder="MM-YY">
	</div>
	<div class="col-xs-12 col-md-6">
		<label class="form-label" for="payment-cvv">CVV</label>
		<input class="form-input" id="payment-cvv" type ="text" placeholder="CVV">
	</div>
</div>
</div>

<div class="form-control">
		<label class="form-label" for="payment-name-zip">Zip Code</label>
		<input class="form-input" id="payment-zip" type ="text" placeholder="Zip Code">
	</div>
<div class="form-control">
	<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
</div>
</form>
</div>
</div>

<?php include "../parts/footer.php"; ?>

</body>
</html>