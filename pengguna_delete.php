<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_tm_pengguna.php");

$id_tm_pengguna = $_GET['id'];

$return_delete_news_big = tm_pengguna_delete($id_tm_pengguna);

if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Pengguna Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Pengguna Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} 
?>
