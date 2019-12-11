<?php   require_once('../../config/db.php');?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AIDL</title>
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
                            <h1>Add Team Members</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Team Members</li> </ol> </div> </div> </div>
                                        <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form class="" action="#" method="post" enctype="multipart/form-data">

                    <div class="row justify-content-center">

                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add Team Member Detail</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <form class="" action="cadd.php" method="post" enctype="multipart/form-data">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputName">Team Member Name</label>
                                            <input type="text" id="inputName" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">Post</label>
                                            <input type="text" id="inputDescription" name="Mempost"
                                                class="form-control">
                                        </div>
                                        
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="num">Mobile Number</label>
                                        <input type="text"  name="num" id="num" class="form-control"  required>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEstimatedBudget"
                                            class="file-upload btn btn-primary btn-block rounded-pill shadow"><i
                                                class="fa fa-upload mr-2"></i>Browse for file ...
                                            <input type="file" id="inputEstimatedBudget" name="image">
                                        </label>
                                        <!-- <label for="inputEstimatedBudget">Client Image</label>
                                        <input type="file" id="inputEstimatedBudget" name="image" class="form-control"> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
                                            <input type="submit" name="submit" value="Add Member"
                                                class="btn btn-success float-right">
                                        </div>
                                    </div>
                             

                                    </div>
                                    <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $Mempost = $_POST['Mempost'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $image = $_FILES['image']['name'];

    $target = "./teamImages/" . basename($image);

    $sql = "INSERT INTO team_members (team_name,team_post,team_email,team_num,team_image) VALUES ('$name','$Mempost','$email','$num','$image')";
    // execute query
    mysqli_query($link, $sql);
  
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    } else {
      $msg = "Failed to upload image";
    }
}


?>