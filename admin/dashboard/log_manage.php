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
                                     <h4 class="text-white">Log Information</h4>
                                </div>
                                <div class="card-body">
                               <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Admin Name</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Activities</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM `log_info` ORDER BY `id` DESC";
                                        $Result=$server->insert($sql);
                                         $i=1;
                                        foreach($Result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['admin_name']; ?></td>
                                      <td><b><?php echo $data['title']; ?></b></td>
                                      <td><?php echo $data['activities']; ?></td>
                                      <td><?php echo $data['date']; ?></td>
                                      <td><?php echo $data['time']; ?></span></td>
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