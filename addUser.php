<?php 
include('server.php');
include('ao.inc');
?>
<!DOCTYPE html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Add New User</h2>
	</div>
	
	<form method="post" action="addUser.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" >
		</div>
		<div class="input-group">
			<label>Mobile/Phone</label>
			<input type="text" name="phone">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="add_user">Add</button>
		</div>
		
	</form>
</body>
</html>