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
                                     <h4 class="text-white">District Manage</h4>
                                </div>
                                <div class="card-body">
                                <button class=" btn btn-success mb-2" onclick="showmodel()">Add Disrtict</button>
                               <div class="table-responsive">
                                <table id="table" class="table  table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">District Name</th>
                                      <th scope="col">District Status</th>
                                      <th scope="col">Change Status</th>
                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM `district_list` ORDER BY `id` DESC";
                                        $result=$server->fetch_data($sql);
                                        $i=1;
                                        foreach($result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['district_name']; ?></td>
                                      <td>
                                            <?php if ($data['status'] == '1') { ?>
                                                <span class="badge badge-success bg-success">Active</span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger bg-danger">DeActive</span>
                                            <?php } ?>
                                        </td>
                                      <td>
                                      <select name="status" id="status" class="form-control" onchange="updateStatus('<?php echo $data['id'];?>', this.value, '../../Action/Admin/add_disrtict.php')">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo ($data['status'] == '1') ? 'selected' : ''; ?>>Active</option>
                                            <option value="0" <?php echo ($data['status'] == '0') ? 'selected' : ''; ?>>Deactive</option>
                                        </select> 
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
            <!-- Modal -->
              <div class="modal fade" id="mymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #a9caeb;">
                      <h5 class="modal-title" id="exampleModalLabel">Add District</h5>
                      <button type="button btn-danger" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="Value_Store_Form" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">District Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" Name="district_name" placeholder="" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size: 18px;">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">Select</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                          </div>
                           <input type="hidden" id="url" value="../../Action/Admin/add_disrtict.php">
                          <input type="submit" class="btn btn-primary mt-2" name="submit" id="submit" value="Submit">
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close</button>
                    </div>
                  </div>
                </div>
              </div>
<!-- close Model -->
<?php

  include("Footer.php");
   ?>
<script>
  function showmodel()
  {
     $("#mymodel").modal("show");
  }
  function closeModal()
  {
     $("#mymodel").modal("hide");
  }
</script>