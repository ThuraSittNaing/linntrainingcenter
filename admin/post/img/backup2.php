<?php
//including the database connection file
include "../dbconnect/connection.php";
// ini_set('display_errors', 1);
// 	error_reporting(~0);

$id = $_GET['id'];
//echo $Id;
$result = mysqli_query($conn,"SELECT * FROM post ORDER BY id='$id'" );

while($res = mysqli_fetch_array($result))
{
    // echo '<img src="img"'.$res['photo'].'  width="500" height="300"> <br>';

    $id = $res['id'];
    $title = $res['title'];
    $description = $res['description'];
    $photo = $res['photo'];
    $publishdate = $res['publish_date'];
    $dirname = "img/";
    $images = glob($dirname."*.png");

   
}

   echo 'Title : '.$title.'<br>';
   echo 'Description: '.$description.'<br>';
//    echo 'foreach($images as $image)'; 
   echo '<img src="img"'.$photo.'  width="500" height="300"> <br>';
   echo 'Publish Date: '.$publishdate.'<br>'; 

   echo 'Title : '.$res['title'].'<br>';
   echo 'Description: '.$res['description'].'<br>';
   echo 'Photo: '.$res['photo'].'<br>';
   echo 'Publish Date: '.$res['publish_date'].'<br>'; 
// 
   while($row = mysqli_fetch_array($result) ) {
    echo "<tr>";
    echo "<td>" . $row['positiontitle'] . "</td>";
    echo "<td>" . $row['companyname'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "<td>" . $row['closingdate'] . "</td>";
    echo "<td><a href='job_details.php?id=".$row['job_id']."'>View Job</td>";
    
    echo "</tr>";
    }
?>



