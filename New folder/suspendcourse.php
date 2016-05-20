<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    $suspendcourse = $_REQUEST['suspendcourse'];
    $delseats = $_REQUEST['delseats'];
    $status = 0;
    $sql = "UPDATE student_course SET course_status='$status' WHERE courses='$suspendcourse'";
    mysql_query($sql);
    header('Location:adminprofile.php');
?>