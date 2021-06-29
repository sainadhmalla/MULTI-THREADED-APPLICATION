<?php include './includes/header_main.php';?>

        <div class="main-container mt-4 pt-4">
            <div class="row">
                <div class="col">
                    <div class="register-section">
                        <div class="section-caption"> 
                            <h2>Add Project</h2>
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
                                                    Add your Project details here.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="selectZone" class="float-left"><b>Zone</b> <b style="color:red">*</b></label>
                                                     <select name="selectZone"
                                                        id="selectZone" class="form-control mb-4"
                                                        required="">
                                                        <option value="" disabled selected>Select Zone</option>
                                                        <option value="">All Zones</option>
                                                        <option value="">Central Railway</option>
                                                        <option value="">East Central Railway</option>
                                                        <option value="">East Coast Railway</option>
                                                        <option value="">Eastern Railway</option>
                                                        <option value="">Metro Railway</option>
                                                        <option value="">North Central Railway</option>
                                                        <option value="">North Eastern Railway</option>
                                                        <option value="">North Western Railway</option>
                                                        <option value="">Northeast Frontier Railway</option>
                                                        <option value="">Northern Railway</option>
                                                        <option value="">South Central Railway</option>
                                                        <option value="">South East Central Railway</option>
                                                        <option value="">South Eastern Railway</option>
                                                        <option value="">South Western Railway</option>
                                                        <option value="">Southern Railway</option>
                                                        <option value="">West Central Railway</option>
                                                        <option value="">Western Railway</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="selectDivision" class="float-left"><b>Division / Workshop</b> <b style="color:red">*</b></label>
                                                    <select name="selectDivision" id="selectDivision" class="form-control mb-4" required="">
                                                        <option value="" disabled selected>Select Division or Workshop</option>
                                                        <option value="">All Divisions and Workshops</option>
                                                        <option value="" disabled>Divisions</option>
                                                        <option value="">All Divisions</option>
                                                        <option value="">Mumbai</option>
                                                        <option value="">Bhusawal</option>
                                                        <option value="">Pune </option>
                                                        <option value="">Solapur</option>
                                                        <option value="">Nagpur CR</option>
                                                        <option value="" disabled>Workshops</option>
                                                        <option value="">All Workshops</option>
                                                        <option value="">Parel</option>
                                                        <option value="">Matunga</option>
                                                        <option value="">Kurdwadi </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="selectCategory" class="float-left"><b>Project Department</b> <b style="color:red">*</b></label>
                                                    <select name="selectCategory" id="selectCategory" class="form-control mb-4" required="">
                                                        <option value="" disabled selected>Select Project Department</option>
                                                        <option value="">Electrical Engineering</option>
                                                        <option value="">Electronics Signaling and Telecommunication</option>
                                                        <option value="">Civil Engineering</option>
                                                        <option value="">Mechanical Engineering</option>
                                                        <option value="">Commercial and Marketing</option>
                                                        <option value="">Finance Management</option>
                                                        <option value="">Operations Management and Logistics</option>
                                                        <option value="">Human Resource Management</option>
                                                        <option value="">Materials Management</option>
                                                        <option value="">राजभाषा</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="txtProjectName" class="float-left"><b>Project Name</b> <b style="color:red">*</b></label>
                                                    <input type="text" name="txtProjectName" id="txtProjectName" class="form-control mb-4" placeholder="Enter Project Name" required="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="txtProjectDescription" class="float-left"><b>Project Description</b> <b style="color:red">*</b></label>
                                                    <textarea rows="3" name="txtProjectDescription" id="txtProjectDescription" class="form-control mb-4" placeholder="Enter Project Description" required=""></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="checkbox" name="type" id="type" class="form-control mb-4" required=""> Online(Virtual)
                                                </div>

                                                <div class="col-12 mb-4">
                                                    <button type="submit" name="student_register"
                                                        id="student_register" class="btn btn-primary w-50">
                                                        Add New Project <i class="ml-2 fas fa-plus"></i>
                                                    </button>
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
        <script src="./assets/js/dropdown.js"></script>
<?php include './includes/footer.php';?>