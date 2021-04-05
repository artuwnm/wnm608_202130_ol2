<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

		<!-- viewport -->
	<div class="view-window" style="background-image: url('img/market.jpg')">
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
			
			<div class="grid gap">
				<div class=".col-xs-12 col-md-4">
					<a href="product_item.php?id=1">
						<figure class="figure product">
							<img src="https://via.placeholder.com/400x400?text=product" alt="">
							<figcaption>
								<div>Product 1</div>
								<div>$3.99</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class=".col-xs-12 col-md-4">
					<a href="product_item.php?id=2">
						<figure class="figure product">
							<img src="https://via.placeholder.com/400x400?text=product" alt="">
							<figcaption>
								<div>Product 2</div>
								<div>$3.99</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class=".col-xs-12 col-md-4">
					<a href="product_item.php?id=3">
						<figure class="figure product">
							<img src="https://via.placeholder.com/400x400?text=product" alt="">
							<figcaption>
								<div>Product 3</div>
								<div>$3.99</div>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>


		</div>
	</div>


</body>
</html>