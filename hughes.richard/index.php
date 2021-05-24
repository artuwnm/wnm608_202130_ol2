<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>GARAGE SALE HOME</title>

	<?php include "parts/meta.php";?>


</head>
<body class="flush">

	<?php include "parts/navbar.php"; ?>
	
		<div class="view-window" style="background-image: url(images/AdobeStock_97070867_small.jpg); ">
			

		</div>


<div class="container">
	
	<h2>Recommended Products</h2>

	
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