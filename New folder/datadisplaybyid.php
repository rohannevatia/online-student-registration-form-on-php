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
    <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>ADMIN PANEL</center></font></marquee>    
    <div class="contentpanneladmin1">
        <form action="moredetails1.php" method="POST">
            <table>
                <tr>
                    <td><br/>Select a user id : 
                        <select name="id"  style="border-radius:7px; border:3px solid #9966CC;">
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- SELECT ID ---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        <?php
                            $sql="SELECT user_id FROM student_reg";
                            $result = mysql_query($sql) or die(mysql_error());
                            while($rws = mysql_fetch_array($result))
                            {
                                  echo "<option value='$rws[0]'>".$rws[0]."</option>";  
                                    
                            }
                            
                        ?>
                        
                        </select>
                    </td>
                    <td><br/><input type="submit" name="displaymoredata" value="DISPLAY DETAILS"  style="border-radius:7px; border:3px solid #9966CC;"/></td>
                </tr>
            </table>
            
           <table>
                <tr>
                    <td>
                        <br/><h4>TO ADD/REMOVE SEATS CLICK BELOW:</h4>
                        <a href="seats_mod.php" class="button">Add/remove Seats</a> 
                        <h4>TO ADD/SUSPEND COURSE CLICK BELOW:</h4>
                        <a href="course_mod.php" class="button">Add/Suspend Course</a>
                        <h4> TO VIEW STUDENT DETAILS BY COURSE CLICK BELOW:</h4>
                        <a href="coursedisplay.php" class="button">View Student Details by Course</a>
                        <h4> TO VIEW ALL STUDENTS DETAILS CLICK BELOW:</h4>
                        <a href="viewalldata.php" class="button">View all Students</a> 
                        <h4> TO SEARCH BY NAME CLICK BELOW:</h4>
                        <a href="searchbyname.php" class="button">Search by Name</a>
                        
                    </td>
                </tr>
          </table>
        </form>
         </div>
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