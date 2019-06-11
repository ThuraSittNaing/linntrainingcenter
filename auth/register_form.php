<?php 
include "dbconnect/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>LinnTainingCenter/Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<!------ Link ---------->
</head>
<body>
<!-- Register Page -->
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Account Register here</p>

	<form action="auth/store.php" method="post" onsubmit="return validation()">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="uname" id="uname" autocomplete="off" class="form-control" placeholder="Username" type="text">     
    </div> <!-- form-group// -->
    <span id="username" class="text-danger font-weight-bold"></span>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
		 <input name="email" id="email" autocomplete="off" class="form-control" placeholder="E-mail Address" type="text">
    </div> <!-- form-group// -->
    <span id="emailaddress" class="text-danger font-weight-bold"></span>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="phno" id="phno" class="form-control" placeholder="Phone number" type="text" autocomplete="off">
    </div> <!-- form-group// -->
    <span id="phone" class="text-danger font-weight-bold"></span>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" id="psw" name="psw" autocomplete="off">
    </div> <!-- form-group// -->
    <span id="password" class="text-danger font-weight-bold"></span>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password" id="cpassword" name="cpassword" autocomplete="off">
    </div> <!-- form-group// --> 
    <span id="confirmpassword" class="text-danger font-weight-bold"></span>                                     
    <div class="form-group">
        <button type="submit" name="submit" id="register" class="btn btn-primary btn-block">Create an account</button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> 
<!--container end.//-->

<!-- Validation  -->              
<script type="text/javascript">
	function validation(){
		var user = document.getElementById('uname').value;
		var email = document.getElementById('email').value;
		var phone = document.getElementById('phno').value;
		var password = document.getElementById('psw').value;
		var confirmpassword = document.getElementById('cpassword').value;



		if (user == ""){
			document.getElementById('username').innerHTML ="Please fill the username";
			return false;
		}
		if ((user.length <= 3) ||(user.length > 20)){
			document.getElementById('username').innerHTML ="username length must be between 3 and 20";
			return false;
		}
		if(!isNaN(user)){
			document.getElementById('username').innerHTML ="only characters are allowed";
			return false;
		}


		if (email == ""){
			document.getElementById('emailaddress').innerHTML ="Please fill the email address";
			return false;
		}
		if (email.indexOf('@') <= 0){
			document.getElementById('emailaddress').innerHTML =" @ Invalid email address";
			return false;
		}
		if (email.charAt(email.length-4) != "."){
			document.getElementById('emailaddress').innerHTML ="Invalid the email address";
			return false;
		}



		if (phone == ""){
			document.getElementById('phone').innerHTML ="Please fill the phone no";
			return false;
		}
		if (isNaN(phone)){
			document.getElementById('phone').innerHTML ="Please fill valid phone no!";
			return false;
		}


		if (password == ""){
			document.getElementById('password').innerHTML ="Please fill the password";
			return false;
		}
		if ((password.length <= 3) ||(user.length > 20)){
			document.getElementById('password').innerHTML ="password length must be between 3 and 20";
			return false;
		}
		if (password!=confirmpassword){
			document.getElementById('password').innerHTML ="your passwords are not match";
			return false;
		}
		if (confirmpassword == ""){
			document.getElementById('confirmpassword').innerHTML ="Please fill the confirm password";
			return false;
		}
	}
	
</script>

	
</body>
</html>