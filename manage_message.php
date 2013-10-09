
<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
	$con = mysql_connect("localhost","root","");
$db_selected = mysql_select_db("test", $con);
mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=utf8", $con);
$sql = "select * from db_message";
$res = mysql_query($sql);
include 'viewmessage.php';
}else{
	echo "<script language=javascript>window.location.href = 'message_login.php';</script>";

}
?>

