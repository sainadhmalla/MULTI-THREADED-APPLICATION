<?php include './header.inc.php'; ?>
<div class="mainContentDiv">
  <div class="container-fluid">
    <div class="mainContenDivTop"style="text-align:center">
    <h2><b>NATIONAL SNAPSHOT</b></h2>
</BR>
      <div class="col-md-4 col-xs-4 _stateScoreDiv">
        <div class="_stateScoreDivIn"style="border-style:solid;border-color:#128582;">
        <h4><b>COMPLETED</b></h4>
                                                    <h3>
                                                        <?php
                                                        $sum = 0;
                $sql = "SELECT sum(completed) as completed From dashboard";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res))
                {                       
                    echo $row['completed'];
                      
                }
                 ?>
                                                    </h3>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 _stateScoreDiv">
        <div class="_stateScoreDivIn"style="border-style:solid;border-color:#128582;">
        <h4><b>POSTED</b></h4>
                                                    <h3>
                                                        <?php
                                                        $sum = 0;
                $sql = "SELECT sum(ongoing) as ongoing From dashboard";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res))
                {                       
                    echo $row['ongoing'];
                      
                }
                 ?>
                                                    </h3>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 _stateScoreDiv">
        <div class="_stateScoreDivIn"style="border-style:solid;border-color:#128582;">
        <h4><b>POSTED</b></h4>
                                                    <h3>
                                                        <?php
                                                        $sum = 0;
                $sql = "SELECT sum(posted) as posted From dashboard";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res))
                {                       
                    echo $row['posted'];
                      
                }
                 ?>
                                                    </h3>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="mainContenDivTop" style="margin-top:20px">
      <div class="col-md-6 col-xs-12 _stateScoreDiv">
        <div class="_stateScoreDivIn">
          <!-- <div class="_stateScoreDivInTab mapTableDivtab">
                  <div class="mapTxt">Map</div>
                  <div class="maptabTab">
                    <ul>
                      <li class="activeMp">Map</li>
                      <li>Table</li>
                    </ul>
                  </div>
                  <div class="tabTxt">Table</div>
                </div> -->
          <!-- <div class="_stScore">State Score</div> -->
          <div class="_mapTableCntShw">
            <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="embed.php" style="width: 100%; height:600px "></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xs-12 statesUtsDiv">
        <div class="statesUtsDivIn">
          <!-- <div class="_stateScoreDivInTab stateUtsDivTab">
                  <div class="mapTxt">States</div>
                  <div class="maptabTab">
                    <ul>
                      <li class="activeMp">states</li>
                      <li>uts</li>
                    </ul>
                  </div>
                  <div class="tabTxt">UTs</div>
                </div> -->
          <div class="_stateUtsDivCnt">
            <div class="_statesDivShow demoScroll sc4">
              <div class='h600' style="height:600px">
                <ul>
                  <li>
                    <div class="_area">State</div>
                    <!-- <div class="_sdgS">SDGs</div> -->
                    <div class="_rank2019">COMPLETED</div>
                    <div class="_score2019">ONGOING</div>
                    <div class="_score2018">POSTED</div>
                  </li>
                  <?php
                  $sql = "select state,sum(posted) as posted, sum(ongoing) as ongoing,sum(completed) as completed from dashboard group by state ORDER BY CASE WHEN  sum(completed) > 0 THEN sum(completed) END DESC,
                  CASE WHEN  sum(ongoing) > 0 THEN sum(ongoing) END DESC,CASE WHEN  sum(posted) > 0 THEN sum(posted) END DESC Limit 10";
                  $res = mysqli_query($conn, $sql);
                  if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {
                      echo '
                       <li>
                       <div class="_area"><a href="state.php?state='.$row['state'].'">'.$row['state'].'</a></div>
                       <!--  <div class="_sdgS"><img src="images/sdgsIcn.jpg"></div> -->
                        <div class="_score2019">' . $row['completed'] . '</div>
                        <div class="_score2019">' . $row['ongoing'] . '</div>
                        <div class="_score2018">' . $row['posted'] . '</div>
                      </li>';
                    }
                  }
                  ?>
                </ul>
              </div>
            </div>
            <!--  <p class="btmCntDiv">The indicator set for SDG India Index 2019-2020 is large (100 indicators) as compared to SDG India Index 2018 ( 62 indicators) and thereby two indices are strictly not comparable. There are 40 indicators that are common across SDG India Index 2018 and SDG India Index 2019-2020.</p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="mainCntIndiactorLstDiv">
        <div class="container-fluid">
          <div class="mainCntIndiactorLstDivIn">
            <h2 class="indiHdng">SDG India Index: <span>INDICATOR LIST</span></h2>
            <div class="_IndIndic demoScroll sc4">
              <div class="h600">
            <table rules="all">
              <tr>
                <th>#</th>
                <th>Area</th>
                <th>Population living below National Poverty line (%)
                GOAL 1</th>
                <th>Households with any usual member covered by any health scheme or health insurance (%)
                GOAL 1</th>
                <th>Persons provided employment as a percentage of persons who demanded employment under MGNREGA (%)
                GOAL 1</th>
                <th>Proportion of the population (out of total eligible population) receiving social protection benefits under Maternity Benefit (%)
                GOAL 1</th>
                <th>Households living in kutcha houses (rural + urban) (%)
                GOAL 1</th>
                <th>6-59 months who are anaemic (Hb 11.0 g/dl) (%)
                GOAL 2</th>
                <th>Population living below National Poverty line (%)
                GOAL 1</th>
                <th>Households with any usual member covered by any health scheme or health insurance (%)
                GOAL 1</th>
                <th>Persons provided employment as a percentage of persons who demanded employment under MGNREGA (%)
                GOAL 1</th>
                <th>Proportion of the population (out of total eligible population) receiving social protection benefits under Maternity Benefit (%)
                GOAL 1</th>
                <th>Households living in kutcha houses (rural + urban) (%)
                GOAL 1</th>
                <th>6-59 months who are anaemic (Hb 11.0 g/dl) (%)
                GOAL 2</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
              <tr>
                <td>1</td>
                <td>Indian</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
               <tr>
                <td>1</td>
                <td>Delhi</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                <td>200</td>
                <td>1</td>
                <td>Target</td>
                <td>10.95</td>
                <td>  100</td>
                
              </tr>
            </table>
          </div>
            </div>
          </div>
        </div>
      </div> -->
<footer>
  <div class="container-fluid">
    <div class="footerIn">
    </div>
  </div>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/venobox.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
