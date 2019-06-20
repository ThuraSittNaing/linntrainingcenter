<?php
include "../../dbconnect/connection.php";  
 if (isset($_POST['addbtn'])) {
    $id = $_POST['id'];
    echo $id;
    $image = $_FILES['photo']['name'];
     // $image_text = mysqli_real_escape_string($conn, $_POST[''])
    $target = "image/".basename($image);
    $id=$_POST['id'];
    $name = $_POST['fullname'];
    $desc = $_POST['desc'];
    $duration= $_POST['duration'];
    $fee=$_POST['fee'];
    $sec=$_POST['sec'];
    
    $result = mysqli_query($conn, "INSERT INTO course(course_id,course_name,course_desc,course_photo,duration,fees,section) VALUES('$id', '$name', '$desc','$image', '$duration', '$fee',  '$sec')");
    // var_dump($result);
    header("Location:  http://localhost/linntrainingcenter/admin/courses.php");

     // $sql = "INSERT INTO post (photo) VALUES ('$image')";

     mysqli_query($conn,$result);
     if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
         // echo "Photo Insert Sucessfully";
        
     }else{
        echo "Photo insert failed";
     }
    }
    ?>