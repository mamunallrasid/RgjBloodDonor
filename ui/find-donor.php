<?php 
$Pagetitle="Find A Blood Donor - Search for Available Blood Donors | RGJ Blood Donors Find";
$Pagedescription="Find a blood donor near you. Use our Blood Donor Finder tool to search for available blood donors in your state and district and blood centers. Connect with donors who are ready to save lives through voluntary blood donation.";
$Pagekeywords="Find A Blood Donor, Rgj Blood Donor Finder,Rgj Blood Donor Search,Rgj Available Blood Donors,Rgj Connect with Donors";
include('header.php');
?>

     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row bg-danger">
                   <div class="container">
                       <div class="row">
                           <h2 class="text-light">Find A Blood Donor</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home text-light"></i><span class="text-light">Home</span></a></li>
                               <li><i class="fas fa-angle-double-right text-light"></i><span class="text-light">Blood Donor</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
       
        
    <div class="container mt-2 mb-4">
        <div class="card">
            <h5 class="card-header bg-success text-white">Find A Blood Donor</h5>
            <div class="card-body" style="background-color:#f0e5e4">
                <form id="find_Donor" method="POST">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select State <span class="text-danger">*</span></label>
                                <select class="form-control" id="state" name="state" required>
                                 <option value="">Select</option>
                                 <option value="1" selected>West Bengal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
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
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select Blood Centre <span class="text-danger">*</span></label>
                                <select class="form-control" id="blood_center" name="blood_center" required>
                                 <option value="">Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style=" font-weight: bold;">Select Blood Group <span class="text-danger">*</span></label>
                                <select class="form-control" id="blood_group" name="blood_group" required>
                                 <option value="" class="option_bold">Select</option>
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
                    </div>
                    <div class="form-group col-md-12 d-flex justify-content-center mt-5">
                    <input class=" btn btn-info" type="submit" value="Find Donor" id="submit" name="submit">
                    </div>
                </form>
            </div>
         </div>
    </div>

    <div class="container  mt-2 mb-4 d-none" id="donor_report">
        <div class="card" style="background-color:#f7f7ed">
            <h5 class="card-header bg-success text-white">Donor List:</h5>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="text-white" style="background-color:rgba(0, 171, 159, 0.9)">
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Donor Avability</th>
                        </tr>
                    </thead>
                    <tbody  id="response_data" style="background-color:#f0e5e4">
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
<?php 
include('footer.php');
?>
<script>
    $(document).ready(function(){
     $("#find_Donor").submit(function(event)
     {
       event.preventDefault();
       $("#submit").attr("Finding...");
       $('#submit').attr('disabled',true);
       $.ajax({
        url:'../Action/UI/donor_find.php',
        method:'POST',
        dataType: 'json',
       data:$(this).serialize(),
        success:function(data)
        {
            $("#donor_report").removeClass("d-none");
            if(data=="0")
            {
                $("#response_data").html("<tr><td colspan='5'><h4>Record Not Found</h4></td></tr>")
                $('#submit').attr('disabled',false);
                $('#submit').html('Submit');
            }
             let table='<tr>;'
              $id="0";
                $.each(data, function(index, row) {
                    $id++;
                    table+='<td>' + $id + '</td><td>'+row.donor_name+'</td><td>' + row.blood_group + '</td><td>' + row.donor_mobile_number + '</td>'+(row.donor_blood_available=='1'?"<td class='badge bg-success'>Available</td>":"<td class='badge bg-danger'>NotAvailable</td>")+'</tr>';
                    $('#submit').attr('disabled',false);
                    $('#submit').html('Find');
                });
                table+='</tr>';
                $("#response_data").html(table);
           
        }
       });
     });
    });
    
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