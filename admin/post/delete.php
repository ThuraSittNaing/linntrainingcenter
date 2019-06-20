<?php
include "../../dbconnect/connection.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM post WHERE id=$id");
// var_dump($result);
header("Location:  http://localhost/linntrainingcenter/admin/posts.php");
?>