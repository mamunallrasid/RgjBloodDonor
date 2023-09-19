<?php
$Pagetitle="Blood Donor Registration - Rgj Blood Donors";
$Pagedescription="Register as a blood donor with Rgj Blood Donors. Fill out the registration form and contribute to saving lives through blood donation.";
$Pagekeywords="blood donor registration, blood donation, donor form, register blood donor, Rgj Blood Donors,Rgj Blood Donors Registration";
include('header.php');
?>
    <!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content=">
    <meta name="keywords" content="blood donor registration, blood donation, donor form, register blood donor, Rgj Blood Donors,Rgj Blood Donors Registration">
    <meta name="author" content="Your Name">
    </head> -->
    <div class="page-nav no-margin row bg-danger">
        <div class="container">
            <div class="row">
                <h2 class="text-light">Blood Donor Registration</h2>
                    <ul>
                        <li> <a href="index.php"><i class="fas fa-home text-light"></i><span class="text-light">Home</span></a></li>
                        <li><i class="fas fa-angle-double-right text-light"></i><span class="text-light">Donor Registration</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-2 mb-4">
        <div class="card" style="background-color:#f0e5e4">
            <h5 class="card-header bg-success text-white">Donor Registration Form :</h5>
            <div class="card-body">
                <form id="Value_Store_Form" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select Your Blood Group<span class="text-danger">*</span></label>
                                <select class="form-control" id="blood_group" name="blood_group" required>
                                 <option value=""class="option_bold">Select</option>
                                 <option value="A+" class="option_bold">A+</option>
                                 <option value="A-" class="option_bold">A-</option>
                                 <option value="B+" class="option_bold">B+</option>
                                 <option value="B-" class="option_bold">B-</option>
                                 <option value="AB+" class="option_bold">AB+</option>
                                 <option value="AB-" class="option_bold">AB-</option>
                                 <option value="O+" class="option_bold">O+</option>
                                 <option value="O-" class="option_bold">O-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Full Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="examplenputEmail1" style=" font-weight: bold;">Date Of Birth<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="dob" id="dob" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select Gender<span class="text-danger">*</span></label>
                                <select class="form-control" id="gender" name="gender" required>
                                 <option value="">Select</option>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                                 <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Mobile Number<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="mobile_number" id="mobile_number" minlength="10" maxlength="12" placeholder="Mobile Number" onchange="Show_regn(this.value)" required>
                                <span class="regn-alert text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Email</label>
                                <input type="email" class="form-control" name="email" id="email"  placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select State <span class="text-danger">*</span></label>
                                <select class="form-control" id="state" name="state" required>
                                 <option value="">Select</option>
                                 <option value="1" selected>West Bengal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select District <span class="text-danger">*</span></label>
                                <select class="form-control" id="district" name="district" onchange='getbloodcenter(this.value)'; required>
                                 <option value="">Select</option>
                                 <?php 
                                 $sql="SELECT * FROM `district_list` WHERE `status`='1'";
                                 $result=$server->fetch_data($sql);
                                 foreach($result as $data)
                                 {
                                 ?>
                                 <option value="<?php echo $data['id'];?>"><?php echo $data['district_name'];?></option>
                                 <?php 
                                  }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select Blood Centre<span class="text-danger">*</span></label>
                                <select class="form-control" id="blood_center" name="blood_center" required>
                                 <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Your Availability to Donate Blood<span class="text-danger">*</span></label>
                                <select class="form-control" id="blood_available" name="blood_available" required>
                                 <option value="">Select</option>
                                 <option value="1">Available</option>
                                 <option value="0">Notavailable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12 d-flex justify-content-center mt-5">
                    <input type="hidden" id="url" value="../Action/UI/registation.php">
                    <input class=" btn btn-info" type="submit" value="Submit" id="submit" name="submit">
                    </div>

                </form>
            </div>
         </div>
    </div>
<?php 
include('footer.php');
?>
<script>
    $(document).ready(function(e)
    {
        $( "#dob" ).datepicker({
            dateFormat:"yy-mm-dd",
            changeMonth:true,
            changeYear:true,
            yearRange:"1960:2005",
            maxDate:"-18y"
        });
    });
    function Show_regn(phno)
    {
        $.ajax({
         url:'../Action/UI/registation.php',
         method:'POST',
         data:{ph_no:phno,findnum:"checkhpno"},
         success:function(response)
         {
            if(response=="1")
            {
                $(".regn-alert").html("Phone Number Alerady Register");
                $('#submit').attr('disabled',true);
                $("#mobile_number").css("background-color","red");
            }
            else
            {
                $(".regn-alert").html("");
                $('#submit').attr('disabled',false);
                $("#mobile_number").css("background-color","white");
            }
         }
        });
    }
    function getbloodcenter(id)
    {
        let district_id=id;
        $.ajax({
        url:'../Action/UI/registation.php',
         method:'POST',
         data:{dis_id:district_id,findcenter:"findcenter"},
         success:function(response)
         {
           $("#blood_center").html(response);
         }
        });
    }
</script>