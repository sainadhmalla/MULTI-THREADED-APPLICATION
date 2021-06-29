function phonenumber(inputtxt)
{ 
  if(inputtxt.value!=" "){
  var phoneno = /^\d{10}$/;
  if(!inputtxt.value.match(phoneno))
  {
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
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatestrings(inputtxt)
{
  if(inputtxt.value!=" "){
  var character = /^[a-zA-Z ]*$/;
  if(!inputtxt.value.match(character))
  {
    swal({
      title: "OOPS!",
      text: "Only Alpahabets Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.value="";
    $(inputtxt).val(inputtxt.value);
  }
}else
{
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatenumber(inputtxt)
{
  if(inputtxt.value!=" "){
  var character = /^[0-9. ]*$/;
  if(!inputtxt.value.match(character))
  {
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
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}

function validatestringsandnumber(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z0-9 ]*$/;
  if(!inputtxt.value.match(character))
  {
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
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatespecialstrings(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z0-9.+!,:"''@\s\t\n*$]*$/;
  console.log(character);
  if(!inputtxt.value.match(character))
  {
    swal({
      title: "OOPS!",
      text: "Only A-z,0-9 and special Characters (!@$) are allowed!",
      icon: "warning",
      button: "OKAY",
    });
      inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
  }
}else
{
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}
function validateemail(inputtxt)
{
  if(inputtxt.value!= null){
  var character = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
  if(!inputtxt.value.match(character))
  {
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
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}
function validatespecialemail(email) { 
  var re =/^([\w-.]+@(?!gmail\.com)(?!yahoo\.com)(?!hotmail\.com)([\w-]+.)+[\w-]{2,4})?$/;
  ;
  if(!email.match(re))
  {
      
              swal({
                title: "OOPS!",
                text: "Only official Id is allowed",
                icon: "warning",
                button: "OKAY",
              });
                inputtxt.value="";
   $(inputtxt.id).val(inputtxt.value);
    }else{
      $(':input[type="submit"]').prop('disabled', false);
          
    }
    }


