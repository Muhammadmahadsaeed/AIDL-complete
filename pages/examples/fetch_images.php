<?php

//fetch_images.php

require_once('../../config/db.php');

$query = "SELECT * FROM photos";

// $statement = $link->prepare($query);

$output = '<div class="row">';


    if( $result = mysqli_query($link,$query) ) {
        while($row = $result->fetch_assoc()) // use fetch_assoc here
        {
        //   $returnResult[] = $row; // assign each value to array
          $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail" />
  </div>
  ';
        }
     }
   




$output .= '</div>';

echo $output;

?>