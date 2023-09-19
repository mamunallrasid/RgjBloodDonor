<?php
 require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();
 $server->admin_session_access();
 date_default_timezone_set("Asia/kolkata");
 $day=date('l');
 $tarik=date('d');
 $month=date('M');
 $Year=date('Y');
 // $server->session_access();
 ?>
<style>
    .error
    {
        color:red;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/Admin/assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="../assets/Admin/assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/Admin/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/Admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="../assets/Admin/assets/css/app.css" rel="stylesheet">
    <link href="../assets/Admin/assets/css/icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css"rel="stylesheet">
    <title>AASM Admin Login</title>
</head>

<body class="bg-lock-screen">
<!-- wrapper -->
<div class="wrapper">
    <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
        <div class="card shadow-none bg-transparent border shadow">
            <div class="card-body p-md-5 text-center">
                <h2 class="text-white" Id="ctime">10:53 AM</h2>
                <h5 class="text-white"><?php echo $day; ?>,&nbsp<?php echo $tarik;?><?php echo $month;?>&nbsp,<?php echo $Year ?></h5>
                <div class="">
                    <img src="../assets/Admin/assets/images/icons/user.png" class="mt-5" width="120" alt="" />
                </div>
                <form id="Value_Store_Form">
                    <p class="mt-2 text-white" style="font-size: 20px;">Admin Login</p>
                     <div class="mb-3 mt-4">
                        <input type="text" class="form-control" placeholder="Username" name="UserName" id="UserName" required />
                    </div>
                    <div class="mb-3 mt-4">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" id="url" value="../Action/Admin/login.php">
                        <input type="submit" class="btn btn-info" name="submit" id="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
</body>


<!-- Mirrored from creatantech.com/demos/codervent/syndron/vertical/public/authentication-lock-screen by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 20:40:55 GMT -->
</html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../assets/Admin/assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script src="../Script/action.js"></script>
</html>
<script>
     let time=document.getElementById("ctime");
    setInterval(()=>{
        let d=new Date();
        time.innerHTML=d.toLocaleTimeString();
    },1000);
   
</script>
