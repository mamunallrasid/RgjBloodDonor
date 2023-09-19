<?php
 include("Header.php");
 include("Sidebar.php");
 ?> 
 <style>
  .model-names{
    font-size:14px;
  }
 </style>
 <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                     <h4 class="text-white">Delete Account List</h4>
                                </div>
                                <div class="card-body">
                               <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Group</th>
                                      <th scope="col">Ph No</th>
                                      <th scope="col">District</th>
                                      <th scope="col">Blood Center</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM `donor_registation` LEFT JOIN `blood_center_list` ON donor_registation.donor_blood_center=blood_center_list.center_id LEFT JOIN `district_list` ON donor_registation.donor_district=district_list.id WHERE `delete_status`='1' ORDER BY `registation_id`";
                                        $Result=$server->insert($sql);
                                         $i=1;
                                        foreach($Result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['donor_name']; ?></td>
                                      <td><b><?php echo $data['blood_group']; ?></b></td>
                                      <td><?php echo $data['donor_mobile_number']; ?></td>
                                      <td><?php echo $data['district_name']; ?></td>
                                      <td><?php echo $data['blood_center_list']; ?></td>

                                      <td><span class="badge bg-danger">Deleted</span></td>
                                      <!-- <td><button type="button" class="btn btn-success" onclick="get_profile(<?php echo $data['registation_id'];?>)"><i class="fa-solid fa-user"></i></button>
                                      </td> -->
                                    </tr>
                                    <?php
                                     }
                                    ?>
                                  </tbody>
                                </table>
                                </div>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- user model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
        <button type="button" class="close" data-dismiss="modal" onclick='close_model()' aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="user_data">
       <div><input type="text" name="name" id="name" value="response.blood_group"></div>
      </div>
    </div>
  </div>
</div>

<?php

    include("Footer.php");
?>
<script>
  function get_profile(id)
  {
    let usr_id=id;
    $.ajax({
     url:'../../Action/Admin/Find_user.php',
     method:'POST',
     data:{user_id:usr_id,get_user:"getinfo"},
     success:function(response)
     {
      $("#user_data").html(response);
      $("#exampleModal").modal('show');
     }
    });
  }
 function close_model()
 {
  $("#exampleModal").modal('hide');
 }
</script>