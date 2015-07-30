<?
$stateName=$_GET['stateName'];
require_once('_db/db.php');
$sql_id="select stateID from states where stateName='".$stateName."'";
$result_id=mysql_query($sql_id);
$row_id=mysql_fetch_array($result_id);
$id=$row_id['stateID'];
$q=mysql_query("select * from cities where stateID='".$id."' ORDER BY cityName");
echo mysql_error();
$myarray=array();
$str="";
while($nt=mysql_fetch_array($q)){
$str=$str . "\"$nt[cityName]\"".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
echo "new Array($str)";

?>