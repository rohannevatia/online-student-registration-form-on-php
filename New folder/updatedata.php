<?php
include 'inc/dbconn.php';
if(!isset($_SESSION['success']))
{    
    header('Location:homepage.php');
}
    if(isset($_REQUEST['submitbtn']))
    {
        $userID=$_SESSION['user_id'];  
        $address = $_REQUEST['address']; 
        $mobile = $_REQUEST['mobile'];
        $tenmarks = $_REQUEST['10thmarks'];
        $twelvemarks = $_REQUEST['12thmarks'];
        $college = $_REQUEST['college'];
        $currentsem = $_REQUEST['currentsem'];
        $dob= $_REQUEST['dob'];
        $sql = "UPDATE student_reg SET user_address='$address',user_dob='$dob',user_mobile='$mobile',user_10thmarks='$tenmarks',user_12thmarks='$twelvemarks',user_collegename='$college',user_currentsem='$currentsem' WHERE user_id='$userID'";
        mysql_query($sql);
        header('Location:basicprofile.php');
    }
 else 
 {
        header('Location:editprofile.php');
 }
?>