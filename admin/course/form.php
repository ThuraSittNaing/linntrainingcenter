<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Bootstrap 3 registration form example - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
            <form class="form-horizontal" role="form" action="course/insert.php" method="post" enctype="multipart/form-data">
                <h2>Add Course Form</h2>
                <input type="hidden" id="id" name="id">
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Course Name</label>
                    <div class="col-sm-9">
                        <input type="text"name="fullname" id="firstName" placeholder="Course Name" class="form-control" autofocus>
                        <span class="help-block">Intermediate Course,Design Course,....</span>
                    </div>
                </div>
               <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                    <textarea name="desc" id="btndescription" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" name="photo" id="btnphoto" class="form-control"value="choose file">
                    </div>
                </div>
                
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="text" name="duration"id="btnduration" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Fees</label>
                    <div class="col-sm-9">
                        <input type="text" name="fee" id="btnfee" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="addbtn" class="btn btn-primary btn-block">Add</button>
                    </div>
                </div>
            </form> 
        </div> 	<script type="text/javascript">
		</script>
</body>
</html>