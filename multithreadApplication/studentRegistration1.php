<?php include './header.php';   ?>

        <div class="main-container mt-4 pt-4">
            <div class="row">
                <div class="col">
                    <div class="register-section">
                        <div class="section-caption">
                            <h2>Student Application</h2>
                        </div>
                        <ul class="nav nav-tabs register-tab" id="register-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link form-step1 active" id="form-stem1-tab" data-toggle="tab"
                                    href="#form-step1" role="tab" aria-controls="form-step1" aria-selected="false">
                                    <i class="fas fa-user-graduate  reg-ico"></i>

                                    <span class="reg-heading">
                                        Step 1
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link form-step2" id="form-step2-tab" data-toggle="tab" href="#form-step2"
                                    role="tab" aria-controls="form-step2" aria-selected="false">
                                    <i class="fas fa-train  reg-ico"></i>
                                    <span class="reg-heading">
                                        Step 2
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link form-step3" id="form-step3-tab" data-toggle="tab" href="#form-step3"
                                    role="tab" aria-controls="form-step3" aria-selected="false">
                                    <i class="fas fa-brain  reg-ico"></i>
                                    <span class="reg-heading">
                                        Step 3
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content category-tab-content" id="register-tabContent">
                            <!-- Step 1 -->
                            <div class="tab-pane active" id="form-step1" role="tabpanel"
                                aria-labelledby="form-step1-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="container mt-4">
                                            <form id="form1" method="post" class="text-center"
                                                action="./src/php/main.php">
                                                <!-- Name -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <h3>
                                                            If you have already Registered with AICTE Internship
                                                            Portal, <a class="text-primary" href="./login.html"
                                                                target="_blank">Click Here</a> to
                                                            Login.
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-6 ">
                                                        <input type="radio" class="mx-2" name="organisation1" id="id1"
                                                            value="yes" required="">AICTE Affiliated
                                                        Organisation
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="radio" class="mx-2" value="no" name="organisation1"
                                                            id="id2">Non AICTE
                                                        Affiliated Organisation
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md" id="id3">
                                                        <label for="fname" class="float-left">
                                                            <b>
                                                                University/College/Institute
                                                                Name
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" name="my_institute_name"
                                                            id="my_institute_name" class="form-control mb-4"
                                                            placeholder="University/College/Institute Name" required="">
                                                    </div>
                                                    <div class="col-md" id="id4" style="display:none">
                                                        <label for="fname" class="float-left">
                                                            <b>
                                                                University/College/Institute
                                                                Name
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" onchange="validatespecialstrings1(this)"
                                                            id="my_institute_name1" name="my_institute_name1"
                                                            class="form-control mb-4"
                                                            placeholder="University/College/Institute Name" required="">
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="lname" class="float-left">
                                                            <b>
                                                                Student ID
                                                                (Enrolment Number)
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" name="student_id"
                                                            onchange="function validatestringsandnumber1(this)"
                                                            id="student_id" maxlength="14" class="form-control mb-4"
                                                            placeholder="Student ID (Enrolment Number)" required="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="fname" class="float-left">
                                                            <b>First Name</b>
                                                            <b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" name="fname" id="fname"
                                                            onchange="validatestrings1(this)" class="form-control mb-4"
                                                            placeholder="First Name" required="">
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="fname" class="float-left">
                                                            <b>
                                                                Middle
                                                                Name
                                                            </b>
                                                        </label>
                                                        <input type="text" name="student_middle_name"
                                                            id="student_middle_name" onchange="validatestrings1(this)"
                                                            class="form-control mb-4" placeholder="Middle Name">
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="lname" class="float-left">
                                                            <b>
                                                                Last
                                                                Name
                                                            </b>
                                                        </label>
                                                        <input type="text" name="lname"
                                                            onchange="validatestrings1(this)" id="lname"
                                                            class="form-control mb-4" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="state" class="float-left"><b>State/UT</b><b
                                                                style="color:red">*</b> </label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" name="state" id="state"onchange="validatestrings(this)" class="form-control mb-4 placeholder="State" required> -->
                                                            <select onchange="print_city('city', this.selectedIndex);"
                                                                id="state" name="state" class="form-control"
                                                                required="">
                                                                <option value="">Select State</option>
                                                                <option value="Andaman &amp; Nicobar">
                                                                    Andaman
                                                                    &amp; Nicobar
                                                                </option>
                                                                <option value="Andhra Pradesh">
                                                                    Andhra Pradesh
                                                                </option>
                                                                <option value="Arunanchal Pradesh">
                                                                    Arunanchal
                                                                    Pradesh
                                                                </option>
                                                                <option value="Assam">Assam</option>
                                                                <option value="Bihar">Bihar</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Chhattisgarh">
                                                                    Chhattisgarh
                                                                </option>
                                                                <option value="Dadra Nagar &amp; Haveli">
                                                                    Dadra
                                                                    Nagar &amp; Haveli
                                                                </option>
                                                                <option value="Daman &amp; Diu">
                                                                    Daman &amp; Diu
                                                                </option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Goa">Goa</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Haryana">Haryana</option>
                                                                <option value="Himachal Pradesh">
                                                                    Himachal
                                                                    Pradesh
                                                                </option>
                                                                <option value="Jammu &amp; Kashmir">
                                                                    Jammu &amp;
                                                                    Kashmir
                                                                </option>
                                                                <option value="Jharkhand">Jharkhand</option>
                                                                <option value="Karnataka">Karnataka</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                <option value="Madhya Pradesh">
                                                                    Madhya Pradesh
                                                                </option>
                                                                <option value="Maharashtra">Maharashtra</option>
                                                                <option value="Manipur">Manipur</option>
                                                                <option value="Meghalaya">Meghalaya</option>
                                                                <option value="Mizoram">Mizoram</option>
                                                                <option value="Nagaland">Nagaland</option>
                                                                <option value="Odisha">Odisha</option>
                                                                <option value="Puducherry">Puducherry</option>
                                                                <option value="Punjab">Punjab</option>
                                                                <option value="Rajasthan">Rajasthan</option>
                                                                <option value="Sikkim">Sikkim</option>
                                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                                <option value="Tripura">Tripura</option>
                                                                <option value="Telangana">Telangana</option>
                                                                <option value="Uttar Pradesh">
                                                                    Uttar Pradesh
                                                                </option>
                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                <option value="West Bengal">West Bengal</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-md">
                                                        <label for="city" class="float-left"><b>City</b><b
                                                                style="color:red">*</b> </label>
                                                        <div class="form-group">
                                                            <!--  <input type="text" name="city" id="city" class="form-control mb-4" placeholder="City"required> -->
                                                            <select id="city" name="city" class="form-control"
                                                                required=""></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="contactnum" class="float-left">
                                                            <b>
                                                                Contact
                                                                Number
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" name="contactnum" id="contactnum"
                                                            onchange="phonenumber1(this)" class="form-control mb-4"
                                                            placeholder="Contact Number" required="">
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <label for="email" class="float-left"><b>Email</b><b
                                                                    style="color:red">*</b></label>
                                                            <input type="email" name="email" id="email"
                                                                onchange="validateemail(this)" class="form-control mb-4"
                                                                placeholder="E-mail" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <!-- Email -->
                                                        <label for="" class="float-left"><b>Password</b><b
                                                                style="color:red">*</b></label>
                                                        <input type="password" name="password" id="password"
                                                            onchange="validatespecialstrings1(this)"
                                                            class="form-control mb-4" placeholder="Password">
                                                        <input type="checkbox" onclick="showpassword()" size="15"
                                                            maxlength="20" class="float-left"><span
                                                            class="form-group mx-2"
                                                            style="float:left;line-height: 0.8;">
                                                            Show
                                                            Password
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Email -->
                                                        <label for="" class="float-left">
                                                            <b>
                                                                Confirm
                                                                Password
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="password" name="c_password" id="c_password"
                                                            onchange="verifypassword();" class="form-control mb-4"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="contactnum" class="float-left">
                                                            <b>
                                                                Select
                                                                Security Question
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <select name="security" id="security" class="form-control">
                                                            <option value="What Is the Pet Name">
                                                                What is your
                                                                Pet Name
                                                            </option>
                                                            <option value="What is the first school Name">
                                                                What
                                                                is your first school Name
                                                            </option>
                                                            <option value="What is your favourite color">
                                                                What is
                                                                your favourite color
                                                            </option>
                                                            <option value="What is Your favourite Game">
                                                                What is
                                                                your favourite Game
                                                            </option>
                                                            <option value="Who is your favourite Teacher">
                                                                Who is
                                                                your favourite Teacher
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <label for="email" class="float-left">
                                                                <b>
                                                                    Security
                                                                    Answer
                                                                </b><b style="color:red">*</b>
                                                            </label>
                                                            <input type="password" name="answer" id="answer"
                                                                class="form-control mb-4" placeholder="Security Answer"
                                                                required="">
                                                            <input type="checkbox" onclick="showanswer()" size="15"
                                                                maxlength="20" style="float:left;"><span
                                                                class="form-group mx-2"
                                                                style="float:left;line-height: 0.8;">
                                                                Show
                                                                answer
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-auto my-2">
                                                        <div class="form-group">
                                                            <div class="g-recaptcha" data-callback="recaptchaCallback"
                                                                data-sitekey="6LcKWPUUAAAAAGL492jgqtBtKb_ShabURt7-nzOT"
                                                                required="">
                                                                <div style="width: 304px; height: 78px;">
                                                                    <div>
                                                                        <iframe
                                                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcKWPUUAAAAAGL492jgqtBtKb_ShabURt7-nzOT&amp;co=aHR0cHM6Ly9pbnRlcm5zaGlwLmFpY3RlLWluZGlhLm9yZzo0NDM.&amp;hl=en&amp;v=AFBwIe6h0oOL7MOVu88LHld-&amp;size=normal&amp;cb=tfaf7i8v30ar"
                                                                            width="304" height="78" role="presentation"
                                                                            name="a-7c46h92gpya6" frameborder="0"
                                                                            scrolling="no"
                                                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                                    </div><textarea id="g-recaptcha-response"
                                                                        name="g-recaptcha-response"
                                                                        class="g-recaptcha-response"
                                                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                                </div><iframe style="display: none;"></iframe>
                                                            </div>
                                                            <span id="captcha_error" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <center>
                                                    <!--   <div class="g-recaptcha" data-sitekey="6Lc80fMUAAAAAPKgu09F-bKcpaA-xI4IhyDyloNn" id="grecaptcha"> </div>  <span id="captcha_error" class="text-danger"></span> -->

                                                    <button type="submit" name="student_register" id="student_register"
                                                        class="btn btn-primary w-50" style="margin-top:10px"
                                                        disabled="">
                                                        Register <i class="ml-2 fas fa-sign-out-alt"></i>
                                                    </button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Step1 -->
                            <!-- Step 2 -->
                            <div class="tab-pane" id="form-step2" role="tabpanel" aria-labelledby="form-step2-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="container mt-4">
                                            <form id="form2" class="text-center">
                                                <div class="row mt-3 ">
                                                    <div class="col-md-4 col-4  offset-md-8">
                                                        <img class="img" id="profile-img" height="200px" width="180"
                                                            src="/images/railways/upload-placeholder.png"
                                                            alt="your image">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-4 col-8 form-group offset-md-8">
                                                        <label for="image-file">
                                                            <b>
                                                                Upload an image less than 2MB
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input class="float-right" type="file" id="image-file"
                                                            onchange="readURL(this); ">
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <label for="txtCorrespondenceAddress" class="float-left">
                                                            <b>Correspondence Address</b><b style="color:red">*</b>
                                                        </label>
                                                        <textarea id="txtCorrespondenceAddress" class="form-control"
                                                            rows="3"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="txtPermanentAddress" class="float-left">
                                                            <b>
                                                                Permanent Address
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <textarea id="txtPermanentAddress" class="form-control"
                                                            rows="3"></textarea>

                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-12">
                                                        <div class="form-check float-left">
                                                            <input class="form-check-input " type="checkbox" value=""
                                                                id="chkAddress">
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
                                                        <input type="text" name="txtCorrespondenceMobile"
                                                            class="form-control" id="txtCorrespondenceMobile">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="txtPermanentMobile" class="float-left">
                                                            <b>
                                                                Mobile No.
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" name="txtPermanentMobile"
                                                            class="form-control" id="txtPermanentMobile">
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-6 ">
                                                        <label for="txtDOB" class="float-left">
                                                            <b>
                                                                Date of Birth
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="date" width="25%" name="txtDOB"
                                                            class="form-control" id="txtDOB">
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
                                                                        <input class="form-check-input " type="radio"
                                                                            name="radioGender" id="male" value="male">
                                                                        <label class="form-check-label" for="male">
                                                                            <b>Male</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <input class="form-check-input " type="radio"
                                                                            name="radioGender" id="female"
                                                                            value="female">
                                                                        <label class="form-check-label" for="female">
                                                                            <b>Female</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <input class="form-check-input " type="radio"
                                                                            name="radioGender" id="others"
                                                                            value="female">
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
                                                <div class="row mt-5">
                                                    <div class="col-md-12">
                                                        <label for="user-name" class="float-left">
                                                            <b>
                                                                Educational Qualification(s) (Highest to be mentioned
                                                                first)
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- Div Table Row  -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no" for="sr-no">
                                                                    <b>
                                                                        Sr. No
                                                                    </b>
                                                                </label>
                                                                <label class="tenth" for="tenth">10th</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="qualification" for="qualification">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="qualification-input1"
                                                                    class="form-control inpt" id="qualification-input1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="college" for="college">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="college-input1"
                                                                    class="form-control inpt" id="college-input1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="university" for="university">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="university-input1"
                                                                    class="form-control inpt" id="university-input1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="marks" for="marks">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="marks-input1"
                                                                    class="form-control inpt" id="marks-input1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="year">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="year-input1"
                                                                    class="form-control inpt" id="year-input1">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Sr. No
                                                                    </b>
                                                                </label>
                                                                <label class="diploma" for="diploma">12th / Diploma</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                                                                    id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="qualification d-md-none " for="qualification">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="qualification-input2"
                                                                    class="form-control inpt" id="qualification-input2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="college d-md-none " for="college">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="college-input2"
                                                                    class="form-control inpt" id="college-input2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="university d-md-none " for="university">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="university-input2"
                                                                    class="form-control inpt" id="university-input2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="marks d-md-none " for="marks">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="marks-input2"
                                                                    class="form-control inpt" id="marks-input2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="year d-md-none ">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="year-input2"
                                                                    class="form-control inpt" id="year-input2">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Sr. No
                                                                    </b>
                                                                </label>
                                                                <label class="degree" for="degree">Degree</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                                                                                                                        id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="qualification d-md-none " for="qualification">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="qualification-input3"
                                                                    class="form-control inpt" id="qualification-input3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="college d-md-none " for="college">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="college-input3"
                                                                    class="form-control inpt" id="college-input3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="university d-md-none " for="university">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="university-input3"
                                                                    class="form-control inpt" id="university-input3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="marks d-md-none " for="marks">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="marks-input3"
                                                                    class="form-control inpt" id="marks-input3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="year d-md-none ">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="year-input3"
                                                                    class="form-control inpt" id="year-input3">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Sr. No
                                                                    </b>
                                                                </label>
                                                                <label class="masters" for="masters">Masters / PhD</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                                                                                                                        id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="qualification d-md-none " for="qualification">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="qualification-input4"
                                                                    class="form-control inpt" id="qualification-input4">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="college d-md-none " for="college">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="college-input4"
                                                                    class="form-control inpt" id="college-input4">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="university d-md-none " for="university">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="university-input4"
                                                                    class="form-control inpt" id="university-input4">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="marks d-md-none " for="marks">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="marks-input4"
                                                                    class="form-control inpt" id="marks-input4">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="year d-md-none ">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="year-input4"
                                                                    class="form-control inpt" id="year-input4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <!-- Div Table Row  -->
                                                    <div class="row mt-5">
                                                        <div class="col-md-6">
                                                            <label for="project-det" class="float-left">
                                                                <b>
                                                                    Details of projects undertaken,if any
                                                                </b><b style="color:red">*</b>
                                                            </label>
                                                            <textarea id="project-det" class="form-control mt-1"
                                                                rows="3"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="present-stat" class="float-left">
                                                                <b>
                                                                    Present Status of Projects (Completed, Ongoing etc.)
                                                                </b><b style="color:red">*</b>
                                                            </label>
                                                            <textarea id="present-stat" class="form-control mt-1"
                                                                rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col-md-6">
                                                            <label for="dis-int" class="float-left">
                                                                <b>
                                                                    Discipline(s) in which internship is sought
                                                                </b><b style="color:red">*</b>
                                                            </label>
                                                            <textarea id="dis-int" class="form-control mt-1"
                                                                rows="3"></textarea>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="rel-info" class="float-left ">
                                                                <b>
                                                                    Any other relevant
                                                                    information
                                                                </b> <b style="color:red">*</b>
                                                            </label>
                                                            <textarea name="rel-info" class="form-control" id="rel-info"
                                                                rows="3"> </textarea>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-md-12">
                                                            <div class="form-check ">
                                                                <input class="form-check-input " type="checkbox"
                                                                    value="" id="certificate-script">
                                                                <label class="form-check-label"
                                                                    for="certificate-script">
                                                                    I certify that the information furnished above is
                                                                    true to
                                                                    the best of my
                                                                    knowledge and belief.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <center>
                                                        <button type="submit" id="btnNext"
                                                            class="btn btn-primary w-50 my-3">
                                                            Next <i class="ml-2 fas fa-sign-out-alt"></i></button>
                                                    </center>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Step2 -->
                            <!-- Step 3 -->
                            <div class="tab-pane" id="form-step3" role="tabpanel" aria-labelledby="form-step3-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="container mt-4">
                                            <form id="form3" class="text-center">
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
                                                <div class="row m-2 p-2 justify-content-center">
                                                    <div class="col-md-5" >
                                                        <label for="government-Name" class="float-left ">
                                                            <b>
                                                                Government ID
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <select id="selectGovtId" type="text" class="form-control">
                                                                <option value="aadhar">Aadhar</option>
                                                                <option value="passport">Passport</option>
                                                                <option value="pan">Pan</option>
                                                                <option value="license">Driving License</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7" >
                                                        <label for="number-label" class="float-left ">
                                                            <b>
                                                                Number
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <input id="government-Id" type="text" class="form-control"
                                                                placeholder="8468635454">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row m-2 p-2 justify-content-center">
                                                    <div class="col-md-6" >
                                                        <label for="skills" class="float-left ">
                                                            <b>
                                                                Skills (eg: Python,
                                                                Matlab)
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="skills-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
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
                                                            <textarea id="-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row m-2 p-2">
                                                    <div class="col-md-6" >
                                                        <label for="internship" class="float-left ">
                                                            <b>
                                                                Internship
                                                                Experience
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="internship-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="activities" class="float-left ">
                                                            <b>
                                                                Extra Curricular
                                                                Activities
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="activities-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row m-2 p-2">
                                                    <div class="col-md-6" >
                                                        <label for="certification" class="float-left ">
                                                            <b>
                                                                Certifications
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="certification-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="career" class="float-left ">
                                                            <b>
                                                                Career Interests
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="career-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row m-2 p-2">
                                                    <div class="col-md-6" >
                                                        <label for="events" class="float-left ">
                                                            <b>
                                                                Technical Events
                                                            </b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="events-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="research" class="float-left ">
                                                            <b>
                                                                Published Research
                                                            </b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <textarea id="research-text" type="text" class="form-control"
                                                                placeholder=""></textarea>
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
                                                    <div class="col-md-6" >
                                                        <label for="priority1" class="float-left ">
                                                            <b>
                                                                Priority 1
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <input id="priority1-text" type="text" class="form-control"
                                                                placeholder="Mumbai">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="priority2" class="float-left ">
                                                            <b>
                                                                Priority 2
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <input id="priority2-text" type="text" class="form-control"
                                                                placeholder="Delhi">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row m-2 p-2 justify-content-center">
                                                    <div class="col-md-6" >
                                                        <label for="priority3" class="float-left ">
                                                            <b>
                                                                Priority 3
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <input id="priority3-text" type="text" class="form-control"
                                                                placeholder="Kolkata">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <label for="priority4" class="float-left ">
                                                            <b>
                                                                Priority 4
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <div class="input-group input-with-actions">
                                                            <input id="priority4-text" type="text" class="form-control"
                                                                placeholder="Chennai">
                                                        </div>
                                                    </div>
                                                </div>
                                                <center>
                                                    <button type="submit" id="btnSubmit"
                                                        class="btn btn-primary w-50 my-3">
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
                        <div class="subscription-section mt-4">
                            <div class="section-content order-lg-1">
                                <h3>Key Announcements For Students</h3>
                                <ul class="student-announcements">
                                    <li>Internships for students & fresh engineers</li>
                                    <li>From job seekers to job creators</li>
                                    <li>
                                        Rs 99,300 crore for Education sector in 2020-21 Apprenticeship embedded
                                        courses
                                    </li>
                                    <li>
                                        Online education programmes for students Financing Education Sector [FDI,
                                        External
                                        commercial borrowing]
                                    </li>
                                </ul>

                                <h3>Subscribe to our newsletter</h3>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="student@yourcollege.com"
                                        aria-label="student@yourcollege.com" aria-describedby="subscribe">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary">
                                            Subscribe <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="img-wrap order-lg-0">
                                <img src="/images/modiji.127ecbfe37036defa16c9b7bfcb44ac1.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="main-footer">
                <div class="section internship-places">
                    <h6>Internships by Places</h6>
                    <ul>
                        <li><a href="#">Internship in India</a></li>
                        <li><a href="#">Internship in Delhi</a></li>
                        <li><a href="#">Internship in Bangalore</a></li>
                        <li><a href="#">Internship in Hyderabad</a></li>
                        <li><a href="#">Internship in Mumbai</a></li>
                        <li><a href="#">Internship in Chennai</a></li>
                        <li><a href="#">Internship in Gurgaon</a></li>
                        <li><a href="#">Internship in Kolkata</a></li>
                        <li><a href="#">Virtual Internship</a></li>
                    </ul>
                </div>

                <div class="section internship-stream">
                    <h6>Internships by Stream</h6>
                    <ul>
                        <li><a href="#">Computer Science Internship</a></li>
                        <li><a href="#">Electronics Internship</a></li>
                        <li><a href="#">Mechanical Internship</a></li>
                        <li><a href="#">Civil Internship</a></li>
                        <li><a href="#">Marketing Internship</a></li>
                        <li><a href="#">Chemical Internship</a></li>
                        <li><a href="#">Finance Internship</a></li>
                        <li><a href="#">Summer Research Internship</a></li>
                        <li><a href="#">Campus Ambassador Internship</a></li>
                    </ul>
                </div>

                <div class="section about-us">
                    <h6>About Us</h6>
                    <ul>
                        <li><a href="#">About AICTE Internship portal</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Hire Interns for your company</a></li>
                        <li><a href="#">Team Diary</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>

                <div class="section social">
                    <ul>
                        <li>
                            <a href="#" class="">
                                <i class="fab fa-facebook fa-3x"></i><span class="sr-only">facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <i class="fab fa-twitter fa-3x"></i><span class="sr-only">twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <i class="fab fa-instagram fa-3x"></i><span class="sr-only">instagram</span>
                            </a>
                        </li>
                    </ul>
                    <p class="credit">Made with &#9829; in India | From Students to Students</p>
                </div>
            </div>
        </footer>
    </main>

    <script src="/main.4ca7b78b38bd322a7c2b.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
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
</body>

</html>