<?php 
 include("Header.php");
 include("Sidebar.php");
?>
   
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="container">
                        <div class="main-body">
                            <div class="row">
                                <?php 
                                $sql="SELECT * FROM `donor_registation`LEFT JOIN `blood_center_list` ON donor_registation.donor_blood_center=blood_center_list.id  WHERE `registation_id`='$User_id'";
                                $user_data=$server->single_row_fetch($sql);
                                ?>
                                <div class="col-md-12">
                                    <div class="card">
                                         <div class="card-header bg-primary">
                                         <h4 class="text-white">Your Information</h4>
                                          </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0 fw-bold">Full Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary"> 
                                                    <input type="text" class="form-control" value="<?php echo $user_data['donor_name'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold">Date Of Birth</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?php echo $user_data['donr_dob'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0 fw-bold">Phone Number</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?php echo $user_data['donor_mobile_number'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?php echo $user_data['donor_email'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold">Blood Grop</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?php echo $user_data['blood_group'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold">Blood Center Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?php echo $user_data['blood_center_list'];?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold mt-2">Availability to Donate Blood</h6>
                                                </div>
                                                <div class="col-md-4 text-secondary">
                                                <?php if($user_data['donor_blood_available']=="1")
                                                {
                                                ?> 
                                                   <button type="button" class="btn btn-success">Available</button>
                                                <?php
                                                 }
                                                 else
                                                 {
                                                ?>
                                                 <button type="button" class="btn btn-danger">Not Available</button>
                                                 <?php
                                                 }
                                                 ?>
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
<?php 
include("Footer.php");
?>
    