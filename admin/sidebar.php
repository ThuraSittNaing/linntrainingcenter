<?php 
// Start the session
  session_start();
  if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
    // <!-- Sidebar -->
    echo '<ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashbord.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="user.php">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="student.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Students</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Teachers</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="courses.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Coureses</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="posts.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Posts</span></a>
      </li>
    </ul>';
  } else {
    echo "<script>location.href='index.html'</script>";
  }
?>

 