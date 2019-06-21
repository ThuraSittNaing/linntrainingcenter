<?php
//including the database connection file
include "../dbconnect/connection.php";
// ini_set('display_errors', 1);
// 	error_reporting(~0);

 $id = $_GET['id'];
// echo $id;
$result = mysqli_query($conn,"SELECT * FROM post WHERE id=$id " );
// var_dump($result);
while($res = mysqli_fetch_array($result)){

    $photo = $res['photo'];
    $title = $res['title'];
    $description = $res['description'];   
    $publishdate = $res['publish_date'];
    // echo $id;
 
    echo "<form>";
    echo "Title :".$res['title']."<br><br>";
    echo "Description:".$res['description']."<br><br>";
    echo "<img src='post/img/".$res['photo']."' width='400' height='300'><br><br>";
    echo "Publish Date:".$res['publish_date']."<br>";
    echo "</form>";
}

?>
