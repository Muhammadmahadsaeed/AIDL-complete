<?php
require_once('../../config/db.php');
$upload_dir = './teamImages/';
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $del = "select * from team_members where team_id = ".$id;
  $delTeam = mysqli_query($link, $del);
  if(mysqli_num_rows($delTeam) > 0){
    $row = mysqli_fetch_assoc($delTeam);
    $image = $row['team_image'];
    
    unlink($upload_dir.$image);
    $sql = "delete from team_members where team_id=".$id;
    if(mysqli_query($link, $sql)){
      header('location:AllTeams.php');
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("navbar.php")?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require("../../sidebar.php")?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>All Teams</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Teams</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->





                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Teams Members</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                        <br>
                        <br><br>

                    </div>

                    <div class="card-body">

                        <!-- row start -->

                        <div class="container">
                    <div class="row">
                        <?php
                        
                        $sql = "select * from team_members";
                            $result = mysqli_query($link, $sql);
                    				if(mysqli_num_rows($result)){
                    					while($row = mysqli_fetch_assoc($result)){
                          ?>
                        <div class="col-md-4">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-info">
                                    <h3 class="widget-user-username"><?php echo $row['team_name'] ?></h3>
                                    <h5 class="widget-user-desc"><?php echo $row['team_email'] ?></h5>
                                </div>
                                <div class="widget-user-image">

                                    <img class="img-circle elevation-2" style="height: 90px;"
                                        src="./teamImages/<?=$row['team_image'] ?>" alt="User Avatar">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-6 border-right">
                                            <div class="description-block">
                                                <span class="description-text"><a
                                                        href="AllTeams_update.php?id=<?php echo $row['team_id'] ?>"
                                                        class="btn btn-success"><i class="fa fa-edit">
                                                            Update</i></a></span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="description-block">
                                                <span class="description-text"> <a
                                                        href="AllTeams.php?delete=<?php echo $row['team_id'] ?>"
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete this record?')"><i
                                                            class="fa fa-trash-alt"> Delete</i></a>
                                                </span>
                                            </div>
                                            <!-- /.description-block -->
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <?php
                              }
                            }
                          ?>
                    </div>
                </div>




                    </div>
                    <!-- /.card-body -->
                </div>



                
                <!-- /.card -->

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