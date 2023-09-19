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
                                     <h4 class="text-white">Gallery Images</h4>
                                </div>
                                <div class="card-body">
                                <button class=" btn btn-success mb-2" onclick="showmodel()">Add Image</button>
                               <div class="table-responsive">
                                <table id="table" class="table  table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Donor Name</th>
                                      <th scope="col">Image Name</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Date</th>
                                       <th scope="col">Options</th>
                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM `gallery` ORDER BY `id` DESC";
                                        $result=$server->fetch_data($sql);
                                        $i=1;
                                        foreach($result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['name']; ?></td>
                                       <td><?php echo $data['image_path']; ?></td>
                                      <td><img src="../../Document/Gallery/<?php echo $data['image_path'];?>" height=100px,width=100px;></td>
                                      <td><?php echo $data['date'];?></td>
                                      <td> 
                                        <button type="button" class="btn btn-danger delete_btn" data-id="<?php echo $data['id'];?>" data-name="<?php echo $data['image_path'];?>" data-url="../../Action/Admin/donor_image.php"><i class="fa-sharp fa-solid fa-trash"></i></button>
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
                      <h5 class="modal-title" id="exampleModalLabel">Add Gallery Image</h5>
                      <button type="button btn-danger" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="Value_Store_Form" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Donor Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" Name="Name" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size: 18px;">Upload Donor Image</label>
                            <input type="file" class="form-control pdf" name="donor_Image" id="fileChooser" onchange="return ValidateFileUpload()"  required>
                          </div>
                          <div class="form-group">
                            <img src="images/noimg.jpg" id="blah" height=100px,width=100px;>

                          </div>
                           <input type="hidden" id="url" value="../../Action/Admin/donor_image.php">
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

<script type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</script>