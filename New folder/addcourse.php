<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    $addcourse = $_REQUEST['addcourse'];
    $allotseats = $_REQUEST['allotseats'];
    $check = mysql_query("SELECT courses FROM student_course WHERE courses = '$addcourse'");
    $check2 = mysql_num_rows($check);
     if($check2==1)
    {
        $sql="SELECT course_status FROM student_course WHERE courses = '$addcourse'";
        $result=mysql_query($sql) or die(mysql_error());
        //while($rws = mysql_fetch_array($result))
        //{   
        $rws = mysql_fetch_array($result);
            if($rws[0] == 0)
            
        {
            $status = 1;
            $sql1 = "UPDATE student_course SET total_seats='$allotseats',seats_left='$allotseats',course_status='$status' WHERE courses='$addcourse'";
            mysql_query($sql1);
            header('Location:adminprofile.php'); 
        }
        else
        {
            header('Location:adminprofile.php'); 
        }
        
       // }
    }
    else 
    {
        $status = 1;
        $sql2 = "INSERT INTO student_course VALUES('','$addcourse','$allotseats','$allotseats','$status')";
        mysql_query($sql2) or die(mysql_error());
        header('Location:adminprofile.php');
    }        
?>