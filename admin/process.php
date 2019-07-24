<?php 

// Start the session
session_start();


include "../dbconnect/connection.php";
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$hash_password = md5($password);
	}
	if($email == "" && $hash_password == "")
	{
		echo "<script>alert('Username or Password is empty!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
	else{
		$result = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' 
			AND password='$hash_password'")or die("Could not excetue the select query");

		$row = mysqli_fetch_array($result);
		
		if(is_array($row) && !empty($row)){
			$validuser = $row['id'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['loggedin'] = true;
			$_SESSION['email'] = $row['email'];
			$_SESSION['id'] = $row['id'];
		}
		else{
			echo "<script>alert('E-mail or password is wrong ')</script>";
			echo "<script>location.href='../dashbord.php'</script>";
			header('location:http://localhost/linntrainingcenter/admin/dashbord.php');
		}
		if(isset($_SESSION['valid']))
		{
			header('location:http://localhost/linntrainingcenter/admin/dashbord.php');
		}
	}
?>