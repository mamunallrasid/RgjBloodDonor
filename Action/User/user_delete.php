<?php 
require_once("../../OOP_CLASS/db-connect/connect.php");
require_once("../../OOP_CLASS/class/common_class.php");
require_once("../../OOP_CLASS/function/function.php");
$server=new Main_Class();

if(isset($_POST['id']))
{
    $userid=$_POST['id'];
    $sql="UPDATE `donor_registation` SET `delete_status`='1' WHERE `registation_id`='$userid'";
    $result=$server->insert($sql);
    if($result)
    {
        session_unset();
        session_destroy();
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>true,
                'reload'=>false,
                'url'=>'../UI/index.php',
                'message'=>'Your Account Deleted'
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
                'message'=>'Account Deleted Faild, Please Try Again !'
            ]
            );
    }
}
?>