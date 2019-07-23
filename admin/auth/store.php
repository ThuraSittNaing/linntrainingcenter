<?php
include "../../dbconnect/connection.php";
$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$hash_password = md5($password);

// echo"$email";
// echo "<br>";

// exit();
$dbconnect = mysqli_connect('localhost','root','','linntrainingcenter');
$sql = mysqli_query($dbconnect,"INSERT INTO user(username, email,password)
       VALUES ('$username','$email','$hash_password')");

if ($sql){	
	echo "<script>alert('Created Sucessfully')</script>";
	echo "<script>location.href='../dashbord.php'</script>";	
}
?>