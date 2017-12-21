<?php

//error_reporting(0); 



$docRoot = $_SERVER['DOCUMENT_ROOT'];

/* ### Active Directory Address and usn/pwd ### */
$ad_server = "10.34.1.20"; //"nttdc01.pusat.corp.pln.co.id";
$ad_dn	= 'DC=pusat,DC=corp,DC=pln,DC=co,DC=id'; 			   // Domain DN
$ad_usn_postfix	= '@pusat.corp.pln.co.id';		   // username with read access


/* Untuk Data Server Email */
$mail_active = true; //Aktifkan pengiriman email notifikasi : true/false
$mail_host = "10.34.1.40"; //"nttmail01.pusat.corp.pln.co.id";
$mail_port = 25;
$mail_usn = "cbc.ntt";
$mail_pwd = "P@ssw0rd";
$mail_addr = "cbc@pln.co.id";



include_once 'function.php';

?>