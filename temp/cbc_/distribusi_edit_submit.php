<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_DISTRIBUSI.php");

$VAR_ID_DISTRIBUSI = $_GET['id'];
$VAR_KODE_DISTRIBUSI = $_POST['KODE_DISTRIBUSI'];
$VAR_NAMA_DISTRIBUSI = $_POST['NAMA_DISTRIBUSI'];
$VAR_ALAMAT = $_POST['ALAMAT'];

//$return_delete_news_big = cbc_DISTRIBUSI_delete($id_cbc_DISTRIBUSI);
$return_delete_news_big = cbc_DISTRIBUSI_update($VAR_ID_DISTRIBUSI,$VAR_KODE_DISTRIBUSI,$VAR_NAMA_DISTRIBUSI,$VAR_ALAMAT);

if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Distribusi Berhasil di Update !")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Distribusi Gagal di Update !")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} 
?>
