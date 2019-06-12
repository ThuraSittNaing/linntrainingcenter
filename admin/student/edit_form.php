<?php
include "../dbconnect/connection.php";


$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM student ORDER BY id=$id");
while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $address = $res['address'];
    $phone = $res['phno'];
    $email = $res['email'];
    $course = $res['course_id'];
   
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
            <form class="form-horizontal" role="form" action="student/update.php" method="post">
                <h2>Add New Student</h2>
                 <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-9">
                    <input type="text" id="id" name="id" value="<?php echo $id;?>"class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Student Name</label>
                    <div class="col-sm-9">
                    <input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Full Name" class="form-control" autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                    <input type="text" id="address" name="address" value="<?php echo $address;?>" placeholder="Address" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                    <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-9">
                        <select id="course" name="course" class="form-control" value="<?php echo $course;?>">
                            <option></option>
                            <option>Android Course</option>
                            <option>IOS Course</option>
                            <option>Computer intermediate Course</option>
                            <option>Graphic Design</option>
                            <option>Kid Level 1</option>
                            <option>Kid Level 2</option>
                            <option>English Language Course</option>
                            <option>Chinese Language Course</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

</body>
</html>