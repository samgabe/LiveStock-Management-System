<?php

$db = mysqli_connect('localhost','root','LAP254678','livestock');

if (isset($_POST['register'])) {
$species = $_POST['species'];
$brand = $_POST['brand'];
$breed = $_POST['breed'];
$eartag = $_POST['eartag'];

$sire = $_POST['sire'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$production = $_POST['production'];
$feeding = $_POST['feeding'];



			$sql = "INSERT INTO animal (species, brand, breed, eartag,sire,product,quantity,production,feeding )
			 VALUES ('$species','$brand','$breed','$eartag','$sire','$product','$quantity','$production','$feeding')";
			mysqli_query($db, $sql);

		if ($sql) {
		   
			session_start();
		$_SESSION['auth']='true';
		$_SESSION['success' ] =   'Animal profile created succesfully.';	
		header('location:details.php');
		
		} 
		else 
		{
		    echo '<br>Animal profile created is not valid. ';
		}
	 	mysqli_close($db);
	 }
 ?>