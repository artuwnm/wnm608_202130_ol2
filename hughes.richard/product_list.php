<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_list.js"></script>

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
		<h2>Product List</h2>
		
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="search products">
			</form>
		</div>

		<div class="form-control">
			<div class="card soft dark">
				<div class="display-flex flex-justify-space-between flex-wrap" >
						<div class="display-flex flex-justify-space-between flex-wrap" id="filter_buttons">
							<div class="flex-none">
									<button data-filter="category" data-value= "" type="button" class="form-button">ALL</button>
							</div>
			
							<div class="flex-none">
									<button data-filter="category" data-value='Ephemera' type="button" class="form-button">Ephemera</button>
							</div>
							
			
							<div class="flex-none">
									<button data-filter="category" data-value="Sporting" type="button" class="form-button">Sporting Goods</button>
							</div>
			
							<div class="flex-none">
									<button data-filter="category" data-value="Home" type="button" class="form-button">Home</button>
							</div>
						</div>

					
						<div class="flex-none">
							<div class="form-select" >
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
								</select>
							</div>
						</div>
					

				</div>
			</div>
		</div>

		<div class='productlist grid gap'></div>
	</div>



</body>
</html>
