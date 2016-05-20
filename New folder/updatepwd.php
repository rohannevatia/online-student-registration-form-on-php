<html>
<head>
<link rel="stylesheet" type="text/css" href="contentpannel.css">
<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
<img src="background1.jpg" height="800" width="1500" class="fixed"/>
<div class="contentpannelfd">
<?php 
    if(isset($_REQUEST['updatepwd']))
    {
        include 'inc/dbconn.php';
        $email = mysql_real_escape_string($_REQUEST['email']);
        $mobile = $_REQUEST['mobile'];
        $securityques = $_REQUEST['securityques'];
        $securityans = $_REQUEST['securityans'];
        $sql="SELECT user_id,user_email,user_mobile,user_securityques,user_securityans FROM student_reg WHERE user_email='$email' AND user_mobile='$mobile' AND user_securityques='$securityques' AND user_securityans='$securityans'";
        $result=mysql_query($sql) or die(mysql_error());
        $rws=mysql_fetch_array($result);
        $_SESSION['user_id']=$rws[0];
        $userID = $_SESSION['user_id'];
        if($rws[1] == $email && $rws[2] == $mobile && $rws[3] == $securityques && $rws[4] == $securityans)
        {    
            $_SESSION['success']=1;
            $newpwd = rand();
            $new=md5($newpwd);
             echo "YOUR NEW PASSWORD IS : ".$newpwd."<br/>";
    echo "LOGOUT AND LOGIN AGAIN WITH YOUR NEW PASSWORD TO VISIT YOUR NEW PROFILE <br/><br/>";
    echo "<a href = 'logout.php'>LOGOUT</a>";

            $sql1 = "UPDATE student_reg SET user_pwd = '$new' WHERE user_id='$userID'";
            mysql_query($sql1);
            
        }
        else
        {
            header('Location:homepage.php');
        }
    }
    else
        {
            header('Location:homepage.php');
        }
?>
</div>
</body>
</html>