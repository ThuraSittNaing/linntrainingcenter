<?php 
include "../dbconnect/connection.php";
$result =mysqli_query($conn,"SELECT * FROM user ORDER BY id ASC"); 

 ?>
 <div class="card mb-3">
    <div class="card-header">
      <form action="add-user.php"><button type="submit" style="float:right;"name="addnewuser"><img src="https://img.icons8.com/material-sharp/24/000000/add-user-male.png"></button></form>
      <i class="fas fa-table"></i> User Data 
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>User Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Password</th>
              <th>Created Date</th>
              <th>Updated Date</th>
              <th colspan="2"><center>Action</center></th>
            </tr>
          </thead>
             <?php
            while($res = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['username']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['phno']."</td>";
            echo "<td>".$res['password']."</td>";
            echo "<td>".$res['created_at']."</td>";
            echo "<td>".$res['update_at']."</td>";
            echo "<td><a href=\"edituser.php?id=$res[id]\"><img src='https://img.icons8.com/material-sharp/24/000000/edit-calendar.png'><a></td>";
            echo "<td><a href=\"user/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src='https://img.icons8.com/material-rounded/24/000000/delete.png'></a></td>";
            echo "</tr>";

        }
    ?>  
         
          <tbody>   
            
          </tbody>
        </table>
      </div>
    </div>
</div>