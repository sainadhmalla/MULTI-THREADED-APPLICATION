<?php
session_start();
if(!isset($_SESSION['type'])){
    header("location:railway_login.php?id=1&task=PlseLogin");
}
?>
