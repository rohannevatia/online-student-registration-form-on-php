<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    if(isset($_REQUEST['search']))
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
    <div class="contentpanneladmin2">
        <form action="" method="POST">
        <table border="1" bordercolor="#663300">
                <tr>
                <th>Sl No.</th>
                <th>Course</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Father's Name</th>
                <th>Gender</th>
                <th>Email Id</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Mobile No.</th>
                <th>10th marks</th>
                <th>12th marks</th>
                <th>College name</th>
                <th>Current Sem</th>
                <th>Profile Pic</th>
                </tr>
                    <tr>
                        <?php
                    
                            $slno = 1;
                            $searchname = $_REQUEST['searchname'];
                            $sql="SELECT * FROM student_reg WHERE user_fname LIKE '%$searchname'";
                            $result = mysql_query($sql) or die('No Data Found');     
                            while($rws = mysql_fetch_array($result))
                            {
                                    
                        ?>
                            <?php $rws['0'];?>
                            <td><?php echo $slno;?></td>
                            <td><?php echo $rws['1'];?></td>
                            <td><?php echo $rws['2'];?></td>
                            <td><?php echo $rws['3'];?></td>
                            <td><?php echo $rws['4'];?></td>
                            <td><?php echo $rws['5'];?></td>
                            <td><?php echo $rws['6'];?></td>
                            <td><?php echo $rws['7'];?></td>
                            <?php  $rws['8'];?>
                            <td><?php echo $rws['9']; ?></td>
                            <td><?php echo $rws['10'];?></td>
                            <td><?php echo $rws['12'];?></td>
                            <td><?php echo $rws['13'];?></td>
                            <td><?php echo $rws['14'];?></td>
                            <td><?php echo $rws['15'];?></td>
                            <td><?php echo $rws['16'];?></td>
                            <td><?php echo "<img src='$rws[11]' height='50' width='70'/>";?></td>
                    </tr>
              
        </table>
       
        </form>
         </div>
         <div class="footer">
        <ul id="footer_menu">
            <li><a href="searchbyname.php">BACK</a></li>
            <li><a href="adminprofile.php">GO TO ADMIN PANEL</a></li>
            <li><a href="seats_mod.php">ADD/REMOVE SEATS</a></li>
            <li><a href="course_mod.php">ADD/SUSPEND COURSE</a></li>
            <li><a href="coursedisplay.php">VIEW STUDENT DETAILS BY COURSE</a></li>
            <li><a href="datadisplaybyid.php">VIEW STUDENT DETAILS BY ID</a></li>
            <li><a href="viewalldata.php">SEARCH STUDENT BY DATA</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
       </ul>
    </div>
    </body>
</html>
<?php
    $slno++;
    }
   }
 else
{
        header('Location:searchbyname.php');
}
?>