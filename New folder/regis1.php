
<html>
    <head>
        <title> LOGIN PAGE
        </title>
        <link rel= "stylesheet" type="text/css" href="contentpannel1.css"/>
        <link rel= "stylesheet" type="text/css" href="leftpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="header.css"/>
        <link rel= "stylesheet" type="text/css" href="footer.css"/>
    </head>
    <body>
    <img src="background1.jpg" height="800" width="1500" class="fixed"/>
        <script type= "text/javascript">
    function newuser(){    
    alert("WELCOME NEW USER");
    }
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
           
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
            alert("PASSWORD DOESN'T MATCH");
        }
        else {
            alert("please wait while account is being created!");
        }
    }
    
    </script>
    <div class="header">
    
        <h1 class="waitingforconnection1">
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH PVT. LTD.</center></font>
        </h1></br>
        </div>
        <div class="leftpannel1">
            <img src="New folder/sign2.JPG" height="500" width="200"><br/><br/>
        </div>
        <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();">
        <font size="6" color="#000000"><center><br/>ONLINE STUDENT REGISTRATION FORM</center></font></marquee>
    
        <div class="contentpannel">
        <form action="insertdata.php" method="POST" name="user" onSubmit="myFunction()"/>
            <br/><br/><br/>
            <table align="center">
                <tr class="size">
                    <td>FIRST NAME<font color="red">*</font> : </td>
                    <td><input type="text" name="fname" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>"  
                               <?php if(isset($_POST['submit']) && !$_POST['fname']) echo "class='txtbx'"; ?>required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>MIDDLE NAME : </td>
                    <td><input type="text" name="mname" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name" style="border-radius:7px; border:2px solid #9966CC;" 
                               value="<?php if(isset($_POST['mname'])) echo $_POST['mname'];?>"/>
                    </td>
                </tr>
                <tr class="size">
                    <td>LAST NAME<font color="red">*</font> : </td>
                    <td><input type="text" name="lname" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name" 
                               style="border-radius:7px; border:2px solid #9966CC;" 
                               value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];?>" 
                               <?php if(isset($_POST['submit']) && !$_POST['lname']) echo "class='txtbx'"; ?>required/>
                    </td>
                </tr>  
                <tr class="size">
                    <td>Choose a program to select<font color="red">*</font> : </td>
                    <td><select name="course" style="border-radius:7px; border:2px solid #9966CC;" required />
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- Select a course ---</option>
                            <?php
                                include 'inc/dbconn.php';
                                $sql="SELECT courses,seats_left,course_status FROM student_course";
                                $result = mysql_query($sql) or die(mysql_error());
                                while($rws = mysql_fetch_array($result))
                                {
                                    if($rws[2] == 1 && $rws[1] > 0)
                                        echo "<option value='$rws[0]'>".$rws[0]."(Seats available - ".$rws[1].")"."</option>";      
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr class="size">
                    <td>FATHER'S NAME<font color="red">*</font> : </td>
                    <td><input type="text" name="fathername" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Father's Name" 
                               style="border-radius:7px; border:2px solid #9966CC;" 
                               value="<?php if(isset($_POST['fathername'])) echo $_POST['fathername'];?>" 
                        <?php if(isset($_POST['submit']) && !$_POST['fathername']) echo "class='txtbx'"; ?>required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>GENDER<font color="red">*</font> : </td>
                    <td> <font color="yellow"/>MALE</font> <input type="radio" name="gender" value="Male" required/>&nbsp &nbsp 
                         <font color="red"/>FEMALE</font> <input type="radio" name="gender" value="Female" required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>EMAIL - ID<font color="red">*</font> : </td>
                    <td><input type="email" name="eml" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email@id"
                               style="border-radius:7px; border:2px solid #9966CC;" 
                               value="<?php if(isset($_POST['eml'])) echo $_POST['eml'];?>" required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>DATE OF BIRTH<font color="red">*</font> : </td>
                    <td>
                        <input type="date" name="dob" style="border-radius:7px; border:2px solid #9966CC;" required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>PASSWORD<font color="red">*</font> : </td>
                    <td><input id="pass1" type="password" name="pwd" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password" 
                               style="border-radius:7px; border:2px solid #9966CC;" required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>CONFIRM PASSWORD<font color="red">*</font> : </td>
                    <td><input id="pass2" type="password" name="cpwd" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re-Enter Password" 
                               style="border-radius:7px; border:2px solid #9966CC;" required/>
                    </td>
                </tr>
                <tr class="size">
                    <td>SELECT SECURITY QUESTION : </td>
                    <td><select name="securityques" style="border-radius:7px; border:2px solid #9966CC;">
                        <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----- Select -----</option>
                        <option value="1">Enter your first School Name</option>
                        <option value="2">Enter your favourite food</option>
                        <option value="3">Enter your mother's maiden name</option>
                        <option value="4">Enter your favourite actor</option>
                    </select>
                    </td>
                </tr>
                <tr class="size">
                    <td>ENTER ANSWER<font color="red">*</font> : </td>
                    <td><input type="text" name="securityans" style="border-radius:7px; border:2px solid #9966CC;"/></td>
                </tr>
            </table> 
            <table align="center">
                <tr class="size">
                    <td align="right"><input type="submit" name="submit" value="REGISTER" style="border-radius:10px; border:3px solid #9966CC;"/></td>
                </tr>
            </table>
        </form>
        </div>
        <div class="footer">
             <ul id="footer_menu">

 <li><a href="homepage.php">HOME</a></li>
 
 </u>
        </div>
    </body>
</html>