<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>GARAGE SALE HOME</title>

	<?php include "parts/meta.php";?>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>

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