<?php

include './dbh.php';
include '../../validate.php';
include './send_mail.php';
session_start();
/* if (isset($_POST['internship_post'])) {
    $advertisement_id = mysqli_real_escape_string($conn, $_POST['adid']);
    $advertisement_id = validatestringsandnumber($advertisement_id);
    if($advertisement_id =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidadid");
    }
    $job_type = mysqli_real_escape_string($conn, $_POST['job_type']);
    $job_type = validatestrings($job_type);
    $internship_type = mysqli_real_escape_string($conn, $_POST['internship__type']);
    $locations = mysqli_real_escape_string($conn, $_POST['locations']);
    $locations = validatestringsandnumber($locations);
    if($locations =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidlocations");
    }
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $title = validatestrings($title);
    if($title =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidtitle");
    }
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $department =  " ";
    if (!empty($_POST['department'])) {
        foreach($_POST['department'] as $selected){
            $department = $department.$selected.',';
        }
    }
    $department = rtrim($department, ",");
    $qualification = " ";
    if (!empty($_POST['qualification'])) {
        foreach($_POST['qualification'] as $selected){
            $qualification = $qualification.$selected.',';
        }
    }
    $qualification = rtrim($qualification, ",");
    $specialisation =" ";
    if (!empty($_POST['specialisation'])) {
        foreach($_POST['specialisation'] as $selected){
            $specialisation = $specialisation.$selected.',';
        }
    }
    $specialisation = rtrim($specialisation, ",");
    
    $description=mysqli_real_escape_string($conn, $_POST['description']);
    $description = validatestringsandnumber($description);
    if($description =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invaliddescription");
    }
    $stiphen = mysqli_real_escape_string($conn, $_POST['stiphen']);
    $stiphen = validatestringsandnumber($description);
    if($stiphen =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidstiphen");
    }
    $eligibility=mysqli_real_escape_string($conn,$_POST['eligibility']);
    $eligibility = validatestringsandnumber($eligibility);
    if($eligibility =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalideligibility");
    }
    $terms_of_enagement=mysqli_real_escape_string($conn,$_POST['terms_of_enagement']);
    $terms_of_enagement = validatestringsandnumber($terms_of_enagement);
    if($terms_of_enagement =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidterms_of_enagement");
    }
    $logistics=mysqli_real_escape_string($conn,$_POST['logistics']);
    $logistics = validatestringsandnumber($logistics);
    if($logistics =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidlogistics");
    }
    $guidelines=mysqli_real_escape_string($conn,$_POST['guidelines']);
    $guidelines = validatestringsandnumber($guidelines);
    if($guidelines =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidguidelines");
    }
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $duration = validatestringsandnumber($duration);
    if($duration =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidduration");
    }
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $email = validateemail($email);
    if($email =="erroremail"){
        header("location:../../simple_post_internship.php?error=Invalidemail");
    }
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $phone = validatephone($phone);
    if($email =="InvalidNumber"){
        header("location:../../simple_post_internship.php?error=Invalidphone");
    }
    $fees = mysqli_real_escape_string($conn, $_POST['fees']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $phone = validatephone($phone);
    if($email =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidphone");
    }
    $id =" ";
    $reservation=" ";
    if (!empty($_POST['reserve'])) {
        foreach($_POST['reserve'] as $selected){
            $reservation = $reservation.$selected.',';
        }
    }
    $reservation = rtrim($reservation, ",");
    static $x=100000000;
    $x++;
    $year=date("Y");
    $internshipId = "INTERNSHIPGOV_".$year.$x;
    $companyId = $_SESSION['id'];
    $sql = "INSERT INTO `post_internship_government`(`id`, `uid`,`company_id`, `advertisement_id`, `job_type`, `internship_type`, `locations`, `title`, `role`, `department`, `qualification`, `specialisation`, `description`, `stiphen`, `eligibility`, `terms_of_enagement`, `logistics`, `guidelines`, `duration`, `phone`, `email`, `fees`, `reservation`, `age`) VALUES ('$id','$internshipId','$companyId','$advertisement_id','$job_type','$internship_type','$locations','$title','$role','$department','$qualification','$specialisation','$description','$stiphen','$eligibility','$terms_of_enagement','$logistics','$guidelines','$duration','$phone','$email','$fees','$reservation','$age')";
    mysqli_query($conn, $sql);
    echo $sql;
    header('Location: ../../internships.php?uid='.$internshipId);
} */

/* if (isset($_POST['post_internship'])) {
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $locations = mysqli_real_escape_string($conn, $_POST['locations']);
    $numberInternRequiried = mysqli_real_escape_string($conn, $_POST['numberInternRequiried']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $stipend = mysqli_real_escape_string($conn, $_POST['stipend']);
    $start = mysqli_real_escape_string($conn, $_POST['startdate']);
    $end = mysqli_real_escape_string($conn, $_POST['end']);
    $contract = mysqli_real_escape_string($conn, $_POST['contract']);
    $whoCanApply = mysqli_real_escape_string($conn, $_POST['whoCanApply']);
    $domain = mysqli_real_escape_string($conn, $_POST['domain']);
    $eligibility = mysqli_real_escape_string($conn, $_POST['eligibility']);
    $perks = mysqli_real_escape_string($conn, $_POST['perks']);
    $certificaion = mysqli_real_escape_string($conn, $_POST['certificaion']);
    $hours = mysqli_real_escape_string($conn, $_POST['hours']);


    $languages = mysqli_real_escape_string($conn, $_POST['languages']);
    $interview = mysqli_real_escape_string($conn, $_POST['interview']);
    $job_type = mysqli_real_escape_string($conn, $_POST['job_type']);

    $internshipId = "INTERNSHIP_".time().uniqid();


    $companyId = $_SESSION['id'];
    

    $attributes = '';


    if (!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $selected){
            $attributes = $attributes.$selected.',';
        }
    }
    $attributes = rtrim($attributes, ",");


    $sql = "INSERT INTO internhips (uid, company_id, type,job_type, title, description, locations, numberInternRequiried, keywords, email, phone, country, company, stipend, start, end, contract, whoCanApply, domain, eligibility, perks, certificaion, hours, languages, interview, attributes) VALUES ('$internshipId' , '$companyId','$type','$job_type','$title', '$description', '$locations', '$numberInternRequiried', '$keywords', '$email', '$phone', '$country', '$company', '$stipend', '$start', '$end', '$contract', '$whoCanApply', '$domain', '$eligibility', '$perks', '$certificaion', '$hours', '$languages', '$interview', '$attributes');";
    mysqli_query($conn, $sql);
    header('Location: ../../automatch.php?uid='.$internshipId);
} */

/* if (isset($_POST['industryProblem_btn'])) {
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $research = mysqli_real_escape_string($conn, $_POST['research']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $solveby = mysqli_real_escape_string($conn, $_POST['solveby']);
    $studentResearcher = mysqli_real_escape_string($conn, $_POST['studentResearcher']);
    $studentStream = mysqli_real_escape_string($conn, $_POST['studentStream']);
    $studentExpertise = mysqli_real_escape_string($conn, $_POST['studentExpertise']);
    $workResearch = mysqli_real_escape_string($conn, $_POST['workResearch']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $stipend = mysqli_real_escape_string($conn, $_POST['stipend']);
    $certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    

    
    $company_uid = $_SESSION['id'];
    echo $_SESSION['id'];

    $sql = "INSERT INTO problem_statements (uid , company_uid,problem, description, location, research, category, solveby, studentResearcher, studentStream, studentExpertise, workResearch, duration, stipend, certificate, level) VALUES ('$uid' , '$company_uid','$problem', '$description', '$location', '$research', '$category', '$solveby', '$studentResearcher', '$studentStream', '$studentExpertise', '$workResearch', '$duration', '$stipend', '$certificate', '$level');";
    mysqli_query($conn, $sql);
    header('Location: ../../solutions.php');
} */
/* Login Code For Student */
if(isset($_POST['login_state']))
{
$username = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$apply_id=mysqli_real_escape_string($conn,$_POST['apply_id']);
$company_id=mysqli_real_escape_string($conn,$_POST['company_id']);
$internship_id=mysqli_real_escape_string($conn,$_POST['internship_id']);
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$salt = " ";
$password=md5($password);

if ($username && $password) {
    $query   = ("SELECT * FROM ministry WHERE email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
        }
        if($username == $dbusername && $dbpassword == $password) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=1;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn_State']=1;
            if($apply_id==1)
            header("location: ../../apply.php?uid=$internship_id&company_id=$company_id");
            else
            header("location: ../../state_approval.php");
             //another file to send request to the next page if values are correct.
        } 
        else{
             header("location: ../../state_login.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../state_login.php?error=UserNotExist");
            }
}
else{
    header("location: ../../state_login.php?error=PlseEnterUsernameorPassword");
    }
} 


/* if(isset($_POST['login_government']))
{

$username = $_POST['email'];
$password = $_POST['password'];
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$password=md5($password);

if ($username && $password) {
    $query   = ("SELECT * FROM ubl_register WHERE ubl_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['ubl_email'];
            $dbpassword = $row['ubl_password'];
            $id=$row['ubl_company_id'];
            $user=$row['ubl_first_name'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=2;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            header("location: ../../index_dashboard.php"); //another file to send request to the next page if values are correct.
        } 
        else{
             header("location: ../../login_government.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login_government.php?error=UserNotExist");
            }
}
else{
    header("location: ../../login.php?error=PlseEnterUsernameorPassword");
    }
}
if(isset($_POST['login_c']))
{
    $username = $_POST['email'];
    $password = $_POST['password'];
    $dbusername = " ";
    $dbpassword = " ";
    $user=" ";
    $id=" ";
    $level=" ";
    $password=md5($password);

if ($username && $password) {
     $query   = ("SELECT * FROM corporate_register WHERE corporate_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $dbusername = $row['corporate_email'];
            $dbpassword = $row['corporate_password'];
            $id=$row['corporate_uid'];
            $user=$row['corporate_first_name'];
            $level = $row['corporate_user_level'];
            $salt = $row['salt'];
        }
        if($username ==$dbusername && $dbpassword == sha1($password.$salt)) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['id']=$id;
            $_SESSION['login_level']=$level;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
             header("location: ../../index_dashboard.php"); //another file to send request to the next page if values are correct.
            exit();
        } 
        else{
            
            header("location: ../../login_corporate.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login_corporate.php?error=UserNotExist");
            }
}
else{
    header("location: ../../login_corporate.php?error=PlseEnterUsernameorPassword");
    }
}

if(isset($_POST['login_dm']))
{
session_start();
$username = $_POST['email'];
$password = $_POST['password'];
$dbusername = " ";
$dbpassword = " ";
$password=md5($password);

if ($username && $password) { 
    $query   = ("SELECT * FROM corporate_register WHERE email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
            $id=$row['uid'];
        }
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['loggedIn']=1;
            $_SESSION['login_level']=3;
            $_SESSION['id']=$id;
            header("location: ../../../Dashboard/index_dashboard.php"); //another file to send request to the next page if values are correct.
            exit();
        } 
        else{
            
            header("location: ../../login.php?error=WrongPassword");
            }
        }
        else {
            header("location: ../../login.php?error=UserNotExist");
            }
}
else{
    header("location: ../../login.php?error=PlseEnterUsernameorPassword");
    }
} */
//corporate register

if(isset($_POST['subscribed'])){
    $id = "";
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $sql = "INSERT INTO `subscription`(`id`,`email`)VALUES('$id','$email')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:../../index.php?task=subscribed");
    }
}
if(isset($_POST['approve'])){
    $status = 1;
    $ulb_company_id = mysqli_real_escape_string($conn,$_POST['ulb_company_id']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sql ="UPDATE ubl_register SET state_approval_status = '$status' where ulb_email = '$email' and ulb_company_id = '$ulb_company_id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        $body = "Congaratulation your account has been verified by the state.
        You can login using following link:https://internship.aicte-india.org/module_ulb/login_government.php?id=1";
       $result= send_approval_mail($email,$name,$body);
        if($result){
            header("location:../../state_approval_new.php?task=approved");
        }
    }
}
if(isset($_POST['disapprove'])){
    $status = 2;
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sql ="UPDATE ubl_register SET state_approval_status = '$status' where ulb_email = '$email'";
    $res = mysqli_query($conn,$sql);
    if($res){
        $body = "Sorry your state has disapproved your account";
       $result= send_approval_mail($email,$name,$body);
        if($result){
            header("location:../../state_approval.php?task=disapproved");
        }
    }
}
if(isset($_POST['delete'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sql ="DELETE FROM ubl_register where ulb_email = '$email'";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    if($res){
            header("location:../../state_approval.php?task=disapproved");
        }
    }
?>
