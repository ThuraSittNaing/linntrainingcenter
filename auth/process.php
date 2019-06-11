<?php 
include "../dbconnect/connection.php";
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
	if($email == "" && $password == "")
	{
		echo "<script>alert('Username or Password is empty!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
	else{
		$result = mysqli_query($conn,"SELECT * FROM register WHERE email='$email' 
			AND password='$password'")or die("Could not excetue the select query");
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)){
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['username'];
			$_SESSION['id'] = $row['id'];
		}
		else{
			echo "<script>alert('E-mail or password is wrong ')</script>";
			echo "<script>location.href='../login.php'</script>";
		}
		if(isset($_SESSION['valid']))
		{
			header('location:http://localhost/linntrainingcenter/index.php');
		}
	}
?>