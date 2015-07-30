<?php
$host="localhost";
$username="root";
$password="";
$database="search_engine";
$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($database,$connect);
?>