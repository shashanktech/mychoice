<?php 
include("config.php");
$course = $_REQUEST['Coursecategory'];
$sql_select = "SELECT * FROM  college_course_selection WHERE course_category LIKE '%".$course."%'";
$result_select = mysql_query($sql_select) OR die(mysql_error());
//$row_select = mysql_fetch_array($result_select);
//$myarray=array();
$str="";
while($nt=mysql_fetch_array($result_select)){
$str=$str . "\"$nt[course_name]\"".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
echo "new Array($str)"."#";
//echo $sql_select;
?>