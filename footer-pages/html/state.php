<?php include './header.inc.php';?>
      <div class="mainContentDiv">
        <div class="container-fluid">
        <div class="mainContenDivTop"style="text-align:center;">
    <h2><b><?php echo strtoupper($_GET['state']);?> SNAPSHOT</b></h2>
    <br>
      <div class="col-md-4 col-xs-3 _stateScoreDiv">
        <div class="_stateScoreDivIn"style="border-style:solid;border-color:#128582;" >
        <h4><b>COMPLETED</b></h4>
                                                    <h3>
                                                        <?php
                                                        $state = $_GET['state'];
                $sql = "SELECT IFNULL(sum(completed),0) as completed From dashboard where state = '$state'";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res))
                {                       
                    echo $row['completed'];
                      
                }
                 ?>
                                                    </h3>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 _stateScoreDiv"style="border-color: coral;">
        <div class="_stateScoreDivIn"style="border-style:solid;border-color:#128582;">
        <h4><b>POSTED</b></h4>
                                                    <h3>
                                                        <?php
                $sql = "SELECT IFNULL(sum(ongoing),0) as ongoing From dashboard where state = '$state'";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res))
                {                       
                    echo $row['ongoing'];
                      
                }
                 ?>
                                                    </h3>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 _stateScoreDiv"style="border-color: coral;">
        <div class="_stateScoreDivIn"style="border-style:solid;border-color:#128582;">
        <h4><b>POSTED</b></h4>
                                                    <h3>
                                                        <?php
                $sql = "SELECT IFNULL(sum(posted),0) as posted From dashboard where state = '$state'";
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
                <?php 
                $state = $_GET['state'];
                 if($state == "Andaman & Nicobar"){
                  $state = "a-n-islands";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/a-n-islands.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Bihar"){
                  $state = "Bihar";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Bihar.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Andhra Pradesh"){
                  $state = "Andhra Pradesh";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/andhra-pradesh.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Arunanchal Pradesh"){
                 $state =  "Arunanchal Pradesh";
                 echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Arunachal-pradesh.svg"
                 style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Assam"){
                  $state = "Assam";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Assam.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Chandigarh"){
                  $state = "Chandigarh";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Chandigarh.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Chhattisgarh"){
                  $state = "Chhattisgarh";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Chhattisgarh.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Dadra Nagar & Haveli"){
                  $state = "Dadra Nagar & Haveli";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/D-n-haveli.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Daman & Diu"){
                  $state = "Daman & Diu";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Daman-diu.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Delhi"){
                  $state = "Delhi";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Delhi.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Goa"){
                  $state = "Goa";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Goa.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Gujarat"){
                  $state ="Gujarat";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Gujarat.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Haryana"){
                  $state ="Haryana";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Haryana.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Himachal Pradesh"){
                  $state ="Himachal Pradesh";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Himachal-pradesh.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Jammu & Kashmir"){
                  $state ="Jammu & Kashmir";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Jammu-kashmir.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Jharkhand"){
                  $state ="Jharkhand";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Jharkhand.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Karnataka"){
                  $state ="Karnataka";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Karnataka.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Kerala"){
                  $state ="Kerala";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Kerala.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Lakshadweep"){
                  $state ="Lakshadweep";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Lakshadweep.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Leh Ladak"){
                  $state ="Leh Ladak";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Leh-ladahk.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Madhya Pradesh"){
                  $state ="Madhya Pradesh";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Madhya-pradesh.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Maharashtra"){
                  $state ="Maharashtra";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Maharashtra.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Manipur"){
                  $state ="Manipur";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Manipur.svg"
                  style="width: 100%; height:600px "></iframe></div>';  
              }
              if($state == "Meghalaya"){
                  $state ="Meghalaya";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Meghalaya.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Mizoram"){
                  $state ="Mizoram";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Mizoram.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Nagaland"){
                  $state ="Nagaland"; 
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Odisha.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Odisha"){
                  $state ="Odisha";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/a-n-islands.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Puducherry"){
                  $state ="Puducherry";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Puducherry.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Punjab"){
                  $state = "Punjab";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Punjab.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Rajasthan"){
                  $state ="Rajasthan";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Rajasthan.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Sikkim"){
                  $state ="Sikkim";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Sikkim.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Tamil Nadu"){
                  $state ="Tamil Nadu";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Tamil-nadu.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Telangana"){
                  $state ="";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Telangana.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Tripura"){
                  $state ="Tripura";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Tripura.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Uttar Pradesh"){
                  $state ="Uttar Pradesh";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Uttar-pradesh.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
              if($state == "Uttarakhand"){
                  $state ="Uttarakhand";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/Uttarakhand.svg"
                  style="width: 100%; height:600px "></iframe></div>'; 
              }
              if($state == "West Bengal"){
                  $state ="West Bengal";
                  echo' <div class="_mapshw"><iframe scrolling="no" frameborder="0" src="./city-map/West-bengal.svg"
                  style="width: 100%; height:600px "></iframe></div>';
              }
                 
                   ?>                                 
                  <!-- <p>Boundaries shown in the map are as per Gazette Notification of Government of India S.O. 3979(E), dated 2, Nov, 2019.</p> -->
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
                       $state = $_GET['state'];
                        $sql = "SELECT Distinct g.locations,sum(interns) as posted,(Select count(case when a.status='completed' then 1 end) as completed from government_internship_apply a where a.company_id= g.company_id) as completed,(Select count(case when a.status = 'offer_accepted' then 1 end) as ongoing from government_internship_apply a where a.company_id= g.company_id) as ongoing from post_internship_government g inner join ubl_register r on g.company_id = r.ulb_company_id and g.state LIKE '%$state%' group by g.state,g.locations ORDER BY CASE WHEN  completed > 0 THEN completed END DESC,
                        CASE WHEN  ongoing > 0 THEN ongoing END DESC,CASE WHEN  sum(interns) > 0 THEN sum(interns) END DESC";
                        $res = mysqli_query($conn,$sql);
                        if($res){
                          while($row = mysqli_fetch_assoc($res)){
                            echo '
                       <li>
                        <div class="_area"><a href="city.php?city='.$row['locations'].'">'.$row['locations'].'</a></div>
                       <!--  <div class="_sdgS"><img src="images/sdgsIcn.jpg"></div> -->
                        <div class="_score2019">'.$row['completed'].'</div>
                        <div class="_score2019">'.$row['ongoing'].'</div>
                        <div class="_score2018">'.$row['posted'].'</div>
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
