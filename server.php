<?php
	
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost','root','LAP254678','livestock');


	if (isset($_POST['register'])) {
		# code...
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		if (empty($username)) {
			# code...
			array_push($errors, "Username is  required");
		}
		if (empty($email)) {
			# code...
			array_push($errors, "Email is  required");
		}
		if (empty($password_1)) {
			# code...
			array_push($errors, "Password is  required");
		}
		if ($password_1 != $password_2) {
			# code...
			array_push($errors, "The two passwords do not match");
		}
		if (count($errors) == 0) {
			# code...
			$password = md5($password_1);
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location:nav.php');

		}

		if (isset($_POST['login'])) {
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			# code...
			array_push($errors, "Username is  required");
		}
		if (empty($email)) {
			# code...
			array_push($errors, "Password is  required");
		}
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users Where username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
				if (mysqli_num_rows($result) == 1) {
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location:nav.php');

					session_start();
					$_SESSION['auth']='true';
					//$_SESSION['station']=$police_station;
					//$station = $_SESSION['station'];
					
					header('location:nav.php');


				}else{
					array_push($errors, "Wrong username/password combination is ");
					
				}
		}
		}


	}


	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}

?>