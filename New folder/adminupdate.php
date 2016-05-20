<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
$course = $_REQUEST['course'];
$seats = $_REQUEST['seats'];
$sql1 = "SELECT total_seats FROM student_course WHERE courses='$course'";
$result1 = mysql_query($sql1);
while($rws = mysql_fetch_array($result1))
{
    $oldseats = $rws[0];
}
$sql = "UPDATE student_course SET total_seats='$seats' WHERE courses='$course'";
mysql_query($sql);
$sql2 = "SELECT total_seats,seats_left FROM student_course WHERE courses='$course'";
$result2 = mysql_query($sql2);
while($rws = mysql_fetch_array($result2))
{
    $newseats = $rws[0];
    $leftseats = $rws[1];
    $diff = $newseats - $oldseats;
    $leftseats = $leftseats + $diff;
    $sql3 = "UPDATE student_course SET seats_left='$leftseats' WHERE courses='$course'";
    mysql_query($sql3) or die(mysql_error());
}
header('Location:adminprofile.php');
?>