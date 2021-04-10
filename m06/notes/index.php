<!DOCTYPE html>
<html>
<head>
	<title>PHP Notes</title>
</head>
<body>
<?php 
echo "<div>Hello World</div>";


echo "<div> Goodbye World </div>";

//Variables

echo $a;

//String Interpolation, must use double quotes when the string has a variable.


echo "<div>I have $a things</div>";

echo '<div>I have $a things</div>';



//Number
//Integer
$b = 15;
//Float
$b = .0576;

$b = 10;


//String, noted with quotation marks. Values type made up of characters or numbers
$name =  "Yerguy2";

//Boolean, true or false values

$isOn = true;


//Math (order of operation)
//PENDAS- parenthesis, exponent, multiplication, division, addition, subtraction
 
 echo (5 - 4) * 2;


 //Concatentation, combining strings together

echo "<div>b + a" . " = c</div>";
echo "<div>$b + $a = ".($a+$b)."</div>";

?>

<hr>
<div>This is my name</div>
<div>

	<?php

	$firstname = "Agnes";
	$lastname =  "Bradford";
	$fullname = "$firstname $lastname";

	echo $fullname;



	?>

	<hr>

		<?php

	// superglobals can be found at php.net

		//?id=Joey

	echo "<a href='?name=Joey'>visit</a>";
	echo "<div>My name is {$_GET['name']}</div>";

	//?name=Joey&type=textarea or type=h1 or type= button makes the page dymamic

	echo "<a href='?name=Joey&type=textarea'>visit</a>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	?>
	<hr>
	<?php

	// Array
	$colors = array("red", "green", "blue");

	echo $colors[0];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	echo count($colors);


	?>


	<div style="color:<?= $colors[1] ?>">
		This text is green
	</div>



	<hr>
	<?php

	// Associative Array
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];


	echo $colorsAssociative['green'];

	?>
	<hr>
	<?php

	// Casting
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	// echo $colorsObject;

	echo "<hr>";

	// Array Index Notation
	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";

	// Object Property Notation

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

	// Function
	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}

	print_p($_GET);


	?>


</body>
</html>