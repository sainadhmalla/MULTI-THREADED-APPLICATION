<?php 
include './includes/auth_state.php';
include './includes/header_department.php';?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<div class="intern-detail-header">
    <div class="header-details">
        <h1>Central Railway - Mumbai Division</h1>
        <h2>B.Tech, 3rd Year</h2>
        <h2>Graphic Era University</h2>
        <div class="actions">
		<button id="btnAssign" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Assign Work</button>
            <!-- <button class="btn btn-light"><i class="fa fa-download"></i></button> -->
            <!-- <button class="btn btn-primary">Reject</button> -->
        </div>
    </div>
</div>
<div class="intern-main-info">
    <img class="img-thumbnail" src="/images/photos/photo3.jpg" alt="username">
    <div>
        <h3>Akash Pandey</h3>
        <p>Dehradun, Uttrakhand</p>
    </div>
</div>
<div class="main-secondary-container">
    <div class="row">
        <div class="col">
            <div class="intern-detail-body">
                <div class="card">
                    <div class="card-body">
                        <h4>Assigned Work</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Project</th>
                                    <th>Task</th>
                                    <th>Assigned By</th>
                                    <th>Present Status</th>
                                    <th>Expected Completion Date</th>
                                </tr>
                            </thead>
                            <?php
                            $id = $_GET['uid'];
                            $sql = "SELECT f.project,task,assigner_name,f.status,t.assign_id,r.student_uid,f.apply_id,r.student_email,r.student_first_name,t.completion_date FROM railway_assigned_task t inner join railways_form f on t.apply_id = f.apply_id inner join student_register r on f.student_uid = r.student_uid where t.apply_id = '$id' ";
                            $res = mysqli_query($conn, $sql);
                            $res1 = mysqli_num_rows($res);
                            if ($res1 > 0) {
                                if ($res) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo '<tbody>
                                <tr>
                                    <td label="Qualification">1</td>
                                    <td label="Name of Institute">' . $row['project'] . '</td>
                                    <td label="Project Name">' . $row['task'] . '</td>
                                    <td label="Percentage">' . $row['assigner_name'] . '</td>
                                    <td label="Year/Date of Result Declaration">' . $row['status'] . '</td>
                                    <td label="Year/Date of Result Declaration">'.$row['completion_date'].'</td>
                                    <td> <button id="btnAssign" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Assign Work</button></td>';
                                    if($row['status'] == 'Offer Letter Released' || $row['status']=="Internship completed"){
                                        echo '<td> <a href="../uploads/offer_railway/'.$row['apply_id'].'.pdf"  target="_blank" type="button" class="btn btn-primary" id="trigger'.$row['apply_id'].';">
                                        View Offer Letter
                                    </a>
                                    <div id="dialog'.$row['apply_id'].'" style="display:none">
                                        <div>
                                            <iframe style="width:800px; height:500px;" src="../uploads/offer_railway/'.$row['apply_id'].'.pdf"></iframe>
                                        </div>
                                    </div>
                                    <script language="javascript" type="text/javascript">
                                        $(document).ready(function() {
                                            $("#trigger'.$row['apply_id'].'").click(
                                                function() {
                                                    $("#dialog'.$row['apply_id'].'")
                                                        .dialog();
                                                });
                                        });
                                    </script>
                                    </td>';
                                    }else{
                                        echo '<td><button type="button" class="btn btn-primary"name="offer"data-toggle="modal" data-target="#exampleModal2'.$row['assign_id'].'" id="offer" value="">Generate Offer Letter</button></td>';
                                    }
                                   echo' 
                                    <div class="modal" id="exampleModal2'.$row['assign_id'].'"
                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="false">
                                    <form action="./src/php/main.php" method="post">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b> Offer Letter Generation</b>
                                                       
                                                    <button type="button" class="close"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <input type="hidden" name="company_id"
                                                            id="company_id"
                                                            value='.$_SESSION['id'].'>
                                                        <input type="hidden" name="student_id"
                                                            id="student_uid"
                                                            value='.$row['student_uid'].'>
                                                        <input type="hidden" name="apply_id"
                                                            id="apply_id"
                                                            value= '.$row['apply_id'].'>
                                                            <input type="hidden" name="first_name"
                                                            id="first_name"
                                                            value= '.$row['student_first_name'].'>
                                                            <input type="hidden" name="email"
                                                            id="email"
                                                            value= '.$row['student_email'].'>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="date">Starting Date
                                                                    Of Internship</label>
                                                                <input class="form-control" type="date"
                                                                    name="start_date" id="start_date"
                                                                    required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="date">Ending Date Of
                                                                    Internship</label>
                                                                <div class="form-group">
                                                                    <input class="form-control"
                                                                        type="date" name="end_date"
                                                                        id="end_date" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="date">Number Of Working Hours(Per Week)</label>
                                                                <input class="form-control" type="text"
                                                                    name="working_hours" id="working_hours"
                                                                    required>
                                                            </div>
                                                            <div class="col">
                                                                <label for="date">Salary/Stipend(Put NIL if Empty)</label>
                                                                <div class="form-group">
                                                                    <input class="form-control"
                                                                        type="text" name="salary"
                                                                        id="salary" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="date">Reporting Officer Name</label>
                                                                <input class="form-control" type="text"
                                                                    name="reporting_officer" id="reporting_officer"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="date">
                                                                    Reporting Officer Contact
                                                                </label>
                                                                <div class="form-group">
                                                                    <input class="form-control"
                                                                        name="contact_info"
                                                                        id="contact_info" cols="50"
                                                                        rows="10" required>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="date">Address
                                                                </label>
                                                                <input class="form-control" type="text"
                                                                    name="address2" id="address2"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col">
                                                        <label for="date">Internship Responsibilities</label>
                                                        <div class="form-group">
                                                            <textarea class="form-control"
                                                                type="text" name="responsibilites"
                                                                id="responsibilites"cols="50"
                                                                rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                            <div class="col">
                                                                <label for="date">
                                                                    Note(if Any)
                                                                </label>
                                                                <div class="form-group">
                                                                    <textarea class="form-control"
                                                                        name="note" id="note"cols="50"
                                                                        rows="10"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" id="exampleModalLabel">
                                                    <button type="submit" id="offer_letter"
                                                        name="offer_letter" class="btn btn-success">Save
                                                        changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>';
                                if($row['status']=="Internship completed"){
                                    echo ' <td><a type="button"href="../uploads/stu_certificate/'.$row['apply_id'].'.pdf"target="_blank" class="btn btn-success"name="offer" id="offer" value="">View Experience Letter</button></td>';
                                }else{
                                    echo ' <td><button type="button" class="btn btn-success"name="offer" id="offer"data-toggle="modal" data-target="#exampleModal5'.$row['assign_id'].'" value="">Generate Experience Letter</button></td>';
                                }
                                echo '
                                    <div class="modal" id="exampleModal5'.$row['assign_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                    <form action="./src/php/test1.php" method="post">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b> Certificate Information</b>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="width:auto">
                                                    <div class="container" style="width:450px">
                                                        <div class="form-group" id="rating-ability-wrapper">
                                                            <input type="hidden" name="company_id" id="company_id" value='.$_SESSION['id'].'>
                                                            <input type="hidden" name="student_id" id="student_id" value='.$row['student_uid'].'>
                                                            <input type="hidden" name="apply_id" id="apply_id" value='.$row['apply_id'].'>
                                                            <input type="hidden" name="email" id="email"
                                                        value='.$row['student_email'].'>
                                                        <input type="hidden" name="first_name" id="first_name" value='.$row['student_first_name'].'>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="date">Starting Date Of
                                                                        Internship</label>
                                                                    <input class="form-control" type="date" name="starting_date" id="starting_date" required>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="date">Ending Date Of
                                                                        Internship</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="date" name="endDate" id="endDate" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="date">Working
                                                                        Under</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" name="working_under" id="working_under" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="date">Working Areas
                                                                    </label>
                                                                    <input class="form-control" type="text" name="working_area" id="working_area" required>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="date">Internship
                                                                        Performance</label>
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" name="performance" id="performance" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="date">Candidate Rating
                                                                        (Out Of 10)</label>
                                                                    <input class="form-control" type="text" name="rate" id="rate" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer" id="exampleModalLabel">

                                                    <button type="submit" id="certificate_gen" name="certificate_gen" class="btn btn-success">Save
                                                        changes</button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </tr>
                            </tbody>
                           ';
                                    }
                                }
                            } 
                            ?>
                        </table>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="modalAssignLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalAssignLabel">Assign Work</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="./src/php/main.php" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="apply_id" id="apply_id" value="<?php echo $_GET['uid'] ?>">
                                    <input type="hidden" name="assign_by" id="assign_by" value="<?php echo $_SESSION['id'] ?>">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="txtProject" class="float-left">
                                                <b>
                                                    Project
                                                </b><b style="color:red">*</b>
                                            </label>
                                            <input type="text" name="project" id="project" class="form-control mb-4" placeholder="Task Name" required="">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="txtTask" class="float-left">
                                                <b>
                                                    Task
                                                </b><b style="color:red">*</b>
                                            </label>
                                            <input type="text" name="task" id="task" class="form-control mb-4" placeholder="Task Name" required="">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="txtDate" class="float-left">
                                                <b>
                                                    Expected Completion Date
                                                </b><b style="color:red">*</b>
                                            </label>
                                            <input type="date" name="completion_date" id="completion_date" class="form-control mb-4" required="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="txtNotes" class="float-left">
                                                <b>
                                                    Notes
                                                </b>
                                            </label>
                                            <textarea type="text" name="notes" rows="3" id="notes" class="form-control mb-4" placeholder="Optional Task Details"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="txtNotes" class="float-left">
                                                <b>
                                                    Name Of Assigner
                                                </b>
                                            </label>
                                            <input type="text" name="assigner" rows="3" id="assigner" class="form-control mb-4" placeholder="Name Of Assigner">
                                        </div>
                                        <div class="col-md">
                                            <label for="txtNotes" class="float-left">
                                                <b>
                                                    Designation
                                                </b>
                                            </label>
                                            <input type="text" name="designation" rows="3" id="notes" class="form-control mb-4" placeholder="Designation">
                                        </div>
                                    </div>
                                </div>
                        <div class="modal-footer">
                            <button type="submit" name="assign" id="assign" class="btn btn-success">Assign</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- <div class="row">
                            <div class="col">
                                <div class="btn-wrap">
                                    <button class="btn btn-success">Accept</button>
                                    <button class="btn btn-primary">Reject</button>
                                </div>
                            </div>
                        </div> -->
        </div>

    </div>
</div>
</div>
<?php include './includes/footer.php'; ?>
