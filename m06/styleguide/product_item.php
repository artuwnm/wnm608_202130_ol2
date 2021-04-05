<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Item</title>


<?php include "../parts/meta.php"; ?>
		
	
</head>
<body>

<?php include "../parts/navbar.php"; ?>

<div class="container">
	<div class="card card soft">
		<div class="grid gap">
				<div class=".col-xs-12 col-md-6">
					<figure class="figure product">
						<img src="https://via.placeholder.com/400x400?text-product" alt="">
					</figure>
				</div>

		<div class=".col-xs-12 col-md-6">
			<h3>Product Name</h3>
			<h3>$3.99</h3>
			<p>This is item #<?= $_GET['id'] ?></p>
			<p>Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nisi suscipit reprehenderit distinctio quae? Asperiores, iure alias doloribus ipsum laboriosam repudiandae tenetur velit sint. Suscipit voluptatibus in quis, consectetur praesentium!</p>

				<div class="form-control">
		<input type="button" class="form-bluebutton" value="Add to Bag">
				</div>
				<div class="form-control">
		<input type="button" class="form-bluebutton" value="Continue Shopping">
				</div>
				<div class="form-control">
		<input type="button" class="form-bluebutton" value="Proceed to Checkout">
				</div>
		</div>

	</div>

</div>

<?php include "../parts/footer.php"; ?>

</body>
</html>