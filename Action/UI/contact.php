<?php
require_once("../../OOP_CLASS/db-connect/connect.php");
require_once("../../OOP_CLASS/class/common_class.php");
require_once("../../OOP_CLASS/function/function.php");
require_once("../../OOP_CLASS/sending_mail/PHPMailerAutoload.php");
require_once ("../../OOP_CLASS/sending_mail/class.phpmailer.php");
$server=new Main_Class();

if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Ph_No=$_POST['ph_number'];
    $msg=$_POST['msg'];
    date_default_timezone_set("Asia/Kolkata");
	$date=date("y-m-d");
	$time=date("H:i:s a");
    $subject="Rgj Blood Donor -Contact Us";
    $send_msg ="<div class='thankyou-page' style='font-family: 'Raleway', sans-serif;'>
    <div class='_header' style='background: #fee028; padding: 100px 0; text-align: center; background: #fee028 url(https://blog.xoxoday.com/content/images/size/w692/format/webp/2023/06/world-blood-donation-day.webp) center/cover no-repeat;'>
        <h1 style='font-size: 65px; font-weight: 800; color: white; margin: 0;'>Thank You!</h1>
    </div>
    <div class='_body' style='background-color: #f0f0f0; border: 5px solid #4ab74a; margin: 20px 0; padding: 20px; text-align: center;'>
        <div class='_box' style='max-width: 80%; margin: auto; padding: 20px; background: white; border-radius: 3px; box-shadow: 0 0 20px rgba(10, 10, 10, 0.12); -moz-box-shadow: 0 0 20px rgba(10, 10, 10, 0.12); -webkit-box-shadow: 0 0 20px rgba(10, 10, 10, 0.12);'>
            <h2 font-weight: 600; color: #4ab74a;'>
            <p>
            Hey,<br>&nbsp&nbsp $Name
            Thanks for connecting with us. We hope we have resolved your problem as soon as possible.
            </p>
            </h2>
            <ul style='list-style-type: none; padding: 0;'>
                <li>
                    <b>-Rgj Blood Donor Support Team:-</b>
                </li>
            </ul>
        </div>
    </div>
</div>";




    $mail_response=send_email($Email,$subject,$send_msg);
    $sql="INSERT INTO `contact_us`(`name`, `email`, `ph_no`, `msg`, `date`, `time`)
    VALUES ('$Name','$Email','$Ph_No','$msg','$date','$time')";
    $output=$server->insert($sql);
    if($output)
    {
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' Your Message Send Successfully Completed'
            ]
            );  
    }
    else
    {
        echo json_encode(
            [
                'status'=>false,
                'redirect'=>false,
                'reload'=>true,
                'message'=>'Message Send Faild, Please Try Again !'
            ]
            );
    }
}

?>