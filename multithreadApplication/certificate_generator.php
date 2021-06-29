<?php
include '../src/php/dbh.php';
include '../assets/phpqrcode/phpqrcode.php';
require('../assets/fpdf181/fpdf.php');
session_start();
$student_name = "";
$uid = $_GET['uid'];
$certificate_id = $_GET['certificate_id'];
$internship_id  = $_GET['internship_id'];
$student_last_name ="";
$institute_name ="";
$organisation ="";
$student_last_name ="";
$start_date = " ";
$end_date = " ";
$id = $_SESSION['id'];
$user = " ";
$logo="";
$letter = "";
$fpdf = new FPDF('L','mm','A4');
$fpdf->AddPage();
$fpdf->Image('./certificate.png', 0, 0,300 ,210);
/* $sql ="SELECT * FROM railway_register where railway_uid = '$id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res))
{ 
$logo = $row['ulb_logo'];
$authority = $row['ulb_auhority_name'];
} */
$sql = "SELECT * FROM railway_assigned_task t inner join railways_form f on t.apply_id = f.apply_id inner join student_register r on f.student_uid = r.student_uid inner join railway_college_format l on l.internship_id = f.apply_id where t.apply_id = '$internship_id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res))
{   
$student_name = $row['student_first_name'].' '.$row['student_middle_name'].' '.$row['student_last_name'];
$institute_name = $row['institute_name'];
$start_date = $row['starting_date'];
$working_area = $row['working_area'];
$end_date = $row['ending_date'];
$user = $_SESSION['user'];
$date1 = date("Y/m/d");
$certificate_id = $row['certificate_id'];
$timestamp = strtotime($date1);
$date = date("d-m-Y", $timestamp);
} 
$txt = 'This is to certify that Mr./Ms.'.$student_name.' a graduate of '.$institute_name.' has successfully completed his/her Internship with '.$organisation.' from '.$start_date.' to '.$end_date.'. During the period of Internship, he/ she worked and assisted the '.$organisation.'in research/design/fieldwork related to '.$working_area.' with due diligence and commitment.
';
$organisation1 = str_replace(' ', '', $organisation);
$student_id = $uid.$organisation1;
$date = Date("d/m/y");
$fpdf->SetFont('Times','',14);
$fpdf->Image('../uploads/qrcode/qrcode.png', 210, 50,30 ,30);
$fpdf->ln(100);
$fpdf->Cell(10,8,' ',0,0,'C');
$fpdf->MultiCell(260,9,$txt,0,'C');
$fpdf->ln(15);
$fpdf->Cell(10,10,' ',0,0,1); 
$fpdf->Cell(200,10,'Date :'.$date,0,0,1); 
$fpdf->Cell(1,10,' ',0,0,1); 
$fpdf->Cell(198,5,''.$user.'',0,0);
$fpdf->SetFont('Times','U',15); 
$fpdf->Ln(6);
$fpdf->Cell(200,5,'',0,0);
$fpdf->Ln(10);

$fpdf->Output('../uploads/stu_certificate/'.$internship_id.'.pdf','F');
header("location:./assign-work.php?task=certificate_released&uid=$internship_id");
											
