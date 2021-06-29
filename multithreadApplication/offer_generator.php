<?php
include './includes/auth_state.php';
include '../src/php/dbh.php';
require('../assets/fpdf181/fpdf.php');
$duration=" ";
$id = $_SESSION['id'];
$logo = " ";
$department ="";
$name="";
$starting_date="";
$ending_date="";
$state="";
$city="";
$sql = "Select * From railways_register Where railway_uid = '$id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){
    $logo = $row['railway_logo'];
    $authority=$row['railway_organisation'];
}
$student_id=$_GET['uid'];  
$organisation_name = $_SESSION['department'];
$date1 = date("Y/m/d");
$timestamp = strtotime($date1);
$date = date("d-m-Y", $timestamp);
$sql = "SELECT * FROM railway_assigned_task t inner join railways_form f on t.apply_id = f.apply_id inner join student_register r on f.student_uid = r.student_uid inner join railway_letter_format l on l.apply_id = f.apply_id where t.apply_id = '$student_id'";
$res = mysqli_query($conn,$sql);
$student_id = $student_id;
while($row = mysqli_fetch_assoc($res))
{
$department = $row['division'];
$name = $row['student_first_name'].' '.$row['student_middle_name'].' '.$row['student_last_name'];
$starting_date = $row['starting_date'];
$ending_date = $row['ending_date']; 
$date = Date("d/m/y");
$state = $row['student_state'];
$city = $row['student_city'];
}   
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('./offer.png',-2,-2,215,300);
$pdf->SetFont('Arial','B',15);
/* $pdf->Image('../uploads/railways_photo/STU5ee35b4b507bc1591958347.png',10,10,30,30); */
// Move to the right
$pdf->Ln(60);
$pdf->Cell(85);
// Framed title
$pdf->Cell(55,5,'Offer Letter',0,'C');
$pdf->Cell(70);
// Line break
$pdf->Ln(5);  
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(5);//Line break
$pdf->SetLeftMargin(20);
$pdf->Cell(120, 5, 'Dear Mr/Ms. '.$name.' ', 2,1);
$txt = 'We would like to congratulate you on being selected for Railway Internship as an intern to work and assist in the Department of '.$department.' in '.$organisation_name.' ';
$txt1 = 'We are pleased to offer you an internship for the period of '.$duration.' beginning from '.$starting_date.' to '.$ending_date.'.';
$txt2 = 'During the internship you will be required to discharge the responsibilities allocated by the '.$organisation_name.' in furtherance of your role. The '.$organisation_name.' may also assign additional responsibilities as needed to promote effective learning. The offer is subject to the acceptance of the following terms:';
$txt3 = 'In the course of the internship, you will be required to meet reporting requirements as directed by the reporting officer.';
$txt5 = 'You may be reimbursed for expenses incurred in completion of the assignments at the '.$organisation_name.' discretion with prior approval';
$txt6 = 'You will be required to adhere to professional standards of workplace conduct.';
$txt7 = 'During the course of the internship, you may be given access to sensitive and privileged information in furtherance of the work. You will be required to maintain confidentiality of such information failing which the internship would stand terminated and you may be liable to legal action';
$txt8 = 'The final ownership & responsibility of the reports, designs, tools and other intellectual property generated during the course of the internship will lie with the '.$organisation_name.'. The '.$organisation_name.' may allow use of such property for academic purposes on a case-to-case basis.';
$txt9 = 'During the course of the internship, any dispute arising between you and '.$organisation_name.' will be settled amicably in accordance with the law of the land.';
$txt10 = 'If you agree to the above terms of the offer, please indicate acceptance of the offer letter and below undertaking to the undersigned.';
$txt11 = 'Sincerely, ';
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt,0,'J');
$pdf->Ln(2);
$pdf ->MultiCell(170,5,$txt1,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt2,0,'J');
$pdf->Ln(2);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(1,5,'Deliverables:',0,'U');
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(3);
$pdf->MultiCell(170,9,$txt3,0,'J');
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(1,5,'Stipend and Allowances:',0,'U');
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(4);
$pdf->MultiCell(170,5,$txt5,0,'J');
$pdf->Ln(3);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Workplace Conduct:',0,'U');
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(3);
$pdf->MultiCell(170,9,$txt6,0,'J');
$pdf->Ln(2);
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Confidentiality and Deliverable Ownership:',0,'U');
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(170,5,$txt7,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt8,0,'J');
$pdf->SetFont('Arial', 'BU', 10);
$pdf->Cell(55,5,'Disputes:',0,'U');
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(5);
$pdf->MultiCell(170,5,$txt8,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt9,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt10,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt11,0,'J');
$pdf->Ln(2);
$pdf->Cell(55,5,''.$organisation_name.'',0,'U');
$pdf->Ln(6);
$pdf->Cell(110,5,'Date : '.$date.'',0,'U');
$pdf->Image('../uploads/qrcode/qrcode.png',150, 50 ,30 ,30);
$pdf->AddPage();
$pdf->Image('./offer.png',-2,-2,215,300);
$pdf->SetFont('Arial','B',15);
/* $pdf->Image('../uploads/railways_photo/STU5ee35b4b507bc1591958347.png',10,10,30,30); */
// Move to the right
$pdf->Ln(60);
$pdf->Cell(79);
// Framed title
$pdf->Cell(55,5,'Under Taking',0,'C');
$pdf->Cell(10);
// Line break
$pdf->Ln(2);  
$pdf->SetFont('Arial', '', 9);
// Framed title  
$pdf->SetFont('Arial', '', 9);
$pdf->Ln(9);//Line break
$pdf->MultiCell(170, 5, 'I, '.$name.' R/O '.$state.',' .$city.' who is undergoing an internship at  '.$organisation_name.' , do hereby undertake on this the '.$date.', the following:', 2,1);
$txt = '1.	 I will be present at the premises of the '.$organisation_name.' or any other venue, as notified by the nodal officer/authorized officer of '.$organisation_name.', to undertake tasks assigned to me for the duration of the internship.  I will communicate to the nodal officer/authorized officer should there be any reason or inability to be present. ';
$txt1 = '2.	 I will communicate regularly with the said nodal officer/authorized officer on the progress of the tasks undertaken and furnish the monthly progress report to be evaluated by the said nodal officer/authorized officer.';
$txt2 = '3.	 I understand that any work products/IPR produced during the internship is a property of '.$organisation_name.' and the terms of its use shall be decided at the discretion of the '.$organisation_name.'.';
$txt3 = '4.	 I declare that, I will neither join in any coercive agitation/strike for the purpose of forcing the concerned authorities to solve any problem, but amicably resolve the same through the nodal officer or appropriate grievance redressal mechanisms.';
$txt4 = '5.	 I will adhere to workplace norms and abide by ethical standards followed in '.$organisation_name. '. In the instance of a professional misdemeanour or misconduct I understand that the concerned authorities shall terminate my internship and may take appropriate legal recourse as provided under the law of land.';
$txt5 = '6.	 I declare that, I shall be solely responsible for any act/actions of disrepute and shall be liable for punishment as per the law of the land. I further understand that the '.$organisation_name.' or concerned authorities shall in no way provide any legal support to me and will not be held responsible.';
$txt6 = '7.	 I declare that I have not been convicted or found guilty of any criminal offence or associated with or accomplice to an ongoing criminal investigation.';
$txt8 = '8.	 I declare that I am not suffering from any serious/contagious ailment and/or psychiatric/psychological disorder which may hinder my performance as intern.';
$txt9 = '9.	 I further declare that, my internship shall be terminated forthwith at any stage, if I am found to be ineligible and/or the information provided by me are found to be incorrect or on grounds of misconduct etc. as came to the notice of '.$organisation_name.'.';
$txt10 = '10.  I hereby undertake to inform '.$organisation_name.' and concerned authorities, about my changes in information submitted by me, in the application and any other documents, including changes contact details/addresses/phone nos. etc., from time to time. ';
$txt11 = 'Sincerely, ';
$pdf->Ln(3);
$pdf->MultiCell(170,5,$txt,0,'J');
$pdf->Ln(2);
$pdf ->MultiCell(170,5,$txt1,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt2,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt3,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt4,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt5,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt6,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt7,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt8,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt9,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt10,0,'J');
$pdf->Ln(2);
$pdf->MultiCell(170,5,$txt11,0,'J');
$pdf->Ln(6);
$pdf->Cell(55,5,'Date: '.$date.'',0,'U');
$pdf->Ln(6);
$pdf->Cell(55,5,'Name of Student: '.$name.'',0,'U');
$pdf->Output('../uploads/offer_railway/'.$student_id.'.pdf','F');  
header("location:./assign-work.php?task=offer_generated&uid=".$student_id); 
?>
