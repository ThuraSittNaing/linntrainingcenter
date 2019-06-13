<?php
include "../dbconnect/connection.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM teacher ORDER BY id='$id' ASC");

while($res = mysqli_fetch_array($result)){
$name = $res['name']; 
$email =$res['email'];
$address =$res['address'];
$phone=$res['phno'];
$course=$res['course_id']; 

}
?>
<div class="container">
            <form class="form-horizontal" role="form" action="teacher/update.php" method="post">
                <h2>Registration Form</h2>

                <div class="form-group">
                    
                    <div class="col-sm-9">
                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>" class="form-control" >

                    </div>
                </div>
                   
                

                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" value="<?php echo $name ?>" class="form-control" autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="email" value="<?php echo $email ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <textarea id="address" name="address"  class="form-control"><?php echo $address ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Phone_No</label>
                    <div class="col-sm-9">
                        <input type="text" id="phone" name="phone" value="<?php echo $phone ?>" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Course</label>
                    <div class="col-sm-9">
                        <select id="course" name="course" class="form-control" value="<?php echo $course ?>">
                            <option>Select Course</option>
                            <option>Computer Intermediate course</option>
                            <option>Graphic Design</option>
                            <option>Android Course</option>
                            <option>IOS Course</option>
                            <option>Kid Level1</option>
                            <option>Kid Level2</option>
                            <option>English Language Course</option>
                            <option>Chienes Language Course</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
              
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="update" id="id" class="btn btn-primary btn-block">Add Data</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->