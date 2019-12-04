<?php

//insert.php

require_once('../../config/db.php');
$name = $_POST['tittle'];
if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
  $query = "insert into photos(tittle,images)
            values('".$name."', '".$image_file."')";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}


?>