<?php

if (isset($_GET['task'])) {
  /* $_GET['task']=base64_decode($_GET['task']); */
    if ($_GET['task'] == "Successfull") {
 echo'       <script>
        swal({
            title: "Good job!",
            text: "You Have Successfully Logged In!",
            icon: "success",
            button: "OKAY",
          });
        </script>';
    }
    if ($_GET['task'] == "NotVerified") {
      echo'       <script>
             swal({
                 title: "Not Verified!",
                 text: "Account Not Verified Please Verify Your Email!",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
         }
    if ($_GET['task'] == "duplicatevalue") {
      echo'       <script>
             swal({
                 title: "OOPS!",
                 text: "Email is Already Registered",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "acceptedsuccessfully") {
      echo'       <script>
             swal({
                 title: "Accepted",
                 text: "You Have Successfully Accepted The Request",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "duplicatecontact") {
      echo'       <script>
             swal({
                 title: "OOPS!",
                 text: "Contact Number is Already Registered",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "duplicatestudentid") {
      echo'       <script>
             swal({
                 title: "OOPS!",
                 text: "Student ID is Already Registered",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "disabled") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Successfully Logged In!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "deleted") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Deleted Successfully!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "RegisteredSuccessfully") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Registered SuccessFully!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "DuplicateValue") {
      echo'       <script>
             swal({
                 title: "OOPS!",
                 text: "There is Duplicate Value!",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
    } 
    if ($_GET['task'] == "deletedinternship") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Deleted Internship!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
         }
         if ($_GET['task'] == "called") {
          echo'       <script>
                 swal({
                     title: "Good job!",
                     text: "The Student Has Been Called For Interview!",
                     icon: "success",
                     button: "OKAY",
                   });
                 </script>';
             }
             if ($_GET['task'] == "invalidfiletype") {
              echo'       <script>
                     swal({
                         title: "OOPs!",
                         text: "The File Type Is Invalid(Only jpeg,jpg,png) Files  are allowed!",
                         icon: "warning",
                         button: "Okay",
                       });
                     </script>';
                 }
                 if ($_GET['task'] == "PlseEnterUsernameorPassword") {
                  echo'       <script>
                         swal({
                             title: "OOPs!",
                             text: "Please Enter The Username and Password!",
                             icon: "warning",
                             button: "Okay",
                           });
                         </script>';
                     }
                     if ($_GET['task'] == "UserNotExist") {
                      echo'       <script>
                             swal({
                                 title: "OOPs!",
                                 text: "The User Does Not Exist!",
                                 icon: "error",
                                 button: "Okay",
                               });
                             </script>';
                         }      
                         if ($_GET['task'] == "WrongPassword") {
                          echo'       <script>
                                 swal({
                                     title: "OOPs!",
                                     text: "Wrong Password!",
                                     icon: "warning",
                                     button: "Okay",
                                   });
                                 </script>';
                             } 
                             if ($_GET['task'] == "montherror") {
                              echo'       <script>
                                     swal({
                                         title: "OOPs!",
                                         text: "Your Are Not Eligible to Apply as your graduation date is exceeding the 18 month duration!",
                                         icon: "warning",
                                         button: "Okay",
                                       });
                                     </script>';
                                 }   
                                 if ($_GET['task'] == "streamerror") {
                                  echo'       <script>
                                         swal({
                                             title: "OOPs!",
                                             text: "You are Not eligible To Apply  as your qualification Does Not Match!",
                                             icon: "warning",
                                             button: "Okay",
                                           });
                                         </script>';
                                     }   
                                     if ($_GET['task'] == "locationerror") {
                                      echo'       <script>
                                             swal({
                                                 title: "OOPs!",
                                                 text: "Your Location Preference is Not matched!",
                                                 icon: "warning",
                                                 button: "Okay",
                                               });
                                             </script>';
                                         }
                                         if ($_GET['task'] == "onlypdfallowed") {
                                          echo'       <script>
                                                 swal({
                                                     title: "OOPs!",
                                                     text: "Your Location Preference is Not matched!",
                                                     icon: "warning",
                                                     button: "Okay",
                                                   });
                                                 </script>';
                                             }         

}