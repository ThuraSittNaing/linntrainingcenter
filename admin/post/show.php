<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    
     
     <div class="container">
            <form class="form-horizontal" role="form" action="post/showdetail.php" method="post"enctype="multipart/form-data">
                <h2>Posting Form</h2>
                <div class="form-group">
                    <!-- <label for="description" class="col-sm-3 control-label">Id</label> -->
                    <div class="col-sm-9">
                        <input type="hidden" id="id" name= "id" value="<?php echo $id;?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <textarea id="title" name="title" class="form-control" ><?php echo $title;?></textarea>
                        <!--<span class="help-block">T</span>-->
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-9">
                        <textarea id="desc" name= "desc"  class="form-control"><?php echo $description;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                        <!-- ​<picture>
                         <source srcset="..." type="image/svg+xml">
                         <img src="..." class="img-fluid img-thumbnail" alt="...">
                        </picture> -->
                    </div>
                    <div class="col-sm-3">
                    <br>
                        <input type="file" id="img" name="img"width="304" height="236" value="<?php echo $photo;?>">
                    </div>          
                </div>
                
                <div class="form-group">
                    <label for="publish_date" class="col-sm-3 control-label">Publish_date</label>
                    <div class="col-sm-9">
                    <input type="datetime-local" id="pd" name="pd"value="<?php
                    $currentDateTime = date('Y-m-d H:i:s');?>">
                    </div>
                </div> 
                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" name= "update" class="btn btn-primary btn-block">Update</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        
     </form>
     
</body>
</html>
