<?php 
include "../../dbconnect/connection.php";

$username = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$createddate = $_POST['cdate'];
$updateddate = $_POST['udate'];

// echo "$username";
// echo "$email";
// echo "$phone";
// echo "$password";
// echo "$createddate";
// echo "$updateddate";


$result = mysqli_query($conn,"INSERT INTO user(username, email, phno, password, created_at, update_at)VALUES ('$username','$email','$phone','$password','$createddate','$updateddate')");
var_dump($result);
// var_dump($result);

if($result){
	echo "<script>alert('Data insert sucessfully')</script>";
	echo "<script>location.href='../user.php'</script>";
}



 ?>