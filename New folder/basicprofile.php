<?php
include 'inc/dbconn.php';
if(!isset($_SESSION['success']))
{    
    header('Location:homepage.php');
}
$userID=$_SESSION['user_id'];
$sql = "SELECT user_id,user_fname,user_lname,user_gender,user_email FROM student_reg WHERE user_id = '$userID'";
$result = mysql_query($sql);
 $rws = mysql_fetch_array($result);
 ?>
<html>
    <head>
    <title>BASIC PROFILE</title>
        <link rel= "stylesheet" type="text/css" href="contentpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="leftpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="rightpannel.css"/>
        <link rel= "stylesheet" type="text/css" href="header.css"/>
        <link rel= "stylesheet" type="text/css" href="footer.css"/> 
    </head>
    <body>
     <img src="background1.jpg" height="800" width="1500" class="fixed"/>
    <script type= "text/javascript">
    function myFunction() {
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
           
            document.getElementById("pass1").style.borderColor = "#E34234";
            document.getElementById("pass2").style.borderColor = "#E34234";
            alert("PASSWORD DOESN'T MATCH");
        }
        else {
            alert("please wait while password is being reset!");
        }
    }
    </script>
    <div class="header">
    
        <h1 class="waitingforconnection1">
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH PVT. LTD.</center></font>
        </h1></br>
        </div>
          <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>BASIC PROFILE</center></font></marquee>
        <div class="leftPannel" align="center">
            <img src="New folder/basic.JPG" height="450" width="200"><br/><br/>
        </div>
        <div class="rightpannel">
            <img src="New folder/basic1.JPG" height="450" width="300"><br/><br/>
        </div>
        <div class="contentpannel" align="center">
            <table>
                <tr class="sizeb">
                    <td>FIRST NAME :</td>
                    <td> &nbsp &nbsp <input type="text" style="border-radius:7px; border:2px solid #9966CC;" value="&nbsp;&nbsp;<?php echo $rws['1'];?>" readonly></td>
                </tr></br>   
                <tr class="sizeb">
                    <td>LAST NAME :</td>
                    <td> &nbsp &nbsp <input type="text" style="border-radius:7px; border:2px solid #9966CC;" value="&nbsp;&nbsp;<?php echo $rws['2'];?>" readonly></td></br> </br> </br> </br>
                </tr></br>
                <tr class="sizeb">
                    <td>GENDER  &nbsp &nbsp &nbsp :</td>
                    <td> &nbsp &nbsp <input type="text" style="border-radius:7px; border:2px solid #9966CC;" value="&nbsp;&nbsp;<?php echo $rws['3'];?>" readonly></td>
                </tr></br>
                <tr class="sizeb">
                    <td>EMAIL-ID  &nbsp &nbsp :</td>
                    <td> &nbsp &nbsp <input type="text"  style="border-radius:7px; border:2px solid #9966CC;"value="&nbsp;&nbsp;<?php echo $rws['4'];?>" readonly></td>
                </tr>
            </table></br></br></br>
            <form action="changepwd.php" method="POST" onSubmit="myFunction()">
                <?php
                $userID=$_SESSION['user_id'];
                ?>
              <font color="red"><center>RESET YOUR PASSWORD!</center></font>
              <table>
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
              </table>
              <table align="center">
                <tr class="size">
                    <td align="right"><input type="submit" name="submit" value="Change Password" style="border-radius:10px; border:3px solid #9966CC;"/></td>
                </tr>
            </table>
          </form>
        </div>
          
          
         <div class="footer">
         <ul id="footer_menu">
            <li><a href="viewprofile.php">VIEW PROFILE</a></li>
            <li><a href="editprofile.php">EDIT PROFILE</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
         </ul>
      </div>
    </body>
</html>