<?php

include_once "../lib/php/functions.php";

include_once "../parts/templates.php";



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Store</title>
<?php include "../parts/meta.php"; ?>		
	
</head>
<body>

<?php include "../parts/navbar.php"; ?>
			

<div class="container">
	<div class= "card soft">	


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

echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

?>


	</div>
</div>	

<?php include "../parts/footer.php"; ?>
</body>
</html>