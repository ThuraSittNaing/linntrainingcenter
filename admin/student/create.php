<?php 
include "../../dbconnect/connection.php";

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$course = $_POST['course'];

$result = mysqli_query($conn,"INSERT INTO student(name, address, phno, email, course_id) VALUES ('$name','$address','$phone','$email','$course')");

// var_dump($result);
if($result){
	echo "<script>alert('Data insert sucessfully')</script>";
	echo "<script>location.href='../student.php'</script>";
}



 ?>