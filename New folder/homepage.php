<?php
    if(isset($_COOKIE['uname']) && isset($_COOKIE['pwd']))
        header('Location:login.php');
?>
<html>
    <head>
        <title>HOME PAGE</title>
        <link rel="stylesheet" type="text/css" href="rightpannel.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <link rel="stylesheet" type="text/css" href="leftpannel.css">
         <link rel="stylesheet" type="text/css" href="contentpannel.css">
        
        
    </head>
    <body>
    <img src="bible.jpg" height="800" width="1500" class="fixed"/>
        <div class ="wrapper"><!-- wrapper start -->
        <div></div>
            <div class="header">
            
            <!-- header start -->
                <marquee class="waitingforconnection" scrollamount="8" behavior="alternate" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="6" color="#9966CC"><center><br/><img src="logo1.jpg" width="30" height="30"/>WEBTECH PVT. LTD.</center></font></marquee>
                
                  
            </div>
           <!-- Header end -->
           <div class="header">
           <marquee class="p1" scrollamount="10" onMouseOver="this.stop();" onMouseOut="this.start();">
           <img src="New folder/font1.jpg" height="100" width="150">
           <img src="New folder/font2.jpg" height="100" width="150">
           <img src="New folder/font3.jpg" height="100" width="150">
           <img src="New folder/font4.jpg" height="100" width="150">
           <img src="New folder/font5.jpg" height="100" width="150">
           <img src="New folder/font6.jpg" height="100" width="150">
           <img src="New folder/font7.jpg" height="100" width="150">
           <img src="New folder/font8.jpg" height="100" width="150">
           <img src="New folder/font10.jpg" height="100" width="150">
           <img src="New folder/font11.jpg" height="100" width="150">
        
           </marquee>
           </div>
            <div class="leftpannel" align="center"><!-- left panel start -->
               <table>
               <tr>
               <td></td>
               <td>
               <li type="none">
               <ul class="a"><br/><br/><a href="aboutus.php" style="color:#96F">ABOUT US</a></ul>
               <ul class="a"><a href="infra.php" style="color:#96F">INFRASTRUCTURE</a></ul>
               <ul class="a"><a href="gallery.php" style="color:#96F">GALLERY</a></ul>
               <ul class="a"><a href="placement.php" style="color:#96F">PLACEMENT RECORD</a></ul>
               <ul class="a"><a href="contact.php" style="color:#96F">CONTACT US</a></ul>
               </li>
               </td>
               </tr>
               </table>
               <table>
                    <tr></br>
                        <td><font size="2" color="pink"/><center>WHY EVERY CHILD MUST<br/> LEARN TO CODE!</center></font>
                       <video width="200" height="150" controls>
                           <source src="vid.mp4" type="video/mp4">
                       </video>
                       
                   </td>
                    </tr>
                </table>
            </div><!-- Left panel end -->
            <div class="contentpannel"><!-- Content start -->
                <tr>
                    <td><strong></br><font color="yellow" face="monotype corsiva" size="6" /><center>WEBTECH PVT. LTD.</center></font></strong></td>
                </tr>
                <tr>
                    <td>
                        <font color="white" size="3"><p>WEBTECH PVT. LTD. is a Company successfully providing its services currently in India. 
                        The core line of activity at WEBTECH PVT. LTD. is to develop customized application software covering the entire 
                        responsibility of performing the initial system study, design, development, implementation and training. 
                        It also deals with consultancy services and Electronic Security systems. Its primary clientele includes educational
                        institutes, entertainment industries, resorts, theme parks, service industry, telecom operators, media and other 
                        business houses working in various capacities.</p>
                        
                        <p>ARDENT COLLABORATIONS, the Research Training and Development Department of WEBTECH PVT. LTD. is a professional
                        training Company offering IT enabled services & industrial training for B-Tech, MCA, BCA, MSc and MBA fresher's and 
                        experienced developers/programmers in various platforms. Summer Training / Winter Training / Industrial training will 
                        be provided for the students of B.TECH ,M.TECH, MBA and MCA only. Deserving candidates may be awarded stipends, 
                        scholarships and other benefits, depending on their performance and recommendations of the mentors.</p></font>
                    </td>
                </tr>
            </div>
            <div class ="rightPannel" align="center"><!-- Right Panel start -->
                <form action="login.php" method="POST">
                    <table align="left" height="100" width="100">
                        <tr class="size"></br>
                            <td>USERNAME:</td>
                            <td><input type="text" name="uname" required placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email Id" autocomplete="on" style="border-radius:7px; border:2px solid #9966CC;"/></td>
                        </tr>
                        <tr>
                            <td class="size">PASSWORD:</td>
                            <td><input type="password" name="pwd" required placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password" style="border-radius:7px; border:2px solid #9966CC;"/></td>
                        </tr>
                        <tr>
                            <td class="sizec">REMEMBER ME:</td>
                            <td><input type="checkbox" name="remb" value="1" style="border-radius:24px; border:1px solid #33ff00;"></td>
                        </tr>
                        </table>
                        <table align="left" height="10" width="10">	
                        <tr>
                            <td class="sizes"><input type="submit" name="LoginBtn" value="LOGIN" class="button"/></td>
                        </tr>
                    </table>
                </form>
                <table align="right" height="10 width="10">
                <tr>
                <form action="forgotpwd.php" method="POST">
                    <td class="sizes"><input type="submit" name="forgotpwd" value="Forgot Pwd" class="button"/>
                </form></td>
                <form action="regis1.php" method="POST">
                </tr>
                    </table>
                    <table align="center" height="10" width="10">
                        <tr>
                            <td class="sizes"><input type="submit" name="newuser_reg" value="SIGN-UP" class="button"/></td>
                        </tr>
                    </table>
                </form>
                
            </div><!-- Right Panel end --> 
            <div class="admin">
                <marquee   width="320" height="290" direction="up" scrollamount="5" onMouseOver="this.stop();" onMouseOut="this.start();"><font size="4"><center><br/> <font color="red"><u>NOTICE</u></font></br>
                        <font color="orange">
                        1)PLACEMENT DETAILS GOING TO BE UPDATED SOON...</br>
                        2)LAST DATE FOR SUBMITTING FEES IS 13/01/2015</br>
                        3)LAST DATE FOR COURSE SELECTION IS 13/01/2015</br>
                        4)CLASSES WILL START FROM 20/01/2015</br>
                        </font>
                    </center></font></marquee>
         </div>
            <div class ="footer" align="center">
            <ul id="footer_menu">
 <li class="right"><a href="adminlogin.php"><img src="admin.jpg" height="30" width="30"/></a>
 <li><a href="#">FOLLOW US</a>
 <ul class="dropup">
 <li><a href="href="https://www.facebook.com">FACEBOOK</a></li>
 <li><a href="href="https://www.twitter.com">TWITTER</a></li>
 <li><a href="href="https://www.gmail.com">GMAIL</a></li>
 </ul>
 <li><a href="href="https://www.facebook.com"><img src="facebooklogo.jpg" height="30" weight="45"/></a></li>
  <li><a href="href="https://www.twitter.com"><img src="twitterlogo.jpg" height="30" weight="45"/></a></li>
   <li><a href="href="https://www.gmail.com"><img src="googlelogo.jpg" height="30" weight="45"/></a></li>
      
 </li><br/>
 <font size="3" color="yellow">&copy; WEBTECH PVT. LTD.</font>
    <script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

     if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nyear<1000) nyear+=1900;
if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox" style="font:17pt Arial; color:black; font-weight:bold;" align="right" class="clock"></div>
 

 
 
  <!-- Footer start -->
                
            </div><!-- Footer end -->
        </div><!-- wrapper end -->
    </body>
</html>
