<?php
if(isset($_REQUEST['LoginBtn']) || (isset($_COOKIE['uname']) && isset($_COOKIE['pwd'])))
{    
include 'inc/dbconn.php';
if(isset($_COOKIE['uname']) && isset($_COOKIE['pwd']))
{
    $userName=  mysql_real_escape_string($_COOKIE['uname']);
    $userPwd=  mysql_real_escape_string($_COOKIE['pwd']);
}
else
{
    $userName=  mysql_real_escape_string($_REQUEST['uname']);
    $userPwd=  mysql_real_escape_string(md5($_REQUEST['pwd']));
}
$sql="SELECT user_id,user_email,user_pwd FROM student_reg WHERE user_email='$userName' AND user_pwd='$userPwd'";
$result=mysql_query($sql) or die(mysql_error());
$rws=mysql_fetch_array($result);
$_SESSION['user_id']=$rws[0];
if($rws[1]==$userName && $rws[2]==$userPwd)
{    
    $_SESSION['success']=1;
    
    if(isset($_REQUEST['remb']) && $_REQUEST['remb']==1)
    {    
        setcookie('uname',$userName,time()+30*24*60*60);
        setcookie('pwd',$userPwd,time()+30*24*60*60);
    }
    header('Location:basicprofile.php');
}    
else
{
    header('Location:homepage.php');
}
}
?>
