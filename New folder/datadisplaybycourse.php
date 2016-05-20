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
    <div class="contentpanneladmin2">
        <form action="" method="POST">
            
            
            <?php
                if(isset($_REQUEST['selectcourse']))
                {
                    echo "<table border='2' bordercolor='#660000'>";
                echo "<th>Sl No.</th>";
            echo "<th>Course</th>";
            echo "<th>First Name</th>";
            echo "<th>Middle Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Father's Name</th>";
            echo "<th>Gender</th>";
            echo "<th>Email Id</th>";
            echo "<th>DOB</th>";
            echo "<th>Address</th>";
            echo "<th>Profile Pic</th>";
            echo "<th>Academic Details</th>";
            $slno=1;
            $course = $_REQUEST['course'];
            $sql="SELECT * FROM student_reg WHERE user_course LIKE '%$course'";
            $result=mysql_query($sql) or die(mysql_error());
            while($rws = mysql_fetch_array($result))
                {
            ?>
            
                <tr>
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
                    <td><?php echo "<img src='$rws[11]' height='100' width='100'/>";?></td>
                    <td><a href="moredetails.php?id=<?php echo $rws['0'];?>" />More Details</a></td>
                </tr>
                <?php 
                    $slno++;
                    } 
                }
                ?>
                <tr>
                    <td><input type="hidden" name="course" value="<?php echo $course; ?>"</td>
                </tr>
            </table>
            
           
        </form>
         </div>
         <div class="footer">
        <ul id="footer_menu">
            <li><a href="coursedisplay.php">BACK</a></li>  
            <li><a href="adminprofile.php">GO TO ADMIN PANNEL</a></li>
            <li><a href="course_mod.php">ADD/SUSPEND COURSE</a></li>
            <li><a href="datadisplaybyid.php">VIEW STUDENT DETAILS BY ID</a></li>
            <li><a href="viewalldata.php">VIEW ALL STUDENT </a></li>
            <li><a href="searchbyname.php">SEARCH STUDENT BY NAME</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
 </ul>
        </div>
    </body>
</html>