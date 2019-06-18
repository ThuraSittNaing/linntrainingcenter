
<?php 
include "../../dbconnect/connection.php";
$name = $_POST['fullname'];
$desc = $_POST['des'];
$photo=$_POST['photo'];
$duration = $_POST['duration'];
$fee = $_POST['fee'];
$sec = $_POST['sec'];
echo $name;
echo $desc;
echo $photo;
echo $duration;
echo $fee;
echo $sec;
// $res = mysqli_query($conn, "SELECT brand.id FROM mobiletb LEFT JOIN brand ON mobiletb.brand_id = brand.id where brand.id=$brandname"); 
$result = mysqli_query($conn, "INSERT INTO course(course_name,course_desc,course_photo,duration,fees,section) VALUES('$name', '$desc','$photo', '$duration', '$fee',  '$sec')");
header("Location:http://localhost/linntrainingcenter/admin/courses.php");
?>