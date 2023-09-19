<?php 
require_once("../../OOP_CLASS/db-connect/connect.php");
require_once("../../OOP_CLASS/class/common_class.php");
require_once("../../OOP_CLASS/function/function.php");
$server=new Main_Class();

if(isset($_POST['get_user']))
{
    $user_id=$_POST['user_id'];
    $sql="SELECT * FROM   `donor_registation` LEFT JOIN `blood_center_list` ON donor_registation.donor_blood_center=blood_center_list.center_id LEFT JOIN `district_list` ON donor_registation.donor_district=district_list.id WHERE `registation_id`='$user_id'";
    $result=$server->single_row_fetch($sql);
    $html="";
    if($result)
    {
        $html = "
                <table class='table table-bordered'>
                    <tr>
                        <td><b class='model-names'>Donor Name</b></td>
                        <td>{$result['donor_name']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Blood Group</b></td>
                        <td>{$result['blood_group']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Date Of Birth</b></td>
                        <td>{$result['donr_dob']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Gender</b></td>
                        <td>{$result['donor_gender']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Mobile Number</b></td>
                        <td>{$result['donor_mobile_number']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Email</b></td>
                        <td>{$result['donor_email']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>District</b></td>
                        <td>{$result['district_name']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Center Name</b></td>
                        <td>{$result['blood_center_list']}</td>
                    </tr>
                    <tr>
                        <td><b class='model-names'>Donor Availability</b></td>
                        <td>" . ($result['donor_blood_available'] == '1' ? '<span class="badge bg-success">Available</span>' : '<span class="badge bg-danger">Not Available') . "</td>
                    </tr>
                </table>";

        echo $html;

    }
    else
    {

    }
}

?>