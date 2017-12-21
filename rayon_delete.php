<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_tm_RAYON.php");

$id_tm_RAYON = $_GET['id'];
$return_delete_news_big = tm_rayon_delete($id_tm_RAYON);

if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Rayon Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "rayon.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Rayon Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "rayon.php"</script>';
} 
?>
