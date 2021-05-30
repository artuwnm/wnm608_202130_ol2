<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tea House</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "parts/meta.php"; ?>
</head>	
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url('img/hero.png")> 
		
		<div class="container calltoaction">
			<div> 
				<h1>Our spring collection has arrived.</h1> 
					<div class="form-control">
					 	<a href="product_list.php"><button type="button"class="small-form-button">Shop Now</button></a>
					</div>
			</div>
		</div>
	</div>
	
	<div class="card light">
		<div class="container grid gap">
			<div class="col-xs-12 col-md-6">
			<figure class="figure product-overlay">
				<img src="img/black_teas.png" alt=""> 
					<figcaption>
						<div class="caption-body">
							<h4>Black Teas</h4>
						</div>
					</figcaption>
			</figure>
			</div>

			<div class="col-xs-12 col-md-6">
			<figure class="figure product-overlay">
				<img src="img/herbal_teas.png" alt=""> 
					<figcaption>
						<div class="caption-body">
							<h4>Herbal Teas</h4>
						</div>
					</figcaption>
			</figure>
			</div>
		</div>
	</div>

	<div class="card medium">
		<div class="container grid gap">
			<div class="col-xs-12 col-md-3">
				<h3>Iced Teas</h3>
				<p> Our collection of iced teas will start your summer off right.</p>
			</div>

			<div class="col-xs-12 col-md-1"></div>

			<div class="col-xs-12 col-md-8">
				<figure class="figure basic">
					<img src="img/iced_tea.png" alt=""> 
				</figure>
			</div>

		</div>

	</div>

	<br>

	<div class="container">
		<h2>Popular Teas</h2>
			<?php

			$result = makeQuery(
				makeConn(), 
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 4
				"
			);

			echo "<div class= 'productlist grid gap'>", array_reduce($result,'productListHomepage'),"</div>";

			?>
	</div>



		<div class="container">
		<h2>Latest Green Tea</h2>
		<?php recommendedCategory("green");?>
		<h2>Latest Herbal Tea</h2>
		<?php recommendedCategory("herbal");?>
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






























