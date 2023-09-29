<?php
	$sql_sever = "localhost";
	$sql_user = "goldvnet_web";
	$sql_pass = "kent123";
	$sql_database = "goldvnet_web";
	$conn = mysql_connect($sql_sever,$sql_user,$sql_pass);
	if(!$conn)
	{
		echo "Không thể kết nối với MySQL ".mysql_error();
		exit();
	}
	mysql_select_db($sql_database);
	mysql_query("set names utf8");
	// session start
	ob_start();
	session_start();

?>
