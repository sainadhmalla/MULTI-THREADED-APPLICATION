<?php include './includes/header_main.php'; ?>

<?php
$id = $_GET['uid'];
$sql = "SELECT * FROM railways_form m inner join student_register r on m.student_uid = r.student_uid where m.apply_id = '$id'";
$res = mysqli_query($conn, $sql);
$res1 = mysqli_num_rows($res);
if ($res1 < 0) {
    echo '<h5>No Result Found</h5>';
} else {
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {   
            echo '       
        <div class="intern-detail-header">
            <div class="header-details">
                <h1>Civil Engineer</h1>
                <h2>B.Tech, 3rd Year</h2>
                <h2>Application for: Railway track alignment and design - 3 Months</h2>
                <div class="actions">
                </div>
            </div>
        </div>
        <div class="intern-main-info">
            <img class="img-thumbnail" src="/images/photos/photo3.jpg" alt="username">
            <div>
                <h3>' . $row['student_first_name'] . ' ' . $row['student_middle_name'] . ' ' . $row['student_last_name'] . '</h3>
                <p>' . $row['student_city'] . ', ' . $row['student_state'] . '</p>
            </div>
        </div>

        <div class="main-secondary-container">
            <div class="row">
                <div class="col">
                    <div class="intern-detail-body">

                        <div class="grouped-cards mb-3">
                            <div class="card primary">
                                <div class="card-body">
                                    <h4>Selected Zone</h4>
                                    <ul class="list-unstyled list-lined">
                                        <li class="list-group-item">' . $row['zone'] . '</li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="card primary">
                                <div class="card-body">
                                    <h4>Selected Division</h4>
                                    <ul class="list-unstyled list-lined">
                                        <li class="list-group-item">' . $row['division'] . '</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="grouped-cards mb-3">
                            <div class="card highlighted">
                                <div class="card-body">
                                    <h4>Selected Project Category</h4>
                                    <ul class="list-unstyled list-lined">
                                        <li class="list-group-item">' . $row['category'] . '</li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="card highlighted">
                                <div class="card-body">
                                    <h4>Selected Projects</h4>
                                    <ul class="list-unstyled list-lined">
                                        <li class="list-group-item">' . $row['project'] . '</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="grouped-cards mb-3">
                            <div class="card primary">
                                <div class="card-body">
                                    <h4>Date of Birth</h4>
                                    <ul class="list-unstyled list-lined">
                                        <li class="list-group-item">' . $row['date_of_birth'] . '</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grouped-cards mb-3">
                        <div class="card highlighted">
                            <div class="card-body">
                                <h4>Correspondance Adress</h4>
                                <ul class="list-unstyled list-lined">
                                    <li class="list-group-item">' . $row['correspondance_address'] . '</li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="card highlighted">
                            <div class="card-body">
                                <h4>Permanent Address</h4>
                                <ul class="list-unstyled list-lined">
                                    <li class="list-group-item">' . $row['permanent_address'] . '</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grouped-cards mb-3">
                    <div class="card primary">
                        <div class="card-body">
                            <h4>Mobile Number</h4>
                            <ul class="list-unstyled list-lined">
                                <li class="list-group-item">' . $row['mobile_number'] . '</li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="card primary">
                        <div class="card-body">
                            <h4>Telephone Number</h4>
                            <ul class="list-unstyled list-lined">
                                <li class="list-group-item">' . $row['telephone_number'] . '</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grouped-cards mb-3">
                <div class="card primary">
                    <div class="card-body">
                        <h4>Name Of School Class 10th</h4>
                        <ul class="list-unstyled list-lined">
                            <li class="list-group-item">' . $row['name_class_10th'] . '</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card highlighted">
                <div class="card-body">
                    <h4>Board </h4>
                    <ul class="list-unstyled list-lined">
                        <li class="list-group-item">' . $row['board_class_10th'] . '</li>
                    </ul>
                </div>
            </div>
            <div class="card primary">
            <div class="card-body">
                <h4>Marks</h4>
                <ul class="list-unstyled list-lined">
                    <li class="list-group-item">' . $row['marks_class_10th'] . '</li>
                </ul>
            </div>
        </div>            
                <div class="card highlighted">
                    <div class="card-body">
                        <h4>Year</h4>
                        <ul class="list-unstyled list-lined">
                            <li class="list-group-item">' . $row['year_class_10th'] . '</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grouped-cards mb-3">
            <div class="card primary">
                <div class="card-body">
                    <h4>Name Of School Class 12th</h4>
                    <ul class="list-unstyled list-lined">
                        <li class="list-group-item">' . $row['name_class_12th'] . '</li>
                    </ul>
                </div>
            </div>
            <div class="card highlighted">
            <div class="card-body">
                <h4>Board </h4>
                <ul class="list-unstyled list-lined">
                    <li class="list-group-item">' . $row['board_class_12th'] . '</li>
                </ul>
            </div>
        </div>
        <div class="card primary">
        <div class="card-body">
            <h4>Marks </h4>
            <ul class="list-unstyled list-lined">
                <li class="list-group-item">' . $row['marks_class_12th'] . '</li>
            </ul>
        </div>
    </div>            
            <div class="card highlighted">
                <div class="card-body">
                    <h4>Year </h4>
                    <ul class="list-unstyled list-lined">
                        <li class="list-group-item">' . $row['year_class_12th'] . '</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grouped-cards mb-3">
        <div class="card primary">
            <div class="card-body">
                <h4>Name Of College</h4>
                <ul class="list-unstyled list-lined">
                    <li class="list-group-item">' . $row['name_college'] . '</li>
                </ul>
            </div>
        </div>
        <div class="card highlighted">
        <div class="card-body">
            <h4>Board</h4>
            <ul class="list-unstyled list-lined">
                <li class="list-group-item">' . $row['board_college'] . '</li>
            </ul>
        </div>
    </div>
    <div class="card primary">
    <div class="card-body">
        <h4>Marks </h4>
        <ul class="list-unstyled list-lined">
            <li class="list-group-item">' . $row['marks_college'] . '</li>
        </ul>
    </div>
</div>            
        <div class="card highlighted">
            <div class="card-body">
                <h4>Year</h4>
                <ul class="list-unstyled list-lined">
                    <li class="list-group-item">' . $row['year_college'] . '</li>
                </ul>
            </div>
        </div>
    </div>
                    ';
?>
            <div class="card highlighted">
                <?php if (!empty(trim($row['student_description']))) { ?>
                    <div class="card-body">
                        <h4>About Me</h4>
                        <p><?php echo $row['student_description'] ?></p>
                    </div>
                <?php } ?>
            </div>

            <!-- <div class="card">
                <div class="card-body">
                    <h4>Academic Qualification</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Qualification</th>
                                <th>Name of Institute</th>
                                <th>Percentage</th>
                                <th>Year/Date of Result Declaration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td label="Qualification">10th</td>
                                <td label="Name of Institute"><?php echo $row['student_10th_school'] ?></td>
                                <td label="Percentage"><?php echo $row['student_10th_marks'] ?></td>
                                <td label="Year/Date of Result Declaration"><?php echo $row['student_10th_year'] ?></td>
                            </tr>
                            <tr>
                                <td label="Qualification">12th</td>
                                <td label="Name of Institute"><?php echo $row['student_12th_school'] ?></td>
                                <td label="Percentage"><?php echo $row['student_12th_marks'] ?></td>
                                <td label="Year/Date of Result Declaration"><?php echo $row['student_10th_year'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->

            <div class="grouped-cards">
                <div class="card highlighted">
                    <div class="card-body">
                        <h4>Languages Known</h4>
                        <ul class="list-unstyled list-lined">
                            <?php $str = explode(',', $row['student_languages']); {
                                for ($i = 0; $i < sizeof($str); $i++) {
                                    echo '<li class="list-group-item">' . $str[$i] . '</li>';
                                }
                            } ?>
                        </ul>
                    </div>
                </div>

                <div class="card highlighted">
                    <div class="card-body">
                        <h4>Prefered Location</h4>
                        <ul class="list-unstyled list-lined">
                            <li class="list-group-item"><?php echo $row['student_first_location'] ?></li>
                            <li class="list-group-item"><?php echo $row['student_second_location'] ?></li>
                            <li class="list-group-item"><?php echo $row['student_third_location'] ?></li>
                            <li class="list-group-item"><?php echo $row['student_fourth_location'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if (!empty(trim($row['student_skills']))) {  ?>
                <div class="card highlighted">
                    <div class="card-body">
                        <h4>Top Skills</h4>
                        <ul class="list-unstyled row top-skills">
                            <?php
                            $arr = explode(" ", $row['student_skills']);
                            for ($i = 0; $i < sizeof($arr); $i++) {
                                echo '
                                        <li class="col-lg-4">' . $arr[$i] . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty(trim($row['student_certificate']))) {  ?>
                <div class="card">
                    <div class="card-body">
                        <h4>Certification</h4>
                        <p><?php echo $row['student_certificate'] ?></p>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty(trim($row['student_sports']))) {  ?>
                <div class="card">
                    <div class="card-body">
                        <h4>Extracurricular Activities</h4>
                        <p><?php echo $row['student_sports'] ?></p>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty(trim($row['student_events']))) {  ?>
                <div class="card">
                    <div class="card-body">
                        <h4>Achievements</h4>
                        <p><?php echo $row['student_events'] ?> </p>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty(trim($row['student_work_and_volunteer']))) {  ?>
                <div class="card">
                    <div class="card-body">
                        <h4>Seminars / Conferences</h4>
                        <p><?php echo $row['student_work_and_volunteer'] ?></p>
                    </div>
                </div>
            <?php }?>
            <div class="row">
                <div class="col">
                    <div class="btn-wrap">
                        <form action="./src/php/main.php" method="post">
                            <?php $name = $row['student_first_name'] . ' ' . $row['student_middle_name'] . ' ' . $row['student_last_name']; ?>
                            <input type="hidden" name="apply_id" id="apply_id" value="<?php echo $row['apply_id'] ?>">
                            <input type="hidden" name="name" id="name" value="<?php echo $name ?>">
                            <input type="hidden" name="email" id="email" value="<?php echo $row['student_email'] ?>">
                            <button class="btn btn-success" type="submit" name="select" id="select">Accept</button>
                            <button class="btn btn-primary" type="submit" name="deselect" id="deselect">Reject</button>
                        </form>
                    </div>
                </div>
            </div>
<?php
        }
    }
}
?>
<?php include './includes/footer.php'; ?>