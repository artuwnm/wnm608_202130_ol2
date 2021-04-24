<?php

include_once "../lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =" .$_GET['id'])[0];


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
	<div class= "card soft">
		<h2>You added <?=$product->name ?> to your cart.</h2>


	<div class=".col-xs-12 col-md-6">
			
			<div class="display-flex">
			<div class="flex-none"><a href="product_list.php" class="form-button">Continue Shopping</a></div>
			</div>
			<br>
			<div class="display-flex">
			<div class="flex-none"><a href="shopping_bag.php" class="form-button">Go to Shopping Bag</a></div>
			</div>
	</div>

		
	</div>
</div>

<?php include "../parts/footer.php"; ?>

</body>
</html>