<?php
session_start();
if (session_id() != '') 
{
include './includes/header_department.php';
}
?>
<div class="secondary-banner-carousel-wrap">
    <div id="secondary-banner-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="secondary-banner">
                    <div>
                        <h1>Nothing but authentic and <strong>verified companies</strong></h1>
                    </div>
                    <img class="banner-image" src="/images/clipart-opportunity.53b5b84742d7488e8eac1e5b2822b8c2.png" alt="" />
                </div>
            </div>
            <div class="carousel-item">
                <div class="secondary-banner">
                    <div>
                        <h1>Your Internship may turn into <strong>a full time job opportunity</strong></h1>
                    </div>
                    <img class="banner-image" src="/images/clipart-opportunity.53b5b84742d7488e8eac1e5b2822b8c2.png" alt="" />
                </div>
            </div>
            <div class="carousel-item">
                <div class="secondary-banner">
                    <div>
                        <h1>Your dream Internship <strong>at a click</strong></h1>
                        <p>Dream internship from anywhere, anytime for anyone.</p>
                    </div>
                    <img class="banner-image" src="/images/clipart-internship.29578a1f26b7f527c10560d9a7f67adb.png" alt="" />
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#secondary-banner-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#secondary-banner-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="main-secondary-container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h2>Applications</h2>
                <div class="filter">
                    <div class="search-wrap">
                        <select type="text" class="form-control simple-input" placeholder="eg. Front end coding, application development">
                            <option>Select Zone</option>
                            <option>Central Railways</option>
                            <option>Western Railways</option>
                            <option>Northern Railways</option>
                            <option>North Eastern Railways</option>
                            <option>Southern Railways</option>
                        </select>
                        <select type="text" class="form-control simple-input" placeholder="eg. Front end coding, application development">
                            <option>Select Division</option>
                            <option>Mumbai</option>
                            <option>Bhusawal</option>
                            <option>Pune</option>
                            <option>Solapur</option>
                            <option>Nagpur</option>
                        </select>
                        <button class="btn search-btn"><i class="fas fa-search"></i></button>
                    </div>
                    <button class="btn btn-sm btn-link sort-btn">Sort by date applied <i class="fas fa-sort"></i> </button>
                </div>
            </div>
            <div class="profile-list">
                    <?php
                    $type = $_SESSION['department'];
                    $zone = $_SESSION['zone'];
                    $division = $_SESSION['division'];
                    $sql = "SELECT * FROM railways_form m inner join student_register r on m.student_uid = r.student_uid where category = '$type' and division = '$division' and zone = '$zone' and m.status = '0'"; 
		$res = mysqli_query($conn, $sql);
                    $res1 = mysqli_num_rows($res);
                    if ($res1 < 0) {
                        echo '<h5>No Result Found</h5>';
                    } else {
                        if ($res) {
                            while ($row = mysqli_fetch_assoc($res)) {
                    echo
                        '<div class="profile-item ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="intern">
                                        <img class="img-thumbnail" src="/images/photos/photo3.jpg" style="height:30%;width:30%" alt="">
                                        <div class="intern-details">
                                            <h6 class="intern-name">' . $row['student_first_name'] . ' ' . $row['student_middle_name'] . ' ' . $row['student_last_name'] . '</h6>
                                            <div class="description">
                                                <p>
                                                    <span class="education">' . $row['student_course'] . ' ' . $row['student_stream'] . '</span> |
                                                    <span class="college">
                                                        <span class="name">' . $row['institute_name'] . '</span>,
                                                        <span class="location">' . $row['institute_location'].'</span>
                                                        <span class="score">'.$row['student_graduating_marks'].'</span> |
                                                    </span>
                                                    <span class="interest">Looking for 3 months internship</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="additional-attributes">
                                        <div class="skills">
                                            <h6>Project Details</h6>
                                            <p>'.$row['project'].'</p>
                                        </div>

                                        <div class="btn-wrap">
                                            <!-- <button class="btn favourite "><i class="fas fa-star"></i></button> -->
                                            <a href="intern-details.php?uid=' . $row['apply_id'] . '" class="btn btn-primary view-btn ">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

 <?php include './includes/footer.php';?>
