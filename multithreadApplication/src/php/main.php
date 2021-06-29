<?php
include '../../../src/php/dbh.php';
include './send_mail.php';
if (session_id() == '') {
    session_start();
}
if (isset($_POST['session'])) {
    $apply_id = "APPLY_RAILWAY" . time() . uniqid();
    $zone = mysqli_real_escape_string($conn, $_POST['zoneName']);
    $zone_id = mysqli_real_escape_string($conn, $_POST['zone']);
    $division = mysqli_real_escape_string($conn, $_POST['division']);
    $project_category = mysqli_real_escape_string($conn, $_POST['project_category_name']);
    $project_category_id = mysqli_real_escape_string($conn, $_POST['project_category_id']);
    $project = mysqli_real_escape_string($conn, $_POST['project']);
    $_SESSION['zone_id'] = $zone_id;
    $_SESSION['zone'] = $zone;
    $_SESSION['project_division'] = $division;
    $_SESSION['project_category'] = $project_category;
    $_SESSION['project_category_id'] = $project_category_id;
    $_SESSION['project'] = $project;
    $_SESSION['apply_uid'] = $apply_id;
    echo "success";
}
if (isset($_POST['session_destroy'])) {
    setcookie(session_name(), '', 100);
    session_unset();
    session_destroy();
    $_SESSION = array();
    echo "success";
}
if (isset($_POST['suggested'])) {
    $id = "";
    $suggestion_id = "SUGGESTION" . time() . uniqid();
    $apply_id = "APPLY_RAILWAY" . time() . uniqid();
    $zone = mysqli_real_escape_string($conn, $_POST['zone']);
    $zone_id = mysqli_real_escape_string($conn, $_POST['zone_id']);
    $division = mysqli_real_escape_string($conn, $_POST['division']);
    $project_category = mysqli_real_escape_string($conn, $_POST['project_category_name']);
    $project_category_id = mysqli_real_escape_string($conn, $_POST['project_category_id']);
    $project = mysqli_real_escape_string($conn, $_POST['project']);
    $project_nature = mysqli_real_escape_string($conn, $_POST['project_nature']);
    $project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    $approval = "0";
    $_SESSION['zone'] = $zone;
    $_SESSION['division'] = $division;
    $_SESSION['project_category'] = $project_category;
    $_SESSION['project'] = $project;
    $_SESSION['description'] = $project_description;
    $_SESSION['apply_uid'] = $apply_id;
    $_SESSION['suggest'] = $suggestion_id;
    $sql = "INSERT INTO `railway_project`(`id`, `zone_id`, `division_id`, `category_id`, `project_name`, `project_nature`, `project_description`,`approval`) VALUES ('$id','$zone_id','$division','$project_category_id','$project_nature','$project','$project_description','$approval')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['student_register'])) {
    $student_first_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $student_middle_name = mysqli_real_escape_string($conn, $_POST['student_middle_name']);
    $student_last_name = mysqli_real_escape_string($conn, $_POST['lname']);
    $student_contact = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $student_email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $student_first_location = mysqli_real_escape_string($conn, $_POST['city']);
    $security_question = mysqli_real_escape_string($conn, $_POST['security']);
    $security_question = sha1($security_question);
    $security_answer = mysqli_real_escape_string($conn, $_POST['answer']);
    $value = mysqli_real_escape_string($conn, $_POST['organisation1']);
    if ($value == "yes") {
        $institute_name = mysqli_real_escape_string($conn, $_POST['my_institute_name']);
    } else {
        $institute_name = mysqli_real_escape_string($conn, $_POST['my_institute_name1']);
    }

    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $security_answer = sha1($security_answer);
    $student_languages = "";
    $student_nantionality = "";
    $student_tech_events = "";
    $student_skills = "";
    $student_certificate = "";
    $student_hobbies = "";
    $internship_experience = "";
    $student_areaofintreset = "";
    $student_work_and_volunteer = "";
    $publication_and_research = "";
    $events_and_research = "";
    $student_second_location = "";
    $student_third_location = "";
    $student_fourth_location = "";
    $institute_phone = "";
    $institute_mobile = "";
    $institue_location = "";
    $institue_email = "";
    $student_activites = "";
    $links = "";
    $student_caste = "";
    $student_graduating_year = "";
    $tpo_name = "";
    $year = "";
    $stream = "";
    $student_course = "";
    $course = "";
    $tpo_email = "";
    $student_description = "";
    $status = "";
    $student_profile_photo = "";
    $student_10th_school = "";
    $student_10th_marks = "";
    $student_stream = "";
    $student_year = "";
    $student_carrer_intrest = "";
    $student_events = "";
    $student_sports = "";
    $student_refrence_letter = "";
    $student_10th_year = "";
    $student_12th_school = "";
    $student_12th_marks = "";
    $student_12th_year = "";
    $student_category = "";
    $student_gender = "";
    $student_refrence_mobile = "";
    $student_resume = "";
    $student_cover_letter = "";
    $student_transcript = "";
    $student_other_documents = "";
    $institute_location = "";
    $institute_email = "";
    $student_graduating_marks = "";
    $result_declaration_date = "";
    $student_government_id = "";
    $passed_out = "";
    $student_differently_abled = "";
    $account_status = "";
    // Generating a unique id
    $student_uid = "STU" . uniqid() . time();
    // Hashning the password
    $hash_pwd = md5($password);
    $salt = sha1(uniqid());
    $hash_pwd = sha1($hash_pwd . $salt);
    $sql1 = "SELECT student_email FROM student_register WHERE student_email = '$student_email' ";
    $res1 = mysqli_query($conn, $sql1);
    $res2 = mysqli_num_rows($res1);
    if ($res2 < 1) {
        $sql1 = "SELECT student_id FROM student_register WHERE student_id = '$student_id' ";
        $res1 = mysqli_query($conn, $sql1);
        $res2 = mysqli_num_rows($res1);
        if ($res2 < 1) {
            $sql1 = "SELECT student_contact FROM student_register WHERE student_contact = '$student_contact' ";
            $res1 = mysqli_query($conn, $sql1);
            $res2 = mysqli_num_rows($res1);
            if ($res2 < 1) {
                $sql = "INSERT INTO `student_register`(`student_uid`, `student_first_name`, `student_middle_name`, `student_last_name`, `student_email`, `student_contact`, `student_gender`, `student_course`, `student_stream`, `student_year`, `student_description`, `student_languages`, `student_carrer_intrest`, `student_skills`, `student_certificate`, `student_password`, `salt`, `student_activites`, `student_hobbies`, `internship_experience`, `student_work_and_volunteer`, `publication_and_research`, `events_and_research`, `student_tech_events`, `student_events`, `student_sports`, `student_refrence_mobile`, `student_refrence_letter`, `student_resume`, `student_cover_letter`, `student_transcript`, `student_other_documents`, `student_government_id`, `student_first_location`, `student_second_location`, `student_third_location`, `student_fourth_location`, `student_areaofintreset`, `institute_name`, `institute_phone`, `institute_mobile`, `institute_location`, `institute_email`, `tpo_name`, `tpo_email`, `link`, `student_caste`, `result_declaration_date`, `student_graduating_year`, `student_graduating_marks`, `student_id`, `student_nantionality`, `student_state`, `student_city`, `status`, `student_profile_photo`, `student_10th_school`, `student_10th_marks`, `student_10th_year`, `student_12th_school`, `student_12th_marks`, `student_12th_year`, `student_category`, `security_question`, `security_answer`, `passed_out`, `student_differently_abled`, `account_status`) VALUES('$student_uid', '$student_first_name','$student_middle_name','$student_last_name', '$student_email' ,'$student_contact','$student_gender','$student_course','$student_stream','$student_year','$student_languages','$student_description','$student_carrer_intrest','$student_skills','$student_certificate','$hash_pwd','$salt','$student_activites','$student_hobbies','$internship_experience','$student_work_and_volunteer','$publication_and_research','$events_and_research','$student_tech_events','$student_events','$student_sports','$student_refrence_mobile','$student_refrence_letter','$student_resume','$student_cover_letter','$student_transcript','$student_other_documents','$student_government_id','$student_first_location','$student_second_location','$student_third_location','$student_fourth_location','$student_areaofintreset','$institute_name','$institute_phone','$institute_mobile','$institute_location','$institute_email','$tpo_name','$tpo_email','$links','$student_caste','$result_declaration_date','$student_graduating_year','$student_graduating_marks','$student_id','$student_nantionality','$state','$student_first_location','$status','$student_profile_photo','$student_10th_school','$student_10th_marks','$student_10th_year','$student_12th_school','$student_12th_marks','$student_12th_year','$student_category','$security_question','$security_answer','$passed_out','$student_differently_abled','$account_status')";
                $res = mysqli_query($conn, $sql);
                if ($res) {
                    $name = $student_first_name . ' ' . $student_middle_name . ' ' . $student_last_name;
                    $body = "Thank You For Registration on Internship Portal. Please Verify Your Self by clicking on the link below:";
                    $email = base64_encode($student_email);
                    $body = "https://internship.aicte-india.org/internshipinindianrailways/activate_account_student.php?email=" . $email;
                    $result = send_mail($student_email, $name, $body);
                    if ($result) {
                        header("location:../../login.php?task=RegisteredSuccessfully&railways=Yes");
                    }
                }
            } else {
                header("location:../../register.php?task=duplicatecontact");
            }
        } else {
            header("location:../../register.php?task=duplicatestudentid");
        }
    } else {
        header("location:../../register.php?task=duplicatevalue");
    }
}
if (isset($_POST['railway_register'])) {
    $id = "";
    $railway_organisation = mysqli_real_escape_string($conn, $_POST['railway_organisation']);
    $railway_zone = mysqli_real_escape_string($conn, $_POST['railway_zone']);
    $railway_organization = mysqli_real_escape_string($conn, $_POST['railway_organization']);
    $railway_department = mysqli_real_escape_string($conn, $_POST['railway_department1']);
    $railway_first_name = mysqli_real_escape_string($conn, $_POST['railway_first_name']);
    $railway_second_name = mysqli_real_escape_string($conn, $_POST['railway_middle_name']);
    $railway_last_name = mysqli_real_escape_string($conn, $_POST['railway_last_name']);
    $railway_email = mysqli_real_escape_string($conn, $_POST['railway_email']);
    $railway_password = mysqli_real_escape_string($conn, $_POST['railway_password']);
    $railway_password = md5($railway_password);
    $railway_employid = mysqli_real_escape_string($conn, $_POST['railway_employid']);
    $railway_contact_number = mysqli_real_escape_string($conn, $_POST['railway_contact_number']);
    $railway_state = "";
    $railway_city = "";
    $railway_uid = "RAILWAY" . uniqid() . time();
    if (isset($_FILES["railway_logo"])) {
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["railway_logo"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        $allowed_image_extension = array(
            "PNG",
            "png",
            "jpg",
            "jpeg"
        );

        // Get image file extension
        $file_extension = pathinfo($_FILES["railway_logo"]["name"], PATHINFO_EXTENSION);
        // Validate file input to check if is not empty
        if (!in_array($file_extension, $allowed_image_extension)) {
            header("location:../../register.php?task=invalidfiletype");
        }    // Validate image file size   
        else if (($_FILES["railway_logo"]["size"] > 2000000)) {
            header("location:../../register.php?task=greater");
        }    // Validate image file dimension
        /* else if ($width > "300" || $height > "200") {
            header("location:../../register_new.php?task=invalidheightandwitdth");
        }  */ else {
            $logo = $railway_uid . "." . $file_extension;
            $target = "../../../uploads/logo/" . $logo;
            move_uploaded_file($_FILES["railway_logo"]["tmp_name"], $target);
            $logo = mysqli_real_escape_string($conn, $logo);
        }
    }

    if (isset($_FILES['railway_certificate'])) {
        $targetfolder = "../../../uploads/certificate/";
        $userfile_name = $_FILES['railway_certificate']['name'];
        $allowed_image_extension = array(
            "PNG",
            "png",
            "jpg",
            "jpeg"
        );
        $ext = pathinfo($_FILES["railway_certificate"]["name"], PATHINFO_EXTENSION);
        if (in_array($ext, $allowed_image_extension)) {
            if ($_FILES["railway_certificate"]["size"] < 2097152) {
                $file = $railway_uid . "." . $ext;
                $certificate = $file;
                $targetfolder = $targetfolder . $file;
                move_uploaded_file($_FILES['railway_certificate']['tmp_name'], $targetfolder);
            } else {
                header('location:../../register_railway.php?task=sizeexceeded');
            }
        } else {
            header('location:../../register_railway.php?task=only_pdf_allowed');
        }
    }
    $railway_certificate = mysqli_real_escape_string($conn, $certificate);
    $railway_logo = $logo;
    $railway_security_question = mysqli_real_escape_string($conn, $_POST['railway_security_question']);
    $railway_security_question = md5($railway_security_question);
    $railway_security_answer = mysqli_real_escape_string($conn, $_POST['railway_security_answer']);
    $railway_security_question = md5($railway_security_answer);
    $railway_account_status = 0;
    $railway_date_of_joining = Date("d-m-Y");
    $railway_account_status = 0;
    $sql = "select * from railways_register where railway_email = '$email'";
    $email1 = base64_encode($railway_email);
    $body = "Your account has been created kindly click the below link to activate your account. ";
    $body .= "https://internship.aicte-india.org/internshipinindianrailways/activate_account.php?email=" . $email1;
    $result = send_mail($railway_email, $railway_first_name, $body);
    if ($result) {
        $sql = "INSERT INTO `railways_register`(`id`,`railway_uid`,`railway_organisation`,`railway_first_name`, `railway_second_name`, `railway_last_name`,`railway_zone`,`railway_organization`,`railway_department`, `railway_email`, `railway_password`, `railway_employid`, `railway_contact_number`, `railway_state`, `railway_city`, `railway_certificate`, `railway_logo`, `railway_security_question`, `railway_security_answer`, `railway_date_of_joining`,`railway_account_status`,`railway_state_status`)VALUES('$id','$railway_uid','$railway_organisation','$railway_first_name','$railway_second_name','$railway_last_name','$railway_zone','$railway_organization','$railway_department','$railway_email','$railway_password','$railway_employid','$railway_contact_number','$railway_state','$railway_city','$railway_certificate','$railway_logo','$railway_security_question','$railway_security_answer','$railway_date_of_joining','$railway_account_status','$railway_state_status')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("location:../../railway_login.php?id=1&task=RegisteredSuccessfully");
        }
    } else {
        header("location:../../railway_login.php?id=1&task=NotRegistered");
    }
}
if (isset($_POST['railways_new'])) {
	echo "s";
    $student_uid = mysqli_real_escape_string($conn, $_POST['student_uid']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $project = mysqli_real_escape_string($conn, $_POST['project']);
    $zone = mysqli_real_escape_string($conn, $_POST['zone']);
    $division = mysqli_real_escape_string($conn, $_POST['division']);
    $apply = $applyId = mysqli_real_escape_string($conn, $_POST['apply_id']);
    if (isset($_POST['suggest'])) {
        $suggestion_id = mysqli_real_escape_string($conn, $_POST['suggest']);
    } else {
        $suggestion_id = "";
    }
echo "s";
    if (isset($_FILES["profile1"])) {
        $uid = $_SESSION['id'];
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["profile1"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];

        $allowed_image_extension = array(
            "PNG",
            "png",
            "jpg",
            "jpeg",
        );
        // Get image file extension
        $file_extension = pathinfo($_FILES["profile1"]["name"], PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        if (!in_array($file_extension, $allowed_image_extension)) {
            header("location:../../studentRegistration.php?task=invalidfiletype");
        }    // Validate image file size
        else if (($_FILES["profile1"]["size"] > 2000000)) {
            header("location:../../studentRegistration.php?task=greater");
        } else {
            $logo = $uid . '.' . $file_extension;
            $target = "../../../uploads/railways_photo/" . $logo;
            move_uploaded_file($_FILES['profile1']['tmp_name'], $target);
            $logo = mysqli_real_escape_string($conn, $logo);
echo $logo;
        }
        $profile_photo = mysqli_real_escape_string($conn, $logo);
        $correspondence_address = mysqli_real_escape_string($conn, $_POST['txtCorrespondenceAddress']);
        $txtPermanentAddress = mysqli_real_escape_string($conn, $_POST['txtPermanentAddress']);
        $fax_number = "";
        $txtCorrespondenceMobile = mysqli_real_escape_string($conn, $_POST['txtCorrespondenceMobile']);
        $txtPermanentMobile = mysqli_real_escape_string($conn, $_POST['txtPermanentMobile']);
        $fax_number1 = "";
        $date_of_birth = mysqli_real_escape_string($conn, $_POST['txtDOB']);
        $gender = mysqli_real_escape_string($conn, $_POST['radioGender']);
        $college_input1 = mysqli_real_escape_string($conn, $_POST['college-input1']);
        $university_input1 = mysqli_real_escape_string($conn, $_POST['university-input1']);
        $marks_input1 = mysqli_real_escape_string($conn, $_POST['marks-input1']);
        $year_input1 = mysqli_real_escape_string($conn, $_POST['year-input1']);
        $college_input2 = mysqli_real_escape_string($conn, $_POST['college-input2']);
        $university_input2 = mysqli_real_escape_string($conn, $_POST['university-input2']);
        $marks_input2 = mysqli_real_escape_string($conn, $_POST['marks-input2']);
        $year_input2 = mysqli_real_escape_string($conn, $_POST['year-input2']);
        $college_input3 = mysqli_real_escape_string($conn, $_POST['college-input3']);
        $university_input3 = mysqli_real_escape_string($conn, $_POST['university-input3']);
        $marks_input3 = mysqli_real_escape_string($conn, $_POST['marks-input3']);
        $year_input3 = mysqli_real_escape_string($conn, $_POST['year-input3']);
        $college_input4 = mysqli_real_escape_string($conn, $_POST['college-input4']);
        $university_input4 = mysqli_real_escape_string($conn, $_POST['university-input4']);
        $marks_input4 = mysqli_real_escape_string($conn, $_POST['marks-input4']);
        $year_input4 = mysqli_real_escape_string($conn, $_POST['year-input4']);
        $project_det = mysqli_real_escape_string($conn, $_POST['project-det']);
        $present_stat = mysqli_real_escape_string($conn, $_POST['present-stat']);
        $dis_int = mysqli_real_escape_string($conn, $_POST['dis-int']);
        $rel_info = mysqli_real_escape_string($conn, $_POST['rel-info']);
        $skills = "";
        if (isset($_POST['suggest'])) {
            $status = 'suggest';
        } else {
            $status = '0';
        }

        $sql = "INSERT INTO `railways_form`(`apply_id`,`student_uid`, `category`, `zone`, `division`, `project`, `photo`, `correspondance_address`, `permanent_address`, `mobile_number`, `telephone_number`, `date_of_birth`, `gender`, `name_class_10th`, `board_class_10th`, `marks_class_10th`, `year_class_10th`, `name_class_12th`, `board_class_12th`, `marks_class_12th`, `year_class_12th`, `name_college`, `board_college`, `marks_college`, `year_college`, `name_masters`, `board_masters`, `marks_masters`, `year_masters`, `details_of_project`, `status_of_project`, `descipline_of_internship`, `informaion_any`,`status`,`suggestion_id`) VALUES ('$apply','$student_uid','$category','$zone','$division','$project','$profile_photo','$correspondence_address','$txtPermanentAddress','$txtCorrespondenceMobile','$txtPermanentMobile','$date_of_birth','$gender','$college_input1','$university_input1','$marks_input1','$year_input1','$college_input2','$university_input2','$marks_input2','$year_input2','$college_input3','$university_input3','$marks_input3','$year_input3','$college_input4','$university_input4','$marks_input4','$year_input4','$project_det','$present_stat','$dis_int','$rel_info','$status','$suggestion_id')";
       echo $sql;
	 $res = mysqli_query($conn, $sql);
        if ($res) {
            $email = $_SESSION['student_email'];
            $sql = "SELECT student_skills from student_register where student_email = '$email'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $skills = $row['student_skills'];
                }
                if (empty(trim($skills, " "))) {
                    header("location:../../studentRegistration.php?task=RegisteredSucessfully");
                } else {
                    header("location:../../thankyou.php?task=RegisteredSucessfully");
                }
            }
        }
    }
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $dbusername = "";
    $dbpassword = "";
    $user = "";
    $id = "";
    $salt = "";
    $status = 0;
    $locations = "";
    $student_first_location = "";
    $student_second_location = "";
    $student_third_location = "";
    $student_fourth_location = "";
    $date2 = "";
    $student_course = "";
    $stream = "";
    $status1 = "";
    $password = md5($password);
    if ($username && $password) {
        $query   = ("SELECT student_email,student_password,student_uid,student_first_name,salt,status,account_status,student_first_location,student_second_location,student_third_location,student_fourth_location,student_course,student_stream,result_declaration_date FROM student_register WHERE student_email='$username'");
        $result  = mysqli_query($conn, $query);
        $numrows = mysqli_num_rows($result);
        if ($numrows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dbusername = $row['student_email'];
                $dbpassword = $row['student_password'];
                $id = $row['student_uid'];
                $user = $row['student_first_name'];
                $salt = $row['salt'];
                $status = $row['status'];
                $status1 = $row['account_status'];
                $student_first_location = $row['student_first_location'];
                $student_second_location = $row['student_second_location'];
                $student_third_location = $row['student_third_location'];
                $student_fourth_location = $row['student_fourth_location'];
                $stream = $row['student_stream'];
                $course = $row['student_course'];
                $date2 = $row['result_declaration_date'];
            }
            if ($status1 == 1) {
                if ($username == $dbusername && $dbpassword == sha1($password . $salt)) {
                    $_SESSION['student_email'] = $username;
                    $_SESSION['login_level'] = 1;
                    $_SESSION['id'] = $id;
                    $_SESSION['user'] = $user;
                    $_SESSION['loggedIn_student'] = 1;
                    $_SESSION['location'] = $locations;
                    header("Location: ../../railway.php?task=Successfull");
                    //another file to send request to the next page if values are correct.
                } else {
                    header("location:../../login.php?task=WrongPassword");
                }
            } else {
                header("location:../../login.php?task=NotVerified");
            }
        } else {
            header("location:../../login.php?task=UserNotExist");
        }
    } else {
        header("location:../../login.php?task=PlseEnterUsernameorPassword");
    }
}
if (isset($_POST['login_railway'])) {
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $dbusername = "";
    $dbpassword = "";
    $user = "";
    $id = "";
    $salt = "";
    $status = 0;
    $locations = "";
    $student_first_location = "";
    $student_second_location = "";
    $student_third_location = "";
    $student_fourth_location = "";
    $date2 = "";
    $student_course = "";
    $stream = "";
    $status1 = "";
    $department_id = "";
    $password = md5($password);
    if ($username && $password) {
        $query   = ("SELECT * FROM railways_register WHERE railway_email='$username' ");
        $result  = mysqli_query($conn, $query);
        $numrows = mysqli_num_rows($result);
        if ($numrows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dbusername = $row['railway_email'];
                $dbpassword = $row['railway_password'];
                $id = $row['railway_uid'];
                $user = $row['railway_first_name'];
                $organisation = $row['railway_organisation'];
                $status1 = $row['railway_account_status'];
                $state_status = $row['railway_state_status'];
                $organization = $row['railway_organization'];
                $zone_id = $row['railway_zone'];
                $department = $row['railway_department'];
                $query1   = ("SELECT zone_name FROM railway_zone WHERE zone_code ='$zone_id'");
                $result1  = mysqli_query($conn, $query1);
                while ($row = mysqli_fetch_assoc($result1)) {
                    $zone = $row['zone_name'];
                }
                $query2   = ("SELECT id FROM `railway_project_categories` WHERE organisation_name ='$organization' and project_category = '$department'");
                $result2  = mysqli_query($conn, $query2);
                while ($row = mysqli_fetch_assoc($result2)) {
                    $department_id = $row['id'];
                }
            }
            if ($state_status == '1') {
                if ($status1 == 'verified') {
                    if ($username == $dbusername && $dbpassword == $password) {
                        $_SESSION['email'] = $username;
                        $_SESSION['login_level'] = 1;
                        $_SESSION['id'] = $id;
                        $_SESSION['user'] = $user;
                        $_SESSION['type'] = $organisation;
                        $_SESSION['zone'] = $zone;
                        $_SESSION['zone_id'] = $zone_id;
                        $_SESSION['division'] = $organization;
                        $_SESSION['department_id'] = $department_id;
                        $_SESSION['department'] = $department;
                        $_SESSION['location'] = $locations;
                        if ($organisation == "Zone" || $organisation == "Division" || $organisation == "Workshop") {
                            header("Location: ../../railway_approval.php?task=Successfull");
                        } else {
                            header("Location: ../../interns.php?task=Successfull");
                        }
                    } else {
                        header("location:../../railway_login.php?id=1&task=WrongPassword");
                    }
                } else {
                    header("location:../../railway_login.php?id=1&task=NotVerified");
                }
            } else {
                header("location:../../railway_login.php?id=1&task=StateNotVerified");
            }
        } else {
            header("location:../../railway_login.php?id=1&task=UserNotExist");
        }
    } else {
        header("location:../../railway_login.php?task=PlseEnterUsernameorPassword");
    }
}


if (isset($_POST['login_minister'])) {
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $dbusername = "";
    $dbpassword = "";
    $user = "";
    $id = "";
    $salt = "";
    $status = 0;
    $locations = "";
    $student_first_location = "";
    $student_second_location = "";
    $student_third_location = "";
    $student_fourth_location = "";
    $date2 = "";
    $student_course = "";
    $stream = "";
    $status1 = "";
    $password = md5($password);
    if ($username && $password) {
        $query   = ("SELECT * FROM railway_login  WHERE railway_email='$username'");
        $result  = mysqli_query($conn, $query);
        $numrows = mysqli_num_rows($result);

        if ($numrows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dbusername = $row['railway_email'];
                $dbpassword = $row['railway_password'];
                $organisation = $row['railway_organisation'];
                $user = $row['railway_first_name'] . ' ' . $row['railway_middle_name'] . ' ' . $row['railway_last_name'];
                $locations = $row['railway_city'];
            }
            if ($username == $dbusername && $dbpassword == $password) {
                $_SESSION['email'] = $username;
                $_SESSION['login_level'] = 1;
                $_SESSION['id'] = $id;
                $_SESSION['user'] = $user;
                $_SESSION['type'] = "Minister";
                $_SESSION['location'] = $locations;

                header("Location: ../../report/dashboard.php?task=Successfull");
            } else {
                header("location:../../railway_login.php?id=2&task=WrongPassword");
            }
        } else {
            header("location:../../railway_login.php?id=2&task=UserNotExist");
        }
    } else {
        header("location:../../railway_login.php?id=2&task=PlseEnterUsernameorPassword");
    }
}
if (isset($_POST['approve'])) {
    $status = 1;
    $railway_uid = mysqli_real_escape_string($conn, $_POST['railway_uid']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "UPDATE railways_register SET railway_state_status = '$status' where railway_email = '$email' and railway_uid = '$railway_uid'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $body = "Congaratulation your account has been verified by the state.
        You can login using following link:https://internship.aicte-india.org/internshipinindianrailways/railways";
        $result = send_approval_mail($email, $name, $body);
        if ($result) {
            header("location:../../railway_approval.php?task=approved");
        }
    }
}
if (isset($_POST['disapprove'])) {
    $status = 2;
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $railway_uid = mysqli_real_escape_string($conn, $_POST['railway_uid']);
    $sql = "UPDATE railways_register SET railway_state_status = '$status' where railway_uid = '$railway_uid'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $body = "Sorry your state has disapproved your account";
        $result = send_approval_mail($email, $name, $body);
        if ($result) {
            header("location:../../railway_approval.php?task=disapproved");
        }
    }
}
if (isset($_POST['add_skills'])) {
    $id = $_SESSION['id'];
    $student_languages = mysqli_real_escape_string($conn, trim($_POST['student_languages']));
    $student_carrer_intrest = mysqli_real_escape_string($conn, trim($_POST['student_carrer_intrest']));
    $student_skills = mysqli_real_escape_string($conn, trim($_POST['student_skills']));
    $student_certificate = mysqli_real_escape_string($conn, trim($_POST['student_certificate']));
    $student_activites = mysqli_real_escape_string($conn, trim($_POST['student_activites']));
    $internship_experience = mysqli_real_escape_string($conn, trim($_POST['internship_experience']));
    $student_work_and_volunteer = /* mysqli_real_escape_string($conn,trim($_POST['student_work_and_volunteer'])) */ "";
    $publication_and_research = mysqli_real_escape_string($conn, $_POST['publication_and_research']);
    $student_tech_events = mysqli_real_escape_string($conn, trim($_POST['student_tech_events']));
    $student_first_location = mysqli_real_escape_string($conn, trim($_POST['student_first_location']));
    $student_second_location = mysqli_real_escape_string($conn, trim($_POST['student_second_location']));
    $student_third_location = mysqli_real_escape_string($conn, trim($_POST['student_third_location']));
    $student_fourth_location = mysqli_real_escape_string($conn, trim($_POST['student_fourth_location']));
    $government_id = "";
    $refid = $_SESSION['id'];
    if (isset($_FILES['student_government_id'])) {
        $targetfolder = "../../../uploads/government_id/";
        $userfile_name = $_FILES['student_government_id']['name'];
        $ext = substr($userfile_name, strrpos($userfile_name, '.') + 1);
        $uploadsize = 1000000;
        $size = $_FILES['student_government_id']['size'];
        if ($size < $uploadsize) {
            $allowed_image_extension = array(
                "pdf"
            );
            // Get image file extension
            $file_extension = pathinfo($_FILES["student_government_id"]["name"], PATHINFO_EXTENSION);
            // Validate file input to check if is not empty
            if (in_array($file_extension, $allowed_image_extension)) {
                $file = "government_id" . $refid . "." . $ext;
                $government_id = $file;
                $targetfolder = $targetfolder . $file;
                move_uploaded_file($_FILES['student_government_id']['tmp_name'], $targetfolder);
                $government_id = mysqli_real_escape_string($conn, $government_id);
            } else {
                header('location:../../edit_profile_user.php?task=pdfnotUploaded');
            }
        } else {
            header('location:../../edit_profile_student.php?task=FileSizeExceeded');
        }
    }
    $student_sports = /* mysqli_real_escape_string($conn,trim($_POST['student_sports'])); */ "";
    $sql = "UPDATE `student_register` SET `student_languages`='$student_languages',`student_carrer_intrest`='$student_carrer_intrest',`student_skills`='$student_skills',`student_certificate`='$student_certificate',`student_activites`='$student_activites',`internship_experience`='$internship_experience', `student_work_and_volunteer`='$student_work_and_volunteer', `publication_and_research`='$publication_and_research',`student_tech_events`='$student_tech_events', 
    `student_sports` = '$student_sports',`student_first_location` = '$student_first_location', `student_second_location` = '$student_second_location', `student_third_location` = '$student_third_location', `student_fourth_location` = '$student_fourth_location',`student_government_id` = '$government_id' WHERE student_uid = '$id'
    ";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:../../thankyou.php?task=updated');
    }
}

if (isset($_POST['select'])) {
    $status = 'selected';
    $apply_id = mysqli_real_escape_string($conn, $_POST['apply_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "UPDATE railways_form SET status = '$status' where apply_id = '$apply_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $body = "Congratulation You have selected  for the internship.You will be notified once you will be assinged the work";
        $result = send_update_mail($email, $name, $body);
        if ($result) {
            header("location:../../selected-interns.php?task=selected");
        }
    }
}
if (isset($_POST['deselect'])) {
    $status = 'deselect';
    $apply_id = mysqli_real_escape_string($conn, $_POST['apply_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "UPDATE railways_form SET status = '$status' where apply_id = '$apply_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $body = "Unfortunetly Your Selected project was not selected for the internship.Try Next time With better idea";
        $result = send_update_mail($email, $name, $body);
        if ($result) {
            header("location:../../interns.php?task=deselected");
        }
    }
}
if (isset($_POST['offer_letter'])) {
    $start_date = mysqli_real_escape_string($conn, trim($_POST['start_date']));
    if (!isset($_POST['start_date']) || !strtotime($_POST['start_date'])) {
        header("location:../../interview_management.php?error=invalidstartdate");
    }
    $timestamp = strtotime($start_date);
    $start_date = date("d-m-Y", $timestamp);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
    $timestamp = strtotime($end_date);
    $end_date = date("d-m-Y", $timestamp);
    $address1 = mysqli_real_escape_string($conn, $_POST['address2']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $company_id = mysqli_real_escape_string($conn, $_POST['company_id']);
    $apply_id = mysqli_real_escape_string($conn, $_POST['apply_id']);
    $contact_info = mysqli_real_escape_string($conn, $_POST['contact_info']);
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $working_hours = mysqli_real_escape_string($conn, $_POST['working_hours']);
    $reporting_officer = mysqli_real_escape_string($conn, $_POST['reporting_officer']);
    $id = " ";
    $sql = "INSERT INTO `railway_letter_format`(`id`,`company_id`, `apply_id`,`student_id`, `starting_date`, `ending_date`, `address1`, `note`,`contact_info`,`working_hours`,`reporting_officer`) VALUES  ('$id','$company_id','$apply_id','$student_id','$start_date','$end_date','$address1','$note','$contact_info','$working_hours','$reporting_officer')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $body = "Your Offer Letter has been Released";
        $body .= "For Accepting and Rejecting You can Login To your account";
        $subject = "Update On Internship";
        $res_new = send_mail1($email, $name, $body, $subject);
        $status = "Offer Letter Released";
        if ($res_new) {
            $sql_new = "UPDATE `railways_form` SET `status`='$status' WHERE  apply_id = '$apply_id' and student_uid = '$student_id'";
            $res1 = mysqli_query($conn, $sql_new);
            if ($res1) {
                header("location:../../offer_generator.php?uid=" . $apply_id . "&task=assigned");
            }
        }
    }
}
if (isset($_POST['add_zone'])) {
    $id = "";
    $zone_code = mysqli_real_escape_string($conn, $_POST['zone_code']);
    $zone_name = mysqli_real_escape_string($conn, $_POST['zone_name']);
    $sql = "INSERT INTO `railway_zone`(`id`, `zone_code`, `zone_name`) VALUES ('$id','$zone_code','$zone_name')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['add_division'])) {
    $id = "";
    $zone_code = mysqli_real_escape_string($conn, $_POST['zone_code']);
    $division_name = mysqli_real_escape_string($conn, $_POST['division_name']);
    $sql = "INSERT INTO `railway_division`(`id`, `zone_code`, `division_name`) VALUES ('$id','$zone_code','$division_name')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['add_project'])) {
    $id = "";
    $zone_id = mysqli_real_escape_string($conn, $_POST['zone_id']);
    $division_id = mysqli_real_escape_string($conn, $_POST['division_id']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $project_nature = mysqli_real_escape_string($conn, $_POST['project_nature']);
    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    $approval = "0";
    $sql = "INSERT INTO `railway_project`(`id`, `zone_id`, `division_id`, `category_id`, `project_name`, `project_nature`, `project_description`,`approval`) VALUES ('$id','$zone_id','$division_id','$category_id','$project_name','$project_nature','$project_description','$approval')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['update_project'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $zone_id = mysqli_real_escape_string($conn, $_POST['zone_id']);
    $division_id = mysqli_real_escape_string($conn, $_POST['division_id']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $project_nature = mysqli_real_escape_string($conn, $_POST['project_nature']);
    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    $sql = "UPDATE `railway_project` set zone_id = '$zone_id', division_id = '$division_id',category_id = '$category_id',project_name = '$project_name',project_nature = '$project_nature',project_description = '$project_description' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['approve_project'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $status = 'approved';
    $sql = "UPDATE `railway_project` set approval = '$status' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:../../project_approval.php?task=approved");
    }
}
if (isset($_POST['disapprove_project'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $status = 'disapproved';
    $sql = "UPDATE `railway_project` set approval = '$status' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:../../project_approval.php?task=disapproved");
    }
}
if (isset($_POST['approve_project_department'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $status = '1';
    $sql = "UPDATE `railway_project` set approval = '$status' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['disapprove_project_department'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $status = 'disapproved';
    $sql = "UPDATE `railway_project` set approval = '$status' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:../../");
    }
}

if (isset($_POST['delete_project'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "Update railway_project set approval = 'deleted' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "success";
    }
}
if (isset($_POST['add_project_student'])) {
    $id = mysqli_real_escape_string($conn, $_POST['']);
    $sql = "Delete from railway_project where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:../../");
    }
}
if (isset($_POST['assign'])) {
    $assign_id = "ASSIGN" . time() . uniqid();
    $apply_id = mysqli_real_escape_string($conn, $_POST['apply_id']);
    $assign_by = mysqli_real_escape_string($conn, $_POST['assign_by']);
    $project = mysqli_real_escape_string($conn, $_POST['project']);
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $completion_date = mysqli_real_escape_string($conn, $_POST['completion_date']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);
    $assigner = mysqli_real_escape_string($conn, $_POST['assigner']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $status = 'Ongoing';
    $date = new DateTime();
    $timestamp = $date->getTimestamp();
    $sql = "INSERT INTO `railway_assigned_task`(`assign_id`, `apply_id`, `assigned_by`, `project`, `task`, `completion_date`, `notes`, `status`, `timestamp`,`assigner_name`,`designation`) VALUES ('$assign_id','$apply_id','$assign_by','$project','$task','$completion_date','$notes','$status','$timestamp','$assigner','$designation')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:../../assign-work.php?uid=" . $apply_id . "&task=assigned");
    }
}
