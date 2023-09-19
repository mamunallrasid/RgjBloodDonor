<?php 
 require_once("../../OOP_CLASS/db-connect/connect.php");
 require_once("../../OOP_CLASS/class/common_class.php");
 require_once("../../OOP_CLASS/function/function.php");
 $server=new Main_Class();
$Ph_No=$_POST['ph_no'];
$msg="ok Done";

send_sms($Ph_No,$msg);
?>