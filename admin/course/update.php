<?php 

include "../../dbconnect/connection.php";

if(isset($_POST['addbtn']))
{
   $id = $_POST['id'];
   $name = $_POST['name'];
   $desc = $_POST['desc'];
   $photo = $_POST['photo'];
   $duration= $_POST['duration'];
   $fee = $_POST['fee'];
}

$result = mysqli_query($conn," UPDATE course SET course_id='$id',course_name='$name', course_desc='$desc', course_photo='$image',duration='$duration',fees='$fee' WHERE course_id=$id");
header("Location:http://localhost/linntrainingcenter/admin/courses.php");

?>