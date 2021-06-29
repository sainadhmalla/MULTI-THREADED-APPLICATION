var timeoutInMiliseconds = 300000;
var timeoutId;

function startTimer() {
  // window.setTimeout returns an Id that can be used to start and stop a timer
  timeoutId = window.setTimeout(doInactive, timeoutInMiliseconds);
}
function doInactive() {
  var form = new FormData();
  form.append("session_destroy", true);
  var settings = {
    url: "./src/php/main.php",
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
      }).then((value) => {
        window.location.href = "./index.php";
      });
    }
  });
}
function setupTimers() {
  document.addEventListener("mousemove", resetTimer, false);
  document.addEventListener("mousedown", resetTimer, false);
  document.addEventListener("keypress", resetTimer, false);
  document.addEventListener("touchmove", resetTimer, false);
  startTimer();
}
$(document).ready(function(){
    setupTimers();
});