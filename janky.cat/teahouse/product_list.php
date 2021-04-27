<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>

	<?php include "parts/meta.php"; ?>
</head>	
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="card light">
		<div class="container grid gap">
			
			<div class="col-xs-12 col-md-8">
				<figure class="figure basic">
					<img src="https://via.placeholder.com/400x200?text=product" alt=""> 
				</figure>
			</div>

			<div class="col-xs-12 col-md-1"></div>

			<div class="col-xs-12 col-md-3">
				<h3>Heading</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>		
	</div>

<br>

	<div class="container">
			<h2>Product List</h2>

			<?php

			$result = makeQuery(
				makeConn(), 
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				"
			);

			echo "<div class= 'productlist grid gap'>", array_reduce($result,'productListTemplate'),"</div>";

			?>
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