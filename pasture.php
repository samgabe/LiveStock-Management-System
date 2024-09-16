<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
  	header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <title>Pasture</title>
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
<body class="bg-light">
	<div id="header">
		<div id="logo">
			<img src="img/livi.png">
      <marquee><p>Livestock Management System</p></marquee>
		</div>
      <ul id="navbar">
           <li><a href="nav.php">Home</a></li>
           <li><a href="livestock.php">livestock</a></li>
           <li class="active"><a href="pasture.php">Pasture</a></li>
           <li><a href="health.php">Health</a></li>
           <li><a href="overview.php">Overview</a></li>
           <li><a href="contact.php">Contact</a></li>
           <li><a href="about.php">About us</a></li>
                    
    <?php if (isset($_SESSION['username'])):   ?>

     
		<p style="float: right;padding-right: 12px;color: yellow;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		
		<p style="float: right; padding-right: 12px;"><a href="start.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
      </ul>
  </div>
 
	
  <div class="container">
 <div id="first">
 <!-- style="color:red;font-size:30px; padding-left:30px;padding-top:30px;"--> 
			<div > 
				<label> <b>Create New Pasture Profile</b></label>
         <button onclick="window.location.href='nav.php'"type="submit" style="float: right;margin-right: 10px;" class="btn3">Return to Homepage</button>
			</div>
</div>	
	<div id="data">
		
		<div id="head">
			<div id="list">
				<ul>
					<li><a href="pasture.php">General</a></li>
					<li><a href="details1.php">Profile</a></li>
					
					
				</ul>
			</div>
		</div>


		<div id="matter">
    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Pasture  Profile</h2>
        
      </div>

      <div class="row">

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Pasture Type</h4>
          <form class="needs-validation" novalidate method="post" action="action1.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Pasture Type">Pasture Type</label>
                <input type="text" class="form-control" name="pasture" placeholder="" value="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="State of the Pasture">State of the Pasture</label>
                <input type="text" class="form-control" name="state" placeholder="" value="" required>
                
              </div>
            </div>

            

            <div class="mb-3">
               <label for="Moisture content of Pasture">Moisture content of Pasture</label>
              <input type="text" class="form-control" name="moisture" placeholder="" required>
             
            </div>

            <div class="mb-3">
              <label for="Pasture Season">Pasture Season</label>
              <input type="text" class="form-control" name="season" placeholder="">
            </div>

            <div class="row">


              <div class="col-md-3 mb-3">
                <label for="Area of Pasture intake">Area of Pasture intake</label>
                <input type="text" class="form-control" name="intake" placeholder="" required>

              </div>
            </div>
            

        <h4 class="mb-3">Commercial Feeds</h4>

              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Type of Supplement feed">Type of Supplement feed</label>
                <input type="text" class="form-control" name="feeds" placeholder="" value="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="Quantity of Supplement">Quantity of Supplement</label>
                <input type="text" class="form-control" name="amount" placeholder="" value="" required>
                
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="Mineral & salts intake">Mineral & salts intake</label>
                <input type="text" class="form-control" name="salts" placeholder="" required>
              
              </div>
              <div class="col-md-3 mb-3">
                <label for="Water intake">Water intaker</label>
                <input type="text" class="form-control" name="water" placeholder="" required>
               
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Create Pasture</button>
          </form>
        </div>
      </div>


    </div>


		</div>

	</div>

</div>
	<footer style="height:20px;">
		<p>Sam's systems design &nbsp;Copyright @2018</p>
	</footer>
		
	</body>
</html>