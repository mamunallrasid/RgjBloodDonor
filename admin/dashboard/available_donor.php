<?php
 include("Header.php");
 include("Sidebar.php");
 ?> 
 <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                     <h4 class="text-white">Available Donor List</h4>
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
                                      <th scope="col">Blood Center</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Change Status</th>
                                      <th scope="col">Status Update</th>
                                      <th scope="col">Options</th>

                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM `donor_registation` LEFT JOIN `blood_center_list` ON donor_registation.donor_blood_center=blood_center_list.center_id WHERE  `donor_blood_available`='1' && `delete_status`='0' ORDER BY `registation_id` DESC";
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
                                      <td><?php echo $data['blood_center_list']; ?></td>
                                      <td><span class="badge bg-success">Avaliable</span></td>
                                      <td>
                                        <select name="status" id="status" class="form-control" onchange="updateStatus('<?php echo $data['registation_id'];?>',this.value,'../../Action/Admin/Status_Update.php')">
                                          <option value="1"<?php echo $data['donor_blood_available']=="1"?"selected":"";?>>Available</option>
                                          <option value="0" <?php echo $data['donor_blood_available']=="0"?"selected":"";?>>Not available</option>
                                        </select>
                                      </td>
                                      <td><?php echo $data['status_update_date']; ?></td>
                                      <td><button type="button" class="btn btn-success" onclick="get_profile(<?php echo $data['registation_id'];?>)"><i class="fa-solid fa-user"></i></button>
                                      </td>
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