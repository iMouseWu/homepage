<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
	$id = $_GET["id"];
$con = mysql_connect("localhost","root","");
$db_selected = mysql_select_db("test", $con);
$sql = "delete from db_message where id = '$id'";
mysql_query($sql);
echo "<script language=javascript>window.location.href = 'manage_message.php';</script>";
	
}else{
	echo "<script language=javascript>window.location.href = 'message_login.php';</script>";

}
?>