<?php 
 
session_start();
session_destroy();
$_SESSION['status_login']==false;
header("Location: login.php");
 
?>