<?php 
require_once('../../config/db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

$display = "select * from blog where blog_id = $id";
$res = mysqli_query($link,$display);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="viewBlogContainer">
       <?php while ($result = mysqli_fetch_array($res)) {
        echo $result['blog'];
        }?>
    </div>
</body>

</html>