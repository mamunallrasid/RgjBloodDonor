<?php 
 require_once("../../OOP_CLASS/db-connect/connect.php");
 require_once("../../OOP_CLASS/class/common_class.php");
 require_once("../../OOP_CLASS/function/function.php");
 $server=new Main_Class();

 if(isset($_POST['submit']))
 {
    $donor_blood_group=$_POST['blood_group'];
    $donor_Name=$_POST['name'];
    $donor_dob=$_POST['dob'];
    $donor_gender=$_POST['gender'];
    $donor_mobile_number=$_POST['mobile_number'];
    $donor_email=$_POST['email'];
    $donor_state=$_POST['state'];
    $donor_district=$_POST['district'];
    $donor_blood_center=$_POST['blood_center'];
    $donor_blood_available=$_POST['blood_available'];
    if($donor_blood_available=='0')
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
    date_default_timezone_set("Asia/Kolkata");
	$date=date("y-m-d");
	$time=date("H:i:s a");
    $delete_status="0";
    $sql="INSERT INTO `donor_registation`(`blood_group`, `donor_name`, `donr_dob`, `donor_gender`, `donor_mobile_number`, `donor_email`, `donor_state`, `donor_district`, `donor_blood_center`, `donor_blood_available`,`status_update_date`,`delete_status`, `registation_date`, `registation_time`)
     VALUES ('$donor_blood_group','$donor_Name','$donor_dob','$donor_gender','$donor_mobile_number','$donor_email','$donor_state','$donor_district','$donor_blood_center','$donor_blood_available','$status_change_date','$delete_status','$date','$time')";
     $result=$server->insert($sql);
     if($result)
     {
        echo json_encode(
            [
                'status'=>true,
                'redirect'=>false,
                'reload'=>true,
                'message'=>' Donor Registation Successfully Completed'
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
                'message'=>'Donor Registation Faild, Please Try Again !'
            ]
            );
    }
 }

 if(isset($_POST['ph_no']))
 {
    $Phone_number=$_POST['ph_no'];
    $sql="SELECT * FROM `donor_registation` WHERE `donor_mobile_number`='$Phone_number' && `delete_status`='0'";
    $result=$server->single_row_fetch($sql);
    if(empty($result))
    {
        echo "0";
    }
    else
    {
        echo  "1";
    }
 }

 if(isset($_POST['findcenter']))
 {
    $district_id=$_POST['dis_id'];
    $sql="SELECT * FROM `blood_center_list` WHERE `district_id`='$district_id' AND `blood_center_status`='1'";
    $html="";
    if($result=$server->fetch_data($sql))
    {
        foreach($result as $data)
        {
        $html .= "<option value='{$data['center_id']}'>{$data['blood_center_list']}</option>";
        }
         echo $html;
    }
    else
    {
        $html .= "<option value=''>Not Found</option>"; 
        echo $html;
    }
   
 }
?>