<?php include './auth.php';
include './includes/header.php'; ?>
<div class="main-container mt-4 pt-4">
    <div class="row">
        <div class="col">
            <div class="register-section">
                <div class="section-caption">
                    <h2>Student Application</h2>
                </div>
                <div class="tab-content category-tab-content" id="register-tabContent">
                    <ul class="nav nav-tabs register-tab" id="register-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link form-step2 active" id="form-step2-tab" data-toggle="tab" href="#form-step2" role="tab" aria-controls="form-step2" aria-selected="false">
                                <i class="fas fa-train  reg-ico"></i>
                                <span class="reg-heading">
                                    Step 2
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Step 2 -->
                    <div class="tab-pane active" id="form-step2" role="tabpanel" aria-labelledby="form-step2-tab">
                        <div class="container">
                            <div class="row">
                                <div class="container mt-4">
                                    <form id="form2" action="./src/php/main.php" method="post" class="text-center" enctype="multipart/form-data">
                                        <div class="row justify-content-center">
                                            <input type="hidden" id="student_uid" name="student_uid" value="<?php echo $_SESSION['id'] ?>">
                                            <input type="hidden" id="apply_id" name="apply_id" value="<?php echo $_SESSION['apply_uid'] ?>">
                                            <input type="hidden" id="category" name="category" value="<?php echo $_SESSION['project_category']; ?>">
                                            <input type="hidden" id="zone" name="zone" value="<?php echo $_SESSION['zone'] ?>">
                                            <input type="hidden" id="division" name="division" value="<?php echo $_SESSION['project_division'] ?>">
                                            <input type="hidden" id="project" name="project" value="<?php echo $_SESSION['project'] ?>">
                                            <?php 
                                            if(isset($_SESSION['suggest'])){
                                               echo' <input type="hidden" id="suggest" name="suggest" value="'.$_SESSION['suggest'].'">';
                                            }
                                            ?>
                                            <div class="d-block">
                                                <h4>
                                                    Personal Details<b style="color:red">*</b>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row mt-3 ">
                                            <div class="col-md-4 col-4  offset-md-8">
                                                <img class="img" id="profile-img" height="200px" width="180" src="../images/railways/upload-placeholder.png" alt="your image">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4 col-8 form-group offset-md-8">
                                                <label for="image-file">
                                                    <b>
                                                        Upload an image less than 2MB
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <input class="float-right" type="file" id="profile1" name="profile1" onchange="readURL(this);" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="txtCorrespondenceAddress" class="float-left">
                                                    <b>Correspondence Address</b><b style="color:red">*</b>
                                                </label>
                                                <textarea id="txtCorrespondenceAddress" name="txtCorrespondenceAddress" class="form-control" rows="3" onchange="validatespecialstrings(this)"required></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtPermanentAddress" class="float-left">
                                                    <b>
                                                        Permanent Address
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <textarea id="txtPermanentAddress" name="txtPermanentAddress" onchange="validatespecialstrings(this)"class="form-control" rows="3"required></textarea>

                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-12">
                                                <div class="form-check float-left">
                                                    <input class="form-check-input " type="checkbox" name="chkAddress" id="chkAddress"required>
                                                    <label class="form-check-label" for="chkAddress">
                                                        <b>
                                                            Permanent Address same as Correspondence Address.
                                                        </b>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="txtCorrespondenceMobile" class="float-left">
                                                    <b>
                                                        Mobile No.
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <input type="text"onchange="phonenumber(this)" name="txtCorrespondenceMobile" class="form-control" id="txtCorrespondenceMobile"required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="txtPermanentMobile" class="float-left">
                                                    <b>
                                                        Mobile No. 2
                                                    </b>
                                                </label>
                                                <input type="text" onchange="phonenumber(this)"name="txtPermanentMobile" class="form-control" id="txtPermanentMobile"required>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-6 ">
                                                <label for="txtDOB" class="float-left">
                                                    <b>
                                                        Date of Birth
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <input type="date" width="25%" name="txtDOB" class="form-control" id="txtDOB"required>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="radioGender" class="text-left">
                                                        <b>
                                                            Gender
                                                        </b><b style="color:red">*</b>
                                                    </label>
                                                    <div class="form-check">
                                                        <div class="row justify-content-center">
                                                            <div class="col-3">
                                                                <input class="form-check-input " type="radio" name="radioGender" id="male" name="male" value="male"required>
                                                                <label class="form-check-label" for="male">
                                                                    <b>Male</b>
                                                                </label>
                                                            </div>
                                                            <div class="col-3">
                                                                <input class="form-check-input " type="radio" name="radioGender" id="female" value="female"required>
                                                                <label class="form-check-label" for="female">
                                                                    <b>Female</b>
                                                                </label>
                                                            </div>
                                                            <div class="col-3">
                                                                <input class="form-check-input " type="radio" name="radioGender" id="others" value="female"required>
                                                                <label class="form-check-label" for="others">
                                                                    <b>
                                                                        Others
                                                                    </b>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="d-block">
                                                <h4>
                                                    Educational Qualification(s)<b style="color:red">*</b>
                                                </h4>
                                            </div>
                                        </div>

                                        <!-- Div Table Row  -->
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="qualification" for="qualification">
                                                            <b>
                                                                Qualification
                                                            </b>
                                                        </label>
                                                        <label class="tenth d-block" for="tenth">10th</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="college" for="college">
                                                            <b>
                                                                Name of College/ School
                                                            </b>
                                                        </label>
                                                        <input type="text" name="college-input1" class="form-control inpt" onchange="validatestrings(this)"id="college-input1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="university" for="university">
                                                            <b>
                                                                Univ./Board
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatestrings(this)" name="university-input1" class="form-control inpt" id="university-input1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="marks" for="marks">
                                                            <b>
                                                                Marks (%)
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)" name="marks-input1" class="form-control inpt" id="marks-input1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="year">
                                                            <b>
                                                                Year
                                                            </b>
                                                        </label>
                                                        <input type="text" name="year-input1" class="form-control inpt"onchange="vaildatenumber(this)" id="year-input1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="qualification d-lg-none " for="qualification">
                                                            <b>
                                                                Qualification
                                                            </b>
                                                        </label>
                                                        <label class="diploma d-block"onchange="validatestrings(this)" for="diploma">12th / Diploma</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="college d-lg-none " for="college">
                                                            <b>
                                                                Name of College/ School
                                                            </b>
                                                        </label>
                                                        <input type="text" onchange="validatestrings(this)"name="college-input2" class="form-control inpt" id="college-input2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="university d-lg-none " for="university">
                                                            <b>
                                                                Univ./Board
                                                            </b>
                                                        </label>
                                                        <input type="text" onchange="validatestrings(this)"name="university-input2" class="form-control inpt" id="university-input2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="marks d-lg-none " for="marks">
                                                            <b>
                                                                Marks (%)
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)" name="marks-input2" class="form-control inpt" id="marks-input2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="year d-lg-none ">
                                                            <b>
                                                                Year
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)" name="year-input2" class="form-control inpt" id="year-input2">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="qualification d-lg-none " for="qualification">
                                                            <b>
                                                                Qualification
                                                            </b>
                                                        </label>
                                                        <label class="degree d-block " for="degree">Degree</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="college d-lg-none " for="college">
                                                            <b>
                                                                Name of College/ School
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatestrings(this)" name="college-input3" class="form-control inpt" id="college-input3">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="university d-lg-none " for="university">
                                                            <b>
                                                                Univ./Board
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatestrings(this)" name="university-input3" class="form-control inpt" id="university-input3">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="marks d-lg-none " for="marks">
                                                            <b>
                                                                Marks (%)
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)" name="marks-input3" class="form-control inpt" id="marks-input3">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="year d-lg-none ">
                                                            <b>
                                                                Year
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)" name="year-input3" class="form-control inpt" id="year-input3">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="qualification d-lg-none " for="qualification">
                                                            <b>
                                                                Qualification
                                                            </b>
                                                        </label>
                                                        <label class="masters d-block " for="masters">Masters / PhD</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="college d-lg-none " for="college">
                                                            <b>
                                                                Name of College/ School
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatestrings(this)" name="college-input4" class="form-control inpt" id="college-input4">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group float-lg-left">
                                                        <label class="university d-lg-none " for="university">
                                                            <b>
                                                                Univ./Board
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatestrings(this)" name="university-input4" class="form-control inpt" id="university-input4">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="marks d-lg-none " for="marks">
                                                            <b>
                                                                Marks (%)
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)" name="marks-input4" class="form-control inpt" id="marks-input4">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group float-lg-left">
                                                        <label class="year d-lg-none ">
                                                            <b>
                                                                Year
                                                            </b>
                                                        </label>
                                                        <input type="text"onchange="validatenumber(this)"  name="year-input4" class="form-control inpt" id="year-input4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Div Table Row  -->
                                        <hr>
                                        <div class="row justify-content-center">
                                            <div class="d-block">
                                                <h4>
                                                    Previous Project / Internship Experience
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label for="project-det" class="float-left">
                                                    <b>
                                                        Details of projects undertaken,if any
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <textarea id="project-det" name="project-det" class="form-control mt-1"onchange="validatespecialstrings(this)" rows="3"required></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="present-stat" class="float-left">
                                                    <b>
                                                        Present Status of Projects (Completed, Ongoing etc.)
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <textarea id="present-stat" name="present-stat" class="form-control mt-1"onchange="validatespecialstrings(this)" rows="3"required></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <label for="dis-int" class="float-left">
                                                    <b>
                                                        Discipline(s) in which internship is sought
                                                    </b><b style="color:red">*</b>
                                                </label>
                                                <textarea id="dis-int" name="dis-int"onchange="validatespecialstrings(this)" class="form-control mt-1" rows="3"required></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="rel-info" class="float-left ">
                                                    <b>
                                                        Any other relevant
                                                        information
                                                    </b> <b style="color:red">*</b>
                                                </label>
                                                <textarea name="rel-info" class="form-control" id="rel-info"onchange="validatespecialstrings(this)" rows="3"> </textarea>
                                            </div>

                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-md-12">
                                                <div class="form-check ">
                                                    <input class="form-check-input " type="checkbox" value=""onclick ="terms_changed(this)"id="certificate-script"required>
                                                    <label class="form-check-label" for="certificate-script">
                                                        I certify that the information furnished above is
                                                        true to
                                                        the best of my
                                                        knowledge and belief.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <center>
                                            <button type="submit" id="railways_new" name="railways_new" class="btn btn-primary w-50 my-3" disabled>
                                                Next <i class="ml-2 fas fa-sign-out-alt"></i></button>
                                        </center>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
<?php include './includes/footer.php';?>
<script>
    $(document).ready(function(){
            $("#chkAddress").bind("click",function(o){
                if($("#chkAddress").length){
                    $("#txtPermanentAddress").val($("#txtCorrespondenceAddress").val());
                }
                else{
                    $("#txtPermanentAddress").val("");
                }
            });
        }
    );
</script>
<script>
    function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("railways_new").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("railways_new").disabled = true;
    }
}
</script>

<!-- /Step2 -->
