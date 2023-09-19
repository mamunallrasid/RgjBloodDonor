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
    $status=$_POST['status'];
    $state_id="1";
    $sql="INSERT INTO `district_list`(`state_id`, `district_name`, `status`)
    VALUES ('$state_id','$district_name','$status')";
    $result=$server->insert($sql);
    if($result)
    {
        $title="New District Created";
        $activities="New Disrtict Created by <b>".$Admin_Name."</b> & New District  Name Is ".$district_name."\n";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);

        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' District Name Successfully Added'
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

if(isset($_POST['value']))
{
    $id=$_POST['id'];
    $value=$_POST['value'];
    $sql="UPDATE `district_list` SET `status`='$value' WHERE `id`='$id'";
    $result=$server->insert($sql);
    if($result)
    {
        $title="District Status Change";
        $activities=" Disrtict Status Change by <b>".$Admin_Name."</b>";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
        
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' District Status Change Successfully'
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