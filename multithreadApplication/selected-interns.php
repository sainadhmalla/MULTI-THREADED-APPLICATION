<?php 
include './includes/auth_state.php';
include './includes/header_department.php';?>
        <div class="container mt-2 pt-3 justify-content-center">
            <div class="banner-carousel-wrap">
                <div id="banner-carousel" class="carousel slide" data-ride="acarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner-item-wrap">
                                <div class="banner-item">
                                    <div class="row w-150">
                                        <div class="col-lg-2 mx-auto">
                                            <div class="img-wrap text-center">
                                                <img src="../images/railways-logo.png" height="150rem" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <div class="banner-item-content mt-5">
                                                <h2>Internships in Indian Railways</h2>
                                                <p class="lead">
                                                    <b>SuperSkill your Future!</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mx-auto">
                                            <div class="img-wrap text-center">
                                                <img src="../images/mantriji-img.png" height="150rem" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        
        </div>

        <div class="main-secondary-container">
            <div class="row">
                <div class="col">
                    <div class="page-header">
                        <h2>Selected Interns</h2>
                    </div>
<div class="profile-list">
<?php 
$zone = $_SESSION['zone'];
$division = $_SESSION['division'];
$category = $_SESSION['department'];
$sql = "SELECT * FROM railways_form m inner join student_register r on m.student_uid = r.student_uid where (m.status = 'selected' or m.status = 'Internship Completed') and m.zone = '$zone' and m.division = '$division' and category = '$category'";
$res = mysqli_query($conn,$sql);
if($res)
{  $x=0;
    while($row = mysqli_fetch_assoc($res)){
                        echo'<div class="profile-item ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="intern">
                                        <img class="img-thumbnail my-auto" src="../uploads/profile_photo/'.$row['student_profile_photo'].'" style="height:30%;width:30%" alt="">
                                        <div class="intern-details">
                                            <a class="intern-name h6" href="view-profile.html">'.$row['student_first_name'].' '.$row['student_middle_name'].' '.$row['student_last_name'].'</a>
                                            <div class="description">
                                                <p>
                                                    <span class="education">'.$row['division'].'</span><br>
                                                    <span class="college">
                                                        <span class="name">'.$row['category'].'t</span>,
                                                        <span class="location">'.$row['project'].'</span><br>
                                                    </span>
                                                    <span class="interest">Reporting Officer</span><br>
                                                    <span class="interest"><a href="mailto:email@abc.com"><i class="fa fa-envelope mr-1"></i>email@abc.com</a> | <a href="tel:9995554444"><i class="fa fa-phone-alt mx-1"></i>9995554444</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-auto">
                                    <div class="additional-attributes">
                                        <div class="btn-wrap">
                                            <a href="assign-work.php?uid='.$row['apply_id'].'" class="btn btn-success view-btn ">Assign Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    if($x % 5 == 0){
                        echo "<div class='intermediate-banner'>
                        <h1>India's #1 <strong>Internship Portal</strong></h1>
                        <img class='banner-image' src='/images/clipart-man.1ac66f7713ffcd10fb4976c258335cdc.png' alt='' />
                    </div>";
                    }
                 $x++;
                }
}
?>    

                    </div>
                </div>
            </div>
        </div>

  <?php include './includes/footer.php';?>     
