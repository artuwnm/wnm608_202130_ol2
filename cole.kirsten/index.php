<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>San Marino Seafood</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<!-- viewport -->
	<div class="view-window" style="background-image: url('img/octopus.jpg')">
	</div>


<div class="container">
	<div class="card soft">
		<h2>Freshest Fish in LA County!</h2>

		<p>We serve the finest seafood here at San Marino Seafood in San Marino, CA.  Our menu offers fresh fish sourced sustainably primarily off the coast of California.  We are located west of Highway 164 at the corner of Huntington Drive and San Marino Avenue.  We're not far from San Gabriel Country Club.  Order online for nationwide delivery!</p>
	</div>

	<div class="container">
    <h4><span>Latest Fish</span></h4>
 <?php

      recommendedCategory("fish");

    ?>
        <h4><span>Latest Shellfish</span></h4>
  <?php

      recommendedCategory("shellfish");

    ?>
</div>
	
</div>

	<!-- viewport -->
	<div class="view-window" style="background-image: url('img/crabs.jpg')">
	</div>


<div class="container">
	<article id="article1" class="article card soft">
		<div class="display-flex flex-align-center">
			<div class="flex-stretch">
				<h2>Location & Hours</h2>
			</div>
		</div>
		<div class="article-body">
			<p>Hours: 10:30am - 8pm</p>
			<p>Closed Mondays </p>
			<p> </p>
			<p>2150 Huntington Dr</p>
			<p>San Marino, CA 91108</p>
			<p>Telephone: (626) 943-8862</p>
		</div>
	</article>
</div>

<div class="container">
	<article id="article4" class="article">
		<div class="copyright">
			<p>Copyright San Marino Seafood 2021</p>
		</div>
	</article>
</div>

</body>
</html>