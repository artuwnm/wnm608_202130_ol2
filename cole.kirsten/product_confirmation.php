<?php

	include_once "lib/php/functions.php";
resetCart();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

		<!-- viewport -->

<div class="container">
	<article id="article1" class="article card soft">
		<div class="display-flex flex-align-center">
			<div class="flex-stretch">
				<h2>Thank you for your purchase!</h2>
			</div>
		</div>
		<div class="form-control">
			<a href="product_list.php" class="form-button">Continue Shopping</a>
		</div>
	</article>
</div>

<div class="container">
	<article id="article4" class="article">
		<div class="copyright">
			<p>Copyright San Marino Seafood 2021</p>
		</div>
	</article>
</div>


</body>
</html>