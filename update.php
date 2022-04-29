<?php 
include('server.php');
include('ao.inc');
?>
<?php
$id=0;
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
}
$sql = "Select * from `users` where `users`.id=$id";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
$u=$row['username'];
if (isset($_POST['submit'])) {
    
    $password = $_POST['password'];
    $password1 = md5($password);

    $r=mysqli_query($db,"UPDATE users set name='" . $_POST['name'] . "', username='" . $_POST['username'] . "', email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "', password='$password1',u_id='" . $_POST['u_id'] . "' WHERE username='" . $_POST['username'] . "'");
    
    if ($r)
        { echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'admin.php';</script>"; }
    else
        { echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'update.php';</script>"; }
}

?>

<!DOCTYPE html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Update
        <?php 
        
        echo $row['username'];
        ?>
        </h2>
	</div>
	
	<form method="post" action="update.php">

		<?php include('errors.php'); ?>
        <div class="input-group">
			<label>Diptrish Id</label>
			<input type="text" name="u_id" value="<?php echo $row['u_id']; ?>">
		</div>
        <div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $row['name']; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $row['username']; ?>" readonly>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $row['email']; ?>" readonly>
		</div>
        <div class="input-group">
			<label>Mobile/Phone</label>
			<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="submit">Update</button>
		</div>
		
	</form>
</body>
</html>