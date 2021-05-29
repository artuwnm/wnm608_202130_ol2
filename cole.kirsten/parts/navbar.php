<?php

include_once "lib/php/functions.php";

?>
<input type="checkbox" id="menu" class="hidden" >
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<img src="img/logo3.jpg" alt="San Marino Seafood Logo" width="auto" height="160">
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="index.php">HOME</a></li>
					<li><a href="product_list.php">SHOP</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="cart.php">
						<span>CART</span>
						<span class="badge"><?= makeCartBadge(); ?></span> 
					</a></li>
				</ul>
			</nav>
		</div>
	</header>
