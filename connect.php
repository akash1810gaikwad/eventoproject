<?php
include_once 'database.php';
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$state = $_POST['state'];

$pass = password_hash($password, PASSWORD_BCRYPT);
$sql = "INSERT INTO akash (first, last, email, password, address, contact, city, state) values ('$first', '$last' , '$email', '$password', '$address', '$contact', '$city', '$state');";
	            mysqli_query($conn, $sql);

header("location:index.html");
