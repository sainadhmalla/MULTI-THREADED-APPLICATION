<?php include './includes/header.php';
include './includes/msg.inc.php';  ?>
<div class="main-container mt-4 pt-4">
    <div class="row">
        <div class="col">
            <div class="register-section">
                <div class="section-caption">
                    <h2>Student Register</h2>
                </div>
                <ul class="nav nav-tabs register-tab" id="register-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link register-student active" id="register-student-tab" data-toggle="tab" href="#register-student" role="tab" aria-controls="register-student" aria-selected="false">
                            <i class="fas fa-user-graduate  reg-ico"></i>
                            <span class="reg-heading">
                                Student
                            </span>
                        </a>
                    </li>

                </ul>

                <div class="tab-content category-tab-content" id="register-tabContent">
                    <div class="tab-pane active" id="register-student" role="tabpanel" aria-labelledby="register-student-tab">
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="container mt-4">
                                        <div id="student_form">
                                            <form method="post" class="text-center" action="./src/php/main.php">
                                                <!-- Name -->
                                                <div class="row mb-4">
                                                            <div class="col">
                                                                <h3>
                                                                If you have already registered, <a class="text-primary" href="./login.php" target="_blank">Click Here</a> to Login.</h3>
                                                            </div>
                                                        </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-6 ">
                                                        <input type="radio" class="mx-2" name="organisation1" id="id1" value="yes" required>AICTE Affiliated
                                                        Organisation
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="radio" class="mx-2" value="no" name="organisation1" id="id2">Non AICTE
                                                        Affiliated Organisation
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md" id="id3">
                                                        <label for="fname" class="float-left"><b>University/College/Institute Name</b> <b style="color:red">*</b></label>
                                                        <input type="text" name="my_institute_name" id="my_institute_name" class="form-control mb-4" placeholder="University/College/Institute Name" required>
                                                    </div>
                                                    <div class="col-md" id="id4" style="display:none">
                                                        <label for="fname" class="float-left"><b>University/College/Institute
                                                                Name</b> <b style="color:red">*</b></label>
                                                        <input type="text" onchange="validatespecialstrings(this)" id="my_institute_name1" name="my_institute_name1" class="form-control mb-4" placeholder="University/College/Institute Name" required>
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="lname" class="float-left"><b>Student ID
                                                                (Enrolment Number)</b><b style="color:red">*</b></label>
                                                        <input type="text" name="student_id" onchange="validatestringsandnumber(this)" id="student_id" maxlength="14" class="form-control mb-4" placeholder="Student ID (Enrolment Number)" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="fname" class="float-left"><b>First Name</b>
                                                            <b style="color:red">*</b></label>
                                                        <input type="text" name="fname" id="fname" onchange="validatestrings(this)" class="form-control mb-4" placeholder="First Name" required>
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="fname" class="float-left"><b>Middle
                                                                Name</b></label>
                                                        <input type="text" name="student_middle_name" id="student_middle_name" onchange="validatestrings(this)" class="form-control mb-4" placeholder="Middle Name">
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="lname" class="float-left"><b>Last
                                                                Name</b></label>
                                                        <input type="text" name="lname" onchange="validatestrings(this)" id="lname" class="form-control mb-4" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="state" class="float-left"><b>State/UT</b><b style="color:red">*</b> </label>
                                                        <div class="form-group">
                                                            <select onchange="print_city('city', this.selectedIndex);" id="state" name="state" class="form-control" required>
                                                                <option value="">Select State</option>
                                                                <option value="Andaman &amp; Nicobar">Andaman
                                                                    &amp; Nicobar</option>
                                                                <option value="Andhra Pradesh">Andhra Pradesh
                                                                </option>
                                                                <option value="Arunanchal Pradesh">Arunanchal
                                                                    Pradesh</option>
                                                                <option value="Assam">Assam</option>
                                                                <option value="Bihar">Bihar</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Chhattisgarh">Chhattisgarh
                                                                </option>
                                                                <option value="Dadra Nagar &amp; Haveli">Dadra
                                                                    Nagar &amp; Haveli</option>
                                                                <option value="Daman &amp; Diu">Daman &amp; Diu
                                                                </option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Goa">Goa</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Haryana">Haryana</option>
                                                                <option value="Himachal Pradesh">Himachal
                                                                    Pradesh</option>
                                                                <option value="Jammu &amp; Kashmir">Jammu &amp;
                                                                    Kashmir</option>
                                                                <option value="Jharkhand">Jharkhand</option>
                                                                <option value="Karnataka">Karnataka</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                <option value="Madhya Pradesh">Madhya Pradesh
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
                                                                <option value="Uttar Pradesh">Uttar Pradesh
                                                                </option>
                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                <option value="West Bengal">West Bengal</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label for="city" class="float-left"><b>City</b><b style="color:red">*</b> </label>
                                                        <div class="form-group">
                                                            <!--  <input type="text" name="city" id="city" class="form-control mb-4" placeholder="City"required> -->
                                                            <select id="city" name="city" class="form-control" required>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="contactnum" class="float-left"><b>Contact
                                                                Number</b><b style="color:red">*</b></label>
                                                        <input type="text" name="contactnum" id="contactnum" onchange="phonenumber(this)" class="form-control mb-4" placeholder="Contact Number" required>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <label for="email" class="float-left"><b>Email</b><b style="color:red">*</b></label>
                                                            <input type="email" name="email" id="email" onchange="validateemail(this)" class="form-control mb-4" placeholder="E-mail" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <!-- Email -->
                                                        <label for="" class="float-left"><b>Password</b><b style="color:red">*</b></label>
                                                        <input type="password" name="password" id="password" onchange="validatespecialstrings(this)" class="form-control mb-4" placeholder="Password" required>
                                                        <input type="checkbox" onclick="showpassword1()" size="15" maxlength="20" class="float-left"><span class="form-group mx-2" style="float:left;line-height: 0.8;">Show
                                                            Password</span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Email -->
                                                        <label for="" class="float-left"><b>Confirm
                                                                Password</b><b style="color:red">*</b></label>
                                                        <input type="password" name="c_password" id="c_password" onchange="verifypassword();" class="form-control mb-4" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <label for="contactnum" class="float-left"><b>Select
                                                                Security Question</b><b style="color:red">*</b></label>
                                                        <select name="security" id="security" class="form-control">
                                                            <option value="What Is the Pet Name">What is your
                                                                Pet Name</option>
                                                            <option value="What is the first school Name">What
                                                                is your first school Name
                                                            </option>
                                                            <option value="What is your favourite color">What is
                                                                your favourite color
                                                            </option>
                                                            <option value="What is Your favourite Game">What is
                                                                your favourite Game</option>
                                                            <option value="Who is your favourite Teacher">Who is
                                                                your favourite Teacher
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <label for="email" class="float-left"><b>Security
                                                                    Answer</b><b style="color:red">*</b></label>
                                                            <input type="password" name="answer" id="answer" class="form-control mb-4" placeholder="Security Answer" required>
                                                            <input type="checkbox" onclick="showanswer()" size="15" maxlength="20" style="float:left;"><span class="form-group mx-2" style="float:left;line-height: 0.8;">Show
                                                                answer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <center>
                                                    <button type="submit" name="student_register" id="student_register" class="btn btn-primary w-50" style="margin-top:10px">
                                                        Register <i class="ml-2 fas fa-sign-out-alt"></i></button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT Distinct CURRENT_INSTITUTE_NAME FROM aicte_approved_institute";
                            $res = mysqli_query($conn, $sql);
                            if ($res) {
                                while ($row = mysqli_fetch_array($res)) {
                                    $title[] = $row['CURRENT_INSTITUTE_NAME'];
                                }
                                $title = json_encode($title);
                            }
                            ?>

                            <script language="javascript">
                                print_state("state");
                            </script>
                            <script>
                                function showanswer() {
                                    console.log("ready");
                                    var x = document.getElementById("answer");
                                    console.log(x);
                                    if (x.type == "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }

                                function showpassword1() {
                                    var y = document.getElementById("password");
                                    console.log(y);
                                    if (y.type == "password") {
                                        y.type = "text";
                                    } else {
                                        y.type = "password";
                                    }
                                }
                            </script>
                            <script>
                                $("#id1").change(function() {
                                    if (document.getElementById('id1').checked) {
                                        $("#id3").show();
                                        $('#my_institute_name1').prop('required', false);
                                        $('#my_institute_name').prop('required', true);
                                        $("#id4").hide();
                                    }
                                });

                                $("#id2").change(function() {
                                    if (document.getElementById('id2').checked) {
                                        $("#id4").show();
                                        $('#my_institute_name1').prop('required', true);
                                        $('#my_institute_name').prop('required', false);
                                        val = "";
                                        $('#my_institute_name').val("");
                                        $("#id3").hide();
                                    }
                                });
                            </script>
                            <script>
                                function verifypassword() {
                                    var password = $("#password").val();
                                    var c_password = $("#c_password").val();
                                    if (password != c_password) {
                                        $('#student_register').prop('disabled', true);
                                        swal({
                                            title: "OOPS!",
                                            text: "Password Does Not Match With Confirm password!",
                                            icon: "warning",
                                            button: "OKAY",
                                        });
                                        $("#password").val("");
                                        $("#c_password").val("");
                                    } 
                                }
                            </script>

                            <script>
                                function yesnoCheck() {
                                    checked = document.getElementById('id1').value;
                                    console.log(checked);
                                }
                            </script>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './includes/footer_student.php'; ?>
<script>
    function recaptchaCallback1() {
        $('#student_register').removeAttr('disabled');
    };
</script>
<script>
    function verifypassword() {
        var password = $("#password").val();
        var c_password = $("#c_password").val();
        if (password != c_password) {
            $(':input[type="submit"]').prop('disabled', true);
            swal({
                title: "OOPS!",
                text: "Password Does Not Match With Confirm password!",
                icon: "warning",
                button: "OKAY",
            });
            $("#password").val("");
            $("#c_password").val("");
        }
    }
</script>
<script>
    function yesnoCheck() {
        checked = document.getElementById('id1').value;
        console.log(checked);
    }
</script>

<div id="navigation">
    <div class="text-center">
        <a href="#">

        </a>
    </div>
</div>
<style>
    /*the container must be positioned relative:*/
    .autocomplete {
        position: relative;
        display: inline-block;
    }



    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
</style>
<!-- Student Background -->
<!-- Level of the Students -->
<!-- Cource of the student -->
<!-- Droup Down only program engineer, farmasy -->
<!-- Diploma (Politechnique), UG and PG(Post Graduate) -->
<!-- Student interested area cource or branch -->

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function(e) {
            closeAllLists(e.target);
        });
    }
    // Data in array
    var countries = <?php echo $title ?>;
    autocomplete(document.getElementById("my_institute_name"), countries);
    //setup before functions
    var typingTimer; //timer identifier
    var doneTypingInterval = 500; //time in ms, 5 second for example
    var $input = $('#my_institute_name');

    //on keyup, start the countdown
    $input.on('change', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });

    //on keydown, clear the countdown 
    $input.on('keydown', function() {
        clearTimeout(typingTimer);
    });

    //user is "finished typing," do something
    function doneTyping() {
        var val = $('#my_institute_name').val();
        var n = countries.includes(val);
        if (n == false) {
            swal({
                title: "OOPS!",
                text: "Enter Only Affiliated AICTE Institutes!",
                icon: "error",
                button: "OKAY",
            });
            $(':input[type="submit"]').prop('disabled', true);
            $(':input[type="submit"]').prop('required', true);
            val = "";
            $('#my_institute_name').val("");
        } else {
            $(':input[type="submit"]').prop('required', false);
        }
    }
</script>
