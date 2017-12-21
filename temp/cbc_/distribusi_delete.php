<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_DISTRIBUSI.php");

$id_cbc_DISTRIBUSI = $_GET['id'];
$return_delete_news_big = cbc_DISTRIBUSI_delete($id_cbc_DISTRIBUSI);
if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Distribusi Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Distribusi Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} 
?>
