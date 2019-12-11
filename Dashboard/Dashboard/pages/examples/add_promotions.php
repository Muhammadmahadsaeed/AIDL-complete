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
                                <li class="breadcrumb-item active">Add Promotions</li>
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
                                <h3 class="card-title">Promotions</h3>

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
                                    <label for="inputName">Choose Type</label><br>
                                        <select name="pro_type" class="form-control"  onchange="getComboA(this)">
                                            <option value="types">Choose Type</option>
                                            <option value="image">IMAGE</option>
                                            <option value="wabiners">WABINERS</option>
                                            <option value="video">VIDEO</option>
                                            <option value="promotions">PROMOTIONS</option>
                                        </select>
                                    </div>
                                       
                                    
                                    <div class="form-group" style="display:none" id="imgCategory">
                                        <label for="inputName">Image Category</label>
                                        <input type="text" id="inputName" name="tittle" class="form-control">

                                    </div>
                                    <div class="form-group" style="display:none" id="videoField">
                                        <label for="video">Video URL</label>
                                        <input type="text" id="video" name="videoURL" class="form-control">

                                    </div>
                                    <div class="form-group" style="display:none" id="imgButton">
                                        <label for="inputDescription">Choose Image</label>
                                        <label for="fileUpload"
                                            class="file-upload btn btn-primary btn-block rounded-pill shadow"><i
                                                class="fa fa-upload mr-2"></i>Browse for file ...
                                            <input id="fileUpload" type="file" multiple="multiple" name="files[]">
                                        </label>

                                    </div>
                                    <div class="form-group">
                                       
                                        <input type="submit" value="Add Photo" name="submit" id="insert"
                                            class="btn btn-success float-right">
                                    </div>
                                    
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<script>
function getComboA(selectObject) {
    var value = selectObject.value;
    console.log(value)
   if(value != "video"){
        document.getElementById('imgCategory').style.display = 'block'
        document.getElementById('imgButton').style.display = 'block'
        document.getElementById('videoField').style.display = 'none'
    }
   
    else{
        document.getElementById('videoField').style.display = 'block'
        document.getElementById('imgCategory').style.display = 'none'
        document.getElementById('imgButton').style.display = 'none'
    }
}
</script>

<?php 
if(isset($_POST['submit'])){

    $pro_type = $_POST['pro_type'];
    $video = $_POST['videoURL'];
    if($pro_type == "types"){
        echo '<script>swal("Bad job!", "Your Submission is going Wrong!", "error");</script>';
    }
    else if($pro_type == "video"){
        $insertvideo = "INSERT INTO promotions (pro_type,video_url) VALUES ('$pro_type','$video')";
        if(mysqli_query($link,$insertvideo)){
          echo '<script>swal("Good job!", "Your Submission is going Wrong!", "success");</script>';
            
        }else{
          echo $link->error;
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $targetDir = "./promotionsImages/";
        $insertValuesSQL = '';
        $allowTypes = array('jpg','png','jpeg','gif');
        if(!empty(array_filter($_FILES['files']['name']))){
    
        foreach($_FILES['files']['name'] as $key=>$val){
          // File upload path
          
          $fileName = basename($_FILES['files']['name'][$key]);
          $targetFilePath = $targetDir .$_POST['tittle'].'_'.$fileName;
          
          // Check whether file type is valid
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
          if(in_array($fileType, $allowTypes)){
              // Upload file to server
              
              try {
                move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath);
                $insertValuesSQL .= "('".$pro_type."','".strtolower($_POST['tittle'])."','".$fileName."')";
                
                
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
      
      if(!empty($insertValuesSQL)){
          $insertValuesSQL = trim($insertValuesSQL,',');
        //   Insert image file name into database
          $insert = "INSERT INTO promotions (pro_type,tittle,images) VALUES $insertValuesSQL";
          if(mysqli_query($link,$insert)){
            echo '<script>swal("Good job!", "Your Submission is going Wrong!", "success");</script>';
              
          }else{
            echo $link->error;
              $statusMsg = "Sorry, there was an error uploading your file.";
          }
      }
      else {
        $statusMsg = "Something went wrong!";
      }

  }
  else{
      $statusMsg = 'Please select a file to upload.';
  }


    }

  // File upload configuration
 
}


?>