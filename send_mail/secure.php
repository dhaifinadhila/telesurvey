<?php
	$u = $_COOKIE['usn'];
	$confirm = $_COOKIE['userConfirm'];
	
	if (empty($u) || empty($confirm)) { header("Location: $hh/login.php"); }
?>	