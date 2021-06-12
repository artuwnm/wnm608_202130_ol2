<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>GARAGE SALE HOME</title>

	<?php include "parts/meta.php";?>
	<style>
		body {
  		background-image: url('images/cement.jpg');
  		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
		}
	</style>


</head>
<body class="flush">


	<?php include "parts/navbar.php"; ?>

	
		<div class="view-window" style="background-image: url(images/garage_crop.jpg); ">
			<div id="headline">GARAGE SALE</div>
			 </div>

			


<div class="container">
	<div class="card soft dark">
		<h1 style="text-align: center;">RECOMMENDED PRODUCTS</h1>
	</div>

	
</div>

<div class="container">
	<h2>Latest Sporting Items</h2>
<?php recommendedCategory("sporting"); ?>
	<h2>Latest Home Items</h2>
<?php recommendedCategory("home"); ?>
	<h2>Latest Unusual Ephemera</h2>
<?php recommendedCategory("ephemera"); ?>
</div>



</body>
</html>