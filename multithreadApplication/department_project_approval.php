<?php
include './includes/auth_state.php';
include './includes/header_department.php'
?>

<div class="main-container mt-4 pt-4">
    <div class="row">
        <div class="col">
            <div class="register-section">
                <div class="section-caption">
                    <h2>Project Approval</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div id="project_form">
                                <!-- Name -->
                                <div class="row mb-2">
                                    <div class="col">
                                        
                                    </div>
                                </div>
                                <?php
            $zone = $_SESSION['zone'];
            $division = $_SESSION['division'];
            $sql = "SELECT * FROM railway_project where approval = '0'";
        $res = mysqli_query($conn, $sql);
        $i = 1;
        echo $sql;
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $zone = $row['zone_id'];
                $sql1 = "SELECT * FROM railway_zone where zone_code = '$zone'";
                $res1 = mysqli_query($conn, $sql1);
                $i = 1;
                echo $sql1;
                if ($res1) {
                    while ($row1 = mysqli_fetch_assoc($res1)) {
                        echo '<div class="col mb-4">
                     <div class="card">
                    <div class="card-body">
                        <h6 class="card-title disable-select">Zone Name: ' . $row1['zone_name'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Division Name: ' . $row['division_id'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">Project Name: ' . $row['project_name'] . '</h6>
                        <h6 class="card-subtitle mb-2 text-muted disable-select">: Project Nature' . $row['project_nature'] . '</h6>
                        
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
            }
        }
        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/dropdown.js"></script>
<?php include './includes/footer.php'; ?>