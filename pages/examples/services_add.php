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
            <h1>Add Photos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Photos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Gallery</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="upload_multiple_images" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Image Tittle</label>
                <input type="text" id="inputName" name="tittle" class="form-control" >
             
              </div>
              <div class="form-group">
                <label for="inputDescription">Choose Image</label>
                <label for="fileUpload" class="file-upload btn btn-primary btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>Browse for file ...
                    <input id="fileUpload" type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" >
                </label>
               
              </div>
             <div class="form-group">
             <a href="../../index.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Add Photo" name="insert" id="insert"  class="btn btn-success float-right">
             </div>
             <div id="images_list"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
     
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



<script>  
$(document).ready(function(){
  load_images();

function load_images()
{
    $.ajax({
        url:"fetch_images.php",
        success:function(data)
        {
            $('#images_list').html(data);
        }
    });
}
   
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            $.ajax({
                url:"multipleImages.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                  console.log("======",data)
                    $('#image').val('');
                    load_images();
                   
                }
            });
        }
    });
 
});  
</script>


