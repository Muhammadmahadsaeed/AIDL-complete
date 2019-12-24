<?php require_once('./config.php');
$allProducts="select * from add_product";
$product1="select * from add_product where cat_1=1";
$product2="select * from add_product where cat_2=1";
$product3="select * from add_product where cat_3=1";
$product4="select * from add_product where cat_4=1";
$product5="select * from add_product where cat_5=1";


?>
<!DOCTYPE html>
<html lang="en">



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>
        AIDL
    </title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
        name="viewport">
   
    <!-- style start -->
    <link href="./css/plugins.css" media="all" rel="stylesheet" type="text/css">
    <link href="./css/style.css" media="all" rel="stylesheet" type="text/css">

    <!-- style end -->
    <!-- google fonts start -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
    <!-- google fonts end -->

    <link rel="stylesheet" href="./profile.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- preloader start -->

    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader">
                <span></span>
            </div>
        </div>
    </div><!-- preloader end -->
    <!-- hero bg start -->
    <div class="hero-fullscreen overlay overlay-dark-65">
        <!-- ken burns image slideshow start -->
        <div class="hero-bg kenburns-slide-wrapper">
            <div class="kenburns-slide kenburns-slide-1"></div>
            <div class="kenburns-slide kenburns-slide-2"></div>
            <div class="kenburns-slide kenburns-slide-3"></div>
            <div class="kenburns-slide kenburns-slide-4"></div>
        </div><!-- ken burns image slideshow end -->
    </div><!-- hero bg end -->
    <!-- site opening start -->
    <div class="site-opening fadeIn-element-half" id="site-wrapper">
        <!-- ui layer start -->
        <div id="ui-layer">
            <!-- menu button start -->
            <div class="hide-menu">
                <button class="lines-button minus menu-toggle" id="main-menu-caller" type="button"><span
                        class="lines"></span></button>
            </div><!-- menu button end -->

            <!-- menu start -->
            <div id="menu-wrapper">
                <!-- navigation start -->
                <div id="main-menu">
                    <div class="menu-nav-wrapper">
                        <nav class="menu-nav">
                            <ul class="brackets">
                                <li class="menu">
                                    <a class="menu-state page-open-clicker-active active link dropright"
                                        href="#">Home</a>


                                </li>
                                <li class="menu" onmouseover="displaySubMenu()" onmouseout="nonSubMenu()">
                                    <a class="menu-state page-open-clicker open-page-1 link" href="#">About Us</a>
                                    <ul class="subMenu" id="displaySubmenu">
                                        <li class="menu">
                                            <a class="menu-state page-open-clicker open-page-5 link" href="#">Our Team</a>

                                        </li>

                                    </ul>

                                </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker open-page-6 link" href="#">Product</a>
                                </li>

                                <li class="menu">
                                    <a class="menu-state page-open-clicker open-page-3 link" href="#">Gallery</a>
                                </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker open-page-4 link" href="#">Contact</a>
                                </li>


                                <li class="menu">
                                    <a class="menu-state page-open-clicker open-page-7 link" href="#">Our Clients</a>

                                </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker open-page-11 link" href="#">Promotions</a>
                                </li>
                                 <li class="menu">
                                    <a class="menu-state page-open-clicker open-page-8 link" href="#">Blogs</a>

                                </li> 
                            </ul>
                        </nav>
                    </div>
                </div><!-- navigation end -->
            </div><!-- menu end -->
            <!-- menu mobile button start -->
            <div class="hide-menu-mobile">
                <button class="lines-button minus menu-toggle-mobile" id="main-menu-caller-mobile" type="button"><span
                        class="lines"></span></button>
            </div><!-- menu mobile button end -->
            <!-- menu mobile start -->
            <div id="menu-wrapper-mobile">
                <!-- navigation mobile start -->
                <div id="main-menu-mobile">
                    <div class="menu-nav-wrapper">
                        <nav class="menu-nav">
                            <ul class="brackets">
                                <li class="menu">
                                    <a class="menu-state page-open-clicker-active-mobile active link" href="#">Home</a>



                                </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-1 link" href="#">About
                                        Us</a>
                                   
                                </li>
                                 <li class="menu">
                                            <a class="menu-state page-open-clicker-mobile open-page-5 link" href="#">Our
                                                Team</a>

                                        </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-6 link" href="#">Product</a>


                                </li>

                                <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-3 link" href="#">Gallery</a>
                                </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-4 link" href="#">Contact</a>
                                </li>
                                <!-- <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-5 link" href="#">Our
                                        Team</a>
                                </li> -->

                                <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-7 link" href="#">Our
                                        Clients</a>
                                </li>
                                <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-11 link"
                                        href="#">Promotions</a>
                                </li>
                                 <li class="menu">
                                    <a class="menu-state page-open-clicker-mobile open-page-8 link" href="#">Blogs</a>
                                </li> 

                            </ul>
                        </nav>
                    </div>
                </div><!-- navigation mobile end -->
            </div><!-- menu mobile end -->
        </div><!-- ui layer end -->
    </div><!-- site opening end -->
    <!-- borders start -->
    <div class="fadeIn-element">
        <div class="borders-left"></div>
        <div class="borders-right">


            <div class="container sections" style="height:auto">


                <div class="row">

                   <a href="#contactUs" style=" position: absolute;right: 0;margin-top:1%;background-color:red;color:white;    height: 35px;
                    margin-right: -4%;" class="btn" data-toggle="modal">Contact Us</a>

                </div>
            </div>

        </div>
    </div><!-- borders end -->
    <!-- sections start -->
    <div class="fireOT" id="fireOT-wrap">

        <!-- section inner start -->
        <div class="fireOT-inner">

            <!-- copyright home start -->
            <div class="fadeIn-element">
                <?php $news = "select * from news";
                    $newsResult = mysqli_query($link, $news);
                    if(mysqli_num_rows($newsResult)){
                    
                                            
                    ?>
                <div class="copyright-home" style="width:95%">

                    <marquee behavior="" direction="left">
                        <h2 class="mar">
                            <?php 
                    while($row = mysqli_fetch_assoc($newsResult)){ 
                        if($row['flag'] == 'start'){
                            $myDate = date('F j, Y',strtotime($row["created_on"]));
                            $new='['.$myDate.']-';
                            echo '<small style="color:white">'.$new.'</small>'.$row["news"]; 
                     }}
                      ?>
                        </h2>
                    </marquee>

                </div>
                <?php 
                    
                    } 
                ?>
            </div>
            <!-- copyright home end -->
            <!-- upper page start -->
            <div class="upper-page current" id="page-0">

                <!-- center container start -->
                <div class="center-container">

                    <!-- center block start -->
                    <div class="center-block">
                        <!-- upper content start -->
                        <div class="upper-content">
                            <!-- container start -->
                            <div class="container sections">

                                <!-- row start -->
                                <div class="row">
                                    <!-- intro start -->
                                    <div class="intro-wrapper">
                                        <!-- introduction start -->
                                        <div class="fadeIn-element">
                                            <!-- home title start -->
                                            <h1 class="home-page-main-title">
                                                <img src="./img/logo.png" height="100px" alt="" srcset="">
                                            </h1><!-- home title end -->
                                            <!-- divider start -->
                                            <div class="inner-divider-half"></div><!-- divider end -->
                                            <!-- home subtitle start -->
                                            <div class="split-border">
                                                <!-- <div class="split-border-inner">
                                                        <span>Associated Instruments Distributors (Pvt) Limited</span>
                                                    </div> -->
                                            </div><!-- home subtitle end -->
                                        </div><!-- introduction end -->
                                    </div><!-- intro end -->
                                </div>

                                <!-- row end -->
                            </div><!-- container end -->




                        </div><!-- upper content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
            </div><!-- upper page end -->
            <!-- upper page start -->
            <div class="upper-page">


                <!-- center container start -->
                <div class="center-container">

                    <!-- center block start -->
                    <div class="center-block">

                        <!-- upper content start -->
                        <div class="upper-content">


                            <!-- quotes start -->
                            <div class="flexslider-quotes-wrap">
                                <div class="flexslider-quotes">
                                    <ul class="slides fadeIn-element">
                                        <li class="quote-text"><br>
                                            WELCOME TO <span class="quote-signature">WE DELIVER TECHNOLOGICALLY ADVANCED
                                                SOLUTIONS AND INSTRUMENT BRANDS
                                            </span>
                                        </li>
                                        <li class="quote-text"><br>
                                            ASSOCIATED INSTRUMENT DISTRIBUTORS (PVT) LIMITED <span
                                                class="quote-signature">
                                                WE DELIVER TECHNOLOGICALLY ADVANCED SOLUTIONS AND INSTRUMENT
                                                BRANDS</span>
                                        </li>
                                        <li class="quote-text"><br>
                                            WELCOME TO <span class="quote-signature"> WE DELIVER TECHNOLOGICALLY
                                                ADVANCED SOLUTIONS AND INSTRUMENT BRANDS</span>
                                        </li>
                                        <li class="quote-text"><br>
                                            ASSOCIATED INSTRUMENT DISTRIBUTORS (PVT) LIMITED <span
                                                class="quote-signature"> WE DELIVER TECHNOLOGICALLY ADVANCED SOLUTIONS
                                                AND INSTRUMENT BRANDS</span>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- quotes end -->
                        </div><!-- upper content end -->
                    </div><!-- center block end -->
                </div>
                <!-- center container end -->
            </div><!-- upper page end -->
            <!-- about page start -->
            <div class="lower-page" id="page-1">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                        <div class="lower-content">
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                            <!-- container start -->
                            <div class="container sections">
                                <!-- row start -->
                                <div class="row">
                                    <!-- col start -->
                                    <div class="col-lg-12">
                                        <!-- section title wrapper start -->
                                        <div class="section-title-wrapper">
                                            <!-- section title start -->
                                            <h1 class="home-page-title-all">
                                                About Us
                                            </h1><!-- section title end -->
                                            <!-- divider start -->
                                            <div class="inner-divider-half"></div><!-- divider end -->
                                            <!-- section subtitle start -->
                                            <h2 class="section-heading section-heading-all">
                                                ASSOCIATED INSTRUMENT DISTRIBUTORS (PVT) LTD (AIDL)
                                            </h2><!-- section subtitle end -->
                                            <!-- extra line start -->
                                            <div class="the-extra-line"></div><!-- extra line end -->
                                        </div><!-- section title wrapper end -->
                                    </div><!-- col end -->
                                </div><!-- row end -->
                                <!-- divider start -->
                                <div class="inner-divider">
                                </div>
                                <!-- divider end -->
                                <!-- row start -->
                                <div class="row">
                                    <!-- col start -->
                                    <div class="col-lg-12">
                                        <!-- section TXT start -->
                                        <div class="section-intro">
                                            <p>
                                                AIDL is dedicated to knowledge
                                                dissemination and experience sharing in order to deliver innovative
                                                products and expertise
                                                for challenging customer’s application requirements.
                                            </p>
                                        </div><!-- section TXT end -->
                                    </div><!-- col end -->
                                </div><!-- row end -->
                                <!-- divider start -->
                                <div class="inner-divider"></div>
                                <!-- divider end -->
                                <!-- row start -->
                                <div class="row">
                                    <!-- col start -->
                                    <div class="col-sm-12 col-md-12 col-lg-6 about-block">

                                        <h2
                                            class="section-heading section-heading-all section-heading-correction correction-last">
                                            <span>&nbsp;</span> The Vision
                                        </h2><!-- section subtitle end -->
                                        <!-- divider start -->
                                        <div class="inner-divider-half"></div><!-- divider end -->
                                        <!-- section TXT start -->
                                        <div class="section-txt section-txt-last">
                                            <p>
                                                <a class="link-underline" href="#">Since our inception in 1968,</a>
                                                our vision has never changed, we only promote top brands,
                                                and our partner companies are leader of their product domain.
                                                We always quote best compatible price, but surely offer highest quality
                                                product and
                                                services.


                                            </p>
                                        </div><!-- section TXT end -->
                                    </div><!-- col end -->
                                    <!-- col start -->

                                    <!-- col end -->
                                </div><!-- row end -->
                            </div><!-- container end -->
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                        </div><!-- lower content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-1 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-1 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div><!-- about page end -->

            <!-- Galler page start -->
            <div class="lower-page" id="page-3">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                       <div class="lower-content">
                            <!-- divider start -->
                            <div class="inner-divider"></div>
                            <!-- container start -->
                            <div class="container sections">
                                <div class="section-title-wrapper">
                                    <!-- section title start -->
                                    <h1 class="home-page-title-all" style="display:inline-block">
                                        Gallery
                                    </h1>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs panel-warning">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1warning" data-toggle="tab">ALL</a>
                                                    </li>
                                                    <li><a href="#tab2warning" data-toggle="tab">Alser</a></li>
                                                    <li><a href="#tab3warning" data-toggle="tab">Buhler</a></li>
                                                    <li><a href="#tab4warning" data-toggle="tab">Edwards</a></li>
                                                    <li><a href="#tab5warning" data-toggle="tab">Suss</a></li>
                                                    <li><a href="#tab6warning" data-toggle="tab">Metkon</a></li>
                                                    <li><a href="#tab7warning" data-toggle="tab">Micos Laser</a></li>
                                                    <li><a href="#tab8warning" data-toggle="tab">Neocera</a></li>
                                                    <li><a href="#tab9warning" data-toggle="tab">Pasco</a></li>
                                                    <li><a href="#tab10warning" data-toggle="tab">RBRL</a></li>
                                                    <li><a href="#tab11warning" data-toggle="tab">Sentech</a></li>
                                                    <li><a href="#tab12warning" data-toggle="tab">Shore Western</a></li>


                                                </ul>
                                            </div>
                                            <div class="panel-body scroll123" id="style-3">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tab1warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos");
                                                                while($row = mysqli_fetch_array($res)){
                                                        
                                                    
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span
                                                                        class="img-caption"><?=strtoupper($row['tittle']);?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'alser'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'edmond_buhler'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span
                                                                        class="img-caption"><?=strtoupper($row['tittle']);?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab4warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'edwards'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab5warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'suss'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab6warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'metkon'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab7warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'micso_laser'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab8warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'neocera'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab9warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'pasco'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab10warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'rbrl'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab11warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'sentech'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab12warning">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM photos where tittle = 'shore_western'");
                                                        while($row = mysqli_fetch_array($res)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1000x1000"
                                                                    href="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/galleryImages/<?=$row['tittle']?>_<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span class="img-caption"><?=$row['tittle']?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- container end -->
                            <!-- divider start -->
                            <div class="divider divider-works"></div><!-- divider end -->
                        </div>
                        <!-- lower content end -->
                    </div><!-- center block end -->
                </div>
                <!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-3 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-3 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>

            <!-- Galler page end -->
            <!-- contact page start -->
            <div class="lower-page" id="page-4">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                        <div class="lower-content">
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                            <!-- container start -->
                            <div class="container sections">
                                <div class="navbar1234">
                                    <div class="section-title-wrapper">
                                        <!-- section title start -->
                                        <h1 class="home-page-title-all">
                                            Contact Us
                                        </h1>
                                    </div>
                                </div>
                                <div class="inner-divider"></div>
                                <div class="inner-divider"></div>

                                <div class="scroll123" id="style-3">
                                    <!-- divider end -->
                                    <!-- row start -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row1">


                                                <div class="column2">
                                                    <div class="officeAddress">



                                                        <h6 style="color:white">HEAD OFFICE:</h6>
                                                        <p><span><i class="fa fa-home fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            <a href="#">7-8 Floor Office Tower Rimpa Plaza, MA Jinnah
                                                                Road
                                                                Karachi-74400 Pakistan.</a></p>


                                                        <p><span><i class="fa fa-phone fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            0092-21-32735734</p>
                                                        <p>SERVICE CALLS: 0092-21-32767475 - 7</p>
                                                        <p>Fax: 0092-21-32736582</p>
                                                        <p><span><i class="fa fa-envelope-o fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            <a href="mailto:aidl@cyber.net.pk" style="padding-left:1%">
                                                                aidl@cyber.net.pk</a></p>

                                                    </div>
                                                </div>
                                                <div class="column2">
                                                    <div class="officeAddress">



                                                        <h6 style="color:white">REGIONAL OFFICE:</h6>
                                                        <p><span><i class="fa fa-home fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            <a href="#">303 ROYAL CENTER BLUE AREA FAZAL-UL-HAQ ROAD,
                                                                <br>ISLAMABAD. -44000</a></p>

                                                        <p><span><i class="fa fa-phone fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            92-51-2348220, 2348244</p>

                                                        <p>Fax:92-51-2348254</p>
                                                        <p><span><i class="fa fa-envelope-o fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            <a href="mailto: aidl.isb@ptcl.net" style="padding-left:1%">
                                                                aidl.isb@ptcl.net</a></p>

                                                    </div>
                                                </div>
                                                <div class="column2">
                                                    <div class="officeAddress">
                                                        <h6 style="color:white">LAHORE OFFICE:</h6>
                                                        <p><span><i class="fa fa-home fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            <a href="#">APP 04, 1ST FLOOR SKS APARTMENT,
                                                                1 FAIZ ROAD, OLD MUSLIM TOWN, LAHORE - 54000
                                                            </a></p>

                                                        <p></p>

                                                        <p>TEL/Fax: 042-35441117</p>
                                                        <p><span><i class="fa fa-phone fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            03343442585 / 03351316535</p>
                                                        <p><span><i class="fa fa-envelope-o fa-lg"
                                                                    aria-hidden="true"></i></span>
                                                            <a href="mailto: aidl.lahore@gmail.com"
                                                                style="padding-left:1%">
                                                                aidl.lahore@gmail.com</a></p>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="divider"></div>
                                            <div class="row1">
                                                <div class="column1">
                                                    <div id="map"></div>
                                                </div>

                                            </div>

                                            <div class="divider"></div>

                                            <div class="row1">
                                                <div class="col-sm-12 col-md-12 col-lg-6 contact-block">


                                                    <!-- contact form start -->
                                                    <div id="contact-form">
                                                        <form action="" id="form" method="post" name="send">
                                                            <!-- col start -->
                                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                                <input class="requiredField name" id="name" name="name"
                                                                    placeholder="Name" type="text">
                                                            </div><!-- col end -->
                                                            <!-- col start -->
                                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                                <input class="requiredField email" id="email"
                                                                    name="email" placeholder="Email" type="text">
                                                            </div><!-- col end -->
                                                            <!-- col start -->
                                                            <div class="make-space">
                                                                <input class="requiredField subject" id="subject"
                                                                    name="subject" placeholder="Subject" type="text">
                                                            </div><!-- col end -->
                                                            <!-- col start -->
                                                            <div class="make-space">
                                                                <textarea class="requiredField message" id="message"
                                                                    name="message" placeholder="Message"></textarea>
                                                            </div><!-- col end -->
                                                            <!-- contact form submit button start -->
                                                            <div class="contact-form-submit-wrapper">
                                                                <button class="the-button the-button-submit" id="submit"
                                                                    type="submit"><span>Submit</span></button>
                                                            </div><!-- contact form submit button end -->
                                                        </form>
                                                    </div><!-- contact form end -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider divider-works"></div>
                                    </div>
                                    <div class="divider divider-works"></div>

                                </div>

                                <!-- row end -->
                            </div><!-- container end -->
                            <!-- divider start -->
                            <div class="divider divider-works"></div><!-- divider end -->
                        </div><!-- lower content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-4 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-4 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>
            <!-- contact page end -->
            <!-- team page start -->
            <div class="lower-page" id="page-5">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                        <div class="lower-content">
                            <!-- divider start -->
                           <div class="inner-divider"></div>
                            <!-- container start -->
                            <div class="container sections">
                                
                                    <div class="section-title-wrapper">
                                        <!-- section title start -->
                                        <h1 class="home-page-title-all">
                                            Our Team
                                        </h1>
                                    </div>
                               <br>
                          <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs panel-warning">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1warning" data-toggle="tab">Meet Our Team Members</a>
                                                    </li>
                                                   


                                                </ul>
                                            </div>
                                            <div class="panel-body scroll123" id="style-3">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tab1warning">
                                                       <div class="row1">
                                        <?php
                       
                                 $sql = "select * from team_members";
                                 $result = mysqli_query($link, $sql);
                    				if(mysqli_num_rows($result)){
                    					while($row = mysqli_fetch_assoc($result)){
                                           
                                    ?>
                                        <div class="column">
                                            <div class="our-team">
                                                <div class="picture">
                                                    <img class="img-fluid"
                                                        src="./admin/Dashboard/pages/examples/teamImages/<?=$row['team_image'] ?>">
                                                </div>
                                                <div class="team-content" style="height: 125px;">
                                                    <h2 class="name1"><?php echo strtoupper($row['team_name']) ?></h2>
                                                    <h3 class="title"><?php echo strtoupper($row['team_post']) ?></h3>
                                                    <h3 class="title"><?php echo $row['team_email'] ?></h3>
                                                    <h3 class="title"><?php echo $row['team_num'] ?></h3>
                                                    <?php if($row['team_name'] == 'sohail tayyab' || $row['team_name'] == 'hussain ceen tayyab'){
                                                   
                                                    
                                                    ?>

                                                    <a class="btn" style="background-color:red;color:white" id="custId"
                                                        data-toggle="modal" data-id="<?php echo $row['team_id'] ?>"
                                                        href="#myModal">Read
                                                        More</a>
                                                    <?php } ?>
                                                </div>
                                               
                                            </div>

                                        </div>

                                        <?php 
                                         } 
                                    } ?>




                                    </div>
                                                    </div>
                                                    

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                              




                            </div><!-- container end -->
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                        </div><!-- lower content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-5 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-5 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>
            <!-- team page end -->
            <!-- Categories page start -->
            <div class="lower-page" id="page-6">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                         <div class="lower-content">
                            <!-- divider start -->
                            <div class="inner-divider"></div>
                            <!-- divider end -->
                            <!-- container start -->
                            <div class="container sections">
                                <div class="section-title-wrapper">
                                    <!-- section title start -->
                                    <h1 class="home-page-title-all" style="display:inline-block">
                                       Our Product
                                    </h1>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs panel-warning">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#all" data-toggle="tab">ALL</a></li>
                                                    <li><a href="#phy" data-toggle="tab">PHYSICS</a></li>
                                                    <li><a href="#eng" data-toggle="tab">Engineering Civil
                                                            Mech.Materials. Metallurgy</a></li>
                                                    <li><a href="#earth" data-toggle="tab">Earth Sciences</a></li>
                                                    <li><a href="#teaching" data-toggle="tab">Teaching Aids</a></li>
                                                    <li><a href="#nano" data-toggle="tab">Nanotechnology</a></li>



                                                </ul>
                                            </div>
                                            <div class="panel-body scroll123" id="style-3">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="all">
                                                        <div class="row1">
                                                            <?php 
                                                    if ($result = mysqli_query($link, $allProducts)) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                            <?php
                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                            <div class="column" style=" margin-bottom: 2%;">
                                                                <div class="card1">
                                                                    <img src="./admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                                                        alt="John" style="width:100%">
                                                                    <h1 style="color:black">
                                                                        <?= strtoupper($row['p_name']) ?>
                                                                    </h1>


                                                                    <p>

                                                                        <a href="<?= $row['p_url'] ?>"
                                                                            onclick="window.open(this.href); return false;">View
                                                                            Detail</a>
                                                                    </p>
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="phy">
                                                        <div class="row1">
                                                            <?php 
                                                    if ($result = mysqli_query($link, $product1)) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                            <?php
                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                            <div class="column" style=" margin-bottom: 2%;">
                                                                <div class="card1">
                                                                    <img src="./admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                                                        alt="John" style="width:100%">
                                                                    <h1 style="color:black">
                                                                        <?= strtoupper($row['p_name']) ?>
                                                                    </h1>

                                                                    <p>
                                                                        <a href="<?= $row['p_url'] ?>"
                                                                            onclick="window.open(this.href); return false;">View
                                                                            Detail</a>
                                                                    </p>
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="eng">
                                                        <div class="row1">
                                                            <?php 
                                                    if ($result = mysqli_query($link, $product2)) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                            <?php
                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                            <div class="column" style=" margin-bottom: 2%;">
                                                                <div class="card1">
                                                                    <img src="./admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                                                        alt="John" style="width:100%">
                                                                    <h1 style="color:black">
                                                                        <?= strtoupper($row['p_name']) ?>
                                                                    </h1>
                                                                    <p>
                                                                        <a href="<?= $row['p_url'] ?>"
                                                                            onclick="window.open(this.href); return false;">View
                                                                            Detail</a>
                                                                    </p>
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="earth">
                                                        <div class="row1">
                                                            <?php 
                                                    if ($result = mysqli_query($link, $product3)) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                            <?php
                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                            <div class="column" style=" margin-bottom: 2%;">
                                                                <div class="card1">
                                                                    <img src="./admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                                                        alt="John" style="width:100%">
                                                                    <h1 style="color:black">
                                                                        <?= strtoupper($row['p_name']) ?>
                                                                    </h1>
                                                                    <p>
                                                                        <a href="<?= $row['p_url'] ?>"
                                                                            onclick="window.open(this.href); return false;">View
                                                                            Detail</a>
                                                                    </p>
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="teaching">
                                                        <div class="row1">
                                                            <?php 
                                                    if ($result = mysqli_query($link, $product4)) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                            <?php
                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                            <div class="column" style=" margin-bottom: 2%;">
                                                                <div class="card1">
                                                                    <img src="./admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                                                        alt="John" style="width:100%">
                                                                    <h1 style="color:black">
                                                                        <?= strtoupper($row['p_name']) ?>
                                                                    </h1>
                                                                    <p>
                                                                        <a href="<?= $row['p_url'] ?>"
                                                                            onclick="window.open(this.href); return false;">View
                                                                            Detail</a>
                                                                    </p>
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                    </div>
                                                    <div id="nano" class="tab-pane fade">
                                                        <div class="row1">
                                                            <?php 
                                                    if ($result = mysqli_query($link, $product5)) {
                                                    if (mysqli_num_rows($result) > 0) {
                                                ?>
                                                            <?php
                                                while ($row = mysqli_fetch_array($result)) { ?>
                                                            <div class="column" style=" margin-bottom: 2%;">
                                                                <div class="card1">
                                                                    <img src="./admin/Dashboard/pages/examples/images/<?= $row['p_img'] ?>"
                                                                        alt="John" style="width:100%">
                                                                    <h1 style="color:black">
                                                                        <?= strtoupper($row['p_name']) ?>
                                                                    </h1>
                                                                    <p>
                                                                        <a href="<?= $row['p_url'] ?>"
                                                                            onclick="window.open(this.href); return false;">View
                                                                            Detail</a>
                                                                    </p>
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- container end -->
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                        </div>
                        <!-- lower content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-6 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-6 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>
            <!-- Categories page end -->
            <!-- clients page start -->
            <div class="lower-page" id="page-7">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                         <div class="lower-content">
                            <!-- divider start -->
                            <div class="inner-divider"></div>
                            <!-- container start -->
                            <div class="container sections">
                                <div class="section-title-wrapper">
                                    <!-- section title start -->
                                    <h1 class="home-page-title-all" style="display:inline-block">
                                        Our Clients
                                    </h1>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs panel-warning">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#a-e" data-toggle="tab">A - E</a></li>
                                                    <li><a href="#f-j" data-toggle="tab">F - J</a></li>
                                                    <li><a href="#k-o" data-toggle="tab">K - O</a></li>
                                                    <li><a href="#p-t" data-toggle="tab">P - T</a></li>
                                                    <li><a href="#u-z" data-toggle="tab">U - Z</a></li>



                                                </ul>
                                            </div>
                                            <div class="panel-body scroll123" id="style-3">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="a-e">
                                                        <div class="list-type1">
                                                            <?php $sql = "select * from add_client where cname like 'a%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>A</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'b%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>B</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'c%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>C</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'd%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>D</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'e%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>E</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>

                                                    </div>
                                                    <div id="f-j" class="tab-pane fade"><br>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'f%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>F</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'g%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>G</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'h%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>H</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'i%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>I</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'j%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>J</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div id="k-o" class="tab-pane fade">
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'k%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>K</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'l%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>L</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'm%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>M</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'n%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>N</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'o%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>O</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                    </div>

                                                    <div id="p-t" class="tab-pane fade">
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'p%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>P</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'q%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>Q</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'r%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>R</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 's%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>S</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 't%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>T</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div id="u-z" class="tab-pane fade">
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'u%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>U</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'v%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>V</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'w%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>W</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'x%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>X</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'y%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>Y</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                        <div class="list-type1">

                                                            <?php $sql = "SELECT cname FROM add_client WHERE cname LIKE 'z%'";
                                                    $result = mysqli_query($link,$sql);
    
                                                    if (mysqli_num_rows($result)  > 0) {
                                                    
                                                    ?>
                                                            <h1>Z</h1>
                                                            <ol>
                                                                <?php while($row = mysqli_fetch_assoc($result)) {?>
                                                                <li><a href="#"><?=$row['cname']?></a></li>
                                                                <?php }?>
                                                            </ol>
                                                            <?php }?>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                        </div>
                        <!-- lower content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-7 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-7 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>


            <!-- clients page end -->
            <!-- Blogs page start -->
            <div class="lower-page" id="page-8">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                        <div class="lower-content">
                            <!-- divider start -->
                            <div class="inner-divider"></div>
                            <!-- container start -->
                            <div class="container sections">
                                <div class="section-title-wrapper">
                                            <!-- section title start -->
                                            <h1 class="home-page-title-all">
                                                Our Blogs
                                            </h1>
                                            <!-- section title end -->
                                         
                                        </div>
                                      
                               
                                <!-- divider start -->
                                <div class="inner-divider"></div>
                                <!-- divider end -->
                                <div class="scroll123" id="style-3">
                                    <?php $selectBlog = mysqli_query($link,"select * from blog");
                                        if (mysqli_num_rows($selectBlog) > 0) {
                                    ?>
                                    <!-- row start -->
                                    <div class="row1">
                                       <?php
                                        while ($row = mysqli_fetch_array($selectBlog)) { ?>
                                        <div class="columns">
                                          <ul class="price">
                                            <li class="header"><?= strtoupper($row['blog_name']) ?></li>
                                           
                                            <li class="red"><a href="./admin/Dashboard/pages/examples/viewBlogDetail.php?<?= $row['blog_id'] ?>" class="button">Read More ...</a></li>
                                          </ul>
                                        </div>
                                      <?php } ?>
                                    </div>
                                    <!-- row end -->
                                    <?php } ?>
                                </div>
                            </div><!-- container end -->
                            <!-- divider start -->
                            <div class="divider"></div><!-- divider end -->
                        </div><!-- lower content end -->
                    </div><!-- center block end -->
                </div><!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-8 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-8 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>
            <!-- Blogs page end -->



            <!-- Promotions Description page start -->
            <div class="lower-page" id="page-11">
                <!-- center container start -->
                <div class="center-container">
                    <!-- center block start -->
                    <div class="center-block">
                        <!-- lower content start -->
                         <div class="lower-content">
                            <!-- divider start -->
                            <div class="inner-divider"></div>
                            <!-- container start -->
                            <div class="container sections">
                                <div class="section-title-wrapper">
                                    <!-- section title start -->
                                    <h1 class="home-page-title-all" style="display:inline-block">
                                        Our Promotions
                                    </h1>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs panel-warning">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#allImages" data-toggle="tab">ALL</a>
                                                    </li>
                                                    <li><a href="#images" data-toggle="tab">IMAGES</a></li>
                                                    <li><a href="#wab" data-toggle="tab">WABINERS</a></li>
                                                    <li><a href="#videos" data-toggle="tab">VIDEOS</a></li>
                                                    <li><a href="#promotions" data-toggle="tab">PROMOTIONS</a></li>



                                                </ul>
                                            </div>
                                            <div class="panel-body scroll123" id="style-3">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="allImages">
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php $res = mysqli_query($link,"SELECT * FROM promotions");
                                                    while($row = mysqli_fetch_array($res)){
                                                    
                                                   
                                                    ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1920x1080"
                                                                    href="./admin/Dashboard/pages/examples/promotionsImages/<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/promotionsImages/<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span
                                                                        class="img-caption"><?=strtoupper($row['tittle']);?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div id="images" class="tab-pane fade"><br>
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php 
                                                    $fetchImages = mysqli_query($link,"SELECT * FROM promotions where pro_type = 'image'");
                                                    while($row = mysqli_fetch_array($fetchImages)){
                                                        
                                                    
                                                        ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1920x1080"
                                                                    href="./admin/Dashboard/pages/examples/promotionsImages/<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/promotionsImages/<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span
                                                                        class="img-caption"><?=strtoupper($row['tittle']);?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>
                                                    <div id="wab" class="tab-pane fade"><br>
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php 
                                                    $fetchWabiners = mysqli_query($link,"SELECT * FROM promotions where pro_type = 'wabiners'");
                                                    while($row1 = mysqli_fetch_array($fetchWabiners)){
                                                        
                                                    
                                                        ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1920x1080"
                                                                    href="./admin/Dashboard/pages/examples/promotionsImages/<?=$row1['tittle']?>_<?=$row1['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/promotionsImages/<?=$row1['tittle']?>_<?=$row1['images']?>"></a>
                                                                <figcaption>
                                                                    <span
                                                                        class="img-caption"><?=strtoupper($row1['tittle']);?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row1['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>

                                                    <div id="videos" class="tab-pane fade"><br>
                                                        <div class="media stream ">
                                                            <a href="#" class="media-avatar medium pull-left"
                                                                style="border: none;">
                                                                <!-- <img src="images/user.png"> -->
                                                            </a>
                                                            <div class="media-body">
                                                                <div class="stream-headline">
                                                                    <h5 class="stream-author">


                                                                    </h5>
                                                                    <div class="stream-text">
                                                                        ${result.data().des}
                                                                    </div>
                                                                    <div class="stream-attachment video">
                                                                        <div class="responsive-video">


                                                                            <iframe width="300" height="300"
                                                                                src="https://www.youtube.com/embed/cct03Qak-8I"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                                allowfullscreen></iframe>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="promotions" class="tab-pane fade"><br>
                                                        <div class="legendary-gallery">
                                                            <!-- gallery item 1 start -->
                                                            <?php 
                                                        $fetchVideos = mysqli_query($link,"SELECT * FROM promotions where pro_type = 'promotions'");
                                                        while($row = mysqli_fetch_array($fetchVideos)){
                                                            
                                                        
                                                            ?>
                                                            <figure
                                                                class="col-sm-6 col-md-3 col-lg-3 hover-effect-img move-down move-down-first">
                                                                <a data-size="1920x1080"
                                                                    href="./admin/Dashboard/pages/examples/promotionsImages/<?=$row['images']?>">
                                                                    <img alt="Image description" class="img-responsive"
                                                                        src="./admin/Dashboard/pages/examples/promotionsImages/<?=$row['images']?>"></a>
                                                                <figcaption>
                                                                    <span
                                                                        class="img-caption"><?=strtoupper($row['tittle']);?></span>
                                                                    <div class="hover-effect"></div>
                                                                    <div class="hover-icons">
                                                                        <a class="ion-ios-plus-empty " href="#"></a><br>
                                                                        <span><?=strtoupper($row['tittle']);?></span>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                            <?php }; ?>
                                                            <!-- gallery item 4 end -->
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- container end -->
                            <!-- divider start -->
                            <div class="divider divider-works"></div><!-- divider end -->
                        </div>
                        <!-- lower content end -->
                    </div><!-- center block end -->
                </div>
                <!-- center block start -->
                <!-- center block end -->

                <!-- center container end -->
                <!-- page closer start -->
                <div class="page-closer">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-11 page-close-clicker" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer end -->
                <!-- page closer mobile start -->
                <div class="page-closer-mobile">
                    <div class="page-closer-frame">
                        <div class="page-closer-btn">
                            <a class="open-page-11 page-close-clicker-mobile" href="#">
                                <div class="nav-indicator">
                                    <span aria-hidden="true" class="close1">&times;</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- page closer mobile end -->
            </div>
            <!--  Product Description page end -->
        </div><!-- section inner end -->
    </div><!-- sections end -->
    <!-- photoSwipe background start -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- photoSwipe background end -->
    <!-- scripts start -->


    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="width:40%;border-radius: 5px;" role="document">
            <div class="modal-content">

                <div class="modal-body" style="background-color: rgba(0, 0, 0, 0.8);">
                    <div class="fetched-data"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="contactUs" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="color:black;text-align:center">Contact Us</h4>
                </div>
                <div class="modal-body">
                    <table id="customers">
                        <tr>
                            <th style="width:30%">Company</th>
                            <th>AIDL Pakistan</th>

                        </tr>
                        <tr>
                            <td>MANAGING DIRECTOR</td>
                            <td>HUSSAIN CEEN Tayyab</td>

                        </tr>
                        <tr>
                            <td>Contact No</td>
                            <td> (+92) 335-1316535</td>

                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="mailto:ceen.aidl@gmail.com">ceen.aidl@gmail.com</a> </td>

                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>HEAD OFFICE: <br>
                                7-8, 5th Floor Office Tower,
                                Rimpa Plaza, MA Jinnah Road</td>

                        </tr>

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <script src="js/plugins.js">
    </script>
    <script src="js/aidl.js">
    </script><!-- scripts end -->


</body>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNibPJgALZ7EFCwZgPjW105jhUyABADgY&callback=initMap">
</script>

<script>
var map;
var geocoder;
var marker;
var people = new Array();
var latlng;
var infowindow;



function initMap() {

    var mapOptions = {
        center: new google.maps.LatLng(33.710192, 73.057953), // Coimbatore = (11.0168445, 76.9558321)
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Get data from database. It should be like below format or you can alter it.

    var data =
        '[{ "DisplayText": "Rimpa Plaza", "ADDRESS": "Karachi", "LatitudeLongitude": "24.864604, 67.022909", "MarkerId": "Customer" },{ "DisplayText": "ROYAL CENTER BLUE AREA", "ADDRESS": "Islamabad", "LatitudeLongitude": "33.710192, 73.057953", "MarkerId": "Customer"},{ "DisplayText": "Lahore Office", "Lahore": "Lahore Office", "LatitudeLongitude": "31.518672, 74.323958", "MarkerId": "Customer"}]';

    people = JSON.parse(data);

    for (var i = 0; i < people.length; i++) {
        setMarker(people[i]);
    }

}

function setMarker(people) {
    geocoder = new google.maps.Geocoder();
    infowindow = new google.maps.InfoWindow();
    if ((people["LatitudeLongitude"] == null) || (people["LatitudeLongitude"] == 'null') || (people["LatitudeLongitude"] == '')) {
        geocoder.geocode({
            'address': people["Address"]
        },
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                latlng = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    draggable: false,
                    html: people["DisplayText"],
                    icon: "images/marker/" + people["MarkerId"] + ".png"
                });
                google.maps.event.addListener(marker, 'click', function(event) {
                    infowindow.setContent(this.html);
                    infowindow.setPosition(event.latLng);
                    infowindow.open(map, this);
                });
            } else {
                alert(people["DisplayText"] + " -- " + people["Address"] + ". This address couldn't be found");
            }
        });
    } else {
        var latlngStr = people["LatitudeLongitude"].split(",");
        var lat = parseFloat(latlngStr[0]);
        var lng = parseFloat(latlngStr[1]);
        latlng = new google.maps.LatLng(lat, lng);
        marker = new google.maps.Marker({
            position: latlng,
            map: map,
            draggable: false, 
            html: people["DisplayText"]
             
        });
       
        google.maps.event.addListener(marker, 'click', function(event) {
            infowindow.setContent(this.html);
            infowindow.setPosition(event.latLng);
            infowindow.open(map, this);
        });
    }
}

function displaySubMenu() {
    document.getElementById('displaySubmenu').style.display = 'block'
    document.getElementById('displaySubmenu').style.margin = '5% 0% 0% 15%'
   
}


function nonSubMenu() {
    document.getElementById('displaySubmenu').style.display = 'none'
   
}





$(document).ready(function() {
    $('#myModal').on('show.bs.modal', function(e) {
        var rowid = $(e.relatedTarget).data('id');
        console.log(rowid)
        $.ajax({
            type: 'get',
            url: './fetechTeamMemberRecord.php', //Here you will fetch records 
            data: 'rowid=' + rowid, //Pass $id
            success: function(data) {
                console.log(data)
                $('.fetched-data').html(data); //Show fetched data from database
            }
        });
    });
});
</script>

</html>