<?php
session_start();
$_SESSION=array();
unset($_SESSION["uname"]);
unset($_SESSION["id"]); 
unset($_SESSION["login"] );
//session_destroy();
header("location:client-login.php");
?>