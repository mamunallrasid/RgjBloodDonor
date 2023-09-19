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
                                $sql="SELECT * FROM `donor_registation` WHERE `registation_id`='$User_id'";
                                $user_data=$server->single_row_fetch($sql);
                                ?>
                                <div class="col-md-12">
                                    <div class="card">
                                         <div class="card-header bg-primary">
                                         <h4 class="text-white">Your Availability Status</h4>
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
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold mt-2">Change Availability Status</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <select name="availability_status" id="availability_status" class="form-control" onchange="updateStatus('<?php echo $user_data['registation_id'];?>',this.value,'../Action/User/Status_Update.php')">
                                                        <option value="1" <?php echo ($user_data['donor_blood_available']=="1"?"Selected":"")?>>Available</option>
                                                        <option value="0" <?php echo ($user_data['donor_blood_available']=="0"?"Selected":"")?>>Not Available</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0  fw-bold">Status Update Date</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?php echo $user_data['status_update_date'];?>" disabled>
                                                </div>
                                            </div>
                                            <?php
                                             if($user_data['donor_blood_available']=="0")
                                             {
                                            ?>
                                             <form id="Value_Store_Form" method="POST">
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0  fw-bold">Change Availability date</h6>
                                                    </div>
                                                    <div class="col-sm-4 text-secondary">
                                                        <input type="date" class="form-control" name="custom_update" id="custom_update" value="<?php echo $user_data['status_update_date'];?>">
                                                    </div>
                                                    <input type="hidden" name="id" value="<?php echo $User_id;?>">
                                                    <div class="col-sm-4 text-secondary">
                                                    <input type="hidden" id="url" value="../Action/User/Status_Update.php">
                                                    <input class=" btn btn-info" type="submit" value="Change" id="Change" name="Change">
                                                    </div>
                                                </div>
                                            </form>
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
<?php 
include("Footer.php");
?>

<script>
    $(document).ready(function() {
            var currentDate = new Date();
             var futureDate = new Date(currentDate);
             // Add 3 months to the current date
            futureDate.setMonth(currentDate.getMonth() + 3);
            var day = futureDate.getDate();
            var month = futureDate.getMonth() + 1; // Month is zero-based
             var year = futureDate.getFullYear();
    
             var formattedDate = year + '-' + month + '-' + day;
             $("#next-date").val(formattedDate);
});
</script>