
<?php
include './includes/header.php';
include '../src/php/dbh.php';
$email = $_GET['email'];
$email = base64_decode($email);
$email = mysqli_real_escape_string($conn,$email);
$sql = "UPDATE railways_register set railway_account_status  = 'verified' where railway_email ='$email'";
$res = mysqli_query($conn,$sql);
if($res){
    echo '<div class="alert alert-success" role="alert">
    Your account has been activated Please Login
  </div>';
}
else{
    echo 'Account could not be verified';
}
