<meta charset="utf-8">
<style type="text/css">
#container{
	width: 950px;
	height: 100%;
	margin: 100px auto;
}
</style>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<div id="container">
<table class="table">
<tr><td>id</td>
	<td>email</td>
	<td>name</td>
    <td>content</td>
    <td>date</td>
    <td>操作</td>
</tr>
<?php 
while($array = mysql_fetch_array($res)){
	?>
<tr>
<td><?php echo $array[0];?></td>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td><?php echo $array[4];?></td>
<td><a href="message_del.php?id=<?php echo $array[0];?>">删除</a></td>
</tr>	
<?php
}
?>
</table>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>