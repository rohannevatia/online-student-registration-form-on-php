<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    if(isset($_REQUEST['details']))
{
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
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH  PVT. LTD.</center></font>
        </h1></br>
        </div>
    <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>ADMIN PANEL</center></font></marquee>    
    <div class="contentpanneladmin1">
        <form action="adminupdate.php" method="POST">
            <?php
                $course = $_REQUEST['course'];
                $sql = "SELECT courses,total_seats FROM student_course WHERE courses = '$course'";
                $result = mysql_query($sql);
                while($rws = mysql_fetch_array($result))
                {
            ?>
            <table>
                <tr>
                    <td><h4><br/>COURSE NAME : </h4></td>
                        <td><input type="text" name="course" value="<?php echo $rws[0];?>" style="border-radius:7px; border:2px solid #9966CC;" required/></td>
                        
                    <td><h4><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL SEATS : </h4></td>
                    <td><input type="text" name="seats" value="<?php echo $rws[1];?>" style="border-radius:7px; border:2px solid #9966CC;"required/></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="UPDATE SEATS" value="<?php echo $rws[1];?>" style="border-radius:7px; border:3px solid #9966CC;"/></td>
                </tr>
            </table>
            <?php 
                }
            ?>
            <table>
                <tr>
                    <td>
                        <h4> ADD/SUSPEND COURSE CLICK BELOW:</h4>
                        <a href="course_mod.php" class="button">ADD/SUSPEND COURSE</a>
                        <h4> VIEW STUDENT DETAILS BY COURSE CLICK BELOW:</h4>  
                        <a href="coursedisplay.php" class="button">View Student Details by Course</a>
                        <h4> TO VIEW STUDENT DETAILS BY ID CLICK BELOW:</h4>
                        <a href="datadisplaybyid.php" class="button">View Student Details by Id</a>
                        <h4> TO VIEW ALL STUDENTS DETAILS CLICK BELOW:</h4>
                        <a href="viewalldata.php" class="button">View all Students</a>
                        <h4> TO SEARCH STUDENTS BY NAME CLICK BELOW:</h4>
                        <a href="searchbyname.php" class="button">Search Student by Name</a> 
                        
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
            <li><a href="seats_mod.php">BACK</a></li>
            <li><a href="adminprofile.php">ADMIN PANEL</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
       </ul>
        </div>
    </body>
</html>
<?php
}
 else 
{
    header('Location:seats_mod.php');
}
?>