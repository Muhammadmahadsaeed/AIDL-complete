<?php require_once('../../config/db.php') ;
error_reporting(0);
$name_err=$des_err=$img_err=$cat_err="";
$img = "";
if (isset($_POST['submit'])) { 
  $p_name = $_POST["name"];
  $p_des = $_POST["email"];
  $image = $_FILES['image']['name'];
  $c1 = $_POST["py"];
  $c2 = $_POST["ecmmm"];
  $c3 = $_POST["es"];
  $c4 = $_POST["ta"];
  $c5 = $_POST["nt"];
  
    if(empty($c1)&&empty($c2)&&empty($c3)&&empty($c4)&&empty($c5))
    {
      $cat_err="Please select atleast one category";
    }
    else{
    if(!empty($c1))
    {
      $c1=1;
    }
    else
    {
      $c1=0;
    }
    if(!empty($c2))
    {
      $c2=1;
    }
    else
    {
      $c2=0;
    }
    if(!empty($c3))
    {
      $c3=1;
    }
    else
    {
      $c3=0;
    }
    if(!empty($c4))
    {
      $c4=1;
    }
    else
    {
      $c4=0;
    }
    if(!empty($c5))
    {
      $c5=1;
    }
    else
    {
      $c5=0;
    }
  }
    
    if(empty($p_name)){
        $name_err = "Please enter product name";
    } elseif(!preg_match("/^[a-zA-Z ]*$/",$p_name)){
        $name_err = "Please enter a valid product name";
    } else{
       $p_name=$p_name;
    }
  
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    if(empty($p_des)){
        $des_err = "Please enter product description";     
    }else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$p_des)) {
      $des_err = "Invalid URL";
    }
    
    else{
        $p_des = $p_des;
    }
    if(empty($image)){
      $img_err = "Please insert image";     
  } else{
      $image = $image;
  }
 
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($des_err) && empty($img_err)){
        // Prepare an insert statement
        $target = "images/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $sql = "INSERT INTO add_product (p_name,p_url,cat_1,cat_2,cat_3,cat_4,cat_5,p_img) VALUES ('$p_name','$p_des','$c1','$c2','$c3','$c4','$c5','$image')";
   
            
            $result = mysqli_query($link, $sql);
  if($result){
    $successMsg = 'New record added successfully';
    header('Location: ./projects.php');
    exit();
  }else{
    $errorMsg = 'Error '.mysqli_error($link);
  }
            // Attempt to execute the prepared statement
            
        }
         
  
       
    }
    
    // Close connection
    mysqli_close($link);



 
  


?>
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
                    <span class="help-block" style="color: red;"><?php echo $name_err;?></span>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Product Webiste URL</label>
                    <input id="inputDescription" name="email" class="form-control" >
                    <span class="help-block" style="color: red;"><?php echo $des_err;?></span>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Product Category</label><br>
                    <span class="help-block" style="color: red;"><?php echo $cat_err;?></span><br>
                    <input type="checkbox" name="py" value="py"><label>PHYSICS</label><br>
                    <input type="checkbox" name="ecmmm" value="ecmmm"><label>Engineering Civil Mech.Materials. Metallurgy</label><br>
                    <input type="checkbox" name="es" value="es"><label>Earth Sciences</label><br>
                    <input type="checkbox" name="ta" value="ta"><label>Teaching Aids</label><br>
                    <input type="checkbox" name="nt" value="nt"><label>Nano Technology</label><br>
                    
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
                    <span class="help-block" style="color: red;"><?php echo $img_err;?></span>
                    
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

              <input type="submit" name="submit" value="Add Product" class="btn btn-success float-right">
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

