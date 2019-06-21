<?php

include "../../dbconnect/connection.php";


if (isset($_POST['update'])) {
// $id = $_GET['id'];
$image = $_FILES['image']['name'];
 //$image_text = mysqli_real_escape_string($conn, $_POST[''])
$target = "img/".basename($image);
$id=$_POST['id'];
$post_title = $_POST['title'];
$description = $_POST['desc'];
$publish_date = $_POST['pd'];
// $photo = $_POST['image'];


$result = mysqli_query($conn, "UPDATE post SET  id='$id',title='$post_title', description='$description', photo='$image',publish_date='$publish_date' WHERE id=
'$id'");
// var_dump($result);
header("Location:  http://localhost/linntrainingcenter/admin/posts.php");

 // $sql = "INSERT INTO post (photo) VALUES ('$image')";

 mysqli_query($conn,$result);
 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    //  echo "Photo Insert Sucessfully";
    
 }else{
    echo "Photo insert failed";
 }
}
?>