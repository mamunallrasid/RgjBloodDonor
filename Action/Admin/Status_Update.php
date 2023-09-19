<?php 
 require_once("../../OOP_CLASS/db-connect/connect.php");
 require_once("../../OOP_CLASS/class/common_class.php");
 require_once("../../OOP_CLASS/function/function.php");
 $server=new Main_Class();
 $Admin_id=$_SESSION['admin_id'];
 $Admin_Name=$_SESSION['admin_name'];
 date_default_timezone_set("Asia/Kolkata");
 $date=date("y-m-d");
 $time=date("H:i:s a");
if(isset($_POST['value']))
{
    $donor_id=$_POST['id'];
    $donor_value=$_POST['value'];
    if($donor_value=='0')
    {
        $currentDate = new DateTime();
        $interval = new DateInterval('P3M');
        $currentDate->add($interval);
        $status_change_date=$currentDate->format('Y-m-d');
    }
    else
    {
        $currentDate = new DateTime();
        $status_change_date=$currentDate->format('Y-m-d');
    }
    $sql="UPDATE `donor_registation` SET `donor_blood_available`='$donor_value',`status_update_date`='$status_change_date' WHERE `registation_id`='$donor_id'";
    $result=$server->insert($sql);
    if($result)
    {
        $title="Blood Availability Update";
        $activities="Blood Donor Availability Update By by <b>".$Admin_Name."</b> & New Update Status Date ".$status_change_date."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' Status Update  Successfully Completed'
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
                'message'=>'Status Change Faild, Please Try Again !'
            ]
            );
    }
}

if(isset($_POST['Change']))
{
   $id=$_POST['id'];
   $change_date=$_POST['custom_update'];
   $sql="UPDATE `donor_registation` SET `status_update_date`='$change_date' WHERE `registation_id`='$id'";
    $result=$server->insert($sql);
    if($result)
    {
        $title="Blood Custom Date";
        $activities="Blood Availability Custom date Update By by <b>".$Admin_Name."</b> & New Custom date Date ".$change_date."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' Date Successfully Changed'
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
                'message'=>'Status Change Faild, Please Try Again !'
            ]
            );
    }
}
?>