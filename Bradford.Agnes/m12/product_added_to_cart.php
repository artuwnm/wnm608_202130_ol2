<?php

include_once "../lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =" .$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Added To Shopping Bag</title>


<?php include "../parts/meta.php"; ?>
		
	
</head>
<body>

<?php include "../parts/navbar.php"; ?>


<div class="container">
	<div class="card soft">
		<h2>You added <?= $product->name ?> to your cart.</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>


<div class="form-control">
	<div class="flex-none"><a href="product_list.php"class="form-button">Continue Shopping</a>
	</div>
<div class="form-control">
	<div class="flex-none"><a href="shopping_bag.php"class="form-button">Go to Bag</a></div>
	</div>
</div>
	</div>

<?php include "../parts/footer.php"; ?>

</body>
</html>