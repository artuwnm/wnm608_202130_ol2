<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>San Marino Seafood</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<!-- viewport -->
	<div class="view-window" style="background-image: url('img/octopus.jpg')">
	</div>


	<div class="container">
		<div class="card soft">
			<h2>Shop</h2> 

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			
			<?php



			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 3
				"
			);


			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

			?>


		</div>
	</div>

	<!-- viewport -->
	<div class="view-window" style="background-image: url('img/crabs.jpg')">
	</div>


<div class="container">
	<article id="article1" class="article card soft">
		<div class="display-flex flex-align-center">
			<div class="flex-stretch">
				<h2>Location & Hours</h2>
			</div>
		</div>
		<div class="article-body">
			<p>Hours: 10:30am - 8pm</p>
			<p>Closed Mondays </p>
			<p> </p>
			<p>2150 Huntington Dr</p>
			<p>San Marino, CA 91108</p>
			<p>Telephone: (626) 943-8862</p>
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