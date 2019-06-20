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
          <li class="breadcrumb-item active">Students</li>
        </ol>

        <!-- Students DataTables  -->
       <?php include('user/edit_form.php') ?>
      </div>
      <!-- /.container-fluid -->

    <!-- include footer -->
<?php include('footer.php') ?>