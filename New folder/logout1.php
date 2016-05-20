<?php
include 'inc/dbconn.php';
$expireTime=time()-60;
session_destroy();
setcookie('uname','',$expireTime);
setcookie('pwd','',time()-60);
header('Location:homepage.php');
?>