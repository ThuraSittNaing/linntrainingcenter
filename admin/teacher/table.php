<?php 
include "../dbconnect/connection.php";
//$result=mysqli_query($conn,"UPDATE `crud` SET `id`=[value-1],`name`=[value-2],`rollno`=[value-3],`address`=[value-4],`email`=[value-5],`phoneno`=[value-6] WHERE 1");
$result = mysqli_query($conn,"SELECT * FROM teacher ORDER BY id ASC");
//$res=mysqli_fetch_array($result);
//var_dump($res);
?>
<div class="card mb-3">
    <div class="card-header">
    <form action="add-teacher.php" >
         <button type="submit" style="float:right;"><img src="https://img.icons8.com/material-sharp/24/000000/add-user-male.png"></button>
    </form>
      <i class="fas fa-table"></i>Teacher Data
    </div>
      
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Course_id</th>
              <th colspan="2"><center>Action</center></th>
            </tr>
          

            <?php
           while($res = mysqli_fetch_array($result)){
               echo "<tr>";
               echo "<td>".$res['id']."</td>";
               echo "<td>".$res['name']."</td>";
               echo "<td>".$res['email']."</td>";
               echo "<td>".$res['address']."</td>";
               echo "<td>".$res['phno']."</td>";
               echo "<td>".$res['course_id']."</td>";
               echo "<td>  <a href=\"editteacher.php?id=$res[id]\"> <img src='https://img.icons8.com/material-sharp/24/000000/edit-calendar.png'></a>  </td>";
               echo "<td><a href=\"teacher/delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete?')\"><img src='https://img.icons8.com/material-rounded/24/000000/delete.png'></a></td>";
               echo "</tr>";
           }
           ?>
          
        </table>
      </div>
    </div>
</div>