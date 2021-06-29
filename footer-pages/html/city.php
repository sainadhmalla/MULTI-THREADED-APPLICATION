<?php include './header.inc.php'; ?>
<div class="mainContentDiv">
    <div class="container-fluid">
        <div class="mainContenDivTop" style="text-align:center;">
            <h2><b><?php echo strtoupper($_GET['city']); ?></b></h2>
            <br>
            <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                <div class="_mapshw">
                    <image scrolling="no" frameborder="0" src="./download1.png" style="width: 100%; height:300px "></image>
                </div>
            </div>
            <br>
            <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                <h2><b><?php echo "ABOUT" . ' ' . strtoupper($_GET['city']); ?></b></h2>
                <h4><?php echo "Visakhapatnam's history stretches back to the 6th century BCE, when it was considered a part of the Kalinga Kingdom, and later ruled by the Vengi, the Pallava and Eastern Ganga dynasties.[18] Archaeological records suggest that the present city was built around the 11th and 12th centuries with control over the city fluctuating between the Chola Dynasty and the Gajapati Kingdom,[19][20] until its conquest by the Vijayanagara Empire in the 15th century.[18] Conquered by the Mughals in the 16th century, European powers eventually set up trading interests in the city, and by the end of the 18th century it had come under French rule.[19][20] Control passed to the British Raj in 1804 and it remained under British colonial rule until India's independence in 1947." ?></h4>
            </div>
            <br>
        </div>
        <div class="mainContenDivTop" style="text-align:center;">
            <br>
            <div class="col-md-4 col-xs-3 _stateScoreDiv">
                <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                    <div class="_mapshw">
                        <image src="AP1.jpg" style="width:100%; height:300px"></image>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 _stateScoreDiv" style="border-color: coral;">
                <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                    <div class="_mapshw">
                        <image src="AP2.jpg" style="width:100%; height:300px"></image>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 _stateScoreDiv" style="border-color: coral;">
                <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                    <div class="_mapshw">
                        <image src="AP3.jpg" style="width:100%; height:300px"></image>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainContenDivTop" style="text-align:center;">
            <h2><b><?php echo strtoupper($_GET['city']); ?> SNAPSHOT</b></h2>
            <br>
            <div class="col-md-4 col-xs-3 _stateScoreDiv">
                <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                    <h4><b>COMPLETED</b></h4>
                    <h3>
                        <?php
                        $state = $_GET['city'];
                        $sql = "SELECT IFNULL(sum(completed),0) as completed From dashboard where city = '$state'";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo $row['completed'];
                        }
                        ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 _stateScoreDiv" style="border-color: coral;">
                <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                    <h4><b>POSTED</b></h4>
                    <h3>
                        <?php
                        $sql = "SELECT IFNULL(sum(ongoing),0) as ongoing From dashboard where city = '$state'";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo $row['ongoing'];
                        }
                        ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 _stateScoreDiv" style="border-color: coral;">
                <div class="_stateScoreDivIn" style="border-style:solid;border-color:#128582;">
                    <h4><b>POSTED</b></h4>
                    <h3>
                        <?php
                        $sql = "SELECT IFNULL(sum(posted),0) as posted From dashboard where city = '$state'";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo $row['posted'];
                        }
                        ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="mainContenDivTop" style="margin-top:20px">
            <div class="col-md-6 col-xs-12 statesUtsDiv">
                <div class="statesUtsDivIn">

                    <div class="_stateUtsDivCnt">
                        <div class="_statesDivShow demoScroll sc4">
                            <div class='h600'>
                                <ul>
                                    <li>
                                        <div class="_area">DEPARTMENT</div>
                                        <!-- <div class="_sdgS">SDGs</div> -->
                                        <div class="_rank2019">TOTAL</div>
                                    </li>
                                    <?php
                                    $state = $_GET['city'];
                                    $sql = "SELECT g.department,sum(interns) as posted,(Select count(case when a.status='completed' then 1 end) as completed from government_internship_apply a where a.company_id= g.company_id) as completed,(Select count(case when a.status = 'offer_accepted' then 1 end) as ongoing from government_internship_apply a where a.internship_uid= g.uid) as ongoing from post_internship_government g where g.locations = '$state' group by g.department ORDER BY  posted DESC";
                                    $res = mysqli_query($conn, $sql);
                                    if ($res) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '
                       <li>
                       <div class="_area"><a href="city.php?city=' . $row['department'] . '">' . $row['department'] . '</a></div>
                        <div class="_score2019">' . $row['posted'] . '</div>
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
            <div class="col-md-6 col-xs-12 statesUtsDiv">
                <div class="statesUtsDivIn">

                    <div class="_stateUtsDivCnt">
                        <div class="_statesDivShow demoScroll sc4">
                            <div class='h600'>
                                <ul>
                                    <li>
                                        <div class="_area">City</div>
                                        <!-- <div class="_sdgS">SDGs</div> -->
                                        <div class="_rank2019">COMPLETED</div>
                                        <div class="_score2019">ONGOING</div>
                                        <div class="_score2018">POSTED</div>
                                    </li>
                                    <?php
                                    $state = $_GET['city'];
                                    $sql = "SELECT Distinct r.ulb_organisaton,g.locations,sum(interns) as posted,(Select count(case when a.status='completed' then 1 end) as completed from government_internship_apply a where a.company_id= g.company_id) as completed,(Select count(case when a.status = 'offer_accepted' then 1 end) as ongoing from government_internship_apply a where a.company_id= g.company_id) as ongoing from post_internship_government g inner join ubl_register r on g.company_id = r.ulb_company_id and g.locations LIKE '%$state%' group by g.state,g.locations,r.ulb_organisaton ORDER BY CASE WHEN  completed > 0 THEN completed END DESC,
                        CASE WHEN  ongoing > 0 THEN ongoing END DESC,CASE WHEN  sum(interns) > 0 THEN sum(interns) END DESC";
                                    $res = mysqli_query($conn, $sql);
                                    if ($res) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '
                       <li>
                        <div class="_area"><a href="city.php?city=' . $row['ulb_organisaton'] . '">' . $row['ulb_organisaton'] . '</a></div>
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
