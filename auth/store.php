<?php
include "../dbconnect/connection.php";

$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST[md5('psw')];

// echo"$email";
// echo "<br>";
// echo"$password";
// echo "<br>";
// echo"$confirmpassword";
// echo "<br>";

$dbconnect = mysqli_connect('localhost','root','','linntrainingcenter');
$sql = mysqli_query($dbconnect,"INSERT INTO register(username, email,  password)
       VALUES ('$username','$email','$password')");

if ($sql){	
	echo "<script>alert('Created Sucessfully')</script>";
	echo "<script>location.href='../login.php'</script>";	
}
?>