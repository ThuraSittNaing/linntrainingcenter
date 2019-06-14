<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "linntrainingcenter";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Check Connection
if ($conn->connect_error){
	die("Connection Failed.($conn->connect_error)");
}
	// echo "Connected sucessfully";
?>