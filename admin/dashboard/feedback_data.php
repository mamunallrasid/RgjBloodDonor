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
                                     <h4 class="text-white">FeddBack Messages</h4>
                                </div>
                                <div class="card-body">
                               <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Ph No</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Message</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Reply</th>
                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM `contact_us` ORDER BY `id` DESC";
                                        $Result=$server->insert($sql);
                                         $i=1;
                                        foreach($Result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['name']; ?></td>
                                      <td><?php echo $data['email']; ?></td>
                                      <td><?php echo $data['ph_no']; ?></td>
                                      <td><?php echo $data['msg']; ?></td>
                                      <td><?php echo $data['date']; ?></td>
                                      <td>
                                        <button type="button" class="btn btn-success" onclick="send_reply('<?php echo $data['id'];?>', '<?php echo $data['email'];?>', '<?php echo $data['name'];?>')">
                                            <i class="fa-solid fa-reply"></i>
                                        </button>
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
        <h5 class="modal-title" id="exampleModalLabel">Reply</h5>
        <button type="button" class="close" data-dismiss="modal" onclick='close_model()' aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="Value_Store_Form" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1" class="fw-bold">Name</label>
                <input type="text" class="form-control" id="userName" name="userName" readonly>
            </div><br>
            <div class="form-group">
                <label for="exampleInputEmail1" class="fw-bold">Email</label>
                <input type="email" class="form-control" id="userEmail" name="userEmail" readonly>
            </div><br>
            <div class="form-group">
                <label for="exampleInputPassword1" class="fw-bold">Reply Message</label>
                <textarea class="form-control" name="reply" id="reply" cols="2" rows="3" required></textarea>
            </div>
            <input type="hidden" name="id" id="contact_id">
            <br>
            <input type="hidden" id="url" value="../../Action/Admin/email_reply.php">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Reply</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php

    include("Footer.php");
?>
<script>
  function send_reply(id,email,name)
  {
    let usrname=name;
    let usremail=email;
    let usrid=id;
    $("#userName").val(usrname);
    $("#userEmail").val(usremail);
    $("#contact_id").val(usrid);
    $("#exampleModal").modal('show');
  }
 function close_model()
 {
  $("#exampleModal").modal('hide');
 }
</script>