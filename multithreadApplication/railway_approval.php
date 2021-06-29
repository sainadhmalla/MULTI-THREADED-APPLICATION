<?php 
include './includes/auth_state.php';
include './includes/header_state.php'?>
<section class="m-4">
    <div id="to_be_approved">
 <?php
        if($_SESSION['type'] == 'Zone')
        {  echo '<h1 class="font-weight-bold display-4 mb-4">
           Zone Level Railway Approval Dashboard
       </h1>';
            $zone = $_SESSION['zone_id'];
        $sql = "SELECT * FROM railways_register where (railway_state_status = '0') and (railway_organisation = 'Division' or railway_organisation = 'Workshop') and railway_zone = '$zone'";
        }
        else if($_SESSION['type']=='Division' || $_SESSION['type'] == 'Workshop')
        {
 	echo '<h1 class="font-weight-bold display-4 mb-4">
          Workshop/Division  Railway Approval Dashboard
        </h1>';
        $zone = $_SESSION['zone_id'];
        $division = $_SESSION['division'];
        $sql = "SELECT * FROM railways_register where (railway_state_status = '0') and railway_zone = '$zone'and railway_organisation = 'Department' and railway_organization='$division'";
        }
        else{
            $sql = "SELECT * FROM railways_register where (railway_state_status = '0') and railway_organisation = 'Zone'";  
        }
	 $res = mysqli_query($conn, $sql);
        $i = 1;
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo '<div class="col mb-4">
                     <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <a href="../uploads/certificate/' . $row['railway_certificate'] . '" target="_blank">View Document</a>
                        </div>
                        <h5 class="card-title disable-select">Employee Name: ' . $row['railway_first_name'] . ' ' . $row['railway_last_name'] . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Employee ID: ' . $row['railway_employid'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Email Address: ' . $row['railway_email'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Phone Number: ' . $row['railway_contact_number'] . '</h6>
                        
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Zone Name:' . $row['railway_zone'] . '</h6>';
                        if($_SESSION['type']=='Zone'){
                        echo' <h6 class="card-subtitle mb-2 text-muted disable-select">Divison/Workshop Name: ' . $row['railway_organization'].' '.$row['railway_organisation'].'</h6>';
                        }
                        else if($_SESSION['type']=="Division" || $_SESSION['type'] == "Workshop"){
                            echo '
                            <h6 class="card-subtitle mb-2 text-muted disable-select">Divison / Workshop Name:' . $row['railway_organization'].'</h6>
                            <h6 class="card-subtitle mb-2 text-muted disable-select">Department Name: ' . $row['railway_department'] . '</h6>';
                        }
                        echo'<form action="./src/php/main.php" method="post">
                        <input class="disable-select"type="hidden" value="' . $row['railway_first_name'] . '" name="name" id="name"onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false">
                        <input class="disable-select"type="hidden" value="' . $row['railway_uid'] . '" name="railway_uid" id="railway_uid" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false">
                        <input class="disable-select" type="hidden" value="' . $row['railway_email'] . '" name="email" id="email"onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false">
                        <button  type="submit"class="btn btn-success disable-select" name="approve" id="apprve">Approve</button>
                        <button type="submit"class="btn btn-outline-danger"name="disapprove" id="disapprove">Disapprove</button>
                        </form>
                    </div>
               </div>
            </div>
            </div>';
            }
        }
        ?>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
</body>

</html>
<script>
    $(document).keydown(function(event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        }
    });
    $(document).on("contextmenu", function(e) {
        e.preventDefault();
    });
</script>
