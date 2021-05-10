<?php

include_once "lib/php/functions.php";

?>

<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>The Black Closet</h1>
		</div>
		<div class="flex-stretch">
		</div>
			
		<nav class="nav nav-flex flex-none ">
			<ul>
				<!--li*3>a[href=#]{link$}-->
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="shopping_bag.php"> 
						<span class>Shopping Bag</span>
						<span class="badge"><?= makeCartBadge(); ?></span> 
					</a></li>
					<li><a href="forminput.php">Admin</a></li>
			</ul>
		</nav>
	</div>
</div>
</header>
