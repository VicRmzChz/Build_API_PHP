<?php
// Getting databese credentials
$db_name = "movies_api";
$mysql_username = "root";
$mysql_pass = "";
$server_name = "localhost";

// connection to db
//$conn = mysqli_connect($server_name, $mysql_username, $mysql_pass, $db_name);
$conn = new mysqli($server_name, $mysql_username, $mysql_pass, $db_name);

// cannot connect
if (!$conn) {
    echo '{"message": "Unable to connect to Database"}';
    die();

} else{
    echo "connected successfully";
}

?>