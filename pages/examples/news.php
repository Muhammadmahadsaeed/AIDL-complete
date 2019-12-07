<?php require_once('../../config/db.php');
$sql = "select * from news";
?>

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
                            <h1>News</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">News</li>
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
                        <h3 class="card-title">News</h3>

                        <div class="card-tools">

                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Add
                                News</button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">

                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="news">Write News</label>
                                                <textarea id="news" name="news" class="form-control"
                                                rows="4"></textarea>

                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Add News" name="submit" id="insert"
                                                    class="btn btn-success float-right">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="card-body ">






                        <div class="tab-content">
                            <div id="all" class="tab-pane active"><br>
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr>

                                            <th style="width: 20%">
                                                News
                                            </th>



                                            <th style="width: 20%" class="project-actions text-center">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                    if ($result = mysqli_query($link, $sql)) {
                      if (mysqli_num_rows($result) > 0) {
                        ?>


                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                        <tr>

                                            <td>
                                                <a>
                                                    <?= $row['news'] ?>
                                                </a>
                                                <br />
                                                <small>
                                                    <?= $row['created_on'] ?>
                                                </small>
                                            </td>



                                            <td class="project-actions text-center">
                                                <a class="btn btn-primary btn-sm" href="./project_detail.html">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Start
                                                </a>
                                                <a class="btn btn-info btn-sm" href="./project_edit.html">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Stop
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                        }
                        mysqli_free_result($result);
                      } else {
                        echo "No records matching your query were found.";
                      }
                    } else {
                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>
                                    </tbody>

                                </table>
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

<?php 


if(isset($_POST['submit'])){

    $news = $_POST['news'];
    $sql = "INSERT INTO news (news) VALUES ('$news')";
    // execute query
    mysqli_query($link, $sql);
  
    
}


?>