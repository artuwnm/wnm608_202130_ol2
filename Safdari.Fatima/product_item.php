
    <?php
      include_once "lib/php/functions.php";
       include_once "parts/templates.php";
      

      $product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


      $images = explode(",", $product->images);

      $image_elements = array_reduce($images,function($r,$o){
      	return $r."<img src='img/$o'>";
      });

     //print_p($_SESSION);
      ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Items</title>
	<?php include "parts/meta.php"; ?>
 <script src="js/product_thumbs.js"></script>
</head>
<body>
	<?php include "parts/navbar.php"; ?>


	<div class="container">
	<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<div class="images-main">
				<img src="img/<?=$product->thumbnail ?>">
			</div>
			<div class="images-thumbs">
				<?= $image_elements ?>
			</div>

			</div>
		</div>
		<div class="col-xs-12 col-md-5">
			<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?=$product->id ?>">

				<div class="card-section">
				<h2 class="product-name"><?=$product->name ?></h2>
				<div class="product-categry"><?=$product->category ?></div>
				<div class="product-price">&dollar;<?=$product->price ?></div>
				</div>

				<div class="card-section">
					<div class="form-control">
					<label for="product-amount" class="form-lable">Amount</label>
					<div class="form-select">
						<select id="product-amount" name="product-amount">
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
					<label for="product-weight" class="form-lable">Box Color</label>
					<div class="form-select">
						<select name="product-box" id="product-box">
							<option>Pink</option>
							<option>Green</option>
							<option>Blue</option>

						</select>
					</div>
				</div>
			</div>



			<div class="card-section">
					<input type="submit" class="form-button" value="Add To Cart">

			</div>
				<div class="card-section">
					<a href="product_list.php" class="form-button">Back to Shopping List</a>
				
			</div>
		</form>
	</div>

</div>


	<div class="card pink">
		<p><?=$product->description ?></p>
		
	</div>
	 <h4><span>Recommended Products</span></h4>
	<?php 
	recommendedSimilar($product->category,$product->id);

	 ?>	
	</div>

	
</body>
</html>










