

<?php

    include "../../dbconnect/connection.php";  
    // $id=$_POST['id'];
    // $post_title = $_POST['title'];
    // $description = $_POST['desc'];
    // $file = $_POST['image'];
    // $publish_date = $_POST['pd'];

    if (isset($_POST['upload'])) {
        $file = $_FILES['image'];
        // print_r($file);
    
        $filename = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
    
        $fileExt = explode('.',$filename);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg','jpeg','png');
    
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestinction = 'img/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestinction);
                    // header("Location: index.php?uploadsuccess");
                    $id=$_POST['id'];
                    $post_title = $_POST['title'];
                    $description = $_POST['desc'];
                    $publish_date = $_POST['pd'];
                    
                        
                    $result = mysqli_query($conn,"INSERT INTO post (id, title, description, photo, publish_date) VALUES( '$id','$post_title','$description','$fileDestinction','$publish_date') ");
                    // var_dump($result);
                    header("Location:  http://localhost/linntrainingcenter/admin/posts.php");
                
                    
                }
                
            }else{
                echo "there is a error!";
            }
        }else{
            echo "You Cannot Upload this file type!";
        }
    }
   

    
?>