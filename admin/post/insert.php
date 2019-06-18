<?php

    include "../../dbconnect/connection.php";

  
    $id=$_POST['id'];
    $post_title = $_POST['title'];
    $description = $_POST['desc'];
    $photo = $_POST['img'];
    $publish_date = $_POST['pd'];
        
    

    $result = mysqli_query($conn,"INSERT INTO post (id, title, description, photo, publish_date) VALUES( '$id','$post_title','$description','$photo','$publish_date') ");
var_dump($result);
    header("Location:  http://localhost/linntrainingcenter/admin/posts.php");
?>