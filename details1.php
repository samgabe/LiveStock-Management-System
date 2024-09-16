<?php include('server.php'); 
  if (empty($_SESSION['username'])) {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	 <title> Pasture Details</title>
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
           <li class="active"><a href="pasture.php">Pasture</a></li>
           <li><a href="health.php">Health</a></li>
           <li><a href="overview.php">Overview</a></li>
           <li><a href="contact.php">Contact</a></li>
           <li><a href="about.php">About us</a></li>
                    
    <?php if (isset($_SESSION['username'])):   ?>

     
        <p style="float: right;padding-right: 12px;color: yellow; ">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        
        <p style="float: right; padding-right: 12px;"><a href="start.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
      </ul>
  </div>
  <div class="container">
 <div id="first">
 <!-- style="color:red;font-size:30px; padding-left:30px;padding-top:30px;"--> 
			<div > 
				<label> <b>New Pasture Record</b></label> 
        
       <a href="pasture.php" style="float: right;margin-right: 20px;padding-top: 20px; ">&nbsp; Or &nbsp; Cancel</a> <button onclick="window.location.href='pasture.php'"type="submit" style="float: right;margin-right: 10px;" class="btn3">Create Pasture</button>
       

        
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
            <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Pasture Type</th>
                    <th>State of Pasture</th>
                    <th>Moisture content</th>
                    <th>Pasture Season</th>
                    <th>Mode of Intake</th>
                    <th>Supplement Type</th>
                    <th>Quatity of Supplement</th>
                    <th>Minerals & salts</th>
                    <th>water</th>
                    

                </tr>


            <?php

            $db = mysqli_connect('localhost','root','LAP254678','livestock');

            $sql = "SELECT id,pasture,state,moisture,season,intake,feeds,amount,salts,water from pasture";
            $result = $db-> query($sql);

            if ($result-> num_rows > 0) {
                # code...
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["id"] . "</td><td>" . $row["pasture"] . "</td><td>" .  $row["state"] . "</td><td>" . $row["moisture"] . "</td><td>" .  $row["season"] . "</td><td>" . $row["intake"] . "</td><td>" . $row["feeds"] . "</td><td>" . $row["amount"] . "</td><td>" . $row["salts"] . "</td><td>"  .  $row["water"] .  "</td></tr>";
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