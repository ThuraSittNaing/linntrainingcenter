

<?php

    include "../../dbconnect/connection.php";  
    if (isset($_POST['upload'])) {
    // $id = $_GET['id'];
    $image = $_FILES['image']['name'];
     //$image_text = mysqli_real_escape_string($conn, $_POST[''])
    $target = "img/".basename($image);
    // $id=$_POST['id'];
    $post_title = $_POST['title'];
    $description = $_POST['desc'];
    $publish_date = $_POST['pd'];
  
    
    $sql = mysqli_query($conn,"INSERT INTO post (id, title, description, photo, publish_date) VALUES( '$id','$post_title','$description','$image','$publish_date') ");
    // var_dump($result);
    header("Location:  http://localhost/linntrainingcenter/admin/posts.php");

     // $sql = "INSERT INTO post (photo) VALUES ('$image')";

     mysqli_query($conn,$sql);
     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
         // echo "Photo Insert Sucessfully";
        
     }else{
        echo "Photo insert failed";
     }
 }

    
?>