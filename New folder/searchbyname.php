<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
?>
<html>
    <head>
        <link rel= "stylesheet" type="text/css" href="contentpannel.css"/>
         <link rel= "stylesheet" type="text/css" href="contentpannel1.css"/>
        <link rel= "stylesheet" type="text/css" href="leftpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="rightpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="header.css"/>
        <link rel= "stylesheet" type="text/css" href="footer.css"/> 
    </head>
    <body>
    <img src="New folder/admin4.jpg" height="800" width="1500" class="fixed"/>
    <div class="header">
    <h1 class="waitingforconnection1">
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH  PVT. LTD. </center></font>
        </h1></br>
        </div>
    <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>ADMIN PANEL</center></font></marquee>    
    <div class="contentpanneladmin1">
        <form action="searchpage.php" method="POST">
            <table>
                <tr>
                    <td><br/>ENTER A NAME : </td>
                    <td><br/><input type="text" name="searchname" style="border-radius:7px; border:2px solid #9966CC;" required></td>
                    <td align="right">&nbsp;&nbsp;&nbsp;<br/><input type="submit" name="search" value="SEARCH" style="border-radius:7px; border:3px solid #9966CC;"></td>
                </tr>
           <table>
                <tr>
                    <td>
                        <h4><br/> TO ADD/REMOVE SEATS CLICK BELOW:</h4>
                        <a href="seats_mod.php" class="button">Add/Remove Seats</a>
                        <h4> TP ADD/SUSPEND COURSE CLICK BELOW</h4> 
                        <a href="course_mod.php" class="button">Add/Suspend Course</a>
                        <h4> TO VIEW STUDENT DETAILS BY COURSE</h4> 
                        <a href="coursedisplay.php" class="button">View Student Details by Course</a>
                        <h4> TO VIEW STUDENT DETAILS BY ID CLICK BELOW:</h4> 
                        <a href="datadisplaybyid.php" class="button">View Student Details by Id</a>
                        <h4> TO VIEW ALL STUDENT DETAILS CLICK BELOW</h4> 
                        <a href="viewalldata.php" class="button">View all Students Data</a> 
                       
                    </td>
                </tr>
          </table>
        </form>
        </div>
        <div class="rightpanneladmin1">
        </div>
        <div class="leftpanneladmin1">
        </div>
         <div class="footer">
        <ul id="footer_menu">
        <li><a href="adminprofile.php">GO TO ADMIN PANEL</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
 </ul>
        </div>
    </body>
</html>