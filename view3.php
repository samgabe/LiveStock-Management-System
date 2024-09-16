<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <title> Overview</title>
     <style type="text/css">
         table{
             border: 1px solid black;
            border-collapse: collapse;
            width: 90%
            color: #d96459;
            padding: 10px;
            text-align: left;

         }
th{
    background-color: #4CAF50;
    padding: 10px;
    text-align: left;
    color: white;
}
td{
      border: 1px solid black;
    padding: 10px;
    text-align: left;
}
tr{
     padding: 10px;
    text-align: left;
     border: 1px solid black;
}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {

    background-color:  #f2f2f2;
}

     </style>
	<link rel="stylesheet" type="text/css" href="css/nav.css">

	<link rel="stylesheet" type="text/css" href="css/form1.css">
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
           <li class="active"><a href="overview.php">Overview</a></li>
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
				<label> <b>View Health Record</b></label> 
        
     
       

        
			</div>
</div>	
	<div id="data">


		<div id="head">
			<div id="list">
				<ul>
          <li><a href="view1.php">Livestock</a></li>
          <li><a href="view2.php">Pasture</a></li>
          <li class="active"><a href="view3.php">Health</a></li>
					
					
				</ul>
			</div>
		</div>


		<div id="matter">
            <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Disease Type</th>
                    <th>Stage of Disease</th>
                    <th>Observable Symptoms</th>
                    <th>Date Symptoms Observed</th>
                    <th>Tests Performed</th>
                    <th>Type of vaccine administered</th>
                    <th>Quantity of vaccine administered</th>
                    <th>Dosage level</th>
                    <th>Name of Veterenary</th>
                    

                </tr>


            <?php

            $db = mysqli_connect('localhost','root','LAP254678','livestock');

            $sql = "SELECT id,disease,stage,symptoms,observed,tests,administer,vaccine,dosage,Veterenary from health";
            $result = $db-> query($sql);

            if ($result-> num_rows > 0) {
                # code...
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["id"] . "</td><td>" . $row["disease"] . "</td><td>" .  $row["stage"] . "</td><td>" . $row["symptoms"] . "</td><td>" .  $row["observed"] . "</td><td>" . $row["tests"] . "</td><td>" . $row["administer"] . "</td><td>" . $row["vaccine"] . "</td><td>" . $row["dosage"] . "</td><td>"  .  $row["Veterenary"] .  "</td></tr>";
                    }
                    echo "</table>";
            }
            else {
                echo "0 result";
            }


            $db-> close();

            ?>
		</table>
    </div>
		</div>

	</div>

</div>

	<footer style="height:60px;text-align:center;">
		<p>Sam's systems design &nbsp;Copyright @2018</p>
	</footer>
		
	</body>
</html>