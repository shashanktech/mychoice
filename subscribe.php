<?php
include("config.php");
if(isset($_REQUEST['email'])){
$email=$_REQUEST['email'];
$sql= "SELECT * from college_detail WHERE college_email='".$email."'";
$result = mysql_query($sql) OR die(mysql_error());
$count = mysql_num_rows($result);
if($count>0)
{
	echo "Success";
}
else
{
	echo "string";
}
}

if(isset($_REQUEST['reg_id_7'])){
	echo "yes";
}
?>
