<?php 
session_start(); //to ensure you are using same session 
session_destroy(); //destroy the session 
header("location:/MINI PROJECT 3/Login_Page.html"); //to redirect back to "index.php" after logging out 
exit(); 
?>