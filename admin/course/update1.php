<?php
include "../../dbconnect/connection.php";
if (isset($_POST['addbtn'])) {
$id = $_GET['id'];
$image = $_FILES['photo']['name'];
 //$image_text = mysqli_real_escape_string($conn, $_POST[''])
$target = "image/".basename($image);
$id=$_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$duration= $_POST['duration'];
$fee=$_POST['fee'];
$result = mysqli_query($conn, "UPDATE course SET  course_id='$id',course_name='$name', course_desc='$desc',course_photo='$image',duration='$duration',fees='$fee' WHERE id='$id'");
 var_dump($result);
//  header("Location:  http://localhost/linntrainingcenter/admin/courses.php");

 mysqli_query($conn,$result);
 if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
    //  echo "Photo Insert Sucessfully";
    
 }else{
    echo "Photo insert failed";
 }
}

?>