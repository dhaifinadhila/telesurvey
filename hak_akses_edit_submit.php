<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_hak_akses.php");

$VAR_ID_HAK_AKSES	= $_GET['id'];

$VAR_KODE_HAK_AKSES	= $_POST['KODE_HAK_AKSES'];
$VAR_KETERANGAN		= $_POST['KETERANGAN'];

$return_edit_hak_akses = update_hak_akses($VAR_ID_HAK_AKSES,$VAR_KODE_HAK_AKSES,$VAR_KETERANGAN);


if ($return_edit_hak_akses==1) {
	echo '<script language="javascript">alert("Data Hak Akses Berhasil Diubah")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Hak Akses Gagal Diubah")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} 
?>
