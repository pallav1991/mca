<?php
	$conn =@mysql_connect('localhost','root','root')or die("Couldn't connect to server");
	$db =mysql_select_db("mca",$conn);
?>