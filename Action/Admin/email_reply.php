<?php 
require_once("../../OOP_CLASS/db-connect/connect.php");
require_once("../../OOP_CLASS/class/common_class.php");
require_once("../../OOP_CLASS/function/function.php");
require_once("../../OOP_CLASS/sending_mail/PHPMailerAutoload.php");
require_once ("../../OOP_CLASS/sending_mail/class.phpmailer.php");
$server=new Main_Class();
$Admin_id=$_SESSION['admin_id'];
$Admin_Name=$_SESSION['admin_name'];
date_default_timezone_set("Asia/Kolkata");
$date=date("y-m-d");
$time=date("H:i:s a");

if(isset($_POST['submit']))
{
  $name=$_POST['userName'];
  $mail=$_POST['userEmail'];
  $subject="Rgj Donors";
  $msg=$_POST['reply'];
  $send_msg='Hello '. $name.'<br>    '.'      '.$msg;
 $mail_response=send_email($mail,$subject,$send_msg);
 if($mail_response)
 {
        $title="Email Reply";
        $activities="Send A Email Reply by <b>".$Admin_Name."</b> & Email Message Is  ".$msg."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
    echo json_encode(
        [
            'status'=>true,
            'redirect'=>false,
            'reload'=>true,
            'message'=>' Email Send Successfully Completed'
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
            'message'=>'Email Send Faild, Please Try Again !'
        ]
        );
 }

}
?>