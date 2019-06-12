<?php
include "../dbconnect/connection.php";


$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM user ORDER BY id=$id");
while($res = mysqli_fetch_array($result))
{
    $username = $res['username'];
    $email = $res['email'];
    $phone = $res['phno'];
    $password = $res['password'];
    $created = $res['created_at'];
    $update = $res['update_at'];
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
	.form{
		line-height: 30px;
		margin: 80px auto;
		width: 200px;
	}
</style>
<body>
<div class="container">
            <form class="form-horizontal" role="form" action="user/update.php" method="post">
                <h2>Add New User</h2>
                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-9">
                    <input type="text" id="id" name="id" value="<?php echo $id;?>"class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                    <input type="text" id="uname" name="uname"  placeholder="User Name" value="<?php echo $username;?>"class="form-control" autofocus required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                    <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Phone" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" id="password" value="<?php echo $password;?>" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cdate" class="col-sm-3 control-label">Created Date</label>
                    <div class="col-sm-9">
                    <input type="date" id="cdate" value="<?php echo $created;?>" name="cdate" placeholder="Created Date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="udate" class="col-sm-3 control-label">Updated Date</label>
                    <div class="col-sm-9">
                    <input type="date" id="udate" value="<?php echo $update;?>" name="udate" placeholder="Updated Date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>

            </form> <!-- /form -->
        </div> <!-- ./container -->
<
</body>
</html>