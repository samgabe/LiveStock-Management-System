<?php

$db = mysqli_connect('localhost','root','LAP254678','livestock');

if (isset($_POST['register'])) {
$disease = $_POST['disease'];
$stage = $_POST['stage'];
$symptoms = $_POST['symptoms'];
$observed = $_POST['observed'];

$tests = $_POST['tests'];
$administer = $_POST['administer'];
$vaccine = $_POST['vaccine'];
$dosage = $_POST['dosage'];
$veterenary = $_POST['veterenary'];



			$sql = "INSERT INTO health (disease,stage,symptoms,observed,tests,administer,vaccine,dosage,veterenary )
			 VALUES ('$disease','$stage','$symptoms','$observed','$tests','$administer','$vaccine','$dosage','$veterenary')";
			mysqli_query($db, $sql);

		if ($sql) {
		   	session_start();
		$_SESSION['auth']='true';
		$_SESSION['success' ] =  '<br>Health profile created is successfully. ';	
		header('location:details2.php');
			
		} 
		else 
		{
		    echo '<br>Health profile created is not valid. ';
		}
	 	mysqli_close($db);
	 }
 ?>