<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Product List</title>

<?php include "parts/meta.php"; ?>
 
</head>
<body>
 
 <?php include "parts/navbar.php"; ?>

 <div class="container">
  
   <h2>Product List</h2>
   

   <?php

   include_once "lib/php/functions.php";
   include_once "parts/templates.php";

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
     		


<!--   
                <div class="grid gap">
     <div class=".col-xs-12. col-md-4">
          <figure class="figure product">
     <img src='img/ring1.jpg' alt="">
     <figcaption>
          <div>Product Name</div>
          

          <div>$880</div>
     </figcaption>
    </figure>

    </div>

    <div class=".col-xs-12. col-md-4">
     <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>
          
    </div>

    <div class=".col-xs-12. col-md-4">
     <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>
          
    </div>
    </div>





  

   <div class="grid gap">
     <div class=".col-xs-12. col-md-4">
          <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>

    </div>

    <div class=".col-xs-12. col-md-4">
     <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>
          
    </div>

    <div class=".col-xs-12. col-md-4">
     <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>
          
    </div>
    </div>




   <div class="grid gap">
     <div class=".col-xs-12. col-md-4">
          <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>

    </div>

    <div class=".col-xs-12. col-md-4">
     <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>
          
    </div>

    <div class=".col-xs-12. col-md-4">
     <figure class="figure product">
     <img src="http://via.placeholder.com/400x400?text=product" alt="">
     <figcaption>
          <div>Product Name</div>
          <div>$880</div>
     </figcaption>
    </figure>
          
    </div>
    </div>
</div>

-->



</body>
</html>