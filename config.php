<?php
	$con = mysql_connect('localhost','root','');
	if(!$con) {
		die('Could not connect to the server!'. mysql_error());
	}
	mysql_select_db('dbplastic',$con) or die(mysql_error());
?>
