<?php 
//logout Page
session_start();
session_destroy();
header("location:sign-in.php");
?>