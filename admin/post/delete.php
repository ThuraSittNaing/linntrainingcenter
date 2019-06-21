<?php
include "../../dbconnect/connection.php";
$id = $_GET['id'];
if (array_key_exists('upload', $_POST)) {
    $filename = $_POST['upload'];
    if (file_exists($filename)) {
      unlink($filename);
      echo 'File '.$filename.' has been deleted';
    } else {
      echo 'Could not delete '.$filename.', file does not exist';
    }
}
$result = mysqli_query($conn, "DELETE FROM post WHERE id=$id");
// var_dump($result);


 
header("Location:  http://localhost/linntrainingcenter/admin/posts.php");

?>