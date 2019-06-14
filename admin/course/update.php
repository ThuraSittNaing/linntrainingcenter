<?php 

include "../../dbconnect/connection.php";

if(isset($_POST['addbtn']))
{
   $id = $_POST['id'];
   $name = $_POST['name'];
   $desc = $_POST['des'];
   $photo = $_POST['photo'];
   $duration= $_POST['duration'];
   $fee = $_POST['fee'];
   $sec= $_POST['sec'];
}

$result = mysqli_query($conn," UPDATE course SET course_name='$name', course_desc='$desc',duration='$duration',fees='$fee',section='$sec' WHERE course_id=$id");
header("Location:http://localhost/linntrainingcenter/admin/courses.php");

?>