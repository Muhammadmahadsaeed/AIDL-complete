<?php require_once('../../config/db.php');

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
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../../plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <link rel="stylesheet" href="../services.css">
</head>

<body class="hold-transition sidebar-mini">
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
                            <h1>Gallery</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Gallery</li>
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
                        <h3 class="card-title">PHOTOS</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                        <br>
                        <br><br>
                        <div class="row">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#allimg">ALL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Alser">Alser</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Edmond">Edmond
                                        Buhler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Edwards">Edwards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Suss">Suss</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Metkon">Metkon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Micos">Micos
                                        Laser</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Neocera">Neocera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Pasco">Pasco</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#RBRL">RBRL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Sentech">Sentech</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#Shore">Shore
                                        Western</a>
                                </li>
                            </ul>


                        </div>
                    </div>

                    <div class="card-body">

                        <!-- row start -->
                        <div class="row">

                            <div class="tab-content">
                                <div id="allimg" class="tab-pane active"><br>
                                  
                                
                                    <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>




                                </div>
                                <div id="Alser" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Edmond" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Edwards" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Suss" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Metkon" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Micos" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Neocera" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Pasco" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="RBRL" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Sentech" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="Shore" class="tab-pane fade"><br>
                                <div class="container">
                                        <div class="row1">
                                        <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                               
                                            <div class="column">
                                           
                                                <div class="card1">
                                                    <figure class="hover-effect-img move-down move-down-first">
                                                    <a data-size="1920x1080" href="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                    <img
                                                            alt="<?=$row['tittle'];?>" class="img-responsive"
                                                            src="./galleryImages/<?=$row['tittle']?>_<?=$row['images']?>" height='200px' width='200px'>
                                                    </a>
                                                        <figcaption>
                                                            <span class="img-caption"><?=$row['tittle'];?></span>
                                                            <div class="hover-effect"></div>
                                                            <div class="hover-icons">
                                                                
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                
                                            </div>
                                            <?php }; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- photoSwipe end -->
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
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- jQuery UI -->
    <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="../../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Filterizr-->
    <script src="../../plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Page specific script -->
    <script type="text/javascript">
    function dlt(e) {

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {

                if (willDelete) {


                    window.location = `delete_entry.php?id=${e.id}`;
                } else {
                    swal("Your file is safe!", {
                        icon: "success",
                    });
                }
            });
        // })
    }
    </script>
    <script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    });
    </script>


</body>

</html>