<?php 
 
include_once "lib/php/functions.php";
include_once "parts/templates.php";



      ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	

</head>
<body>
	<?php include "parts/navbar.php"; ?>


     
<div class="container">
     
          <div class="form-control">
               <form>
                     <input type="search" class="hotdog" placeholder="Search">
               </form>
          </div>
</div>
<div class="container">
		
			<h2>Product List</h2>
		
          <?php
      


      $result = makeQuery(
          makeConn(),
          "
          SELECT *
          FROM `products`
          ORDER BY `price` DESC
          LIMIT 12
          "
     );
     echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div";
          ?>
	</div>
</div>
     		<!--    <div class="grid gap">
     		<div class="col-xs-12 col-md-4">
     				<figure class="figure">
     			<img src='img/bamiyeh.jpg' alt="">
     			<figcaption><li><a href="product_item.php?id=1">Bamiyeh</a></li>
                         <div>$12.99</div>
     			</figcaption>
     		</figure>
     			</div>
     			<div class="col-xs-12 col-md-4">
     				<figure class="figure">
     			<img src='img/honey_brittle.jpg' alt="">
     			<figcaption><li><a href="product_item.php?id=2">Honey Brittle</a></li>
                         <div>$12.99</div>
                    </figcaption>
     		</figure>
     			</div>
     			<div class="col-xs-12 col-md-4">
     				<figure class="figure">
     			<img src='img/kolompeh.jpg' alt="">
     			<figcaption><li><a href="product_item.php?id=3">Kolompeh</a></li>
                         <div>$12.99</div>
                    </figcaption>
     		</figure>
     		</div>
     	</div>
               <div class="container" id="tableofcontents">
               <h2>Cookies</h2>
                    <div class="container">
        <div class="card soft">
               <h2>Product List</h2>

               <ul>
                    <li><a href="product_item.php?id=7">Product 7</a></li>
                    <li><a href="product_item.php?id=8">Product 8</a></li>
                    <li><a href="product_item.php?id=9">Product 9</a></li>
                    
               </ul>
          </div>
     </div>
               <div class="grid gap">
                    <div class="col-xs-12 col-md-4">
                         <figure class="figure">
                    <img src='img/qorabieh.jpg' alt="">
                    <figcaption><li><a href="product_item.php?id=4">Qorabieh</a></li>
                         <div>$12.99</div>
                    </figcaption>
               </figure>
                    </div>
                    <div class="col-xs-12 col-md-4">
                         <figure class="figure">
                    <img src='img/raisin cookies.jpg' alt="">
                    <figcaption><li><a href="product_item.php?id=5">Raisin Cookies</a></li>
                         <div>$12.99</div>
                    </figcaption>
               </figure>
                    </div>
                    <div class="col-xs-12 col-md-4">
                         <figure class="figure">
                    <img src='img/feather cookies.jpg' alt="">
                    <figcaption><li><a href="product_item.php?id=6">Feather cookis</a></li>
                         <div>$12.99</div>

                    </figcaption>
               </figure>
               </div>
          </div>


		<div class="container" id="tableofcontents">
     		<h2>Special</h2>
     			<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=4">Product 4</a></li>
				<li><a href="product_item.php?id=5">Product 5</a></li>
				<li><a href="product_item.php?id=6">Product 6</a></li>
				
			</ul>
		</div>
	</div>
     		<div class="grid gap">
     			<div class="col-xs-12 col-md-4">
     				<figure class="figure">
     			<img src='img/marzipan.jpg' alt="">
     			<figcaption><li><a href="product_item.php?id=7">Marzipan</a></li>
                         <div>$12.99</div>
     			</figcaption>
     		</figure>
     			</div>
     			<div class="col-xs-12 col-md-4">
     				<figure class="figure">
     			<img src='img/qottab.jpg' alt="">
     			<figcaption><li><a href="product_item.php?id=8">Qottab</a></li>
                         <div>$12.99</div>
                    </figcaption>
     		</figure>
     			</div>
     			<div class="col-xs-12 col-md-4">
     				<figure class="figure">
     			<img src='img/chickpea_gift.jpg' alt="">
     			<figcaption><li><a href="product_item.php?id=9">Chickpea</a></li>
                         <div>$12.99</div>

                    </figcaption>
     		</figure>
     		</div>
     	</div>
	
          <div class="container" id="tableofcontents">
               <h2>Gift</h2>
                    <div class="container">-->
          <!--<div class="card soft">
               <h2>Product List</h2>

               <ul>
                    <li><a href="product_item.php?id=7">Product 7</a></li>
                    <li><a href="product_item.php?id=8">Product 8</a></li>
                    <li><a href="product_item.php?id=9">Product 9</a></li>
                    
               </ul>
          </div>
     </div>

               <div class="grid gap">
                    <div class="col-xs-12 col-md-4">
                         <figure class="figure">
                    <img src='img/kerman_gift_1.jpg' alt="">
                    <figcaption><li><a href="product_item.php?id=10">Kerman Gift</a></li>
                         <div>$12.99</div>
                    </figcaption>
               </figure>
                    </div>
                    <div class="col-xs-12 col-md-4">
                         <figure class="figure">
                    <img src='img/6.jpg' alt="">
                    <figcaption><li><a href="product_item.php?id=11">Summer Days Gift</a></li>
                         <div>$12.99</div>

                    </figcaption>
               </figure>
                    </div>
                    <div class="col-xs-12 col-md-4">
                         <figure class="figure">
                    <img src='img/kolompeh_gift.jpg' alt="">
                    <figcaption><li><a href="product_item.php?id=12">Eshgh Gift</a></li>
                         <div>$12.99</div>
                    </figcaption>
               </figure>
               </div>
          </div>
     </div>
</div>


  <h4><span>We Offer</span></h4>    
<div class="container" id="tableofcontents">
              
      <div class="card green"> 
      
         <div class="grid gap">
            <div class="col-xs-6 col-md-3">   
               <figure class="figure product-overlay">
                    <img src='img/7.jpg' alt="">
                <figcaption>
                    <div class="caption-body">
                         <div>Product Name</div>
                          <div>$14.99</div>
                    </div>
               </figcaption>

               </figure>
                    </div>
                    <div class="col-xs-6 col-md-3">
                         <figure class="figure product-overlay">
                         <img src='img/16.jpg' alt="">
                         <figcaption>
                         <div class="caption-body">
                              <div>Product Name</div>
                              <div>$13.99</div>
               </figcaption>
               </figure>
                    </div>

                    <div class="col-xs-6 col-md-3">
                         <figure class="figure product-overlay">
                    <img src='img/berenj.jpg' alt="">
                    <figcaption>
                         <div class="caption-body">
                              <div>Product Name</div>
                              <div>$11.99</div>
                         </div>
                    </figcaption>

               </figure> 
                    
               </div>
           <div class="col-xs-6 col-md-3">
                         <figure class="figure product-overlay">
                    <img src='img/82.jpg' alt="">
                    <figcaption>
                         <div class="caption-body">
                              <div>Product Name</div>
                              <div>$9.99</div>
                         </div>
                    </figcaption>
               </figure>              
          </div>

</div>-->




</body>
</html>