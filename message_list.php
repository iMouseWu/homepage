
<?php
 $mail = $_POST["email"];
 $name = $_POST["name"];
 $conent = $_POST["content"];
 $date = date("Y-m-d");
 $con = mysql_connect("localhost","root","");
 $db_selected = mysql_select_db("test", $con);
 mysql_query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=utf8", $con);
 $sql = "insert into db_message(email,name,content,date) value('$mail','$name','$conent','$date')";
 mysql_query($sql);
?>