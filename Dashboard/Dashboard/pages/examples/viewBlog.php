<?php require_once('../../config/db.php');
$display = "select * from blog where blog_id = 6";
$res = mysqli_query($link,$display);


    // @header('Content-type: text/html; charset=utf-8'); 
   
    
   
   

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<body>
    <div class="container">
       <?php while ($result = mysqli_fetch_array($res)) {
        echo $result['blog'];
        }?>
    </div>
</body>

</html>