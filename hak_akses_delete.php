<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_hak_akses.php");

$id_tm_hak_akses = $_GET['id'];
$return_delete_news_big = delete_hak_akses($id_tm_hak_akses);
if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Hak Akses Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Hak Akses Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} 
?>
