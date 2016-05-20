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
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/> WEBTECH  PVT. LTD. </center></font>
        </h1></br>
        </div>
    <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>ADMIN PANEL</center></font></marquee>
     <div class="contentpanneladmin1">
        <h4>TO MODIFY SEATS CLICK BELOW:</h4>
        <a href="seats_mod.php" class="button">Add/Remove Seats</a>
        <h4>TO MODIFY COURSE CLICK BELOW:</h4>
        <a href="course_mod.php" class="button">Add/Suspend Course</a> 
        <h4>TO VIEW STUDENTS COURSE VIZ CLICK BELOW:</h4> 
        <a href="coursedisplay.php" class="button">View Students Course wise</a> 
        <h4>TO VIEW STUDENTS DETAILS BY ID CLICK BELOW:</h4> 
        <a href="datadisplaybyid.php" class="button">View Student Details by ID</a>
        <h4>TO VIEW ENTIRE STUDENTS DETAILS CLICK BELOW:</h4>
        <a href="viewalldata.php" class="button">View all Students</a> 
        <h4> TO SEARCH STUDENTS BY NAME CLICK BELOW:</h4>
        <a href="searchbyname.php" class="button">Search by Name</a>
        </div>
        <div class="rightpanneladmin1">
        </div>
        <div class="leftpanneladmin1">
        </div>
        <div class="footer">
        <ul id="footer_menu">
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
        </div>
    </body>
</html>