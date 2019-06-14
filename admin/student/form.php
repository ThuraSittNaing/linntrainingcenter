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
            <form class="form-horizontal" role="form" action="student/create.php" method="post">
                <h2>Add New Student</h2>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Student Name</label>
                    <div class="col-sm-9">
                    <input type="text" id="name" name="name" placeholder="Full Name" class="form-control" autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                    <textarea id="address" name="address" placeholder="Address" class="form-control"></textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                    <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-9">
                        <select id="course" name="course" class="form-control">
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
                        <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>

                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

</body>
</html>