<?php

include_once "lib/php/functions.php";

?>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
		<div class="display-flex">

			<div class="flex-stretch nav container-row">
					<a href="index.php"> <h1 class="logo">TEA HOUSE</h1> </a>
				</div>

				<div class="flex-none menu-button">
					<label for="menu">&equiv;</label>
				</div>

			<nav class="nav nav-flex flex-none nav">
				<ul>
					<li> <a href="product_list.php">Shop Teas</a></li>
					<li> <a href="about.php">About</a></li>
					<li class="cart nav display-flex flex-align-center flex-justify-center"><a href="product_cart.php"> 
						<span><img src="img/cart.png"></span>
						<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
			</nav>
		

			</div>
		</div>
</header>