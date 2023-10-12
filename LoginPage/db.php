<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$con = mysqli_connect($servername, $username, $password, $dbname);
if ($con) {
    // echo "Connection Ok";
} else {
    echo "Connection Fails" . mysqli_connect_error();
}
?>