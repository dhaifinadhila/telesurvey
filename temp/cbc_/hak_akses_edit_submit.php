<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_hak_akses.php");

$VAR_ID_HAK_AKSES=$_GET['id'];
$VAR_KODE_HAK_AKSES=$_POST['KODE_HAK_AKSES'];
$VAR_KETERANGAN=$_POST['KETERANGAN'];

$return_edit_hak_akses = cbc_hak_akses_update(
		$VAR_ID_HAK_AKSES,
		$VAR_KODE_HAK_AKSES,
		$VAR_KETERANGAN
		);


if ($return_edit_hak_akses==1) {
	echo '<script language="javascript">alert("Data Hak Akses Berhasil diupdate")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Hak Akses Gagal diupdate")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} 
?>
