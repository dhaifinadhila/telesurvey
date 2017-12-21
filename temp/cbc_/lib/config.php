<?php

	//echo phpinfo();
	error_reporting(0);	
	$username	= "callback";
	$password	= "callback@ntt";	
	$service	= "AMG"; 
	$connection	= oci_connect($username,$password,$service);	
	$key		= "creator=kustan@pln.co.id#phone=081320077300";

?>