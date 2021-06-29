<?php include './includes/header.php'; ?>
<div class="tab-pane" id="register-railway" role="tabpanel" aria-labelledby="register-railway-tab">
    <section class="mt-5">
        <div id="coporate_form" class="container md-4">
            <form method="post" class="text-center  p-2" action="./src/php/main.php" id="form_corporate"    enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="meetingPlace" class="float-left"><b>Type of Registration:</b>
                            </label>
                            <select class="form-control" id="railway_organisation" name="railway_organisation">
                                <option value="" selected disabled>Select The Option</option>
                                <option value="Zone">Zone</option>
                                <option value="Division">Division</option>
                                <option value="Workshop">Workshop</option>
                                <option value="Department">Department</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md" id="zone_select">
                        <label for="selectZone" class="float-left"><b>Zone</b> <b style="color:red">*</b></label>
                        <select name="railway_zone" id="railway_zone" class="form-control mb-4" required="">
                            <option value="" disabled selected>Select Zone</option>
                            <script id="zoneTemplate" type="text/x-handlebars-template">
                                {{#each objects}}
                                    <option class="zoneOption" value="{{this.code}}">{{this.name}}</option>
                                {{/each}}
                            </script>
                        </select>
                    </div>
                    <div class="col-md" id="division_name">
                        <label for="selectDivision" class="float-left"><b>Division / Workshop</b> <b style="color:red">*</b></label>
                        <select name="railway_organization" id="railway_organization" class="form-control mb-4" required="">
                            <option value="" disabled selected>Select Division</option>
                            <script id="divisionTemplate" type="text/x-handlebars-template">

                                {{#each objects}}
                                    <option class="divisionOption" value="{{this}}">{{this}}</option>
                                {{/each}}

                            </script>
                            <script id="divisionTemplate1" type="text/x-handlebars-template">
                                <option value="" disabled>Divisions</option>
                                {{#each division}}
                                <option class="divisionOption" value="{{this}}">{{this}}</option>
                                {{/each}}
                                <option value="" disabled>Workshops</option>
                                {{#each workshop}}
                                <option class="workshopOption" value="{{this}}">{{this}}</option>
                                {{/each}}
                            </script>
                        </select>
                    </div>
                    <div class="col-md" id="department_name">
                        <label for="selectCategory" class="float-left"><b>Department</b> <b style="color:red">*</b></label>
                        <select name="railway_department1" id="railway_department1" class="form-control mb-4" required="">
                            <option value="" disabled selected>Select Department</option>
                            <script id="categoryTemplate" type="text/x-handlebars-template">
                                <option value="" disabled selected>Select Department</option>
                                                            {{#each categories}}
                                                            <option class="categoryOption" value="{{this.project_name}}">{{this.project_name}}</option>
                                                            {{/each}}
                            </script>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="fname" class="float-left"><b>First Name</b> <b style="color:red">*</b> </label>
                        <div class="form-group">
                            <input type="text" name="railway_first_name" id="railway_first_name" onchange="validatestrings(this)" class="form-control mb-4" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <label for="lname" class="float-left"><b>Middle Name</b></label>
                        <div class="form-group">
                            <input type="text" name="railway_middle_name" id="railway_middle_name" onchange="validatestrings(this)" class="form-control mb-4" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="col-md">
                        <label for="lname" class="float-left"><b>Last Name</b></label>
                        <div class="form-group">
                            <input type="text" name="railway_last_name" id="railway_last_name" onchange="validatestrings(this)" class="form-control mb-4" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="email" class="float-left"><b>Email</b> <b style="color:red">*</b> </label>
                        <div class="form-group">
                            <input type="email" name="railway_email" id="railway_email" onchange="validateemail(this)" class="form-control mb-4" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <label for="email" class="float-left"><b>Password</b> <b style="color:red">*</b> </label>
                        <div class="form-group">
                            <input type="password" name="railway_password" id="railway_password" class="form-control mb-4" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <label for="email" class="float-left"><b>Confirm Password</b><b style="color:red">*</b> </label>
                        <div class="form-group">
                            <input type="password" onchange="verifypassword()" name="railway_c_password" id="railway_c_password" class="form-control mb-4" placeholder="Password" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <label for="email" class="float-left"><b>Employee ID</b><b style="color:red">*</b> </label>
                        <div class="form-group">
                            <input type="text" name="railway_employid" id="railway_employid" class="form-control mb-4" placeholder="Employee ID" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <label for="email" class="float-left"><b>Contact Number</b><b style="color:red">*</b> </label>
                        <div class="form-group">
                            <input type="text" name="railway_contact_number" id="railway_contact_number" class="form-control mb-4" placeholder="Contact Number" onchange="phonenumber(this)" pattern="[6-9]{1}[0-9]{9}" title="Contact Number" required>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="email" class="float-left"><b>Your Railway Identity Card Image </b><b style="color:red">*</b>
                        </label>
                        <div class="form-group">
                            <input type="file" name="railway_certificate" id="railway_certificate" class="form-control mb-4"  onchange="fileValidation()" placeholder="">
                        </div>
                    </div>
                    <div class="col-md" id="logo" style="display:none">
                        <label for="email" class="float-left"><b>Upload Zone/Division/Workshop Logo Image</b></label> <b></b>
                        <div id="imagePreview"></div>
                        <div class="form-group">
                            <input type="file" name="railway_logo" id="railway_logo" onchange="fileValidation()" class="form-control mb-4" placeholder="Logo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="contactnum" class="float-left"><b>Select Security
                                Question</b><b style="color:red">*</b></label>
                        <select name="railway_security_question" id="railway_security_question" class="form-control">
                            <option value="What Is the Pet Name">What is your the Pet Name
                            </option>
                            <option value="What is the first school Name">What is your first
                                school Name</option>
                            <option value="What is your favourite color">What is your
                                favourite color</option>
                            <option value="What is Your favourite Game">What is Your
                                favourite Game</option>
                            <option value="Who is your favourite Teacher">Who is your
                                favourite Teacher</option>
                        </select>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="email" class="float-left"><b>Answer</b><b style="color:red">*</b></label>
                            <input type="password" name="railway_security_answer" id="railway_security_answer" onchange="validatestrings(this)" class="form-control mb-4" placeholder="Security Answer" required>
                        </div>
                    </div>
                </div>
                <!-- Send button -->
                <center>
                    <button name="railway_register" id="railway_register" class="btn btn-primary w-50" type="submit">Register</button>
                </center>
            </form>
            <script>
                function showanswer() {
                    console.log("ready");
                    var x = document.getElementById("railway_security_answer");
                    console.log(x);
                    if (x.type == "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }

                function showpassword() {
                    var y = document.getElementById("railway_password");
                    console.log(y);
                    if (y.type == "password") {
                        y.type = "text";
                    } else {
                        y.type = "password";
                    }
                }
            </script>
            <script language="javascript">
                print_state("railway_state");
            </script>
            <script>
                function verifypassword() {
                    var password = $("#railway_password").val();
                    var c_password = $("#railway_c_password").val();
                    if (password != c_password) {
                        swal({
                            title: "OOPS!",
                            text: "Password Does Not Match With Confirm password!",
                            icon: "warning",
                            button: "OKAY",
                        });
                        $("#railway_password").val("");
                        $("#railway_c_password").val("");
                    }

                }
            </script>
            <script>
                function recaptchaCallback() {
                    $('#railway_register').removeAttr('disabled');
                };
            </script>
            <script>
                function fileValidation() {
                    var fileInput = document.getElementById('railway_certificate');
                    var filePath = fileInput.value;
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                    if (!allowedExtensions.exec(filePath)) {
                        swal({
                            title: "OOPS!",
                            text: "Only .jpeg,.jpg,.png Files Are Allowed!",
                            icon: "warning",
                            button: "OKAY",
                        });
                        fileInput.value = '';
                        return false;
                    }
                }
            </script>
            <script>
                function pdfValidation() {
                    var fileInput = document.getElementById('railway_certificate');
                    var filePath = fileInput.value;
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                    if (!allowedExtensions.exec(filePath)) {
                        swal({
                            title: "OOPS!",
                            text: "Only .jpeg,.jpg,.png Files Are Allowed!",
                            icon: "warning",
                            button: "OKAY",
                        });
                        fileInput.value = '';
                        return false;
                    }
                }
            </script>
        </div>
        <?php include './includes/footer_registration.php'; ?>
        <script>
            $(document).ready(function() {
                $("#department_name").hide();
                $('#railway_organisation').on('change', function() {
                    $("#railway_organization").find("option").remove();
                    $("#railway_department1").find("option").remove();
                    if (this.value == 'Zone') {
                        $("#division_name").hide();
                        $("#department_name").hide();
                        $("#railway_organization").prop('required', false);
                        $("#railway_department1").prop('required', false);
                    } else if (this.value == 'Department') {
                        $("#department_name").show();
                        $('#division_input').hide();
                        $("#railway_organization").attr("required", true);
                        $("#railway_department1").prop('required', true);
                        $('#logo').hide();
                        $("#logo").prop('required', false);
                    } else {
                        $("#division_name").show();
                        $("#department_name").hide();
                        $('#logo').hide();
                        $("#logo").prop('required', false);
                        $("#railway_organization").attr("required", true);
                        $("#railway_department1").prop('required', false);
                    }
                });
            });
        </script>
