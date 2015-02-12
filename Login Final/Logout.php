<?php 
session_start();
$_SESSION = array();
session_destroy();
header("Location:http://web.engr.oregonstate.edu/~clarkant/Final/main_login.php");
?>
