<?php
    include("Header.php");
    include("Sidebar.php");
?>
		<div class="page-wrapper">
            <div class="page-content">
              <div class="row">
                <div class="col-md-4">
                    <div class="card radius-15 bg-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white"><h5 class="text-white">Available Donors</h5></p>
                                    <?php
                                        $sql="SELECT * FROM `donor_registation` WHERE  `donor_blood_available`='1' && `delete_status`='0'";
                                        $total_avali_donor=$server->total_row($sql); 
                                        if($total_avali_donor=="")
                                        {
                                            $total_avali_donor="0";
                                        }
                                    ?>
                                    <h4 class="my-1 text-white"><?php echo $total_avali_donor; ?></h4>
                                    <p class="mb-0 font-13 text-white"></p>
                                </div>
                                    <div class="widgets-icons bg-light-warning text-success ms-auto"><i class='bx bxs-group'></i></div>
                                </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card radius-15 bg-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white"><h5 class="text-white">Not Avaliable Donors</h5></p>
                                    <?php
                                        $sql="SELECT * FROM `donor_registation` WHERE  `donor_blood_available`='0' && `delete_status`='0'";
                                        $total_notavali_donor=$server->total_row($sql); 
                                        if($total_notavali_donor=="")
                                        {
                                            $total_notavali_donor="0";
                                        }
                                    ?> 
                                    <h4 class="my-1 text-white"><?php echo $total_notavali_donor; ?></h4>
                                    <p class="mb-0 font-13 text-white"></p>
                                </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i></div>
                                </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card radius-15 bg-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-white"><h5 class="text-white">Delete  Accounts</h5></p>
                                    <?php
                                        $sql="SELECT * FROM `donor_registation` WHERE  `delete_status`='1'";
                                        $total_delete=$server->total_row($sql); 
                                        if($total_delete=="")
                                        {
                                            $total_delete="0";
                                        }
                                    ?>  
                                    <h4 class="my-1 text-white"><?php echo $total_delete; ?></h4>
                                    <p class="mb-0 font-13 text-white"></p>
                                </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i></div>
                                </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
                </div>
                <hr>
                <div class="row ">
                  <div class="col-3">
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='A+' && `donor_blood_available`='1' && `delete_status`='0'";
                    $APosetivelood=$server->total_row($sql); 
                    if($APosetivelood=="")
                    {
                        $APosetivelood="0";
                    }
                    ?>
                        <div class="card radius-15 bg-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"><h5 class="text-white">A+ Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $APosetivelood;?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='A-' && `donor_blood_available`='1' && `delete_status`='0'";
                     $Anegativeblood=$server->total_row($sql);
                     if( $Anegativeblood=="")
                     {
                        $Anegativeblood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"><h5 class="text-white">A- Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $Anegativeblood; ?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='B+ ' && `donor_blood_available`='1' && `delete_status`='0'";
                     $BposetiveBlood=$server->total_row($sql);
                     if( $BposetiveBlood=="")
                     {
                        $BposetiveBlood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-secondary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"><h5 class="text-white">B+ Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $BposetiveBlood;?></h4>
                                        <p class="mb-0 font-13 text-white">
                                    </div>
                                    <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                    </div>
                                </div>
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='B-' && `donor_blood_available`='1' && `delete_status`='0'";
                     $Bnegativeblood=$server->total_row($sql);
                     if( $Bnegativeblood=="")
                     {
                        $Bnegativeblood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-warning">
                            <a href="Event.php">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0"><h5 class="text-white">B- Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $Bnegativeblood; ?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-line-chart-down'></i>
                                    </div>
                                </div>
                                <div id="chart3"></div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='AB+' && `donor_blood_available`='1' && `delete_status`='0'";
                     $ABposativeblood=$server->total_row($sql);
                     if( $ABposativeblood=="")
                     {
                        $ABposativeblood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"><h5 class="text-white">AB+ Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $ABposativeblood; ?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='AB-' && `donor_blood_available`='1' && `delete_status`='0'";
                     $ABnegativeblood=$server->total_row($sql);
                     if( $ABnegativeblood=="")
                     {
                        $ABnegativeblood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-secondary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"><h5 class="text-white">AB- Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $ABnegativeblood; ?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='O+' && `donor_blood_available`='1' && `delete_status`='0'";
                     $Oposativeblood=$server->total_row($sql);
                     if( $Oposativeblood=="")
                     {
                        $Oposativeblood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"><h5 class="text-white">O+ Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $Oposativeblood; ?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='O-' && `donor_blood_available`='1' && `delete_status`='0'";
                     $Onegativeblood=$server->total_row($sql);
                     if( $Onegativeblood=="")
                     {
                        $Onegativeblood="0";
                     } 
                    ?>
                    <div class="col-3">
                        <div class="card radius-15 bg-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"><h5 class="text-white">O- Blood</h5></p>
                                        
                                        <h4 class="my-1 text-white"><?php echo $Onegativeblood; ?></h4>
                                        <p class="mb-0 font-13 text-white"></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                 <div class="border p-3 rounded">
                                 <div class="row d-flex justify-content-center">
                                    <h2 class="bg bg-success" style="text-align: center; color: white;">Detali Blood  Report</h2>
                                    <html>
                                          <head>
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                              google.charts.load("current", {packages:["corechart"]});
                                              google.charts.setOnLoadCallback(drawChart);
                                              function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                  ['Detalis', 'Total'],
                                                  ['Total A+ Blood Donor',<?php echo $APosetivelood;?>],
                                                  ['Total A- Blood Donor',<?php echo $Anegativeblood;?>],
                                                  ['Total B+ Blood Donor',<?php echo $BposetiveBlood;?>],
                                                  ['Total B- Blood Donor',<?php echo $Bnegativeblood; ?>],
                                                  ['Total AB+ Blood Donor',<?php echo $ABposativeblood; ?>],
                                                  ['Total AB- Blood Donor',<?php echo $ABnegativeblood; ?>],
                                                  ['Total O+ Blood Donor',<?php echo $Oposativeblood; ?>],
                                                  [' Total )- Blood Donor',<?php echo $Onegativeblood; ?>],
                                                ]);

                                                var options = {
                                                   is3D: true,
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                                chart.draw(data, options);
                                              }
                                            </script>
                                          </head>
                                          <body>
                                            <div id="donutchart" style="width: 900px; height: 500px;"></div>
                                          </body>
                                        </html>
                                    
                                 </div>
                              
                            </div>
                               
                            </div>
                        </div>
                    </div> 
            </div>
        </div>
            
    <?php
    include("Footer.php");
    ?>