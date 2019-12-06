<?php require_once('../../config/db.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Project Edit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="./style.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("navbar.php") ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require("../../sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Product Add</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Product Add</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">

                  <div class="form-group">
                    <label for="inputName">Product Name</label>
                    <input type="text" name="name" id="inputName" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Product Webiste URL</label>
                    <input id="inputDescription" name="email" class="form-control" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Product Category</label><br>
                    
                    <input type="checkbox" name="check_list[]" value="py"><label>PHYSICS</label><br>
                    <input type="checkbox" name="check_list[]" value="ecmmm"><label>Engineering Civil Mech.Materials. Metallurgy</label><br>
                    <input type="checkbox" name="check_list[]" value="es"><label>Earth Sciences</label><br>
                    <input type="checkbox" name="check_list[]" value="ta"><label>Teaching Aids</label><br>
                    <input type="checkbox" name="check_list[]" value="nt"><label>Nano Technology</label><br>
                    
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-md-6">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Product Image</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEstimatedBudget">Product Image</label>
                    <label for="inputEstimatedBudget" class="file-upload btn btn-primary btn-block rounded-pill shadow">
                      <i class="fa fa-upload mr-2"></i>
                      Browse for file ...
                       <input type="file" name="image" id="inputEstimatedBudget">
                    </label>
                    <!-- <input type="file" name="image" id="inputEstimatedBudget" class="form-control"> -->
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

          </div>
          <div class="row">
            <div class="col-12">

              <input type="submit" name="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
          </div>
        </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>


<?php
$img = "";
if (isset($_POST['submit'])) { // Fetching variables of the form which travels in URL

  // Get image name
  $p_name = $_POST["name"];
  $p_des = $_POST["email"];
  $image = $_FILES['image']['name'];
  // $cat=$_POST['sel1'];
  if(!empty($_POST['check_list'])) {
    // Counting number of checked checkboxes.
    $checked_count = count($_POST['check_list']);
    echo "You have selected following ".$checked_count." option(s): <br/>";
    // Loop to store and display values of individual checked checkbox.
    $selectedCategories = array();
    foreach($_POST['check_list'] as $selected) {
      array_push($selectedCategories,strtolower($selected));
   
    }
    // debug_to_console($selectedCategories);
    $output = implode(',', $selectedCategories);
    }
    else{
    echo "<b>Please Select Atleast One Option.</b>";
    }
  // Get text
  // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
//   if(strtolower($cat)==strtolower('physics'))
//   {
// $cat='py';
//   }
//   else if (strtolower($cat)==strtolower('Engineering Civil Mech.Materials. Metallurgy'))
//   {
// $cat='ecmmm';
//   }
//   elseif (strtolower($cat)==strtolower('Earth Sciences'))
//   {
// $cat='es';
//   }
//   elseif (strtolower($cat)==strtolower('Teaching Aids'))
//   {
// $cat='ta';
//   }
//   else
//   {
// $cat='nt';
//   }
  // image file directory
  $target = "images/" . basename($image);

  $sql = "INSERT INTO add_product (p_name,p_url,p_type,p_img) VALUES ('$p_name','$p_des','$output','$image')";
  // execute query
  mysqli_query($link, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }
}





?>