<?php
	include('module.php');

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "wishOf";

	//Connecting Database
	$conn = new mysqli($hostname,$username,$password,$database);

	//Checking DataBase
	if ($conn->connect_error) {
		die("Error" . $conn->connect_error);
	} //else {
	// 	echo "connected.";
	// }

?>