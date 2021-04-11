<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");


function showUserPage($user) {

	$classes = implode(",", $user->classes);

// heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<header class="navbar">
	<div class="container display-flex"></div>		

</header>

<div class="container">
<div card soft>
	<nav class="nav nav-crumbs">
		
	</nav>
	<h2>User Form</h2>	
	<form id="formid" action="admin/users.php" method="POST">
	<div class="form-control">
		<label class="form-lable">Name</label>
	<input type="text" class="form-input" name="name" id="name" placeholder="Enter your name" value="$user->name"/><br>
	</div>

	<div>
		<label class="form-lable">Type</label>
		<input type="Text" class="form-input" name="type" id="type"  placeholder="Enter your type" value="$user->type"/><br>
	</div>

	<div>
		<label class="form-lable">Email</label>
		<input type="Text" class="form-input" name="email" id="email" placeholder="Enter your email" value="$user->email"/><br>
	</div>

	<div>
		<label class="form-lable">Classes</label>
		<input type="Text" class="form-input" name="classes" id="classes" placeholder="Enter your class" value="$classes"/><br>
		</div>
		</div>
	</div>
</div>

	<div class="container">	
			<div class="card soft">
				<button class="form-button" type="submit" name="submit" value="Submit"/>Submit</button>
			</div>
		</form>
	</div>
 </div>

HTML;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>     
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flexflex-none">
				<ul><a href="admin/users.php">User List</a></ul>
			</nav>
		</div>
	</header>

	<div class="container">
			<div class="card soft">
				<?php 

				if(isset($_GET['id'])) {
					showUserPage($users[$_GET['id']]);
 
				} else {


				?>

			<h2>User List</h2>
			<nav class="nav">
				<ul>
			<?php 
			for($i=0;$i<count($users);$i++){
				echo "<li>
				<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
				</li>";
			}

			 ?>
			</ul>
		</nav>

		<?php
		 } 
		 ?>
		</div>
	</div>
	
</body>
</html>