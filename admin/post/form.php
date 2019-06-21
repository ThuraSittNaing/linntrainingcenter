<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<?php
include "../dbconnect/connection.php";
$result = mysqli_query($conn,"SELECT * FROM post ORDER BY id");
?>
<div class="container">
            <form class="form-horizontal" role="form" action="post/insert.php" method="post" enctype="multipart/form-data">
                <h2>Posting Form</h2>
                <div class="form-group">
                    <!-- <label for="description" class="col-sm-3 control-label"></label> -->
                    <div class="col-sm-9">
                        <input type="hidden" id="id" name= "id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <textarea id="title" name="title" class="form-control" ></textarea>
                        <!--<span class="help-block">T</span>-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea id="desc" name= "desc" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>
                   <div class="col-sm-9">
                        ​​<input type="file" id="image" name="image">
                    </div>
                    <br>
                    <div class="col-sm-3">
                        <!-- <input type="file" id="img" name="img" value="Choosefile"> -->
                    </div>          
                </div>
                
                <div class="form-group">
                    <label for="publish_date" class="col-sm-3 control-label">Publish_date</label>
                    <div class="col-sm-9">
                    <input type="datetime-local" id="pd" name="pd">
                    </div>
                
                
                           
                
                
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" name="upload" class="btn btn-primary btn-block">Save</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        
        