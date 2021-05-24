
<?php


include_once "lib/php/functions.php";

?>


<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none menu-button">
			<h1>Bentley & Skinner Jewellery</h1>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none menu-button">
			
		</div>
		<nav class="flex-none nav nav-flex">
			<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Product</a></li>
				<li><a href="product_onsale.php">OnSale</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>



				</a></li>
			</ul>
		</nav>
	</div>
</header>
	