



<?php 

include "../lib/php/functions.php";


$notes_object = file_get_json ("../notes/notes.json");
$users = file_get_json ("../data/users.json");


// file_put_contents json_encode explode $_POST


function showUserPage ($user) {

$classes = implode(", ", $user->classes);

// heredoc... only word on last line no tabs
echo <<<HTML

<nav class=" nav nav-crumbs">

<ul>
	<li><a href="admin/users.php">Back</a></li>
</ul>
	

</nav>


<div>
<h2>$user->name</h2>



</div>



		<form method="post" action="lib.functions/functions.php">
			<label class="form-label">Type</label>
			<input type="text" value=$user->type class="form-input">
			<label class="form-label">email</label>	
			<input type="email" value=$user->email  class="form-input">
			<label class="form-label">classes</label>
			<input type="text" value= $classes  class="form-input">
		</form>

		<div class="form-control">
				<input type="button" class="form-button-store" value="SUBMIT">
			</div>
HTML;
}









 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page/title></title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="contaier display-flex">
			<div class="flex-none">
				<h1>Admin User</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>
	


<div class="container">
	<div class="card soft">

	<?php 
	if(isset($_GET['id'])) {
		showUserPage ($users[$_GET['id']]);
	} else {

 	?>

	<h2>User List</h2>
		

	<nav class="nav">
		<ul>

		<?php 

		for($i=0; $i<count($users);$i++) { 

			echo "<li>
			<a href='admin/users.php?id=$i'>{$users[$i]->name}</a></li>";
		}?>

			</ul>
		</nav>

		<?php } ?>
	</div>
</div>


<!-- <div>
<strong>Type</strong>
<span>$user->type</span>
</div>

<div>
<strong>Email</strong>
<span>$user->email</span>
</div>

<div>
<strong>Classes</strong>
<span>$classes</span>
</div> -->

</body>
</html>