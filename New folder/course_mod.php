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
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH  PVT. LTD.</center></font>
        </h1></br>
        </div>
    <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>ADMIN PANNEL</center></font></marquee>    
    <div class="contentpanneladmin3">
        <h3>&nbsp;&nbsp;--: ADD A COURSE :--</h3>
        <form action="addcourse.php" method="POST"> 
            <table>
                <tr>
                    <td>ADD NEW COURSE : </td>
                    <td><input type="text" name="addcourse" style="border-radius:7px; border:2px solid #9966CC;" required></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;SEATS ALLOTED : </td>
                    <td><input type="text" name="allotseats" style="border-radius:7px; border:2px solid #9966CC;" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp;&nbsp;&nbsp;<input type="submit" name="modifycourse" value="ADD THIS COURSE" style="border-radius:7px; border:3px solid #9966CC;"></td>
                </tr>
            </table>
        </form>
        <h3>--: SUSPEND A COURSE :--</h3>
        <form action="suspendcourse.php" method="POST"> 
            <table>
                <tr>
                    <td>SELECT A COURSE TO SUSPEND : </td>
                    <td><select name="suspendcourse" style="border-radius:7px; border:2px solid #9966CC;">
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;--- SELECT A COURSE ---</option>
                                <?php
                                    include 'inc/dbconn.php';
                                    $sql="SELECT courses,seats_left,course_status FROM student_course";
                                    $result = mysql_query($sql) or die(mysql_error());
                                    while($rws = mysql_fetch_array($result))
                                    {
                                        if(($rws[2] == 1) && ($rws[1]>0))
                                            echo "<option value='$rws[0]'>".$rws[0]." (Seats available - ".$rws[1].")"."</option>";      
                                    }
                                ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="modifycourse" value="SUSPEND THIS COURSE" style="border-radius:7px; border:2px solid #9966CC;"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h4> TO ADD/REMOVE SEATS CLICK BELOW:</h4>
                        <a href="seats_mod.php" class="button">Add/Remove Seats</a>
                        <h4>VIEW STUDENTS DETAILS BY COURSE CLICK BELOW:</h4> 
                        <a href="coursedisplay.php" class="button">View Student Details by Course</a>
                        <h4>VIEW STUDENT DETAILS BY ID CLICK BELOW:</h4> 
                        <a href="datadisplaybyid.php" class="button">View Student Details by Id</a>
                        <h4> VIEW ALL STUDENTS CLICK BELOW:</h4>
                        <a href="viewalldata.php" class="button">View all Students</a>
                        <h4> SEARCH BY NAME CLICK BELOW:</h4>
                        <a href="searchbyname.php" class="button">Search by Name</a> 
                       
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