
<?php
include "../dbconnect/connection.php";
$result = mysqli_query($conn, "SELECT * FROM course");
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>Course Data 
      <form method="post" action="add-course.php">
      <button type="submit" name="btnadd" style="float:right"><img src="https://img.icons8.com/metro/26/000000/add-file.png"></button> 
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Descreption</th>
              <th>Photo</th>
              <th>Duration</th>
              <th>Fees</th>
              <th>Section</th>
              <th colspan="2"><center>Action</center></th>
            </tr>
          </thead>
          <tbody>
          <?php 
       					 //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
                  while($res = mysqli_fetch_array($result)) {         
                            echo "<tr>";
                            echo "<td>".$res['course_name']."</td>";
                            echo "<td>".$res['course_desc']."</td>";
                            echo "<td>".$res['course_photo']."</td>";
				                    echo "<td>".$res['duration']."</td>";
				                    echo "<td>".$res['fees']."</td>";
							              echo "<td>".$res['section']."</td>"; 
                            echo "<td><a href=\"editcourse.php?id=$res[course_id]\"><img src='https://img.icons8.com/material-sharp/24/000000/edit-calendar.png'></a></td>";
                            echo  "<td><a href=\"course/delete.php?id=$res[course_id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><img src='https://img.icons8.com/material-rounded/24/000000/delete.png'></a></td>";        
                            echo "</tr>";
                        }
				        ?>
          </tbody>
        </table>
       </form>
      </div>
    </div>
</div>