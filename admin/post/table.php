<?php
//including the database connection file
include "../dbconnect/connection.php";

$result = mysqli_query($conn,"SELECT  * FROM post ORDER BY id ASC");
?>
<div class="card mb-3">
    <div class="card-header">
        <form action= "add-post.php">
        <button type= "submit"  style="float:right"><img src="https://img.icons8.com/material-sharp/24/000000/add-user-male.png">
</button>
      <i class="fas fa-table"></i>
      Post Data </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Photo</th>
              <th>Publish_date</th>
              <th colspan="2"><center>Action</center></th>
            </tr>
          
            
            <?php
            
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
          while($res = mysqli_fetch_array($result)) {         
                      echo "<tr>";
                      echo "<td>".$res['id']."</td>";
                      
                      echo "<td>".$res['title']."</td>";
                      echo "<td>".$res['description']."</td>";
                      echo "<td>".$res['photo']."</td>";
                      echo "<td>".$res['publish_date']."</td>";
                      echo "<td><a href=\"editpost.php?id=$res[id]\"><img src='https://img.icons8.com/material-sharp/24/000000/edit-calendar.png'></a></td>";
                      echo "<td><a href=\"post/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src='https://img.icons8.com/material-rounded/24/000000/delete.png'></a></td>";      
                      echo "</tr>";
          }
      ?>
           
        </thead>
        </table>
      </div>
    </div>
          
</div>