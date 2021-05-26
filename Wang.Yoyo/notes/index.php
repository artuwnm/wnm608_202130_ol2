<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	
</head>
<body>

<?php


	echo "<div>hello world</div>";
	echo "<div>goodbye world</div>";

	$a = 5;

	echo $a;


	echo "<div>I have $a things</div>";


	$b = 15;
	$b = 0.576;
	$b = 10;


	$name = "YoyoW";

	$isOn = true;

	echo 5 - 4 * 2;

	?>



	<hr>
	<div>This is my name</div>
	<div>
		<?php 
		$firstname = "Yoyo";
		$lastname = "Wang";
		$fullname = "$firstname $lastname";

		echo $fullname;

		 ?>
		 <hr>
		 <?php 
		 	// ?name=Lucy
		 echo "<a href='?name=lucy'>visit</a>";
		 	echo "<div>My name is {$_GET['name']}</div>";

		 	echo "<a href='?name=lucy&type=textarea'>visit</a>";
		 	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
		  ?>

		  <hr>
		  <?php 

		  $colors = array("red","green","blue");

		  echo $colors[2];

		  echo "
		  	<br>$colors[0]
		  	<br>$colors[1]
		  	<br>$colors[2]
		  ";



		  echo count($colors);


		   ?>
	</div>
	<div style="color: <?= $colors[1] ?>">
		This text is green
	</div>
	<hr>
	<?php 

	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f",


	];

	echo $colorsAssociative['green'];

	 ?>
	 <hr>
	 <?php 
	 $c = "$a";
	 $d = $c*1;

	 $colorsObject = (object)$colorsAssociative;

	 echo "<hr>";
	 echo $colors[0]."<br>";
	 echo $colorsAssociative['red']."<br>";
	 echo $colorsAssociative[$colors[0]]."<br>";

	 echo $colorsObject->red."<br>";
	 echo $colorsObject->{$colors[0]}."<br>";
	  ?>

	  <hr>
	  <?php 
	  print_r($colors);

	  echo "<hr>";
	  print_r($colorsAssociative);

	  echo "<hr>";
	  echo "<pre>",print_r($colorsObject),"</pre>";


	  function print_p($v) {
	  	echo "<pre>",print_r($v),"</pre>";
	  }
	  print_p($_GET);



	   ?>







</body>
</html>




























