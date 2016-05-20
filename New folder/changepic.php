<?php
include 'inc/dbconn.php';
if(!isset($_SESSION['success']))
{    
    header('Location:homepage.php');
}
    if(isset($_REQUEST['changepic']))
    {    
        $userID=$_SESSION['user_id'];  
        $destination="upload/".$_FILES['mypic']['name'];
        move_uploaded_file($_FILES['mypic']['tmp_name'],$destination);
        $sql = "UPDATE student_reg SET user_pic='$destination' WHERE user_id='$userID'";
        mysql_query($sql);
        header('Location:editprofile.php');
    }
    else
    {
        header('Location:editprofile.php');
    }
 ?>