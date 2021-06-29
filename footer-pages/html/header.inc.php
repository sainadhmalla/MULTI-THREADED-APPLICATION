<?php include '../src/php/dbh.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TULIP DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/venobox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="mainTpDiv">
      <header>
        <div class="container-fluid">
          <div class="headerIn">
            <div class="col-md-4 col-xs-12 _hdr">
              <div class="_hdrIn">
                <a href="javascript:void(0)"><img src="images/logo01.jpg" style="width: 190px"></a>
              </div>
            </div>
            <div class="col-md-4 col-xs-12 _hdrC">
              <div class="_hdrIn">
                <a href="javascript:void(0)"><img src="images/tupliplogo.png" style="width: 170px"></a>
              </div>
            </div>
            <div class="col-md-4 col-xs-12 _hdrRgt">
              <div class="_hdrIn">
                <a href="javascript:void(0)"><img src="images/modiJi.png" style="width: 148px"></a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="hdrMenuDiv">
        <div class="container-fluid">
          <div class="hdrMenuDivIn">
            <ul>
              <li><a href="index.php">TULIP NATIONAL SNAPHOT</a></li>
              <li><a href="javascript:void(0)">STATE<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
                  <!-- <li><a href="./index.php">India</a></li> -->
                  <?php
                  $sql = "SELECT `State/UT_Name` FROM ministry"; 
                  $res = mysqli_query($conn,$sql);
                  if($res){
                    while($row = mysqli_fetch_assoc($res)){
                      echo '<li><a href="state.php?state='.$row['State/UT_Name'].'">'.$row['State/UT_Name'].'</a></li>';
                    }
                  }
                 
                  ?>
                </ul>
              </li>
              <li><a href="javascript:void(0)">2020 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
             <!--      <li><a href="javascript:void(0)">2019</a></li>
                  <li><a href="javascript:void(0)">2018</a></li> -->
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>