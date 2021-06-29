<?php include './includes/header.php';
include './includes/msg.inc.php';
?>

        <div class="main-container mt-4 pt-4">
            <div class="row">
                <div class="col">
                    <div class="login-section">
                        
                        <?php
$id = $_GET['id'];
switch($id){
    case 1 : 
                        ?>
                        <div class="section-caption">
                            <h2>Railway Login</h2>
                        </div>
                    <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <form action="./src/php/main.php" method="post">
                                            <!-- Email -->
                                            <label class="form-control-label" for="email" >Email <b style="color:red;">*</b></label>
                                            <input class="form-control mb-4" type="email" name="email" id="email" onchange="validateemail(this)"
                                                placeholder="E-mail" required>
                                                <input class="form-control mb-4" type="hidden" name="railway" id="railway" value="<?php echo $_GET['railway']?>"
                                                placeholder="E-mail" required>
                                            <label class="form-control-label" for="password">Password <b style="color:red;">*</b></label>
                                            <input class="form-control mb-4" type="password" name="password" id="password" placeholder="Password" required>
                                            <div class="row">
                                                <div class="col-6 text-left pl-3">
                                                    <a href="#">Forgot Password</a>
                                                </div>
                                                <div class="col-6 text-right pr-3">
                                                    <a href="./register_railway.php">Register Now</a>
                                                </div>
                                            </div>
                                            <div class="tab-content category-tab-content" id="login-tabContent">
                                                <div class="tab-pane active" id="login-student" role="tabpanel" aria-labelledby="login-student-tab">
                                                    <div class="row justify-content-center pt-4">
                                                        <button type="submit" name="login_railway" id="login_railway" value="Login" class="btn btn-primary btn-block w-50"
                                                            style="font-weight:bold">Login</a>
                                                    </div>    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
    <?php
    break; 
    case 2:
    ?>
    <div class="section-caption">
                            <h2>Railway Ministry Login</h2>
                        </div>
    <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card bg-white">
                                    <div class="card-body">
                                        <form action="./src/php/main.php" method="post">
                                            <!-- Email -->
                                            <label class="form-control-label" for="email" >Email <b style="color:red;">*</b></label>
                                            <input class="form-control mb-4" type="email" name="email" id="email" onchange="validateemail(this)"
                                                placeholder="E-mail" required>
                                                <input class="form-control mb-4" type="hidden" name="railway" id="railway" value="<?php echo $_GET['railway']?>"
                                                placeholder="E-mail" required>
                                            <label class="form-control-label" for="password">Password <b style="color:red;">*</b></label>
                                            <input class="form-control mb-4" type="password" name="password" id="password" placeholder="Password" required>
                                            <div class="row">
                                                <div class="col-6 text-left pl-3">
                                                    <a href="#">Forgot Password</a>
                                                </div>
                                                <div class="col-6 text-right pr-3">
                                                    <a href="#">Register Now</a>
                                                </div>
                                            </div>
                                            <div class="tab-content category-tab-content" id="login-tabContent">
                                                <div class="tab-pane active" id="login-student" role="tabpanel" aria-labelledby="login-student-tab">
                                                    <div class="row justify-content-center pt-4">
                                                        <button type="submit" name="login_minister" id="login_minister" value="Login" class="btn btn-primary btn-block w-50"
                                                            style="font-weight:bold">Login</a>
                                                    </div>    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
    
    <?php }?>
                        </div>
                    </div>
<?php include './includes/footer.php'?>