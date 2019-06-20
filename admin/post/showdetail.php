<?php
//including the database connection file
include "../dbconnect/connection.php";
$id = $_GET['id'];
//echo $Id;
$result = mysqli_query($conn,"SELECT * FROM post ORDER BY id='$id'" );

while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $title = $res['title'];
    $description = $res['description'];
    $photo = $res['photo'];
    $publishdate = $res['publish_date'];
}

echo "<form>";
echo "<br>";
echo "$id";
echo "<br>";
echo "$title";
echo "<br>";
echo "$description";
echo "<br>";
echo "$photo";
echo "<br>";
echo "$publishdate";
echo "<br>";
echo "</form>";

?>