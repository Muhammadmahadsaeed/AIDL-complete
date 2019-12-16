<?php require_once('../../config/db.php') ?>
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
    <script>
      if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href)
      }
    </script>
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
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                id="upload_multiple_images" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Image Category</label><br>
                                        <select name="tittle" class="form-control">
                                           
                                            <option value="alser">ALSER</option>
                                            <option value="edmond_buhler">EDMOND BUHLER</option>
                                            <option value="edwards">EDWARDS</option>
                                            <option value="suss">SUSS</option>
                                            <option value="metkon">METKON</option>
                                            <option value="micso_laser">MISCO LASER</option>
                                            <option value="neocera">NEOCERA</option>
                                            <option value="pasco">PASCO</option>
                                            <option value="rbrl">RBRL</option>
                                            <option value="sentech">SENTECH</option>
                                            <option value="shore_western">SHORE WESTERN</option>
                                        </select>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="inputDescription">Choose Image</label>
                                        <label for="fileUpload"
                                            class="file-upload btn btn-primary btn-block rounded-pill shadow"><i
                                                class="fa fa-upload mr-2"></i>Browse for file ...
                                            <input id="fileUpload" type="file" multiple="multiple" name="files[]">
                                        </label>

                                    </div>
                                    <div class="form-group">
                                        <a href="../../index.php" class="btn btn-secondary">Cancel</a>
                                        <input type="submit" value="Add Photo" name="submit" id="insert"
                                            class="btn btn-success float-right">
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

<?php 
if(isset($_POST['submit'])){

  // File upload configuration
  $targetDir = "./galleryImages/";
  $insertValuesSQL = '';
  $allowTypes = array('jpg','png','jpeg','gif');
  if(!empty(array_filter($_FILES['files']['name']))){
    
      foreach($_FILES['files']['name'] as $key=>$val){
          // File upload path
          
          $fileName = $_FILES['files']['name'][$key];
          $targetFilePath = $targetDir .$_POST['tittle'].'_'.$fileName;
          
          // Check whether file type is valid
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
          if(in_array($fileType, $allowTypes)){
              // Upload file to server
              
              try {
                // move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath);
                compressImage($fileName,$targetFilePath,60);   
                
               
               
                
                //code...
              } catch (\Throwable $th) {
                //throw $th;
                echo $th;
              }
             
          }
          else{
              $errorUploadType = 'File types are not supported!';
          }
      }
     
         
    

  }
  else{
      $statusMsg = 'Please select a file to upload.';
  }

}
function compressedImage($source, $path, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $path, $quality);

}



?>


<!-- if(!empty($insertValuesSQL)){
        $insertValuesSQL = trim($insertValuesSQL,',');
        // Insert image file name into database
        $insert = $link->query("INSERT INTO photos (tittle,images) VALUES $insertValuesSQL");
        if($insert){
          
            
        }else{
          echo $link->error;
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else {
      $statusMsg = "Something went wrong!";
    } -->