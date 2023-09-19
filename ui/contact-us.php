<?php 
$Pagetitle="Contact RGJ Blood Donors - Get in Touch";
$Pagedescription="Contact RGJ Blood Donors to get answers to your questions, find our location, and learn more about blood donation. Reach out to us for inquiries about our blood donor organization and our efforts to save lives through blood donation.";
$Pagekeywords="Blood Donor About-Us, rgj blood donors -about,Rgj Blood Donors about";
include('header.php');
?>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row bg-danger">
                   <div class="container">
                       <div class="row">
                           <h2 class="text-white">Contact Rgj Blood Donors</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home text-white"></i><span class="text-light">Home</span></a></li>
                               <li><i class="fas fa-angle-double-right text-white"></i><span class="text-light">About Us</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
        
      <div style="margin-top:0px;" class="row no-margin">
        
    
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d919021.7428288147!2d87.5065747641994!3d25.871824533604336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fad502b648ac4f%3A0xd5b89e4bcaff6723!2sUttar%20Dinajpur%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1691094965893!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
               
          
            <div style="padding:20px" class="col-sm-6">
            <h2 style="font-size:30px d-flex content-align-center">Contact Us</h2>
            <form id="Value_Store_Form" method="POST">
                <div class="row">
                    <div style="padding-top:10px;" class="col-sm-3 fs-2p"><label>Enter Name :</label></div>
                    <div class="col-md-8 mt-2"><input type="text" placeholder="Enter Name" name="name" class="form-control" name="Name" id="Name" required></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="number" name="ph_number" id="ph_number" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter  Message:</label></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="Enter Your Message" name="msg" id="msg" class="form-control input-sm" required></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                    <input type="hidden" id="url" value="../Action/UI/contact.php">
                     <input type="submit" name="submit" id="submit" value="Send Message" class="btn btn-success"></input>
                    </div>
                </div>
              </div>
            </form>
             <div class="col-sm-6">
                    
                  <div style="margin:50px" class="serv"> 
                
               
             
                              
              
          <h2 style="margin-top:10px;">Address</h2>

    <p style="font-size:23px;"> Rgj Donors</p>
    <p style="font-size:23px;"> Raiganj City</p>
    <p style="font-size:23px;"> Uttar Dinajpur District</p>
    <p style="font-size:23px;"> Phone: +91 700XX3XX89</p>
    <p style="font-size:23px;"> Email: support@rgjblooddonors.in</p>
    Website:<a href="https://mamunbio.infoproviderhub.com/" target="_Blank"><b>Support</b></a> <br>

 
       
            
                
                
              
           </div>    
                
             
         </div>

            </div>
        </div>
        
      </div>
<?php 
include('footer.php');
?>