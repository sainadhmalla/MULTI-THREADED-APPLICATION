<?php
include './includes/auth_state.php';
include './includes/header_state.php'
?>
<section class="m-4">
    <div id="to_be_approved">
        <?php
        if ($_SESSION['type'] == 'Division' || $_SESSION['type'] == 'Workshop') {
            echo '<h1 class="font-weight-bold display-4 mb-4">
          Workshop/Division  Railway Project Approval Dashboard
        </h1>';
            $zone = $_SESSION['zone_id'];
            $division = $_SESSION['division'];
            $sql = "SELECT * FROM railway_project where approval = '0' and zone_id = '$zone' and division_id = '$division'";
        }
        $res = mysqli_query($conn, $sql);
        $i = 1;
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                        echo '<div class="col mb-4">
                     <div class="card">
                    <div class="card-body">
                        <h6 class="card-title disable-select">Zone Name: ' . $_SESSION['zone'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Division Name: ' . $row['division_id'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Project Name: ' . $row['project_name'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Project Nature: ' . $row['project_nature'] . '</h6>
                        
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Project Description:' . $row['project_description'] . '</h6>
                        <form action="./src/php/main.php" method="post">
                        <input class="disable-select"type="hidden" value="' . $row['id'] . '" name="id" id="id"onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false">
                       
                        <button  type="submit"class="btn btn-success disable-select" name="approve_project" id="approve_project">Approve</button>

                        <button type="submit"class="btn btn-outline-danger"name="disapprove_project" id="disapprove_project">Disapprove</button>
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
