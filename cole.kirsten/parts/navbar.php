<?php

include_once "lib/php/functions.php";

?>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<img src="img/logo3.jpg" alt="San Marino Seafood Logo" width="auto" height="160">
			</div>
			<div class="flex-stretch"></div>
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
				<div class="search">
					<div class="form-control">
						<form>
						<input type="search" class="hotdog" placeholder="search">
						</form>
					</div>
				</div>
			</nav>
		</div>
	</header>
