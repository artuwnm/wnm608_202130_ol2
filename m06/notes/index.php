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

	echo "<div>My name is {$_GET['name']}</div>";

	//?name=Joey&type=textarea or type=h1 or type= button makes the page dymamic

	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";


	?>
</body>
</html>