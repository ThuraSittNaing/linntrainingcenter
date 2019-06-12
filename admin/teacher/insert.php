<?php
include "../../dbconnect/connection.php";

$name = $_POST['name']; 
$email = $_POST['email'];
$address = $_POST['address'];
$phone=$_POST['phone'];
$course=$_POST['course']; 

echo $name;
echo "<br>";

echo $email;
echo "<br>";


// $res=mysqli_query($conn,"UPDATE crud SET 'id`=[1],`name`=[hsu hsu],`rollno`=[9],`address`=[Bago],`email`=[hsu@gmail.com],`phoneno`=[0978542344560] WHERE $id=1");

$res = mysqli_query($conn, "INSERT INTO teacher(name,email,address,phno,course_id) VALUES ('$name','$email','$address','$phone','$course')");
// var_dump($res);
// if(res){
//     echo "Hello";
// }
header("location:http://localhost/linntrainingcenter/admin/teacher.php");
 ?>

