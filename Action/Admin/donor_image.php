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
  $Name=$_POST['Name'];
  $Img_Name=$_FILES['donor_Image']['name'];
  $Img_TmpName=$_FILES['donor_Image']['tmp_name'];
  $Location="../../Document/Gallery/".$Img_Name;
  date_default_timezone_set("Asia/Kolkata");
  $date=date("Y-m-d");
  $time=date("H:i:s a");
  if(move_uploaded_file($Img_TmpName,$Location))
  {
  	$sql="INSERT INTO `gallery`(`name`, `image_path`, `date`, `time`) VALUES ('$Name','$Img_Name','$date','$time')";
     if($server->insert($sql))
     {
		$title="Blood Donor Image Add";
        $activities="New Blood Donor Image Add by <b>".$Admin_Name."</b> & Blood Donor Name ".$Name."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);

     	echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>' Donor Image Successfully Added'
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
}

if(isset($_POST['delete']))
{
	$sl=$_POST['id'];
	$Name=$_POST['name'];
	$sql="DELETE FROM `gallery` WHERE `id`='$sl'";
	if($server->insert($sql))
	{
	  unlink("../../Document/Gallery/".$Name);
	    $title="Blood Donor Image Delete";
        $activities="Blood Donor Image Deleted by <b>".$Admin_Name."</b> & Blood Donor Image  Name ".$Name."";
        $sql="INSERT INTO `log_info`(`admin_id`, `admin_name`, `title`, `activities`, `date`, `time`)
        VALUES ('$Admin_id','$Admin_Name','$title','$activities','$date','$time')";
        $server->insert($sql);
      echo json_encode(
	                        [
	                            'status'=>true,
	                            'redirect'=>false,
	                            'reload'=>true,
	                            'message'=>'Donor Image Delete Completed'
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
	                            'message'=>'Technical Error, Please Try Again !'
	                        ]
	                        );
	}
	
}