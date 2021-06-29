<?php
include './auth.php';
include './includes/header.php';
?>

<div class="main-container mt-4 pt-4">
    <div class="row">
        <div class="col">
            <div class="register-section">
                <div class="section-caption">
                    <h2>Student Application</h2>
                </div>
                <ul class="nav nav-tabs register-tab" id="register-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link form-step3 active" id="form-step3-tab" data-toggle="tab" href="#form-step3" role="tab" aria-controls="form-step3" aria-selected="false">
                            <i class="fas fa-brain  reg-ico"></i>
                            <span class="reg-heading">
                                Step 3
                            </span>
                        </a>
                    </li>
                </ul>


                    <!-- Step 3 -->
                    <div class="tab-pane active" id="form-step3" role="tabpanel" aria-labelledby="form-step3-tab">
                        <div class="container">
                            <div class="row">
                                <div class="container mt-4">
                                    <form id="form3" class="text-center" action="./src/php/main.php" method="post" enctype="multipart/form-data">
                                        <div class="row justify-content-center p-2 ">
                                            <div class="d-block">
                                                <h3 class="px-4">
                                                    Please fill in the below data to get an
                                                    opportunity
                                                    with Indian Railways.
                                                </h3>
                                                <h3 class="pt-2 pb-2 text-center">Help us know you better!</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="d-block">
                                                <h4>
                                                    Skills and Extra Curricular Details<b style="color:red">*</b>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row m-2 p-2 justify-content-center">
                                            <div class="col-md-6">
                                                <label for="skills" class="float-left ">
                                                    <b>
                                                        Skills (eg: Python,
                                                        Matlab)
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_skills" name="student_skills" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="languages" class="float-left ">
                                                    <b>
                                                        Languages Known (eg:
                                                        English, Hindi, Marathi)
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_languages" name="student_languages" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-2 p-2">
                                            <div class="col-md-6">
                                                <label for="internship" class="float-left ">
                                                    <b>
                                                        Internship
                                                        Experience
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea
                                                    name="internship_experience" id="internship_experience" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="activities" class="float-left ">
                                                    <b>
                                                        Extra Curricular
                                                        Activities
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_activites" name="student_activites" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-2 p-2">
                                            <div class="col-md-6">
                                                <label for="certification" class="float-left ">
                                                    <b>
                                                        Certifications
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_certificate" id name="student_certificate" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="career" class="float-left ">
                                                    <b>
                                                        Career Interests
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_carrer_intrest" name="student_carrer_intrest" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-2 p-2">
                                            <div class="col-md-6">
                                                <label for="events" class="float-left ">
                                                    <b>
                                                        Technical Events
                                                    </b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_tech_events" name="student_tech_events" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="research" class="float-left ">
                                                    <b>
                                                        Published Research
                                                    </b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="publication_and_research" name="publication_and_research" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="d-block">
                                                <h4>
                                                    Preferred Work locations for other Internship Opportunities
                                                    (College,
                                                    Home, Favourite Work Location)
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row m-2 p-2 justify-content-center">
                                            <div class="col-md-6">
                                                <label for="priority1" class="float-left ">
                                                    <b>
                                                        Priority 1
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <input id="student_first_location" name="student_first_location" type="text" class="form-control" placeholder="Mumbai">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="priority2" class="float-left ">
                                                    <b>
                                                        Priority 2
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <input id="student_second_location" name="student_second_location" type="text" class="form-control" placeholder="Delhi">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-2 p-2 justify-content-center">
                                            <div class="col-md-6">
                                                <label for="priority3" class="float-left ">
                                                    <b>
                                                        Priority 3
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <input id="student_third_location" name="student_third_location" type="text" class="form-control" placeholder="Kolkata">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="priority4" class="float-left ">
                                                    <b>
                                                        Priority 4
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <input id="student_fourth_location" name="student_fourth_location" type="text" class="form-control" placeholder="Chennai">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row m-2 p-2">
                                            <!--     <div class="col-md-6">
                                                <label for="events" class="float-left ">
                                                    <b>
                                                        Technical Events
                                                    </b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <textarea id="student_tech_events" name="student_tech_events" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6">
                                                <label for="research" class="float-left ">
                                                    <b>
                                                        Government ID
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <div class="input-group input-with-actions">
                                                    <input type="File" class="form-control" name="student_government_id" id="student_government_id" onchange="pdfVaildation3()" placeholder="Government ID" title="Government ID">
                                                </div>
                                            </div>
                                        </div>

                                        <center>
                                            <button type="submit" id="add_skills" name="add_skills" class="btn btn-primary w-50 my-3">
                                                Submit <i class="ml-2 fas fa-sign-out-alt"></i>
                                            </button>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Step3 -->

                </div>
                <?php include './includes/footer.php' ?>
                <script>
        $(document).ready(function () {

            $("#image-file").change(function (data) {

                var imageFile = data.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(imageFile);

                reader.onload = function (evt) {
                    $('#profile-img').attr('src', evt.target.result);
                    $('#profile-img').hide();
                    $('#profile-img').fadeIn(650);
                }

            });

        });
    </script>