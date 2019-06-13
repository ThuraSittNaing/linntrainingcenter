<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<div class="container">
            <form class="form-horizontal" role="form" action="user/create.php" method="post">
                <h2>Add New User</h2>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                    <input type="text" id="uname" name="uname" placeholder="User Name" class="form-control" autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                    <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cdate" class="col-sm-3 control-label">Created Date</label>
                    <div class="col-sm-9">
                    <input type="date" id="cdate" name="cdate" placeholder="Created Date" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="udate" class="col-sm-3 control-label">Updated Date</label>
                    <div class="col-sm-9">
                    <input type="date" id="udate" name="udate" placeholder="Updated Date" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </div>

            </form> <!-- /form -->
        </div> <!-- ./container -->
<
</body>
</html>