<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_upload.php");

$id_file_upload = $_GET['id'];
$return_delete_news_big = delete_by_id($id_file_upload);

if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data File Excel Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "upload.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Excel Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "upload.php"</script>';
} 
?>
