<?php require_once('../../config/db.php');
$display = "select * from blog where blog_id = 1";
$res = mysqli_query($link,$display);

while ($result = mysqli_fetch_array($res)) {
    @header('Content-type: text/html; charset=utf-8'); 
    echo $result['blog'];
   
   }

?>