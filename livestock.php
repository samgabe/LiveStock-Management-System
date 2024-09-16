<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <title>Livestock</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/form1.css">
                <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
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



    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">


</head>
<body class="bg-light">
	<div id="header">
		<div id="logo">
			<img src="img/livi.png">
      <marquee><p>Livestock Management System</p></marquee>
		</div>
      <ul id="navbar">
           <li><a href="nav.php">Home</a></li>
           <li class="active"> <a href="livestock.php">livestock</a></li>
           <li><a href="pasture.php">Pasture</a></li>
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
				<label> <b>Create New Livestock Profile</b></label>
        <button onclick="window.location.href='nav.php'"type="submit" style="float: right;margin-right: 10px;" class="btn3">Return to Homepage</button>
			</div>
</div>	
	<div id="data">
		
		<div id="head">
			<div id="list">
				<ul>
					<li><a href="reganimal.php">General</a></li>
					<li><a href="details.php">Profile</a></li>
					
					
				</ul>
			</div>
		</div>


		<div id="matter">
    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Livestock Profile</h2>
        
      </div>

      <div class="row">

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Livestock Type</h4>
          <form class="needs-validation" novalidate method="post" action="action.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="species">Species</label>
                <input type="text" class="form-control" name="species" placeholder="" value="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" name="brand" placeholder="" value="" required>
                
              </div>
            </div>

            

            <div class="mb-3">
              <label for="Breed">Breed</label>
              <input type="text" class="form-control" name="breed" placeholder="" required>
             
            </div>

            <div class="mb-3">
              <label for="Ear Tag">Ear Tag </label>
              <input type="text" class="form-control" name="eartag" placeholder="">
            </div>

            <div class="row">


              <div class="col-md-3 mb-3">
                <label for="sire">Sire</label>
                <input type="text" class="form-control" name="sire" placeholder="" required>

              </div>
            </div>
            

        <h4 class="mb-3">Production</h4>

              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Type of product acquired">Type of product acquired</label>
                <input type="text" class="form-control" name="product" placeholder="" value="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="Quantity of Production">Quantity of Production</label>
                <input type="text" class="form-control" name="quantity" placeholder="" value="" required>
                
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="Level of production">Level of production</label>
                <input type="text" class="form-control" name="production" placeholder="" required>
              
              </div>
              <div class="col-md-3 mb-3">
                <label for="Feeding Behaviour">Feeding Behaviour</label>
                <input type="text" class="form-control" name="feeding" placeholder="" required>
               
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Create animal</button>
          </form>
        </div>
      </div>


    </div>


		</div>

	</div>

</div>

    <footer style="height:60px;padding-top: 20px;">
        <center>
        <p>Sam's systems design &nbsp;Copyright @2018</p>
    </footer>
        </center>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.1.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../..bootstrap-4.1.1/assets/js/vendor/popper.min.js"></script>
    <script src="../../../..bootstrap-4.1.1/dist/js/bootstrap.min.js"></script>
    <script src="../../../..bootstrap-4.1.1/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

	</body>
</html>