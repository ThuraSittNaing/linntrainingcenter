@@ -1,29 +0,0 @@
<!-- include header -->
<?php include('header.php') ?>
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include('sidebar.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item">Course</li>
          <li class="breadcrumb-item active">Add New Course</li>
        </ol>

        <!-- Students Form  -->
       <?php include('course/form.php') ?>
      </div>
      <!-- /.container-fluid -->

    <!-- include footer -->
<?php include('footer.php') ?>

     