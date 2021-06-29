function phonenumber1(inputtxt)
{

  if(inputtxt.value!=null){
  var phoneno = /^\d{10}$/;
  if(!inputtxt.value.match(phoneno))
  {
    $(':input[type="submit"]').prop('disabled', true);
    $("#phone").prop('invalid', true);
    swal({
      title: "OOPS!",
      text: "Phone Number Not valid!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }
}
else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatestrings1(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Alpahabets Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatenumber1(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[0-9 ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Numbers Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
     inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }

}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}

function validatestringsandnumber1(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z0-9 ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Alpahabets And Numbers Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
      inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}
function validatespecialstrings1(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z0-9,.:*!@$+-\s\r\n ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only A-z,0-9 and special Characters (!*@$) are allowed!",
      icon: "warning",
      button: "OKAY",
    });
      inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }
}else
{
  $(':input[type="submit"]').prop('disabled',false);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
     inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
}
}
function validateemail1(inputtxt)
{
  if(inputtxt.value!= null){
  var character = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Not a Valid Email!",
      icon: "warning",
      button: "OKAY",
    });
     inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatespecialemail1(inputtxt) { 
  var re =/^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/;
email = inputtxt.value;
  if(!email.match(re))
  {
            $(':input[type="submit"]').prop('disabled', true);
              swal({
                title: "OOPS!",
                text: "Only official Id is allowed",
                icon: "warning",
                button: "OKAY",
              });
    inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
    }     
    }
    function validateRecaptcha() {
      var response = grecaptcha.getResponse();
      if (response.length === 0) {
          alert("not validated");
          return false;
      } else {
          alert("validated");
          return true;
      }
  }