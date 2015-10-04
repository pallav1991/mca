<?php
	$conn =@mysql_connect('localhost','root','')or die("Couldn't connect to server");
	$dbc =mysql_select_db("MCA_DB",$conn);
?>