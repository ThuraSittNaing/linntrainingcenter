<?php
//including the database connection file 
include "../../dbconnect/connection.php";

//getting id of the data from url
$id=$_GET['id'];

//deleti// header("Location: http://localhost/homework1/product.php");g the row from table
$result = mysqli_query ($conn, "DELETE FROM user WHERE id ='$id'");
// echo $id;
// var_dump($result);

//redirecting to the display page (indext.php in our case)
header("Location:http://localhost/linntrainingcenter/admin/user.php");
?>