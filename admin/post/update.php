<?php

include "../../dbconnect/connection.php";

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $post_title = $_POST['title'];
    $description = $_POST['desc'];
    $photo = $_POST['img'];
    $publish_date = $_POST['pd'];

// echo "$id";
// echo "<br>";
// echo $post_title;  
// echo "<br>";

}

$result = mysqli_query($conn, "UPDATE post SET  id='$id',title='$post_title', description='$description', photo='$photo',publish_date='$publish_date' WHERE id=
'$id'");



header("Location: http://localhost/linntrainingcenter/admin/posts.php");

?>