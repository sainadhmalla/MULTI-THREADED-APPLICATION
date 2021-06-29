<?php
session_start();
if ($_SESSION['type'] == "Zone") {
    include './includes/header_zone.php';
} else if ($_SESSION['type'] == "Division") {
    include './includes/header_division.php';
} else {
    include './includes/header_department.php';
}
?>
<script>
    var department = "<?php echo $_SESSION['department_id']; ?>";
    var division = "<?php echo $_SESSION['division']; ?>";
    var type = "<?php echo $_SESSION['type']; ?>";
    var zone = "<?php echo $_SESSION['zone_id']; ?>";
</script>
<div class="main-container mt-4 pt-4">
    <div class="row">
        <div class="col">
            <div class="register-section">
                <div class="section-caption">
                    <h2>Projects</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div id="project_form">
                                <form method="post" class="text-center" action="./src/php/main.php">
                                    <!-- Name -->
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p>
                                                Select Zone, Division and Department
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php
                                        if ($_SESSION['type'] == "Zone") {
                                        ?>
                                            <div class="col-md-4">
                                                <label for="selectZone" class="float-left"><b>Zone</b> <b style="color:red">*</b></label>
                                                <select name="selectZone" id="selectZone" class="form-control mb-4" required="">
                                                    <option value="" disabled selected>Select Zone</option>
                                                    <script id="zoneTemplate" type="text/x-handlebars-template">
                                                        {{#each objects}}
                                                            <option class="zoneOption" value="{{this.code}}">{{this.name}}</option>
                                                        {{/each}}
                                                    </script>
                                                </select>
                                            </div>
                                        <?php }
                                        if ($_SESSION['type'] == "Zone") { ?>
                                            <div class="col-md-4">
                                                <label for="selectDivision" class="float-left"><b>Division / Workshop</b> <b style="color:red">*</b></label>
                                                <select name="selectDivision" id="selectDivision" class="form-control mb-4" required="">
                                                    <option value="" disabled selected>Select Division or Workshop</option>
                                                    <script id="divisionTemplate" type="text/x-handlebars-template">
                                                        <option value="" disabled>Divisions</option>
                                                            {{#each division}}
                                                            <option class="divisionOption" value="{{this}}">{{this}}</option>
                                                            {{/each}}
                                                            <option value="" disabled>Workshops</option>
                                                            {{#each workshop}}
                                                            <option class="workshopOption" value="{{this}}">{{this}}</option>
                                                            {{/each}}
                                                        </script>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="selectCategory" class="float-left"><b>Department</b> <b style="color:red">*</b></label>
                                                <select name="selectCategory" id="selectCategory" class="form-control mb-4" required="">
                                                    <option value="" disabled selected>Select Department</option>
                                                    <script id="categoryTemplate" type="text/x-handlebars-template">
                                                        <option value="" disabled selected>Select Department</option>
                                                            {{#each categories}}
                                                            <option class="categoryOption" value="{{this.id}}">{{this.project_name}}</option>
                                                            {{/each}}
                                                        </script>
                                                </select>
                                            </div>
                                        <?php } else if ($_SESSION['type'] == "division") 
                                        {?>
                                        <div class="col-md-4">
                                            <label for="selectCategory" class="float-left"><b>Department</b> <b style="color:red">*</b></label>
                                            <select name="selectCategory" id="selectCategory" class="form-control mb-4" required="">
                                                <option value="" disabled selected>Select Department</option>
                                                <script id="categoryTemplate" type="text/x-handlebars-template">
                                                    <option value="" disabled selected>Select Department</option>
                                                            {{#each categories}}
                                                            <option class="categoryOption" value="{{this.id}}">{{this.project_name}}</option>
                                                            {{/each}}
                                                        </script>
                                            </select>
                                        </div>
                                        <?php }else{
                                            }?>
                                    </div>
                                </form>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0">All Projects</h3>
                                            <p class="text-sm mb-0">
                                                View, Modify or Delete existing projects or Add New Project.
                                            </p>
                                        </div>
                                        <div class="col text-right">
                                            <button id="btnNewModal" type="button" class="btn btn-lg btn-primary btn-icon" data-backdrop="static" data-keyboard="false">
                                                <span class="btn-inner--icon"><i class="fa fa-plus-circle fa-2x"></i></span>
                                                <span class="btn-inner--text h2 text-white">Add Project</span>
                                            </button>
                                            <div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="modalNewtLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalEditLabel">Edit Project</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <label for="txtNewProject" class="float-left">
                                                                        <b>
                                                                            Project Name
                                                                        </b><b style="color:red">*</b>
                                                                    </label>
                                                                    <input type="text" name="txtNewProject" id="txtNewProject" class="form-control mb-4" placeholder="Project Name" required="">
                                                                </div>

                                                                <div class="col-md-4 mt-4">
                                                                    <h5 class="float-left">
                                                                        Offline
                                                                        <label class="switch">
                                                                            <input id="chkNature" type="checkbox">
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                        Online
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="txtNewDescription" class="float-left">
                                                                        <b>
                                                                            Project Description
                                                                        </b>
                                                                    </label>
                                                                    <textarea type="text" name="txtNewDescription" rows="3" id="txtNewDescription" class="form-control mb-4" placeholder="Project Description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button id="btnAdd" type="button" class="btn btn-primary">Add Project</button>
                                                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive py-4">
                                        <table class="table" id="tblProjects">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Project</th>
                                                    <th>Nature</th>
                                                    <th>Update</th> 
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Project</th>
                                                    <th>Nature</th>
                                                   <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </tfoot>
                                            <tbody id="table">
                                                <script id="projectsTemplate" type="text/x-handlebars-template">
                                                    {{#each objects}}
                                                        <tr id="{{this.id}}">
                                                            <td label="Sr No" class="h5">{{inc @index}}</td>
                                                            <td label="Project" class="h5">{{this.project_name}}</td>
                                                            <td label="Project" class="h5">{{this.project_nature}}</td>
                                                          <td label="Update" class="h5"><button class="btn btn-white btnEdit"><i class="fa fa-edit"></i></button></td> 
                                                            <td label="Delete" class="h5"><button class="btn btn-white btnDelete"><i class="fa fa-trash-alt"></i></button></td>
                                                        </tr>
                                                    {{/each}}
                                                </script>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-secondary-container">
    <div class="row">
        <div class="col">
            <div class="intern-detail-body">


                <!-- Modal -->
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditLabel">Edit Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="txtEditProject" class="float-left">
                                            <b>
                                                Project Name
                                            </b><b style="color:red">*</b>
                                        </label>
                                        <input type="text" name="txtEditProject" id="txtEditProject" class="form-control mb-4" placeholder="Project Name" required="">
                                    </div>

                                    <div class="col-md-4 mt-4">
                                        <h5>
                                            Offline
                                            <label class="switch">
                                                <input id="chkEditNature" type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                            Online
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="txtEditDescription" class="float-left">
                                            <b>
                                                Project Description
                                            </b>
                                        </label>
                                        <textarea type="text" name="txtEditDescription" rows="3" id="txtEditDescription" class="form-control mb-4" placeholder="Project Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btnEdit" type="button" name="update_project" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include './includes/footer.php'; ?>
