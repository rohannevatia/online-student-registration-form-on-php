<html>
    <head>
         <link rel="stylesheet" type="text/css" href="header.css">
         <link rel="stylesheet" type="text/css" href="contentpannel.css">
</head>
    <body>
        <img src="background1.jpg" height="800" width="1500" class="fixed"/>
        <div class="header">
    
        <h1 class="waitingforconnection1">
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH.PVT.LTD</center></font>
        </h1></br>
        </div>
        <div class="contentpannel" align="center"> 
            <?php
if(isset($_POST['submit']) && $_POST['fname'] && $_POST['lname'] && $_POST['fathername'] && $_POST['gender'] && $_POST['eml'] && $_POST['dob'] && $_POST['pwd'] && $_POST['cpwd'])
    {
      if($_POST['pwd']==$_POST['cpwd'])
      {    
          include 'inc/dbconn.php';
          $emailid = $_POST['eml'];
          $emailid = strtolower($emailid);
          $emailid=  mysql_real_escape_string($emailid);
               //$destination ="upload/" . $_FILES['uploadfile']['name'];
               //move_uploaded_file($_FILES['uploadfile']['tmp_name'],$destination);
        $check=mysql_query("SELECT user_email FROM student_reg WHERE user_email='$emailid'")
   or die(mysql_error());
   $check2=mysql_num_rows($check);
  if($check2!=0)
   {
      
    die('sorry, the emailid '.$_POST['eml'].' is already in use '.  "<a href = 'regis1.php'>register again with another emailid</a>");
   }  
 else {
       



$firstname = $_POST['fname'];
$firstname = strtoupper($firstname);
$middlename = $_POST['mname'];
$middlename = strtoupper($middlename);
$lastname = $_POST['lname'];
$lastname = strtoupper($lastname);
$fathername = $_POST['fathername'];
$usergen = $_POST['gender'];
$userpwd = mysql_real_escape_string(md5($_POST['pwd']));
$dob = $_POST['dob'];
$course=$_POST['course'];
$securityques = $_REQUEST['securityques'];
$securityans = $_REQUEST['securityans'];
$sql1 = "SELECT id,seats_left,total_seats FROM student_course WHERE courses = '$course'";
mysql_query($sql1) or die(mysql_error());
$result1 = mysql_query($sql1);
while($rws = mysql_fetch_array($result1))
{
$id = $rws[0];
$totalseats = $rws[1];
$leftseats = $rws[2];
$leftseats = $totalseats-1;
$sql2 = "UPDATE student_course SET seats_left='$leftseats' WHERE id='$id'";
mysql_query($sql2) or die(mysql_error());
}
$sql = "INSERT INTO student_reg VALUES ('','$course','$firstname','$middlename','$lastname','$fathername','$usergen','$emailid','$userpwd','$dob','','','','','','','','$securityques','$securityans')";
mysql_query($sql) or die(mysql_error());
header('Location:homepage.php');
  }
      }
 else
 {   
    header('location:regis1.php');
 }
 
    }
    else
    {
        header('location:regis1.php');
    }
    ?>
   </div>    
<?php
if(isset($_POST['submit']) && $_POST['fname'] && $_POST['lname'] && $_POST['fathername'] && $_POST['gender'] && $_POST['eml'] && $_POST['dob'] && $_POST['pwd'] && $_POST['cpwd'])
    {
      if($_POST['pwd']==$_POST['cpwd'])
      {    
          include 'inc/dbconn.php';
          $emailid = $_POST['eml'];
               //$destination ="upload/" . $_FILES['uploadfile']['name'];
               //move_uploaded_file($_FILES['uploadfile']['tmp_name'],$destination);
        $check=mysql_query("SELECT user_email FROM student_reg WHERE user_email='$emailid'")
   or die(mysql_error());
   $check2=mysql_num_rows($check);
  if($check2!=0)
   {
      
    die('sorry, the emailid '.$_POST['eml'].' is already in use '.  "<a href = 'regis1.php'>register again with another emailid</a>");
   }  
 else {
       



$firstname = $_POST['fname'];
$firstname = strtoupper($firstname);
$middlename = $_POST['mname'];
$middlename = strtoupper($middlename);
$lastname = $_POST['lname'];
$lastname = strtoupper($lastname);
$fathername = $_POST['fathername'];
$usergen = $_POST['gender'];
$emailid = strtolower($emailid);
$userpwd = $_POST['pwd'];
$dob = $_POST['dob'];
$course=$_POST['course'];
$securityques = $_REQUEST['securityques'];
$securityans = $_REQUEST['securityans'];
$sql1 = "SELECT id,seats_left,total_seats FROM student_course WHERE courses = '$course'";
mysql_query($sql1) or die(mysql_error());
$result1 = mysql_query($sql1);
while($rws = mysql_fetch_array($result1))
{
$id = $rws[0];
$totalseats = $rws[1];
$leftseats = $rws[2];
$leftseats = $totalseats-1;
$sql2 = "UPDATE student_course SET seats_left='$leftseats' WHERE id='$id'";
mysql_query($sql2) or die(mysql_error());
}
$sql = "INSERT INTO student_reg VALUES ('','$course','$firstname','$middlename','$lastname','$fathername','$usergen','$emailid','$userpwd','$dob','','','','','','','','$securityques','$securityans')";
mysql_query($sql) or die(mysql_error());
header('Location:homepage.php');
  }
      }
 else
 {   
    header('location:regis1.php');
 }
 
    }
    else
    {
        header('location:regis1.php');
    }
    ?>
   </body>
</html>   