
<?php include './include/header.php';?>
        <div class="main-container mt-4 pt-4">
            <div class="row">
                <div class="col">
                    <div class="register-section">
                        <div class="section-caption">
                            <h2>Student Application</h2>
                        </div>
                        <div class="tab-content category-tab-content" id="register-tabContent">
                            <!-- Step 1 -->
                            
                            <!-- /Step1 -->
                            <!-- Step 2 -->
                            <div class="tab-pane active" id="form-step2" role="tabpanel" aria-labelledby="form-step2-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="container mt-4">
                                            <form id="form2" class="text-center">
                                                <div class="row mt-3 ">
                                                    <div class="col-md-4 col-4  offset-md-8">
                                                        <img class="img" id="profile-img" height="200px" width="180" src="/images/railways/upload-placeholder.png" alt="your image">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-4 col-8 form-group offset-md-8">
                                                        <label for="image-file">
                                                            <b>
                                                                Upload an image less than 2MB
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input class="float-right" type="file" id="image-file" onchange="readURL(this);">
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <label for="txtCorrespondenceAddress" class="float-left">
                                                            <b>Correspondence Address</b><b style="color:red">*</b>
                                                        </label>
                                                        <textarea id="txtCorrespondenceAddress" class="form-control" onchange="validatestrings(this)" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="txtPermanentAddress" class="float-left">
                                                            <b>
                                                                Permanent Address
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <textarea id="txtPermanentAddress" class="form-control"onchange="validatestrings(this)" rows="3"></textarea>

                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-12">
                                                        <div class="form-check float-left">
                                                            <input class="form-check-input " type="checkbox" value="" id="chkAddress">
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
                                                        <input type="text" name="txtCorrespondenceMobile" class="form-control" id="txtCorrespondenceMobile">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="txtPermanentMobile" class="float-left">
                                                            <b>
                                                                Telephone No.
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="text" name="txtPermanentMobile" class="form-control" id="txtPermanentMobile">
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-6 ">
                                                        <label for="txtDOB" class="float-left">
                                                            <b>
                                                                Date of Birth
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <input type="date" width="25%" name="txtDOB" class="form-control" id="txtDOB">
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
                                                                        <input class="form-check-input " type="radio" name="radioGender" id="male" value="male">
                                                                        <label class="form-check-label" for="male">
                                                                            <b>Male</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <input class="form-check-input " type="radio" name="radioGender" id="female" value="female">
                                                                        <label class="form-check-label" for="female">
                                                                            <b>Female</b>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <input class="form-check-input " type="radio" name="radioGender" id="others" value="female">
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
                                                                <label class="sr-no" for="sr-no">10th</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no" for="sr-no">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text"onchange="validatestrings(this)" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no" for="sr-no">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" onchange="validatespecialstrings(this)"name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no" for="sr-no">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" onchange="validatespecialstrings(this)"name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no" for="sr-no">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
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
                                                                <label class="sr-no" for="sr-no">12th / Diploma</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                                                                    id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" onchange="validatespecialstrings(this)"name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text"onchange="validatespecialstrings(this)" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none ">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
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
                                                                <label class="sr-no" for="sr-no">Degree</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                                                                                                                        id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none ">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
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
                                                                <label class="sr-no" for="sr-no">Masters / PhD</label>
                                                                <!-- <input type="text" name="quali-aqu1" class="form-control inpt"
                                                                                                                                                                        id="quali-aqu1" disabled> -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Qualification
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Name of College/ School
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Univ./Board
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none " for="sr-no">
                                                                    <b>
                                                                        Marks (%)
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group float-left">
                                                                <label class="sr-no d-md-none ">
                                                                    <b>
                                                                        Year
                                                                    </b>
                                                                </label>
                                                                <input type="text" name="quali-aqu1" class="form-control inpt" id="quali-aqu1">
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
                                                        <textarea id="project-det" class="form-control mt-1" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="present-stat" class="float-left">
                                                            <b>
                                                                Present Status of Projects (Completed, Ongoing etc.)
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <textarea id="present-stat" class="form-control mt-1" rows="3"></textarea>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-6">
                                                        <label for="dis-int" class="float-left">
                                                            <b>
                                                                Discipline(s) in which internship is sought
                                                            </b><b style="color:red">*</b>
                                                        </label>
                                                        <textarea id="dis-int" class="form-control mt-1" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="rel-info" class="float-left ">
                                                            <b>
                                                                Any other relevant
                                                                information
                                                            </b> <b style="color:red">*</b>
                                                        </label>
                                                        <textarea name="rel-info" class="form-control" id="rel-info" rows="3"> </textarea>
                                                    </div>

                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-md-12">
                                                        <div class="form-check ">
                                                            <input class="form-check-input " type="checkbox" value="" id="certificate-script">
                                                            <label class="form-check-label" for="certificate-script">
                                                                <b>
                                                                    I certify that the information furnished above is true to the best of my knowledge and belief.
                                                                </b>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <center>
                                                    <button type="submit" id="tab-basic-info" class="btn btn-primary w-50 my-3">
                                                        Submit <i class="ml-2 fas fa-sign-out-alt"></i></button>
                                                </center>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Step2 -->
                            <!-- Step 3 -->
                            
                            <!-- /Step3 -->

                        </div>
                        <div class="subscription-section mt-4">
                            <div class="section-content order-lg-1">
                                <h3>Key Announcements For Students</h3>
                                <ul class="student-announcements">
                                    <li>Internships for students &amp; fresh engineers</li>
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
                                    <input type="text" class="form-control" placeholder="student@yourcollege.com" aria-label="student@yourcollege.com" aria-describedby="subscribe">
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
        
    </main>

    <script src="/main.4ca7b78b38bd322a7c2b.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body></html>