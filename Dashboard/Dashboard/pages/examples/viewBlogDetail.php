<?php 
require_once('../../config/db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

$display = "select * from blog where blog_id = $id";
$res = mysqli_query($link,$display);
$displayImages = "select * from blog_images where blog_image_id = $id";
$resImages = mysqli_query($link,$displayImages);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>




    <style>
    .bg {
        /* Set rules to fill background */
        min-height: 100%;
        min-width: 1024px;

        /* Set up proportionate scaling */
        width: 100%;
        height: auto;
        background: rgba(0, 0, 0,1);
        /* Set up positioning */
        position: fixed;
        top: 0;
        left: 0;
    }

    @media screen and (max-width: 1024px) {
        .bg {
            left: 50%;
            margin-left: -512px;
        }
    }

    #page-wrap {
        position: relative;
        color:black;
        width: 90%;
        margin: 0 auto;
        padding: 20px;
        z-index: 1005;
        background: white;
        -moz-box-shadow: 0 0 20px black;
        -webkit-box-shadow: 0 0 20px black;
        box-shadow: 0 0 20px black;
    }

    p {
        font: 15px/2 Georgia, Serif;
        margin: 0 0 30px 0;
        text-indent: 40px;
        
    }
    </style>
</head>

<body>
    <div class="bg"></div>
    <div id="page-wrap">
        <div class="slideshow-container">
            <?php while ($resultImages = mysqli_fetch_array($resImages)) {?>
            <div class="mySlides fade">

                <img src="./BlogImages/<?=$resultImages['blog_name']?>_<?=$resultImages['blog_image']?>"
                    style='width:100%; height:500px'>
                <div class="text">Caption Two</div>
            </div>

            <?php }?>


        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="viewBlogContainer">
            <?php while ($result = mysqli_fetch_array($res)) {
        echo $result['blog'];
        }?>



        </div>
    </div>
    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
</body>

</html>