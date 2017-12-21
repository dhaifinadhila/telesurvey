<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_area.php");

$id_area = $_GET['id'];
$return_delete_news_big = delete_area($id_area);

if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Area Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Area Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} 
?>
