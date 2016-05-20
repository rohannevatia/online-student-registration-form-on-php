<?php
    include 'inc/dbconn.php';
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method-="POST">
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><table align="center">
                <tr>
                    <td><h1>User Login</h1></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="userpwd"/></td>
                 </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="userlogin" value="Login"/></td>
                    </tr>
                </tr>
                </table>
        </form>
    </body>
</html>