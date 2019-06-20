<?php 
include "../../dbconnect/connection.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM teacher WHERE id='$id'");
// var_dump($result);
header("location:http://localhost/linntrainingcenter/admin/teacher.php");
?>
