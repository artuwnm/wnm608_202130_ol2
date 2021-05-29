<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	   <script src="lib/js/functions.js"></script>
     <script src="js/templates.js"></script>
     <script src="js/product_list.js"></script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

		<!-- viewport -->
	<div class="view-window" style="background-image: url('img/market2.jpg')">
	</div>

  <div class="container">
      <h2>Product List</h2>


      <?php



      $result = makeQuery(
        makeConn(),
        "
        SELECT *
        FROM `products`
        ORDER BY `date_create` DESC
        LIMIT 12
        "
      );


      echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

      ?>
  </div>


</body>
</html>