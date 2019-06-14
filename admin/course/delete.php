<?php
include "..//../dbconnect/connection.php";
$id = $_GET['id'];
$reult = mysqli_query($conn, "DELETE FROM course WHERE course_id=$id");
echo "Delete Sucessfully";
// header("Location: http://localhost/linntrainingcenter/admin/course/table.php");
header("Location:http://localhost/linntrainingcenter/admin/courses.php");
?>