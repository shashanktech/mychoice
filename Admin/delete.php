<?php
session_start();
include("config.php");
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
else{
  header("location:logout.php");
}
$sql="UPDATE `college_detail` SET `deleted`= 1, `deleted_by`='".$username."'  WHERE college_email='".$username."'";
$result=  mysql_query($sql) OR DIE(mysql_error());


session_destroy();
header("location:sign-in.php");
?>