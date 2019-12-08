<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'aidlpkco_mahad');
define('DB_PASSWORD', '4x7bGN&Y=Y&s');
define('DB_NAME', 'aidlpkco_newdb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME)or  die("ERROR: Could not connect. " . mysqli_connect_error());
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('" . $output . "' );</script>";
}
?>