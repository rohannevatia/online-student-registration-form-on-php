<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    if(isset($_REQUEST['displaymoredata']) && (isset($_REQUEST['id'])))
    {
            $userID = $_REQUEST['id'];
            $sql = "SELECT * FROM student_reg WHERE user_id = '$userID'";
            $result = mysql_query($sql);
            while($rws = mysql_fetch_array($result))
            {
?>
<html>
    <head>
        <title></title>
        <link rel= "stylesheet" type="text/css" href="contentpannel.css"/>
         <link rel= "stylesheet" type="text/css" href="contentpannel1.css"/>
        <link rel= "stylesheet" type="text/css" href="leftpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="rightpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="header.css"/>
        <link rel= "stylesheet" type="text/css" href="footer.css"/> 
    </head>
    <body>
    <img src="New folder/admin4.jpg" height="800" width="1500" class="fixed"/>
    <div class="contentpanneladmin2">
            <h3>PERSONAL DETAILS</h3>
            <table>
                <tr>
                    <td>COURSE SELECTED IS : </td>
                    <td><?php echo $rws['1']?></td>
                </tr>
                <tr>
                    <td>FIRST NAME : </td>
                    <td><input type="text" name="fname" value="<?php echo $rws['2']?>" readonly/></td>
                </tr>
                <tr>
                    <td>MIDDLE NAME : </td>
                    <td><input type="text" name="mname" value="<?php echo $rws['3']?>" readonly/></td>
                </tr>
                <tr>
                    <td>LAST NAME : </td>
                    <td><input type="text" name=lname" value="<?php echo $rws['4']?>" readonly/></td>
                </tr>
                <tr>
                    <td>FATHER'S NAME : </td>
                    <td><input type="text" name="fathername" value="<?php echo $rws['5']?>" readonly/></td>
                </tr>
                <tr>
                    <td>GENDER : </td>
                    <td><input type="text" name="gender" value="<?php echo $rws['6']?>" readonly/></td>
                </tr>
                <tr>
                    <td>EMAIL_ID : </td>
                    <td><input type="email" name="email" value="<?php echo $rws['7']?>" readonly/></td>
                </tr>
                <tr>
                    <td>DOB : </td>
                    <td><input type="text" name="dob" value="<?php echo $rws['9']?>" readonly/></td>
                </tr>
                
                <tr>
                    <td>ADDRESS : </td>
                    <td><input type="text" name="address" value="<?php echo $rws['10']?>" readonly /></td>
                </tr>
                <tr>
                    <td>PROFILE PIC : </td>
                    <td><img src="<?php echo $rws['11']?>" height="100" width="100" ></td>
                </tr>
                <tr>
                    <td>MOBILE PHONE : </td>
                    <td><input type="text" name="mobile" value="<?php echo $rws['12']?>" readonly /></td>
                </tr>    
            </table>
            <h3><strong>ACADEMIC DETAILS</strong></h3>
            <table>
                <tr>
                    <td>CLASS 10TH MARKS</td>
                    <td><input type="text" name="10thmarks" value="<?php echo $rws['13']?>" readonly /></td>
                </tr>
                <tr>
                    <td>CLASS 12TH MARKS</td>
                    <td><input type="text" name="12thmarks" value="<?php echo $rws['14']?>" readonly /></td>
                </tr>
                <tr>
                    <td>COLLEGE NAME</td>
                    <td><input type="text" name="college" value="<?php echo $rws['15']?>" readonly /></td>
                </tr>
                <tr>
                    <td>CURRENT SEMESTER </td>
                    <td><input type="text" name="currentsem" value="<?php echo $rws['16']?>" readonly/></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo $userID; ?>" />
            </table>
            
            </div>
         <div class="footer">
        <ul id="footer_menu">
         <li><a href="datadisplaybyid.php">BACK</a></li>
 <li><a href="adminprofile.php">GO TO ADMIN PANNEL</a></li>
 <li><a href="seats_mod.php">ADD/REMOVE SEATS</a></li>
 <li><a href="course_mod.php">ADD/SUSPEND COURSE</a></li>
 <li><a href="coursedisplay.php">VIEW STUDENT DETAILS BY COURSE</a></li>
  <li><a href="viewalldata.php">VIEW ALL STUDENT</a></li>
  <li><a href="searchbyname.php">SEARCH BY NAME</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
 </ul>
        </div> 
    </body>
</html>
<?php
        }
    }
    else
    {
        header('Location:datadisplaybyid.php');
    }
        
?>