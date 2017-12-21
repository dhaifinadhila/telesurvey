<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("function/function_distribusi.php");

$id_distribusi = $_GET['id'];
$return_delete_news_big = delete_distribusi($id_distribusi);

if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Distribusi Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Distribusi Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
}
?>
