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
        <form action="datadisplaybycourse.php" method="POST">
            <table>
                <tr class="size">
                    <td>SELECT A COURSE : &nbsp &nbsp &nbsp</td>
                    <td><select name="course" style="border-radius:7px; border:2px solid #9966CC;">
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- SELECT A COURSE ---</option>
                        <?php
                            $sql="SELECT courses,seats_left,course_status FROM student_course";
                            $result = mysql_query($sql) or die(mysql_error());
                            while($rws = mysql_fetch_array($result))
                            {
                                if(($rws[2] == 1) && ($rws[1]>0))
                                    echo "<option value='$rws[0]'>".$rws[0]."(Seats available - ".$rws[1].")"."</option>";      
                            }
                            
                        ?>
                        </select>
                   </td>
                
                    <td>&nbsp;&nbsp;&nbsp;<input type="submit" name="selectcourse" value="SELECT" style="border-radius:7px; border:2px solid #9966CC;"></td>
                </tr>
                <table>
                <tr>
                    <td>
                        <h4>GO TO ADMIN PANEL CLICK BELOW:</h4>
                        <a href="adminprofile.php" class="button">Go to Admin panel</a> 
                        <h4> TO ADD/SUSPEND COURSE CLICK BELOW:</h4>
                        <a href="course_mod.php" class="button">Add/Suspend Course</a>
                        <h4> TO VIEW STUDENT DETAILS BY ID CLICK BELOW:</h4>
                        <a href="datadisplaybyid.php" class="button">View Student Details by Id</a>
                        <h4> TO VIEW ALL STUDENTS CLICK BELOW</h4> 
                        <a href="viewalldata.php" class="button">View all Students</a>
                        <h4> TO SEARCH STUDENT BY NAME CLICK BELOW: </h4>
                        <a href="searchbyname.php" class="button">Search Student by Name</a>
                       
                    </td>
                </tr>
          </table>
            </table>
        </form>
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