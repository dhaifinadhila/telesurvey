<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
if($_SESSION['hak_akses']<>"400") {	
    echo '<script language="javascript">alert("MESSAGE : Cannot access this page.")</script>';
	echo '<script language="javascript">window.location = "home.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_master_call.php");

$return_delete_news_big = delete_master_call($id_cbc_DISTRIBUSI);
if ($return_delete_news_big==1) {
	echo 'Data Belum Callback Berhasil di Hapus !';
} else {
	echo 'Data Belum Callback Gagal di Hapus !';
} 
?>
