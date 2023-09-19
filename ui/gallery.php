<?php 
$Pagetitle="Rgj Blood Donor Images - Gallery";
$Pagedescription="Explore our Rgj Blood Donor Images Gallery to see moments of contribution and impact. View images of blood donation Join us in our efforts to save lives through voluntary blood donation";
$Pagekeywords="Rgj Blood Donor Images, Gallery, Rgj Blood Donation Events,Rgj Blood Donor Moments";
include('header.php');
?>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row bg-danger">
                   <div class="container">
                       <div class="row">
                           <h2 class="text-white">Blood Donor Images</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home  text-white"></i><span class="text-white">Home</span></a></li>
                               <li><i class="fas fa-angle-double-right text-white"></i><span class="text-white">Gallery</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
         <!--  ************************* Gallery Starts Here ************************** -->
        <div class="gallery">    
           <div class="container">
              <div class="row">
            <?php 
            $sql="SELECT * FROM `gallery` ORDER BY `id` DESC";
            if($result=$server->fetch_data($sql))
            foreach($result as $data)
            {
            ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../Document/Gallery/<?php echo $data['image_path'];?>" class="img-responsive">
                <!-- <div class="row">
                    <div class="col-md-6">
                    <span class="h5"><b>Date:</b><?php echo $data['date'];?></span>
                    </div>
                </div> -->
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
<?php 
include('footer.php');
?>