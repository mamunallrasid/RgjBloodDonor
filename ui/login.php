<?php 
$Pagetitle="Donor Login - Access Your Blood Donor Account | RGJ Blood Donors";
$Pagedescription="Log in to the RGJ Blood Donor portal to access your donor account. Enter your username (phone number or email) and password Date of Birth(ddmmyy) Formate to securely login and manage your account details.";
$Pagekeywords="Rgj Donor Login,Rgj Blood Donor Portal";
include('header.php');
$server->session_access();
?>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row bg-danger">
                   <div class="container">
                       <div class="row">
                           <h2 class="text-light"> Donor Login</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home text-light"></i><span class="text-light">Home</span></a></li>
                               <li><i class="fas fa-angle-double-right text-light"></i><span class="text-light">Donor Login</span></li>
                           </ul>
                       </div>
                   </div>
               </div>
       
        
    <div class="container mt-2 mb-4">
        <div class="card border">
            <h5 class="card-header text-black" style="background-color:#CBD18F">Donor Login:</h5>
            <div class="card-body d-flex justify-content-center border" style="background-color:#f0e5e4;">
            <div class="row">
                <form id="Value_Store_Form" method="POST">
                            <div class="form-group">
                                <label for="username" style="font-size:20px; width:70%;"><b>Username:</b></label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-secondary" style="font-size:20px;"><b>Password:</b></label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Date of Birth (ddmmyyyy)" required>
                            </div>
                    <div class="form-group col-md-12 d-flex justify-content-center mt-5">
                     <input type="hidden" id="url" value="../Action/User/login.php">
                    <input class=" btn" style="background-color:#5eb7f7;" type="submit" value="Login" id="login" name="login">
                    </div>
                </form>
            </div>
            </div>
         </div>
    </div>
<?php 
include('footer.php');
?>