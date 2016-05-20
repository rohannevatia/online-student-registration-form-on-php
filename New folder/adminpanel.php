<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    if(isset($_REQUEST['adminlogin']) && (isset($_REQUEST['uname']) && isset($_REQUEST['pwd'])))
    {    
        $userName=  mysql_real_escape_string($_REQUEST['uname']);
        $userPwd=  mysql_real_escape_string(md5($_REQUEST['pwd']));
        $sql="SELECT admin_id,admin_uname,admin_pwd FROM admin WHERE admin_uname='$userName' AND admin_pwd='$userPwd'";
        $result=mysql_query($sql) or die(mysql_error());
        $rws=mysql_fetch_array($result);
        $_SESSION['user_id']=$rws[0];
        if($rws[1]==$userName && $rws[2]==$userPwd)
        {    
            $_SESSION['success']=1;
            header('Location:adminprofile.php');
        }    
        else
        {
            header('Location:adminlogin.php');
        }
    }
?>
