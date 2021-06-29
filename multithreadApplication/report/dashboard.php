<?php include '../../src/php/dbh.php'; ?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Indian Railways - Internship Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="./assets/images/railways-logo.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="./assets/vendor/select2/dist/css/select2.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="./assets/css/argon.min5438.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
</head>

<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <!-- <nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-secondary">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-2>
            <div class="float-left">
              <a href="javascript:void(0)"><img src="./assets/images/railways-logo.png" style="width: 150px"></a>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 d-none d-sm-block">
            <div class="" style="text-align: left;">
              <a href="javascript:void(0)">
                <h1 style="color: #000;">#AICTE internships</h1>
              </a>
            </div>
          </div>
          </div>
          <div class="col-md-4 col-xs-12 d-none d-sm-block">
            <div class="float-right">
              <a href="javascript:void(0)"><img src="./assets/images/ministers.png" style="width:400px"></a>
            </div>
          </div>
        </div>
      </div>
    </nav> -->
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-12 m-2">
              <img class="" src="./assets/images/banner-railway.jpg" style="width: 100%;" alt="">
            </div>
          </div>
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-dark d-inline-block mb-0">Dashboard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-2x fa-train text-dark"></i></a></li>
                  <li class="breadcrumb-item"><a href="#" class="text-dark">Indian Railways</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color: #000;">Dashboard</li>
                  <li class="breadcrumb-item active" aria-current="page" style="color: #000;"><a href="../railway_approval.php">Approval Management</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card card-frame">
                <div class="card-body">
                  <div class="card-title">
                    <h3 class="card-title">Filters</h3>
                  </div>
                  <div class="row">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="selectQualification_Int">Zone</label>
                        <select class="form-control" id="selectQualification_Int">
                          <option value="" selected disabled>Please Select Zone</option>
                          <option value="Central Railway">Central Railways</option>
                          <option value="Northern Railway">Northern Railway</option>
                          <option value="North Eastern Railway">North Eastern Railway</option>
                          <option value="Northeast Frontier Railway">Northeast Frontier Railway</option>
                          <option value="Eastern Railway">Eastern Railway</option>
                          <option value="South Eastern Railway">South Eastern Railway</option>
                        </select>
                      </div>
                    </div>
                    <!--  <div class="col-md-3">
                  <div class="form-group">
                    <label for="selectGender_Int">Division</label>
                    <select data-toggle="select" class="form-control" id="selectGender_Int">
                      <option value="" selected disabled>Please Select Division</option>
                      <option>Mumbai</option>
                      <option>Bhusawal</option>
                      <option>Pune</option>
                      <option>Solapur</option>
                      <option>Nagpur</option>
                      <option>CR</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="selectCategory_Int">Project Category</label>
                    <select data-toggle="select" class="form-control" id="selectCategory_Int">
                      <option value="" selected disabled>Please Select Category</option>
                      <option>Electrical Engineering</option>
                      <option>Finance Management</option>
                      <option>Civil Engineering</option>
                      <option>Commercial and Marketing</option>
                      <option>Materials Management</option>
                      <option>Signaling and Telecommunication</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="selectSkills_Int">Projects</label>
                    <select data-toggle="select" class="form-control" id="selectSkills_Int">
                      <option>Foot patrolling in traction distribution (Online)</option>
                      <option>Real time monitoring of Tower wagons (Online)</option>
                      <option>Online monitoring of OHE using SCADA (Online)</option>
                      <option>Online monitoring of asset in Traction Distribution (Online)</option>
                      <option>Tender Management in Traction Distribution (Online)</option>
                      <option>Materials Management system in Traction Distribution (Online)</option>
                      <option>Power quality monitoring , power measurements and fault detection (Offline)</option>
                      <option>Design and construction of 25 KV substation, 22/2.2 KV substation (Offline)</option>
                      <option>Mechanized working in the field of stripping,dismantling etc (Offline)</option>
                      <option>Failure analysis of electronics card and its remedies (Offline)</option>
                      <option>Transportation and handling of various equipment (Offline)</option>
                      <option>Formation of quality circles, data analysis and attention thereof (Offline)</option>
                      <option>Development of R &D sections & laboratory to eradicate recurring defects (Offline)</option>
                      <option>Needs of specialization team for exchanging ideas quality maintenance (Offline)</option>
                      <option>Pictorial demonstrations for upgrading skills of maintenance staff, supervisors etc (Offline)</option>
                      <option>Automation of crane working by decontrol from work place. (Offline)</option>
                      <option>Design,develop and installation of occupancy sensors to office buildings. (Offline)</option>
                      <option>Automation of measuring & recording systems various electrical equipments (Offline)</option>
                      <option>Multi Skilling of staff to get optimum utilization of manpower (Offline)</option>
                      <option>Temperature sensing, monitoring, communicating & preventive action in power supply panels (Offline)</option>
                      <option>Optimising use of air-conditioning for equipments and human comfort (Offline)</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
                  </div>
                  <!-- Card stats -->
                  <div id="new">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col" id="applied">
                                <h5 class="card-title text-uppercase text-muted mb-0">Student Applied</h5>
                                <?php
                                $sql = "Select count(*) as posted from railways_form";
                                $res = mysqli_query($conn, $sql);
                                if ($res) {
                                  $row = mysqli_fetch_assoc($res);
                                }
                                echo '
                     			 <span class="h2 font-weight-bold mb-0">' . $row['posted'] . '</span>';
                                ?>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                  <i class="ni ni-active-40"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col" id="completed">
                                <h5 class="card-title text-uppercase text-muted mb-0">Completed Internships</h5>
                                <?php
                                $sql = "Select count(*) as posted from railways_form where status = 'Internship completed'";
                                $res = mysqli_query($conn, $sql);
                                if ($res) {
                                  $row = mysqli_fetch_array($res);
                                }
                                echo '
                     		  <span class="h2 font-weight-bold mb-0">' . $row['posted'] . '</span>';
                                ?>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                  <i class="ni ni-chart-pie-35"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-12">
                        <div class="card card-stats">
                          <!-- Card body -->
                          <div class="card-body">
                            <div class="row">
                              <div class="col" id="ongoing">
                                <h5 class="card-title text-uppercase text-muted mb-0">Ongoing Internships</h5>
                                <?php
                                $sql = "Select count(*) as posted from railways_form where status = 'selected'";
                                $res = mysqli_query($conn, $sql);
                                if ($res) {
                                  $row = mysqli_fetch_assoc($res);
                                }
                                echo '
                             	 <span class="h2 font-weight-bold mb-0">' . $row['posted'] . '</span>';
                                ?>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                  <i class="ni ni-money-coins"></i>
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
              <!-- Page content -->
              <div class="container-fluid mt--6">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <!-- Card header -->
                          <div class="card-header border-0">
                            <h3 class="mb-0">Zone Wise Data</h3>
                          </div>
                          <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col" class="sort" data-sort="state">Zone Name</th>
                                  <th scope="col" class="sort" data-sort="ongoing">Students Applied</th>
                                  <th scope="col" class="sort" data-sort="completed">Students Ongoing</th>
                                  <th scope="col" class="sort" data-sort="posted">Students Completed</th>
                                </tr>
                              </thead>
                              <tbody class="list" id="body">
                                <?php
                                $sql = "Select zone,student_first_name,student_middle_name,student_last_name,f.status,student_stream,student_course from railways_form f inner join student_register r on r.student_uid = f.student_uid";
                                $res = mysqli_query($conn, $sql);
                                if ($res) {
                                  while ($row = mysqli_fetch_assoc($res)) {
					}
                                    echo '
                                        <tr>
                                          <td class="h3">Central Railway</td>
                                          <td>3</td>
                                          <td>1</td>
                                          <td>1</td>
                                        </tr>
					 <tr>
                                          <td class="h3">Northern Railway</td>
                                          <td>2</td>
                                          <td>0</td>
                                          <td>0</td>
                                        </tr>
					 <tr>
                                          <td class="h3">Southern Railway</td>
                                          <td>1</td>
                                          <td>0</td>
                                          <td>1</td>
                                        </tr>	
';
                                  }
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <script>
                $("#selectQualification_Int").change(function() {
                  var filter = $("#selectQualification_Int").val();
                  $("#applied").load('./tulip_fetchquery.php', {
                    filter: filter,
                    applied: true
                  });
                  $("#ongoing").load('./tulip_fetchquery.php', {
                    filter: filter,
                    ongoing: true
                  });
                  $("#completed").load('./tulip_fetchquery.php', {
                    filter: filter,
                    completed: true
                  });
                  $("#body").load('./tulip_fetchquery.php', {
                    filter: filter,
                    body: true
                  });

                });
              </script>
              <!-- Footer -->
              <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                      &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">AICTE</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                      <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">AICTE</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a href="#/" class="nav-link" target="_blank">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link" target="_blank">License</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $()
  </script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="./assets/vendor/select2/dist/js/select2.min.js"></script>
  <script src="./assets/js/filters.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.min5438.js?v=1.2.0"></script>

</body>

</html>
