<?php
include '../../../src/php/dbh.php';
require_once("../../../assets/phpqrcode/qrlib.php");
include './send_mail.php';
session_start();
$company_id = mysqli_real_escape_string($conn, $_POST['company_id']);
$student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
$internship_id = mysqli_real_escape_string($conn, $_POST['apply_id']);
$starting_date = mysqli_real_escape_string($conn, $_POST['starting_date']);
$timestamp = strtotime($starting_date);
$starting_date = date("d-m-Y", $timestamp);
$ending_date = mysqli_real_escape_string($conn, $_POST['endDate']);
$timestamp = strtotime($ending_date);
$ending_date = date("d-m-Y", $timestamp);
$working_under = mysqli_real_escape_string($conn, $_POST['working_under']);
$working_area = mysqli_real_escape_string($conn, $_POST['working_area']);
$performance = mysqli_real_escape_string($conn, $_POST['performance']);
$rate = mysqli_real_escape_string($conn, $_POST['rate']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$max = "";
$sql = "SELECT * FROM railway_college_format WHERE company_id = '$company_id'and student_id = '$student_id' and internship_id = '$internship_id'";
$res = mysqli_query($conn, $sql);
$res1 = mysqli_num_rows($res);
if ($res1 < 1) {
  if ($res) {
      $certificate_id = "CERTIFICATE" . uniqid() . time();
      $sql = "INSERT INTO `railway_college_format`(`certificate_id`,`company_id`, `student_id`, `internship_id`, `starting_date`, `ending_date`, `working_under`, `working_area`, `performance`, `rate`) VALUES ('$certificate_id','$company_id','$student_id','$internship_id','$starting_date','$ending_date','$working_under','$working_area','$performance','$rate')";
      echo $sql;
      $res = mysqli_query($conn, $sql);
      if ($res) {
        $status = "Internship completed";
        $name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $subject = "Internship Update";
        $body = "Your Certificate has been released kindly login to your aicte internship account to Download your certificate";
        $res_new = send_mail1($email, $name, $body, $subject);
        if ($res_new) {
          $sql = "UPDATE `railways_form` SET `status`= '$status' WHERE student_uid='$student_id' and apply_id='$internship_id';";
          echo $sql;
          $res = mysqli_query($conn, $sql);
          if ($res) {
            header("location:../../certificate_generator.php?uid=".$student_id."&internship_id=" . $internship_id."&certificate_id=".$certificate_id);
          }
        }
      } else {
        /* header("location:../../assign-work.php?task=cannot_rerelease_certificate&uid='$internship_id'"); */
      }
    } else {
      /* header("location:../../assign-work.php?task=max_interns&uid='$internship_id'"); */
    }
  }else {
  /* header("location:../../assign-work.php?task=cannot_rerelease_certificate&uid='$internship_id'"); */
}
