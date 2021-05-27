<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"; 

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">  

	<title>Home</title>

	<?php include "parts/meta.php"; ?>
  </head>   

<body class="flush">
    <?php include "parts/navbar.php"; ?>


<div class="view-window" style="background-image:url('img/13.jpg')"></div>
	<div class="container">
		<div class="card soft">
     		<h3>Our Sweet Offers</h3>
     		<p>At Sweet Offer we want to share with you our passion for Iranian pastries, the art of incomparable quality and taste.</p>
     		<p>Our mission is to find and provide to you Iran's finest and most extraordinary handmade art and to offer pastries that are made in small batches with the highest quality ingredients using recipes that are rooted in our family history</p>
     		<p>Each Persian delicacy sparkles and perfumes the air with the scents of rose, cardamom and saffron</p>
     	</div>
     </div>
 </div>


<div class="container" id="tableofcontents">

</div>


</div>
<div class="container">
    <h4><span>You Might Also Like Our Special Gift</span></h4>
    <?php

      recommendedCategory("gift");

    ?>
        <h4><span>Traditional Box</span></h4>
    <?php

      recommendedCategory("traditional");

    ?>
</div>

<div class="container"> 

        <h3>Subscribe to our Sweet Newsletter!</h3> 
          <div class="grid gap">
               <div class="col-xs-12 col-md-6">
                    <div class="card soft">
                         <input type="Text" class="form-input" name="user-classes" id="user" placeholder="Enter Email Address" value="">
                    </div>
               </div>
               <div class="col-xs-12 col-md-6">
                    <div class="card hard">
                         <input class="form-button" type="submit" value="Subscribe">
                    </div>
                </div>
         
</div>
</div>
                        
</body>

</html>