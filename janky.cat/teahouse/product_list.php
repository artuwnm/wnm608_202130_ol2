<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>	
<body>

	<?php include "parts/navbar.php"; ?>
	
<div class="card light">
		<div class="container grid gap">
			
			<div class="col-xs-12 col-md-8">
				<figure class="figure basic">
					<img src="img/jasmine_white.png" alt=""> 
				</figure>
			</div>

			<div class="col-xs-12 col-md-1"></div>

			<div class="col-xs-12 col-md-3">
				<h3>Jasmine White Tea</h3>
				<p> A blend of silver needles and jasmine blossoms. This tea has a touch of sweetness.</p>
			</div>
		</div>		
	</div>

<br></br>

	<div class="container">
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft">
					<div class="display-flex flex-wrap">
						<div class="flex-stretch display-flex">
				
							<div class="flex-none">
							<button data-filter="category" data-value="" type="button" class="form-button">All Teas</button>
						</div>

						<div class="flex-none">
							<button data-filter="category" data-value="white" type="button" class="form-button">White Teas</button>
						</div>

						<div class="flex-none">
							<button data-filter="category" data-value="green" type="button" class="form-button">Green Teas</button>
						</div>

						<div class="flex-none">
							<button data-filter="category" data-value="black" type="button" class="form-button">Black Teas</button>
						</div>

						<div class="flex-none">
							<button data-filter="category" data-value="herbal" type="button" class="form-button">Herbal Teas</button>
						</div>
					</div>
				
			<div class="flex-none">	
				<div class="form-select">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Price: Lowest</option>
						<option value="4">Price: Highest</option>
					</select>
				</div>
			</div>
		</div>
		</div>
		</div>


			<div class= 'productlist grid gap'></div>
			
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