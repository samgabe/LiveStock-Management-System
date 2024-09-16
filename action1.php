<?php

$db = mysqli_connect('localhost','root','LAP254678','livestock');

if (isset($_POST['submit'])) {
$pasture = $_POST['pasture'];
$state = $_POST['state'];
$moisture = $_POST['moisture'];
$season = $_POST['season'];

$intake = $_POST['intake'];
$feeds = $_POST['feeds'];
$amount = $_POST['amount'];
$salts = $_POST['salts'];
$water = $_POST['water'];



			$sql = "INSERT INTO pasture (pasture,state,moisture,season,intake,feeds,amount,salts,water )
			 VALUES ('$pasture','$state','$moisture','$season','$intake','$feeds','$amount','$salts','$water')";
			mysqli_query($db, $sql);

		if ($sql) {
		   	session_start();
		$_SESSION['auth']='true';
		$_SESSION['success' ] =  '<br>Pasture profile created is successfully. ';	
		header('location:details1.php');
			
		} 
		else 
		{
		    echo '<br>Pasture profile created is not valid. ';
		}
	 	mysqli_close($db);
	 }
 ?>