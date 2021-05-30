<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
resetCart();
$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>

	<?php include "parts/meta.php"; ?>
</head>	
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="card soft container">
		<div class="container grid gap">
			<h2 class="col-xs-12 col-md-4">Order Confirmation</h2>	
		</div>

		<div class="container grid gap">
			<h1 class="col-xs-12 col-md-8">Thank you for your order!</h1>
			<div class="col-xs-12 col-md-4"></div>
		</div>

		<div class="container grid gap">
			<div class="col-xs-12 col-md-10" >
			<p >Order confirmation #123456. A confirmation has been sent to the provided email address.</p>
			</div>
		</div>
		
		<div>
			<div class="container grid gap  ">
				<div class="col-xs-12 col-md-4"> </div>

			<div class="col-xs-12 col-md-4 form-control display-flex" style="justify-content:center;">
					<a href="index.php"><button type="button"class="form-button">To Homepage</button></a>
			</div>
			<div class="col-xs-12 col-md-4"> </div>

			</div>
		</div>
	</div>

	</div>


<br>
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