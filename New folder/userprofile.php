<?php
    include 'inc/dbconn.php';
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        
        <form action="" method="POST">
            Choose a program to select<hr>
            <table>
                <tr>
                    <td>
                        <select name="course">
                            <option>--- Select a course ---</option>
                        <?php
                            include 'inc/dbconn.php';
                            $sql="SELECT courses,seats_left FROM student_course";
                            $result = mysql_query($sql) or die(mysql_error());
                            while($rws = mysql_fetch_array($result))
                            {
                                echo "<option>".$rws[0]."("."Seats available - ".$rws[1].")"."</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
            </table>
            <h3>Personal Details</h3>
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname"/></td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" name="mname"/></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname"/></td>
                </tr>
                <tr>
                    <td>Father's Name</td>
                    <td><input type="text" name="fathername"</td>
                </tr>
                <tr>
                    <td>Email Id</td>
                    <td><input type="email" name="email"/></td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="dob"/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Upload Photo</td>
                    <td><input type="file" name="mypic"></td>
                </tr>
                <tr>
                    <td>Mobile Phone</td>
                    <td><input type="text" name="mobile"></td>
                </tr>    
            </table>
            <h3>Academic Details</h3>
            <table>
                <tr>
                    <td>Class 10th Marks</td>
                    <td><input type="text" name="10thmarks" placeholder="marks in %"></td>
                </tr>
                <tr>
                    <td>Class 12th Marks</td>
                    <td><input type="text" name="12thmarks" placeholder="marks in %"></td>
                </tr>
                <tr>
                    <td>College Name</td>
                    <td><input type="text" name="college"></td>
                </tr>
                <tr>
                    <td>Current Semester</td>
                    <td>
                        <select name="curr_sem">
                            <option>--- Select ---</option>
                            <?php
                                for($i=1;$i<=8;$i++)
                                {
                                    if($_REQUEST['curr_sem']==$i)
                                        echo "<option selected> $i </option>";
                                    else
                                    {
                                        echo "<option> $i </option>";
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submitbtn" value="Update"</td>
                </tr>
            </table>
        </form>
    </body>
</html>