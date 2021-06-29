<?php
session_start();
if(!isset($_SESSION['loggedIn_student'])){
    header("location:login.php?task=PlseLogin");
}
?>
