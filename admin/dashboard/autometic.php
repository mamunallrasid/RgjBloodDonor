<?php 
     require_once("../../OOP_CLASS/db-connect/connect.php");
     require_once("../../OOP_CLASS/class/common_class.php");
     require_once("../../OOP_CLASS/function/function.php");
     $server=new Main_Class();
     date_default_timezone_set("Asia/Kolkata");
     $status_change_date=date("y-m-d");
     $find="SELECT * FROM `donor_registation` WHERE `donor_blood_available` = '0' AND `status_update_date` <= '$status_change_date' AND `delete_status`='0'";
     $fetch_result=$server->fetch_data($find);
     if($fetch_result)
    {
        foreach($fetch_result as $data)
        {
            $sql = "UPDATE `donor_registation` 
            SET `donor_blood_available` = '1', `status_update_date` = '$status_change_date' 
            WHERE `registation_id` = '{$data['registation_id']}'";
            $server->insert($sql);
        }
        echo "Done";
    }
    else
    {
        echo "Not Done";
    }
?>