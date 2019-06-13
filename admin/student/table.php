<<<<<<< HEAD
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Student Data </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>

            <tr>
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>New York</td>
              <td>27</td>
              <td>2011/01/25</td>
              <td>$112,000</td>
            </tr>
          </tbody>
=======
<?php 
include "../dbconnect/connection.php";
$result =mysqli_query($conn,"SELECT * FROM student ORDER BY id ASC"); 
?>
<div class="card mb-3">
    <div class="card-header">
      <form action="add-student.php"><button type="submit" style="float:right;"name="addnewstudent"><img src="https://img.icons8.com/material-sharp/24/000000/add-user-male.png"></button></form>
      <i class="fas fa-table"></i> Student Data 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Course</th>
              <th colspan="2"><center>Action</center></th>
            </tr>
          <?php
            while($res = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['phno']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['course_id']."</td>";
            echo "<td><a href=\"editstudent.php?id=$res[id]\"><img src='https://img.icons8.com/material-sharp/24/000000/edit-calendar.png'></a></td>";
            echo "<td><a href=\"student/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?'\"><img src='https://img.icons8.com/material-rounded/24/000000/delete.png'></echo</td>";
            echo "</tr>";
        }
    ?>  
          
            
          
>>>>>>> master
        </table>
      </div>
    </div>
</div>