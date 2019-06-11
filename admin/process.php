<?php 
include "../dbconnect/connection.php";
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	}
	if($email == "" && $password == "")
	{
		echo "<script>alert('Username or Password is empty!')</script>";
		echo "<script>location.href='index.html'</script>";
	}
	else{
		
		if($email=="admin@gmail.com" && $password=="1234"){
			header('location:http:home.html');
		}
		else{
			echo "<script>alert('E-mail or password is wrong ')</script>";
			echo "<script>location.href='index.html'</script>";
		}
		
	}
?>