<?php
include "../../dbconnect/connection.php";

if (isset($_POST['update']))
{

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST ['address'];
$phone = $_POST ['phone'];
$email = $_POST ['email'];
$course = $_POST ['course'];

// echo $name;
// echo $address;
// echo $phone;
// echo $email;
// echo $course;
}

$result = mysqli_query($conn,"UPDATE student SET name='$name',address='$address',phno='$phone',email='$email',course_id='$course' WHERE id='$id'");

if($result){
    echo "Data Update Sucessfully";
}
else{
    echo "Failed to updated";
}
// var_dump($result);
header("Location:http://localhost/linntrainingcenter/admin/student.php");
?>