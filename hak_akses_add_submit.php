<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_hak_akses.php");



$VAR_KODE_HAK_AKSES	=$_POST['KODE_HAK_AKSES'];
$VAR_KETERANGAN		=$_POST['KETERANGAN'];


$return_add_hak_akses = insert_hak_akses($VAR_KODE_HAK_AKSES,$VAR_KETERANGAN);


if ($return_add_hak_akses==1) {
	echo '<script language="javascript">alert("Data Hak Akses Berhasil di Simpan")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Hak Akses Gagal di Simpan")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} 
?>
