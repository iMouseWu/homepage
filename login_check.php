<?php
$username = $_POST["username"];
$password = $_POST["password"];
$con = mysql_connect("localhost","root","");
mysql_select_db("test",$con);
$sql = "select * from db_admin where username='$username' and password='$password'";
$res = mysql_query($sql);
$res_array = mysql_fetch_array($res);
if($res_array){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	echo "<script language=javascript>window.location.href = 'manage_message.php';</script>";
}else{
	echo "<script language=javascript>window.location.href = 'message_login.php';</script>";
}
?>