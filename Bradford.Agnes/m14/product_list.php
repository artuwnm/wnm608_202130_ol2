<?php

include_once "lib/php/functions.php";

include_once "parts/templates.php";



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Store</title>
<?php include "parts/meta.php"; ?>	

<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/product_list.js"></script>


	
</head>
<body>

<?php include "parts/navbar.php"; ?>
			

<div class="container">
	<div class= "card soft">
	<h2>Product List</h2>
		<div class="form-control">
			<form class="hotdog" id="product-search">
					<input type="search" placeholder="Search Product">
			</form>
		</div>	
<div class="card soft">
	<div class="display-flex">
	<div class="flex-stretch display-flex flex-wrap ">
			<div class="flex-stretch flex-none">
					<button data-filter="category" data-value="" type="button" class="form-button">All
					</button>
				</div>
			<div class="flex-stretch flex-none">
					<button data-filter="category" data-value="shoes" type="button" class="form-button">Shoes
					</button>
			</div>
		<div class="flex-stretch flex-none">
				<button data-filter="category" data-value="Pants" type="button" class="form-button">Pants
				</button>
		</div>
		<div class="flex-stretch flex-none">
				<button data-filter="category" data-value="Tops" type="button" class="form-button">Tops
				</button>
		</div>
		<div class="flex-stretch flex-none">
				<button data-filter="category" data-value="dresses" type="button" class="form-button">Dresses
				</button>
		</div>
		</div>

<div class="flex-stretch">	
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


<?php include "parts/footer.php"; ?>
</body>
</html>