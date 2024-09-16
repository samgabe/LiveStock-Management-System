<?php include('Server/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQl</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" autocomplete="off" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>
<?php
	
	

	$db = mysqli_connect('localhost','root','LAP254678','livestock');

	if($_POST)
{  

 	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password = md5($password);
	$conn=mysqli_connect("localhost", "root", "LAP254678", "livestock");
	$query="select * from users where username='$username' and password='$password'";
	
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['login']='true';
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location:nav.php');
	}
	else{
		
		array_push($errors, "Wrong username/password combination ");
	}
	
	}
