<?php 
include "../../dbconnect/connection.php";

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone=$_POST['phone'];
    $course=$_POST['course']; 
}

    // echo $name;
    // echo "<br>";

    // echo $email;
    // echo "<br>";

    // echo $address;
    // echo "<br>";

    // echo $phone;
    // echo "<br>";

    // exit;

    $result = mysqli_query($conn,"UPDATE teacher SET name='$name',email='$email',address='$address',phno='$phone',course_id='$course' WHERE id='$id' ");
    //var_dump($result);
     header("location:http://localhost/linntrainingcenter/admin/teacher.php");

?>



