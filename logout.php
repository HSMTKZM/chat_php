<?php
session_start();

ini_set("display_errors","1");
$_SESSION = [];

if(ini_get("session.use_cookies")){
    setcookie(session_name(),'',time()-4200);
}
session_destroy();
header('location:login.php');
exit();
?>