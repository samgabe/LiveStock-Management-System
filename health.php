<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
  	header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <title>Health</title>
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
           <li><a href="nav.php">Home</a></li>
           <li><a href="livestock.php">livestock</a></li>
           <li><a href="pasture.php">Pasture</a></li>
           <li class="active"> <a href="health.php">Health</a></li>
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
				<label> <b>Create New Health Profile</b></label>
         <button onclick="window.location.href='nav.php'"type="submit" style="float: right;margin-right: 10px;" class="btn3">Return to Homepage</button>
			</div>
</div>	
	<div id="data">
		
		<div id="head">
			<div id="list">
				<ul>
					<li><a href="health.php">General</a></li>
					<li><a href="details2.php">Profile</a></li>
					
					
				</ul>
			</div>
		</div>


		<div id="matter">
    <div class="container">
      <div class="py-5 text-center">
        
        <h2>Health Record</h2>
        
      </div>

      <div class="row">

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Health  Status</h4>
          <form class="needs-validation" novalidate method="post" action="action2.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Disease Type">Disease Type</label>
                <input type="text" class="form-control" name="disease" placeholder="" value="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="Stage of Disease">Stage of Disease</label>
                <input type="text" class="form-control" name="stage" placeholder="" value="" required>
                
              </div>
            </div>

            

            <div class="mb-3">
              <label for="Observable Symptoms">Observable Symptoms</label>
              <input type="text" class="form-control" name="symptoms" placeholder="" required>
             
            </div>

            <div class="mb-3">
              <label for="Date Symptoms Observed">Date Symptoms Observed</label>
              <input type="date" class="form-control" name="observed" placeholder="">
            </div>

            <div class="row">


              <div class="col-md-3 mb-3">
                <label for="Tests Perfromed">Tests Performed</label>
                <input type="text" class="form-control" name="tests" placeholder="" required>

              </div>
            </div>
            

        <h4 class="mb-3">Vaccination</h4>

              <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Type of vaccine administered">Type of vaccine administered</label>
                <input type="text" class="form-control" name="administer" placeholder="" value="" required>

              </div>
              <div class="col-md-6 mb-3">
                <label for="Quantity of vaccine administered">Quantity of administered</label>
                <input type="text" class="form-control" name="vaccine" placeholder="" value="" required>
                
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="Dosage level">Dosage level</label>
                <input type="text" class="form-control" name="dosage" placeholder="" required>
              
              </div>
              <div class="col-md-3 mb-3">
                <label for="Name of Veterenary">Name of Veterenary</label>
                <input type="text" class="form-control" name="veterenary" placeholder="" required>
               
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Create health</button>
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
	<footer style="height:20px;">
		<p>Sam's systems design &nbsp;Copyright @2018</p>
	</footer>
		
	</body>
</html>