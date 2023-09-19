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
if(isset($_POST['submit']))
{
    $district_name=$_POST['district_name'];
    $bloodcenter_name=$_POST['bloodcenter_name'];
    $status=$_POST['status'];
    $sql="INSERT INTO `blood_center_list`(`district_id`, `blood_center_list`, `blood_center_status`)
    VALUES ('$district_name','$bloodcenter_name','$status')";
    $result=$server->insert($sql);
    if($result)
    {
        $title="Blood Center Add";
        $activities="New Blood Center Add by <b>".$Admin_Name."</b> & New Blood Center Name Is ".$bloodcenter_name."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>'Blood Center Name Successfully Added'
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
                'message'=>'Error Faild, Please Try Again !'
            ]
            );
    }
}

if(isset($_POST['value']))
{
    $id=$_POST['id'];
    $status_value=$_POST['value'];
    $sql="UPDATE `blood_center_list` SET `blood_center_status`='$status_value' WHERE `center_id`='$id'";
    $result=$server->insert($sql);
    if($result)
    {
        $title="Blood Center Status Update";
        $activities=" Blood Center Status Updated by <b>".$Admin_Name."</b>";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' Blood Center Status Change Successfully'
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
                'message'=>'Plants Details Upload Faild, Please Try Again !'
            ]
            );
    }
}
?>