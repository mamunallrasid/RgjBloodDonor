<?php 
 require_once("../OOP_CLASS/db-connect/connect.php");
 require_once("../OOP_CLASS/class/common_class.php");
 require_once("../OOP_CLASS/function/function.php");
 $server=new Main_Class();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $Pagedescription;?>">
    <meta name="keywords" content="<?php echo $Pagekeywords; ?>">
    <meta name="author" content="Mamun All Rasid Rgj Blood Donors">
    <title><?php echo $Pagetitle;?></title>
    <link rel="shortcut icon" href="../Assets/UI/assets/images/blood.PNG">
    <link rel="stylesheet" href="../Assets/UI/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/UI/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../Assets/UI/assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../Assets/UI/assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../Assets/UI/assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css"rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<style>
        .error
        {
          color:red;
        }
        .table th {
        text-align: center;
        } 
        .badge{
            margin-top:4px;
            margin-left:20%;
            color:white;
        }
        .option_bold
        {
        font-weight: bolder;
        }
        .logo {
       margin-top: 20px;
       }
       .btn-info {
        background-color: #006363; /* Dark Teal */
        color: #ffffff; /* White */
    }

    </style>
<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                    <a href="index.php">
                        <div class="col-lg-3 col-md-4 col-sm-12 logo">
                            <i class="fa-solid fa-droplet fa-2x mt-1" style="color:red;"></i><span class="h2" style="margin-top: 20px;">Rgj Donors</span><i class="fa-solid fa-droplet fa-2x mt-1" style="color:red;"></i>
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                        </div>
                    </a>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                            <!-- <li><a href="index.php">Home</a></li> -->
                            <li><a href="find-donor.php">Find A Donor</a></li>
                            <li><a href="registation.php">Donor Registation</a></li>
                            <!-- <li><a href="blog.php"></a></li> -->
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                            <li><a href="login.php">Donor Login</a></li>
                        </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block">
                       <a href="login.php"><button class="btn btn-danger">Donor Login</button></a>
                   </div>
                </div>
            </div>
        </nav>
    </header>
