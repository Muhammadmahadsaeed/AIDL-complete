<?php
           require_once('../../config/db.php');
$upload_dir = 'images/';
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $sql = "select * from add_client where cid = ".$id;
  $result = mysqli_query($link, $sql);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $image = $row['cimage'];
    unlink($upload_dir.$image);
    $sql = "delete from add_client where cid=".$id;
    if(mysqli_query($link, $sql)){
      header('location:clients.php');
    }
  }
}
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
              <h1>Clients</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Clients</li>
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
            <h3 class="card-title">Blogs</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>

            </div>
          </div>

          <div class="card-body ">





           
            <div class="tab-content">
              <div id="all" class="tab-pane active"><br>
                <table class="table table-striped projects">
                  <thead>
                    <tr>
                      
                      <th style="width: 20%">
                        Client Name
                      </th>
                     
                      <th style="width: 20%" class="project-actions text-center">
                      Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "select * from  add_client";
                    if ($result = mysqli_query($link, $sql)) {
                      if (mysqli_num_rows($result) > 0) {
                        ?>


                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                          <tr>
                            
                            <td>
                              <a>
                                <?= $row['cname'] ?>
                              </a>
                              <br />
                              <small>
                              <?= $row['create_on'] ?>
                              </small>
                            </td>
                           

                            <td class="project-actions text-center">
                              <a class="btn btn-primary btn-sm" href="./viewBlogDetail.php?id=<?php echo $row['blog_id'] ?>">
                                <i class="fas fa-folder">
                                </i>
                                View
                              </a>
                              <a class="btn btn-info btn-sm" href="project_update.php?id=<?php echo $row['p_id'] ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                              </a>
                             <a href="projects.php?delete=<?php echo $row['p_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fas fa-trash"></i>Delete</a>
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