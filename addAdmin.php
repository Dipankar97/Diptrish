<?php 
include('server.php');
include('ao.inc');
?>
<!DOCTYPE html>
<head>
	<title>Add New Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Add New Admin</h2>
	</div>
	
	<form method="post" action="addAdmin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="add_admin">Add</button>
		</div>
		
	</form>
</body>
</html>