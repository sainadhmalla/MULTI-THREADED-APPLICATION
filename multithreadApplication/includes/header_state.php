<?php include './src/php/dbh.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AICTE Internship Enterprise Portal - Learning by doing. 1 Crore Internships by 2025</title>
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="shortcut icon" href="../images/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
    <link rel="manifest" href="../images/favicons/manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="AICTE">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../images/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="../images/favicons/apple-touch-icon-1024x1024.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="AICTE">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="../style.1c48d001a3f8a2fd1816.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/railways.css">
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="../sweetalert.min.js"></script>
    <script src="../assets/js/validate.js"></script>
    <script src="../assets/js/cities.js"></script>
</head>
<body>
<main role="main" class="container-fluid">
        <header class="home-page">
            <nav class="navbar navbar-light">
              <!--   <div class="navbar-left">
                    <button type="button" class="btn navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#languages-menu">
                        <span class="sr-only">Switch language</span>
                        <img src="../images/icon-translate.5d54eb12502dfba5f0d87ee2290693cd.png" alt="Translate">
                    </button>
                </div> -->
                <div class="navbar-middle">
                    <div class="brands-wrap">
                    <ul class="brands">
                            <li><a class="navbar-brand aicte-internships" href="index.php"><span class="sr-only">AICTE
                                        Internships</span></a></li>
                            <li><a class="navbar-brand aicte" href="index.php"><span class="sr-only">All India Council for
                                        Technical Education</span></a></li>
                            <li><a class="navbar-brand goi" href="index.php"><span class="sr-only">Ministry of Education</span></a></li>
                            <li><a class="navbar-brand mhrd" href="index.php"><span class="sr-only">Railway</span></a></li>
                        </ul>
                    </div>  
                </div>
                <div id="main-menu" class="header-links-wrap collapse">
                    <ul class="header-links">
                        <li class="post-internship-link"><a href="railway_aprroved.php" class="btn btn-sm btn-link">Approved</a></li>
                        <li class="post-internship-link"><a href="railway_approval.php" class="btn btn-sm btn-link">To be Approved</a></li>

                        <li class="post-internship-link"><a href="railway_disapproved.php" class="btn btn-sm btn-link">Disapproved</a></li>
                        <?php
if($_SESSION['type']=="Zone")
{
    echo'
    <li class="post-internship-link"><a href="./report/dashboard.php" class="btn btn-sm btn-link">Dashboard</a></li>';
}else if($_SESSION['type']=="Division"){
    echo'
    <li class="post-internship-link"><a href="project_approval.php" class="btn btn-sm btn-link">Project Approval</a></li>
    <li class="post-internship-link"><a href="./report/dashboard.php" class="btn btn-sm btn-link">Dashboard</a></li>';
}else{
    echo'<li class="post-internship-link"><a href="./report/dashboard.php" class="btn btn-sm btn-link">Dashboard</a></li>';
} 
?>
                        <li class="post-internship-link"><a  href="./logout.php" class="btn btn-sm btn-link">Logout</a>

                    </ul>
                </div>
                </div>
            </nav>
        </header>
