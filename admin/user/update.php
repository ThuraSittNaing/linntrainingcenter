<?php
include "../../dbconnect/connection.php";

if (isset($_POST['update']))
{

$id = $_POST['id'];
$name = $_POST['uname'];
$email = $_POST ['email'];
$phone = $_POST ['phone'];
$password = $_POST ['password'];
$create = $_POST ['cdate'];
$update = $_POST ['udate'];

// echo $id;
// echo $name;
// echo $email;
// echo $phone;
// echo $password;
// echo $create;
// echo $update;
}

$result = mysqli_query($conn,"UPDATE user SET username='$name',email='$email',phno='$phone',password='$password',created_at='$create',update_at='$update' WHERE id='$id'");
// var_dump($result);
if($result){
    echo "Data Update Sucessfully";
}
else{
    echo "Failed to updated";
}
// var_dump($result);
header("Location:http://localhost/linntrainingcenter/admin/user.php");
?>