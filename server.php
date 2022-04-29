<?php 
	session_start();
    error_reporting(0);
	// variable declaration
	$name="";
	$phone="";
	$username = "";
	$block = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	// $db = mysqli_connect('localhost', 'root', '', 'diptrish');
	$db = mysqli_connect('localhost', 'id13508437_diptrishlibrary', 'DiptrishOnlineLibrary@00', 'id13508437_diptrish');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		//username exist 
		$query = "SELECT * FROM users WHERE username='$username' AND is_Active= 'Y'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['username'] = "Username already taken";
	    }
	    $query = "SELECT * FROM users WHERE username='$username' AND is_Block= 'Y'";
	    $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) > 0) {
	        $errors['username'] = "Username is Blocked";
	    }
	    //email exist 
		$query = "SELECT * FROM users WHERE email='$email' AND is_Active= 'Y'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['email'] = "Email already exists";
	    }
        
        $query = "SELECT * FROM users WHERE email='$email' AND is_Block='Y'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['email'] = "Email is Blocked";
	    }
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$r=rand(0000,9999);
			$u_id="DL".date("Y").$r;
			
			$query = "INSERT INTO users (name, username, email, phone, password, u_id, is_Active, is_Block) 
					  VALUES('$name','$username', '$email', '$phone', '$password', '$u_id', 'Y', 'N')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
// 			$_SESSION['name'] = $name;
// 			$_SESSION['u_id'] = $u_id;
			$_SESSION["login"] = "OK";
			$_SESSION['success'] = "You are now logged in";
			header('location: index1.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		// $u_id = mysqli_real_escape_string($db, $_POST['u_id']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
        $query = "SELECT * FROM users WHERE username='$username' AND is_Block= 'Y'";
	    $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) > 0) {
	        $errors['username'] = "Username is Blocked";
	    }
	    $query = "SELECT * FROM users WHERE email='$email' AND is_Block='Y'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['email'] = "Email is Blocked";
	    }
		if (count($errors) == 0) {
			$password = md5($password);
			
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND is_Active='Y' AND is_Block='N'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				// $_SESSION['name'] = $name;
				// $_SESSION['u_id'] = $u_id;
				$_SESSION["login"] = "OK";
				$_SESSION['success'] = "You are now logged in";
				header('location: index1.php');
			}else {
				array_push($errors, "Wrong username and password");
			}
		}
	}


	//Admin Login
	if (isset($_POST['login_admin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				
				// $_SESSION["login"] = "OK";
				$_SESSION["Adminlogin"] = "OKADMIN";
				$_SESSION['success'] = "You are now logged in";
				header('location: admin.php');
			}else {
				array_push($errors, "Wrong username and password");
			}
		}
	}


	//Add User
	if (isset($_POST['add_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		//username exist 
		$query = "SELECT * FROM users WHERE username='$username' AND is_Active= 'Y'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['username'] = "Username already taken";
	    }
	    $query = "SELECT * FROM users WHERE username='$username' AND is_Block= 'Y'";
	    $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) > 0) {
	        $errors['username'] = "Username is Blocked";
	    }


	    //email exist 
		$query = "SELECT * FROM users WHERE email='$email' AND is_Active= 'Y'";

	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['email'] = "Email already exists";
	    }
	    $query = "SELECT * FROM users WHERE email='$email' AND is_Block='Y'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['email'] = "Email is Blocked";
	    }


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$r=rand(0000,9999);
			$u_id="DL".date("Y").$r;
			$query = "INSERT INTO users (name, username, email, phone, password, u_id, is_Active, is_Block) 
					  VALUES('$name','$username', '$email', '$phone', '$password', '$u_id', 'Y', 'N')";
			mysqli_query($db, $query);

			header('location: admin.php');
		}

	}
	
		//Add New Admin
	if (isset($_POST['add_admin'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		
		//username exist 
		$query = "SELECT * FROM admin WHERE username='$username'";
	    $results = mysqli_query($db, $query);
	    if (mysqli_num_rows($results) > 0) {
	        $errors['username'] = "Username already taken";
	    }

	    
		// register admin if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;
// 			$r=rand(0000,9999);
			$query = "INSERT INTO admin (username, password) 
					  VALUES('$username', '$password')";
			mysqli_query($db, $query);

			header('location: admin.php');
		}

	}

?>