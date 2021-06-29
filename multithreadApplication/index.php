<?php
include './includes/header.php'; 
?>
<div class="container mt-2 pt-3 justify-content-center">
            <div class="banner-carousel-wrap">
                <div id="banner-carousel" class="carousel slide" data-ride="acarousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner-item-wrap">
                                <div class="banner-item">
                                    <div class="row w-150">
                                        <div class="col-lg-2 mx-auto">
                                            <div class="img-wrap text-center">
                                                <img src="../images/railways-logo.png" height="150rem" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <div class="banner-item-content mt-5">
                                                <h2>Internships in Indian Railways</h2>
                                                <p class="lead">
                                                    <b>SuperSkill your Future!</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mx-auto">
                                            <div class="img-wrap text-center">
                                                <img src="../images/mantriji-img.png" height="150rem" alt="">
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

        <div class="main-container mt-3 pt-3 px-4">
            <div class="row">
                <div class="col">
                    <div class="register-section">
                        <div class="section-caption">
                            <h2 class="text-primary">Be an Intern with Indian Railways - One of the World's Largest Organizations and <br> the Life-line of Indian Economy.
                            </h2>
                        </div>

                        <ul class="nav nav-tabs register-tab" id="register-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link select-zone active" id="select-zone-tab" data-toggle="tab" href="#select-zone" role="tab"
                                    aria-controls="select-zone" aria-selected="false">
                                    <i class="fas fa-train  reg-ico"></i>
                            
                                    <span class="reg-heading">
                                        Zone
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link select-division" id="select-division-tab" data-toggle="tab" href="#select-division" role="tab"
                                    aria-controls="select-division" aria-selected="false">
                                    <i class="fas fa-braille reg-ico"></i>
                                    <span class="reg-heading">
                                        Division
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link select-category" id="select-category-tab" data-toggle="tab"
                                    href="#select-category" role="tab" aria-controls="select-category"
                                    aria-selected="false">
                                    <i class="fas fa-list-alt reg-ico"></i>

                                    <span class="reg-heading">
                                        Department
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link select-project " id="select-project-tab" data-toggle="tab"
                                    href="#select-project" role="tab" aria-controls="select-project"
                                    aria-selected="false">
                                    <i class="fas fa-project-diagram reg-ico"></i>
                                    <span class="reg-heading">
                                        Project
                                    </span>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content category-tab-content" id="register-tabContent">
                        <div class="text-center">
                                <button id="btnRefresh" type="button" class="btn btn-primary btn-icon" onclick="window.location.href = window.location.href">
                                            <span class="btn-inner--icon"><i class="fa fa-redo"></i></span>
                                            <span class="btn-inner--text text-white">Restart</span>
                                </button>
                            </div>
                            <div class="tab-pane" id="select-category" role="tabpanel"
                                aria-labelledby="select-category-tab">

                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="mt-4">
                                                <div id="student_form">
                                                    <form method="post" class="text-center" action="./src/php/main.php">
                                                        <div class="row justify-content-center ">
                                                            <h3>Please select a Department you are Interested in
                                                                working as an Intern</h3>
                                                            <section class="pt-3" id="category">
                                                                <div id="categoryRow" class="radio-tile-group row">
                                                                    <script id="categoryTemplate"
                                                                        type="text/x-handlebars-template">
                                                                    {{#each categories}}
                                                                        <div class="col-xs-6 col-md-4 mx-md-auto  mx-lg-auto  col-lg-3 mt-3">
                                                                            <div class="card bg-white mx-auto">
                                                                                <div class="card-body">
                                                                                    <input id="{{this.id}}" class="radio-button" type="radio" name="category" />
                                                                                    <div class="radio-tile category">
                                                                                        <label for="{{this.id}}" class="radio-tile-label">{{this.project_name}}</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    {{/each}}
                                                                </script>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                            <div class="tab-pane" id="select-project" role="tabpanel"
                                aria-labelledby="select-project-tab">
                                <section class="mt-5">
                                    <div class="container ">
                                        <div id="corporate_form">
                                            <div class="row justify-content-center">
                                                <!-- <div style="white-space: pre;"> -->
                                                <div class="d-block">
                                                    <h3 id="subCategory-heading" class="text-center"></h3>

                                                </div>
                                                <section class="pt-3" id="subCategorySection">
                                                    <div id="subCategoryRow" class="radio-tile-group row">
                                                        <script id="subCategoryTemplate"
                                                            type="text/x-handlebars-template">
                                                        {{#each objects}}
                                                        <div class="col-xs-6 col-md-4 mx-md-auto  mx-lg-auto  col-lg-3 mt-3">
                                                            <div class="card bg-white mx-auto">
                                                                <div class="card-body">
                                                                    <input id="{{this.id}}" class="radio-button" type="radio" name="subcategory" />
                                                                    <div class="radio-tile subcategory">
                                                                        <label for="{{this.id}}" class="radio-tile-label">{{this.project_name}}</label>
                                                                        <label for="{{this.id}}" class="radio-tile-label">({{this.project_nature}})</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{/each}}
                                                        </script>
                                                        <div id="customProj"
                                                            class="col-xs-6 col-md-4 mx-md-auto mx-lg-auto  col-lg-3 mt-3 d-none">
                                                            <div class="card bg-white mx-auto">
                                                                <div class="card-body">
                                                                    <input id="subcategoryCustom" class="radio-button"
                                                                        type="radio" name="category" />
                                                                    <div class="radio-tile subcategory">
                                                                        <label id="lblCustom" for="subcategoryCustom"
                                                                            class="radio-tile-label"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="subCategory1-project1-modal"
                                                        data-backdrop="static" data-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                                        Modal
                                                                        title</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Lorem ipsum dolor, sit amet consectetur adipisicing
                                                                    elit. Ea quas voluptas eum earum quo corporis
                                                                    quaerat dignissimos, praesentium placeat in nostrum
                                                                    adipisci corrupti perspiciatis repudiandae
                                                                    reiciendis repellendus at natus dolorem!
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="text-center">Couldn't find the project of your choice? 
                                                        <a href="#" id="subCategory-work" class="text-primary">Suggest
                                                            your own.
                                                        </a>
                                                    </h4>
                                                            <!-- Modal -->
                                                    <div class="modal fade" id="modalSuggest" tabindex="-1" role="dialog" aria-labelledby="modalSuggestLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalSuggestLabel">Suggest a project you would like us to add in YARI</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <label for="txtProjectName" class="float-left">
                                                                                <b>
                                                                                    Suggested Project Name
                                                                                </b><b style="color:red">*</b>
                                                                            </label>
                                                                            <input type="text" name="txtProjectName" id="txtProjectName" class="form-control mb-4" placeholder="Please enter name of suggested project." required="">
                                                                        </div>
                                                                        <div class="col-md-4 mt-4">
                                                                            <h5>
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
                                                                            <label for="txtDescription" class="float-left">
                                                                                <b>
                                                                                    Project Description
                                                                                </b><b style="color:red">*</b>
                                                                            </label>
                                                                            <textarea type="text" name="txtDescription" rows="3" id="txtDescription" class="form-control mb-4"
                                                                                placeholder="Please explain your proposed project, so we can evaluate your idea."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="btnSuggest" class="btn btn-primary">Suggest</button>
                                                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="tab-pane active" id="select-zone" role="tabpanel" aria-labelledby="select-zone-tab">
                                <section class="mt-5">
                                    <div class="container ">
                                        <div id="corporate_form">
                                            <div class="row justify-content-center">
                                                <h3>Please Select your Preferred Railway Zone</h3>
                                                <section class="pt-3" id="zones">
                                                    <div id="zonesRow"
                                                        class="radio-tile-group row justify-content-center">
                                                        <script id="zoneTemplate" type="text/x-handlebars-template">
                                                        {{#each objects}}
                                                        <div class="col-xs-6 col-md-4 mx-md-2  mx-lg-auto  col-lg-3 mt-3">
                                                            <div class="card bg-white mx-auto">
                                                                <div class="card-body">
                                                                    <input id="{{inc @index}}"value="{{this.code}}" class="radio-button" type="radio" name="zone" />
                                                                    <div class="radio-tile zone">
                                                                        <label for="{{inc @index}}" class="radio-tile-label">{{this.name}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{/each}}
                                                    </script>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="tab-pane" id="select-division" role="tabpanel"
                                aria-labelledby="select-division-tab">
                                <section class="mt-5">
                                    <div id="corporate_form" class="container md-4">
                                        <div class="row justify-content-center d-block">

                                            <h3 class="text-center">Please Select your Preferred Railway Division or Workshop</h3>

                                            <section class="pt-3" id="divisions">
                                                <hr>
                                                <div class="row justify-content-center">
                                                    <div class="d-block">
                                                        <h4>
                                                            Divisions
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div id="divisionRow"
                                                    class="radio-tile-group row justify-content-center">
                                                    <script id="divisionTemplate" type="text/x-handlebars-template">
                                                            {{#each divisions}}
                                                            <div class="col-xs-6 col-md-4 mx-md-2  mx-lg-auto  col-lg-3 mt-3">
                                                                <div class="card bg-white mx-auto">
                                                                    <div class="card-body">
                                                                        <input id="{{inc @index}}" class="radio-button" type="radio" name="division" />
                                                                        <div class="radio-tile division">
                                                                            <label for="{{inc @index}}" type="division" class="radio-tile-label">{{this}}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{/each}}
                                                    </script>
                                                </div>

                                                <!-- Workshops -->
                                                <hr>
                                                <div id="workshopsDiv" class="row justify-content-center">
                                                    <div class="d-block">
                                                        <h4>
                                                            Workshops
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div id="workshopRow"
                                                    class="radio-tile-group row justify-content-center">
                                                    <script id="workshopTemplate" type="text/x-handlebars-template">
                                                            {{#each workshops}}
                                                            <div class="col-xs-6 col-md-4 mx-md-2  mx-lg-auto  col-lg-3 mt-3">
                                                                <div class="card bg-white mx-auto">
                                                                    <div class="card-body">
                                                                        <input id="{{inc @index}}" class="radio-button" type="radio" name="division" />
                                                                        <div class="radio-tile division">
                                                                            <label for="{{inc @index}}" type="workshop" class="radio-tile-label">{{this}}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{/each}}
                                                    </script>
                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>
                        </form>
                    </div>
            <?php include './includes/footer.php' ?>