<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
  	header('location:index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
	 <title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
        	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="contact/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/css/util.css">
	<link rel="stylesheet" type="text/css" href="contact/css/main.css">
<!--===============================================================================================-->


</head>
<body>
		

	<div id="header">
		<div id="logo">
			<img src="img/livi.png">
			<marquee><p>Livestock Management System</p></marquee>
		</div>

		
      <ul id="navbar">
 
           <li class="active"><a href="#">Home</a></li>
           <li ><a href="livestock.php">livestock</a></li>
           <li><a href="pasture.php">Pasture</a></li>
           <li><a href="health.php">Health</a></li>
           <li><a href="overview.php">Overview</a></li>
           <li><a href="contact.php">Contact</a></li>
           <li><a href="about.php">About us</a></li>
            
    <?php if (isset($_SESSION['username'])):   ?>

     
		<p style="float: right;padding-right: 12px; color: yellow;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		
		<p style="float: right; padding-right: 12px;"><a href="start.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
  
      </ul>
  </div>
  <div class="container">
 <div id="first">
 <!-- style="color:red;font-size:30px; padding-left:30px;padding-top:30px;"--> 
			<div > 
				<marquee><label> <b>Welcome to our livestock Management system.</b></label></marquee>
			</div>
</div>	
	<div id="data">
		
		

		<div id="matter">
    <div class="container">
<a href="livestock.php"><img style="margin: 10px; border-radius: 10px;"src="img/livestock.jpeg"></a>
<a href="livestock.php">CLICK HERE TO CREATE LIVESTOCK PROFILE.</a>
<a href="pasture.php"><img style="margin: 10px; border-radius: 10px;"src="img/pasture.jpg"></a>
<a href="pasture.php">CLICK HERE TO CREATE PASTURE PROFILE.</a>
<a href="health.php"><img style="margin: 10px; border-radius: 10px;"src="img/monitoring.jpg"></a>
<a href="health.php">CLICK HERE TO CREATE HEALTH PROFILE.</a>
<a href="overview.php"><img style="margin: 10px; border-radius: 10px;"src="img/anima.png"></a>
<a href="overview.php">CLICK HERE TO VIEW EXISTING PROFILES.</a>


    </div>


		</div>

	</div>

</div>
	<footer style="height:60px; text-align: center; padding-top: 10px;">
		<p>Sam's systems design &nbsp;Copyright @2018</p>
	</footer>
		
	</body>
</html>