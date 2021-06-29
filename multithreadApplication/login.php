<?php include './includes/header.php';?>
        <div class="main-container mt-4 pt-4">
            <div class="row">
                <div class="col">
                    <div class="login-section">
                        <div class="section-caption">
                            <h2>Student Login</h2>
                            <div class="new" style="color:red">Time left = <span id="timer"></span></div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <form action="./src/php/main.php" method="post">
                                            <!-- Email -->
                                            <label class="form-control-label" for="email" >Email <b style="color:red;">*</b></label>
                                            <input class="form-control mb-4" type="email" name="email" id="email" onchange="validateemail(this)"
                                                placeholder="E-mail" required>
                                                <input class="form-control mb-4" type="hidden" name="railway" id="railway" value="<?php echo $_GET['railway']?>"
                                                placeholder="E-mail" required>
                                            <label class="form-control-label" for="password">Password <b style="color:red;">*</b></label>
                                            <input class="form-control mb-4" type="password" name="password" id="password" placeholder="Password" required>
                                            <div class="row">
                                                <div class="col-6 text-left pl-3">
                                                    <a href="#">Forgot Password</a>
                                                </div>
                                                <div class="col-6 text-right pr-3">
                                                    <a href="#">Register Now</a>
                                                </div>
                                            </div>
                                            <div class="tab-content category-tab-content" id="login-tabContent">
                                                <div class="tab-pane active" id="login-student" role="tabpanel" aria-labelledby="login-student-tab">
                                                    <div class="row justify-content-center pt-4">
                                                        <button type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block w-50"
                                                            style="font-weight:bold">Login</a>
                                                    </div>    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
document.getElementById('timer').innerHTML =
  003 + ":" + 00;
startTimer();
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59&&m!=0)
  {m=m-1}
  if(m<=0){
    var form = new FormData();
			form.append("session_destroy", true);
			var settings = {
				url:"./src/php/main.php",
				method: "POST",
				timeout: 0,
				processData: false,
				mimeType: "multipart/form-data",
				contentType: false,
				data: form,
            };
            $.ajax(settings).done(function (response) {
											if (response === "success") {
												swal({
title: "OOPS!",
  text: "Kindly Choose the value!",
  icon: "warning",
  button: "Okay!",
})
.then((value) => {
  window.location.href="./index.php"
});
								            }
										});
            
    }
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>
<?php include './includes/footer.php';?>
