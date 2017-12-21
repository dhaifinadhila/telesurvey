<?
	/* File Konfigurasi Database Mysql */
	$mysql_host			= "localhost";
	$mysql_user			= "root";
	$mysql_password			= "90210";
	$mysql_database			= "mpayment";

	mysql_connect($mysql_host,$mysql_user,$mysql_password);
	mysql_select_db($mysql_database);
	error_reporting(0);
?>
