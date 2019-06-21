<?php
include "../dbconnect/connection.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM course WHERE course_id='$id'");

// $brands = mysqli_fetch_array($b);

while($res = mysqli_fetch_array($result))
 {
  $id= $res['course_id'];
  $name =  $res['course_name'];
  $desc = $res['course_desc'];
  $photo = $res['course_photo'];
  $duration= $res['duration'];
  $fee = $res['fees'];
  $sec = $res['section'];
 }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
   <title>Bootstrap 3 registration form example - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
            <form class="form-horizontal" role="form" action="course/update.php" method="post" enctype="multipart/form-data" >
            
            <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name"  value="<?php echo $name;?>" >
                        
                    </div>
                </div>
               <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Descriprion</label>
                    <div class="col-sm-9">
                        <input type="text" name="desc"  value="<?php echo $desc;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" name="photo" value="<?php echo $photo;?>">
                    </div>
                </div>
                  
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="text" name="duration" value="<?php echo $duration;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Fees</label>
                    <div class="col-sm-9">
                        <input type="text" name="fee" value="<?php echo $fee;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Section</label>
                    <div class="col-sm-9">
                        <input type="time" name="sec" value="<?php echo $sec;?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                    <input type="hidden" name="id" value="<?php  echo $id;?>">
                    <button type="submit" name="addbtn" class="btn btn-primary btn-block">Add</button>
                    </div>
                </div>
            </form>
</body>
</html>