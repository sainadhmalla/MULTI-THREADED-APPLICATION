<?php
$dbname = "ubl_internship";
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";


//Connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    echo "Error";
    exit();
}
?>