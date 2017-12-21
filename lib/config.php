<?php
//error_reporting(0);	
	$mysql_host			= "localhost";
	$mysql_user			= "root";
	$mysql_password		= "adadech";
	$mysql_database		= "telesurvey";

	$conn = mysql_connect($mysql_host,$mysql_user,$mysql_password);
	mysql_select_db($mysql_database);
	error_reporting(0);
?>