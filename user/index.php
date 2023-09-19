<?php
    include("Header.php");
    include("Sidebar.php");
?>
		<div class="page-wrapper">
            <div class="page-content">
                <div class="row ">
                  <div class="col-3">
                    <?php
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='A+' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='A-' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='B+ ' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='B-' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='AB+' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='AB-' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='O+' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
                    $sql="SELECT * FROM `donor_registation` WHERE `blood_group`='O-' && `donor_blood_available`='1' && `delete_status`='0' && `donor_blood_center`='$User_bloodCenter'";
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
            </div>
        </div>
            
    <?php
    include("Footer.php");
    ?>