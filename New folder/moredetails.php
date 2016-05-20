<?php
    include 'inc/dbconn.php';
    if(!isset($_SESSION['success']))
    {    
        header('Location:adminlogin.php');
    }
    $userID = $_REQUEST['id'];
    $slno = 1;
    $sql="SELECT * FROM student_reg WHERE user_id='$userID'";
    $result=mysql_query($sql);
    while($rws=mysql_fetch_array($result))
    {
?>  
<html>
    <head>
        <title> More User Details</title>
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
            <table border="1" bordercolor="#FF0000">
                <th>Sl No.</th>
                <th>Mobile No.</th>
                <th>10th marks</th>
                <th>12th marks</th>
                <th>College name</th>
                <th>Current Sem</th>
                <tr>
                    <td><?php echo $slno;?></td>
                    <td><?php echo $rws['12'];?></td>
                    <td><?php echo $rws['13'];?></td>
                    <td><?php echo $rws['14'];?></td>
                    <td><?php echo $rws['15'];?></td>
                    <td><?php echo $rws['16'];?></td>
                </tr>
            </table>
    <?php
        $slno++;
        } 
    ?>
       
        </form>
         </div>
         <div class="footer">
        <ul id="footer_menu">
            <li><a href="coursedisplay.php">BACK</a></li>
            <li><a href="adminprofile.php">GO TO ADMIN PANEL</a></li>
            <li><a href="course_mod.php">ADD/SUSPEND COURSE</a></li>
            <li><a href="datadisplaybyid.php">VIEW STUDENT DETAILS BY ID</a></li>
            <li><a href="viewalldata.php">VIEW ALL STUDENT</a></li>
            <li><a href="searchbyname.php">SEARCH STUDENT BY NAME</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
       </ul>
        </div>
    </body>
</html>