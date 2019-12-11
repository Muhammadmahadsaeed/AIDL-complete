<?php
require_once('../../config/db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
$sql = "UPDATE news SET flag = 'stop' WHERE news_id = $id";

if (mysqli_query($link, $sql)) {
    echo '<script type="text/javascript">' . "\n";
    echo 'window.location="./news.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">' . "\n";
    echo 'window.location="./news.php";';
    echo '</script>';
}



}
?>