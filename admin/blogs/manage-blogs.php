<?php
  include_once("../config.php");
  include_once("../database/Database.php");
  include_once("../models/Registration.php");
  include_once("../models/Blogs.php");
  if(!isset($_SESSION['adminuser'])){
    header("Location: ../index.php");
  }
  $_SESSION['active'] = 'blogs';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wazi | Manage Blogs</title>

  <!-- Google Font: Source Sans Pro -->
  <script src="https://cdn.tiny.cloud/1/fy277kmb9yrlan45yrffhhs1p8q01s3rg4i7erd93j5uhm7f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="stylesheet" href="../assets/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
    include_once("../includes/topnav.php");
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include_once("../includes/sidenav.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Blogs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL.'dashboard.php' ?>">Home</a></li>
              <li class="breadcrumb-item active">Update Blogs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header">Update Blogs</div>
            <div class="card-body">
                <form action="update-blog-fun.php" class="form" method="post" enctype="multipart/form-data">
                <?php
                    if(isset($_GET['success'])){
                        echo "<div class='alert alert-success'>{$_GET['success']}</div>";
                    }else if(isset($_GET['error'])){
                        echo "<div class='alert alert-danger'>{$_GET['error']}</div>";
                    }
                ?>
                <?php
                    $conn = new Database();
                    $db   = $conn -> connection();
                    $blogs = new Blogs($db);
                    $blogs -> id = $_GET['edit'];
                    $results = $blogs -> getBlog();
                    if($results){
                ?>
                    <div class="form-group">
                        <input type="hidden" name="update" id="update" class="form-control" placeholder="Enter Slug e.g first-blog-website" value="<?php echo $results['id'] ?>" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="blog_title">Title</label>
                            <input type="text" value="<?php echo $results['blog_title'] ?>" name="blog_title" id="blog_title" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="blog_slug">Blog Slug</label>
                            <input type="text" name="blog_slug" id="blog_slug" class="form-control" placeholder="Enter Slug e.g first-blog-website" value="<?php echo $results['Blog_Slug'] ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="blog_image">Blog Image</label>
                            <input type="file" name="blog_image" id="blog_image" class="form-control" placeholder="Upload Blog Image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Blog Content</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Type your description here..." required><?php echo $results['blog_content'] ?></textarea>
                    </div>
                <?php
                    }
                ?>
                    <div class="form-group">
                        <input type="submit" value="Save Blogs" name="save" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php
    include_once("../includes/footer.php");
  ?>
</div>
<!-- ./wrapper -->
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
<!-- REQUIRED SCRIPTS -->
<script src="../assets/js/all.min.js"></script>
<script src="../assets/js/setSlug.js"></script>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard3.js"></script>
</body>
</html>