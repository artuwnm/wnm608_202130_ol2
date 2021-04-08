<!DOCTYPE html>
<html>
<head>
	<title>Cart | Tea House</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="card soft">
		<div class="container grid gap">
			<h2 class="col-xs-12 col-md-4">Order Confirmation</h2>
			<div class="col-xs-12 col-md-4"></div>
			<p class="col-xs-12 col-md-4">Please print this page for your records.</p>
		</div>

		<div class="container grid gap">
			<div class="col-xs-12 col-md-4"></div>
			<h4 class="col-xs-12 col-md-4">Thank you for your order!</h4>
			<div class="col-xs-12 col-md-4"></div>
		</div>

		<div class="container grid gap">
		<p>Order confirmation #123456.</p>
		<p>A confirmation has been sent to the provided email address.</p>
		</div>
		

		<div class="container grid gap">
			<h3>Order Details</h3>
		</div>

		<div>
			<div class="form-control">
				<a href="index.php"><button type="button"class="form-button">To Homepage</button></a>
			</div>

		</div>
	</div>


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