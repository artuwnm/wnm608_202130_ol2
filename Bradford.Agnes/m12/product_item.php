<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =" .$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images, function($r,$o){
return $r."<img src='img/$o'>";
});

//print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Item</title>


	<?php include "parts/meta.php"; ?>
	<script src="js/product_thumbs.js"></script>
			
</head>
<body>

<?php include "parts/navbar.php"; ?>

<div class="container">
			<div class="grid gap">
				<div class=".col-xs-12 col-md-7">
					<div class="card soft">
						<div class="images-main">
							<img src="img/<?= $product->thumbnail ?>">
						</div>
					
					<div class="images-thumbs">
						<?=$image_elements?>
					</div>
				</div>
			</div>

				<div class=".col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id ?>">

			<div class="card-section">
			<h2 class="product-name"><?= $product->name ?></h2>
			<div class="product-price">&dollar;<?= $product->price ?></div>
			<div class="product-size"><?= $product->size ?></div>
			</div>
				<div class="card-section">
					<div class="form-control">
						<label for="product-amount" class="form-label">Amount</label>
							<div class="form-select">
								<select  name="product-amount" id="product-amount">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
					</div>
					<div class="form-control">
						<label for="product-color" class="form-label">Color</label>
							<div class="form-select">
								<select id="product-color" name="product-color">
									<option>Black</option>
									<option>Print</option>		
								</select>
							</div>
						<p><?= $product->description?></p>
					<div class="form-control">
						<input type="submit" class="form-button" value="Add to Shopping Bag">
					</div>
					</form>
					<div class="form-control">
						<a href="product_list.php" class="form-button">Back to Shopping</a>
					<div class="form-control">
						<a href="shopping_bag.php" class="form-button">Review Bag</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

			

		

	</div>

</div>

<?php include "parts/footer.php"; ?>

</body>
</html>