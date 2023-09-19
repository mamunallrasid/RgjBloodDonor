<?php 
 require_once("../../OOP_CLASS/db-connect/connect.php");
 require_once("../../OOP_CLASS/class/common_class.php");
 require_once("../../OOP_CLASS/function/function.php");
 $server=new Main_Class();

if(isset($_POST['state']))
{
    
    $State=$_POST['state'];
    $district=$_POST['district'];
    $blood_center=$_POST['blood_center'];
    $blood_group=$_POST['blood_group'];
    $sql="SELECT * FROM `donor_registation` WHERE `donor_state`='$State' && `donor_district`='$district' && `blood_group`='$blood_group' && `donor_blood_center`='$blood_center' && `delete_status`='0' && `donor_blood_available`='1'";
    $result=$server->fetch_data($sql);
    $html="";
    if($result)
    {
       echo json_encode($result);
    }
    else
    {
        $result="0";
        echo json_encode($result);
    }
   

}
?>