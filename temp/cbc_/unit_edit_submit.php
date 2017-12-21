<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_UNIT.php");

$VAR_ID_UNIT = $_GET['id'];
$VAR_KODE_DISTRIBUSI = $_POST['VAR_KODE_DISTRIBUSI'];
$VAR_KODE_UNIT = $_POST['VAR_KODE_UNIT'];
$VAR_NAMA_UNIT = $_POST['VAR_NAMA_UNIT'];
$VAR_ALAMAT = $_POST['VAR_ALAMAT'];
$return_delete_news_big = cbc_UNIT_update($VAR_ID_UNIT,$VAR_KODE_DISTRIBUSI,$VAR_KODE_UNIT,$VAR_NAMA_UNIT,$VAR_ALAMAT);
 
if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Unit Berhasil di Update !")</script>';
	echo '<script language="javascript">window.location = "unit.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Unit Gagal di Update !")</script>';
	echo '<script language="javascript">window.location = "unit.php"</script>';
} 

?>
