<?php
error_reporting(E_ALL); 
ini_set('display errors',1);

$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$query = "INSERT INTO contactinfo (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
	$result = mysqli_query($connection, $query);
$NumberOfRowsAffected = mysqli_affected_rows($connection); if($NumberOfRowsAffected < 1 ) {
die('No records were written to the database. Waaaa!'); }
mysqli_close($connection);
header("Location: database-read.php")
?>