<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
echo "<script>alert('Logout successful!')</script>";
header("Location:http://localhost/linntrainingcenter/admin/index.html");
?>