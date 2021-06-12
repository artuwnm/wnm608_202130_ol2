<?php 
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Confirmation Page</title>

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

<div class="card soft">
	<h2>You added <?=$product->product_name ?> to your cart.</h2>
<p>There are now <?= $cart_product->amount ?> of <?= $product->product_name ?> in your cart.</p>
	<div class="display-flex">
		<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
		<div class="flex-stretch"></div>
			<div class="flex-none"><a href="product_cart.php">View Cart</a></div>

	</div>
	
</div>
</div>






</body>
</html>