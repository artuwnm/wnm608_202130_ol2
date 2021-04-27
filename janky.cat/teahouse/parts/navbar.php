<?php

include_once "lib/php/functions.php";

?>

<header class="navbar">
		<div class="display-flex">

			<div class="flex-stretch nav container-row">
					<a href="index.php"> <h1 class="logo">TEA HOUSE</h1> </a>
				</div>

			<nav class="flex-none nav">
				<ul class="container-row display-flex">
					<li> <a href="product_list.php">Shop Teas</a></li>
					<li> <a href="learn.php">Learn</a></li>
					<li> <a href="about.php">About</a></li>
				</ul>
			</nav>
			
			<div class="flex-none nav"></div>
			
			<div class="cart nav display-flex flex-align-center flex-justify-center"> 
				<a href="product_cart.php"> 
					<span><img src="img/cart.png"></span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a>
			</div>
		</div>
</header>