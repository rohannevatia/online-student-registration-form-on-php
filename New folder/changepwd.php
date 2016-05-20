<?php
include 'inc/dbconn.php';
if(!isset($_SESSION['success']))
{    
    header('Location:homepage.php');
}
$user=$_SESSION['user_id'];
if(isset($_POST['submit']))
{
    if($_POST['pwd']==$_POST['cpwd'])
    {
        
        
        $userpwd = mysql_real_escape_string(md5($_POST['pwd']));
        $sql2 = "UPDATE student_reg SET user_pwd='$userpwd' WHERE user_id='$user'";
        mysql_query($sql2);
         header('location:basicprofile.php');
    }
 else {
        header('location:basicprofile.php');
    }
}
 else {
    header('location:basicprofile.php');
}