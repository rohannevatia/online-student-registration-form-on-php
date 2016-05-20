<html>
    <head>
        <link rel="stylesheet" type="text/css" href="rightpannel.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <link rel="stylesheet" type="text/css" href="leftpannel.css">
         <link rel="stylesheet" type="text/css" href="contentpannel.css">
        
    </head>
    <body>
    <img src="background1.jpg" height="800" width="1500" class="fixed"/>
          <div class="header">
    
        <h1 class="waitingforconnection1">
           <font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH  PVT. LTD.</center></font>
        </h1></br>
        </div>
          <marquee class="waitingforconnection2" scrollamount="8" behavior="slide" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#000000"><center><br/>RESET PASSWORD</center></font></marquee>
        
        <div class="contentpannelf" align="center">
         
        <form action="updatepwd.php" method="POST">
            <table align="center"></br></br></br>
                <tr>
                    <td class="size">ENTER EMAIL@ID:</td>
                    <td><input type="email" name="email" style="border-radius:7px; border:2px solid #9966CC;" required/></td>
                </tr></br></br>
                <tr>
                    <td class="size">ENTER MOBILE NUMBER:</td>
                    <td><input type="text" name="mobile" style="border-radius:7px; border:2px solid #9966CC;" required/></td>
                </tr>
                <tr>
                    &nbsp;<td class="size">SELECT SECURITY QUESTION:</td>
                    <td><select name="securityques" style="border-radius:7px; border:2px solid #9966CC;">
                        <option>--- Select ---</option>
                        <option value="1">Enter your first School Name</option>
                        <option value="2">Enter your favourite food</option>
                        <option value="3">Enter your mother's maiden name</option>
                        <option value="4">Enter your favourite actor</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="size">ENTER ANSWER: </td>
                    <td><input type="text" name="securityans" style="border-radius:7px; border:2px solid #9966CC;" required/></td>
                </tr></br></br>
                </table>
                <table align="center">
                <tr>
                    <td><input type="submit" name="updatepwd" value="Submit" style="border-radius:7px; border:3px solid #9966CC;"/></td>
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