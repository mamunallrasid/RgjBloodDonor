<?php 
 require_once("../../OOP_CLASS/db-connect/connect.php");
 require_once("../../OOP_CLASS/class/common_class.php");
 require_once("../../OOP_CLASS/function/function.php");
 $server=new Main_Class();

if(isset($_POST['login']))
{
    $User_Name=$_POST['username'];
    $Password=$_POST['password'];
    $sql="SELECT * FROM `donor_registation` WHERE `donor_mobile_number`='$User_Name' && `delete_status`='0'";
    $result=$server->single_row_fetch($sql);
    if($result)
    {
       $db_passord=date("dmY", strtotime($result['donr_dob']));
       if($db_passord==$Password)
        {
            $_SESSION['id']=$result['registation_id'];
            $_SESSION['donor_name']=$result['donor_name'];
            $_SESSION['donor_center']=$result['donor_blood_center'];
            echo json_encode(
                        [
                            'status'=>true,
                            'redirect'=>true,
                            'reload'=>false,
                            'url'=>'../user/index.php',
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
                            'message'=>'Invalid Password, Please Try Again !'
                        ]
                        );
        }
    }  
    else
    {
        echo json_encode(
            [
                'status'=>false,
                'redirect'=>false,
                'reload'=>true,
                'message'=>'Could Not Registar, Please Registar & Try Again !'
            ]
            );
    }
}

if(isset($_POST['logout']))
{
  if(isset($_SESSION['id'])&& (isset($_SESSION['donor_name'])))
  {
    session_unset();
    session_destroy();
    echo json_encode(
        [
            'status'=>true,
            'redirect'=>true,
            'reload'=>false,
            'url'=>'../ui/index.php',
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