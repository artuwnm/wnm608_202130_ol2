<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json ($filename);

// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete

//print_p([$_GET,$_POST]); //this will confirm if the function worked

if (isset($_POST['user-name'])) {
	$users[$_GET['id']]->name = $_POST['user-name'];
	$users[$_GET['id']]->type = $_POST['user-type'];
	$users[$_GET['id']]->email = $_POST['user-email'];
	$users[$_GET['id']]->classes = explode(",", $_POST)['user-classes'];


	file_put_contents($filename,json_encode($users));
}



function showUserPage($user) {
$classes = implode(",", $user->classes);

// heredoc

echo <<<HTML
<nav class="nav nav-crumbs">
<ul>
	<li><a href="../admin/users.php">Back</a></li>
</ul>
</nav>
<h2>User Form</h2>
<form method="post" action="">
	<div class="form-control">
		<label class="form-label" for="user-name" >Name</label>
		<input class="form-input" name="user-name" id="user-name" type ="text" value="$user->name" placeholder="Enter a user name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-type" >Type</label>
		<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter a type">
	</div>
		<div class="form-control">
		<label class="form-label" for="user-email" >Email</label>
		<input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" placeholder="Enter a valid email" >
	</div>
		<div class="form-control">
		<label class="form-label" for="user-classes" >Classes</label>
		<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter classes" >
	</div>
<div class="form-control">
	<input class="form-button" type="submit"value="Save Changes">
	</div>
</form>
HTML;
}




?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Admin Page</title>


<?php include "../parts/meta.php";?>
		
	
</head>
<body>
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>User Admin</h1>
		</div>
		<div class="flex-stretch"></div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="../admin/users.php">User List</a></li>
			</ul>
		</nav>
		</div>
</header>

<div class="container">
	<div card soft>

	<?php

	if(isset($_GET['id'])){
	showUserPage($users[$_GET['id']]);
	} else {


	

	?>

		<h2>User List</h2>

	<nav class= "nav">
		<ul>
	<?php

		for($i=0;$i<count($users);$i++){
		echo "<li>
		<a href='../admin/users.php?id=$i'>{$users[$i]->name}</a>
		</li>";
	}

		?>

		</ul>
	</nav>
<?php } ?>
	</div>

</div>


<?php include "../parts/footer.php"; ?>

</body>
</html>