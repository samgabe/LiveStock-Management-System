<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
  	header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <title>About</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <meta name="viewpoint" content-type="width=device-width initial-scale=1">
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
           <li><a href="nav.php">Home</a></li>
           <li><a href="livestock.php">livestock</a></li>
           <li><a href="pasture.php">Pasture</a></li>
           <li><a href="health.php">Health</a></li>
           <li><a href="overview.php">Overview</a></li>
           <li><a href="contact.php">Contact</a></li>
           <li class="active"><a href="about.php">About us</a></li>

    <?php if (isset($_SESSION['username'])):   ?>

     
		<p style="float: right;padding-right: 12px;color: yellow;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		
		<p style="float: right; padding-right: 12px;"><a href="start.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
      </ul>
  </div>
 
	
	<div id="data">

		<center><h1><u>About Us</u></h1></center>
		<div id="matter" >
		<div id="f1">

			<p style=" font-size: 20px;">
ID management software and manifest database creation with multiple file output formats for printing and document management
We develop pasture and grazing management software solutions to record individual field yields, annual pasture growth, and measure growth rates over time, plus integrate analytics applications and dynamic forecasting modules to optimize land and herd management
Stocking rate applications to calculate forage demand and forage production of a given pasture plus determine optimal rates
We integrate with weather forecasting applications and create modules to alert of impending inclement weather
We create custom report generation software modules, integrated to data warehouses to visualize key performance and production indicators for each animal including pasture, animal ID, location, gender, date of birth, breed, health records, animal characteristics, breeding history, life events, pedigree history, and more
			</p>
			<p style=" font-size: 20px;">
We develop livestock management software with custom notes and events creation capabilities to track embryo or Artificial Insemination (AI) transplants, pregnancy test results and more, plus implement custom dashboards to view and update animal records from one access point
We design breeding management dashboards integrated with breeding history and genetics databases plus program custom alerts / notifications based on custom parameters.
We develop user portals to let breeders manage and publish detailed genetics information for each animal including breed, gender, and pedigree
We engineer individual animal management software to reduce breeding costs, ensure optimal offspring, and remove underperforming stock from the herd by creating analytics databases and predictive modeling based on an animal's height, weight, and fertility history.
Custom analytics software creation for effective breeding planning / forecasting including integrations with gestational databases to project individual animal births and overall herd production.
We program custom inbreeding prevention and detection software to optimize productivity and reduce inbreeding depression.
		</p>


		</div>
		<div id="f2">
			<form action="action_page.php">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
    
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>


		<p style="padding-left: 20px;"><b>Follow us on our social media handles below.</b></p>

		<!-- Add font awesome icons -->
       	<a href="#" class="fa fa-facebook"></a>&nbsp; : <b style="color: red;">livysystems</b><br>
       	<a href="#" class="fa fa-twitter"></a> &nbsp; : <b style="color: red;">@livysystems</b><br>
       	<a href="#" class="fa fa-instagram"></a> &nbsp; : <b style="color: red;">livysystems</b><br>
       	<a href="#" class="fa fa-google-plus-square"></a>&nbsp; :  <b style="color: red;">livysystems</b><br>
        




		</div>
		</div>
	</div>
	<footer style="height:60px;padding-top: 20px;">
		<center>
		<p>Sam's systems design &nbsp;Copyright @2018</p>
		</center>
	</footer>
		
	</body>
</html>