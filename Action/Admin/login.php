<?php 
require_once("../../OOP_CLASS/db-connect/connect.php");
require_once("../../OOP_CLASS/class/common_class.php");
require_once("../../OOP_CLASS/function/function.php");
$server=new Main_Class();
date_default_timezone_set("Asia/Kolkata");
$date=date("y-m-d");
$time=date("H:i:s a");

if(isset($_POST['submit']))
{
    $user_id=$_POST['UserName'];
    $Password=$_POST['password'];
    $sql="SELECT * FROM `admin_table` WHERE `admin_phone`='$user_id' && `admin_passord`='$Password'";
    $result=$server->single_row_fetch($sql);
    if($result)
    {
        $_SESSION['admin_id']=$result['admin_id'];
        $_SESSION['admin_name']=$result['admin_name'];
        $Admin_id=$_SESSION['admin_id'];
        $Admin_Name=$_SESSION['admin_name'];
        $title="Admin Login";
        $activities="An Admin Login ,Admin Name <b>".$Admin_Name."</b> & Login Time ".$time."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
        echo json_encode(
                    [
                        'status'=>true,
                        'redirect'=>true,
                        'reload'=>false,
                        'url'=>'../admin/dashboard/index.php',
                        'message'=>' Login  Successfully Completed'
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
                'message'=>'Invalid Input, Please Try Again !'
            ]
            );   
    }

}

if(isset($_POST['adminLogout']))
{
    if(isset($_SESSION['admin_id']) && (isset($_SESSION['admin_name'])))
    {
        $Admin_id=$_SESSION['admin_id'];
        $Admin_Name=$_SESSION['admin_name'];
        $title="Admin Logout";
        $activities="An Admin logout ,Admin Name <b>".$Admin_Name."</b> & Logout Time ".$time."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql); 

      session_unset();
      session_destroy();
      echo json_encode(
          [
              'status'=>true,
              'redirect'=>true,
              'reload'=>false,
              'url'=>'../../ui/index.php',
              'message'=>' Logout  Successfully Completed'
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
              'message'=>'Log Out Faild !!'
          ]
          );
    }
}
?>