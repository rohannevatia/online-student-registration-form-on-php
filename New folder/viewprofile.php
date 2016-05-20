<?php
    include 'inc/dbconn.php';
            $userID=$_SESSION['user_id'];
            $sql = "SELECT * FROM student_reg WHERE user_id = '$userID'";
            $result = mysql_query($sql);
            while($rws = mysql_fetch_array($result))
            {
?>
<html>
    <head>
        <title>VIEW PROFILE</title>
        <link rel= "stylesheet" type="text/css" href="contentpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="leftpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="rightpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="header.css"/>
        <link rel= "stylesheet" type="text/css" href="footer.css"/>
    </head>
    <body>
     <img src="background1.jpg" height="800" width="1500" class="fixed"/>
    <div class="header">
    
        <h1 class="waitingforconnection1">
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH  PVT. LTD.</center></font>
        </h1></br>
        </div>
          <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" 
                   onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>VIEW PROFILE</center></font></marquee>
        <form action="basicprofile.php" method="POST">
        <div class="contentpanneld">
            <br/><br/><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>PERSONAL DETAILS</h3></u>
            <table>
                <tr class=sizeb>
                    <td><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COURSE SELECTED : </td>
                    <td>&nbsp;&nbsp;<font color="yellow"><center><?php echo $rws['1']?></center></font></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIRST NAME : </td>
                    <td><input type="text" name="fname" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['2']?>" readonly/></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MIDDLE NAME : </td>
                    <td><input type="text" name="mname" style="border-radius:7px; border:2px solid #9966CC;"  
                               value="&nbsp;&nbsp;<?php echo $rws['3']?>" readonly/></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LAST NAME : </td>
                    <td><input type="text" name=lname" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['4']?>" readonly/></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FATHER'S NAME : </td>
                    <td><input type="text" name="fathername" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['5']?>" readonly/></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GENDER : </td>
                    <td><input type="text" name="gender" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['6']?>" readonly/></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ID : </td>
                    <td><input type="email" name="email" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['7']?>" readonly/></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB : </td>
                    <td><input type="text" name="dob" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['9']?>" readonly/></td>
                </tr>
                
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS : </td>
                    <td><input type="text" name="address" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['10']?>" readonly /></td>
                </tr>
                
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOBILE PHONE : </td>
                    <td><input type="text" name="mobile" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['12']?>" readonly /></td>
                </tr>    
            </table>
            </div>
            
            <div class="contentpanneld1">
                <table>
                    <tr class=sizeb>
                    <td><br/><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROFILE PIC : </h4></td>
                    <td><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="<?php echo $rws['11']?>" height="150" width="150" ></td>
                </tr>
                </table>
                <br/><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>ACADEMIC DETAILS</h3></u>
            <table>
                
                <tr class=sizeb>
                    <td><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10th MARKS : </td>
                    <td><input type="text" name="10thmarks" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['13']?>" readonly /></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;12th MARKS</td>
                    <td><input type="text" name="12thmarks" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['14']?>" readonly /></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;COLLEGE NAME : </td>
                    <td><input type="text" name="college" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['15']?>" readonly /></td>
                </tr>
                <tr class=sizeb>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;CURRENT SEMESTER : </td>
                    <td><input type="text" name="currentsem" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="&nbsp;&nbsp;<?php echo $rws['16']?>" readonly/></td>
                </tr>
                </div>
                  <div class="footer">
                  <ul id="footer_menu">
                    <li><a href="basicprofile.php">BASIC PROFILE</a></li>
                    <li><a href="editprofile.php">EDIT PROFILE</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                  </ul>
            </table>
        </form>
        </div>
    </body>
</html>
<?php
            }
?>