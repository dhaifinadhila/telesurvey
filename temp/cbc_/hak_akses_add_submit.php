<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_hak_akses.php");


$VAR_ID_HAK_AKSES=NULL;
$VAR_KODE_HAK_AKSES=$_POST['KODE_HAK_AKSES'];
$VAR_KETERANGAN=$_POST['KETERANGAN'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';

$return_add_hak_akses = cbc_hak_akses_insert(
		$VAR_ID_HAK_AKSES,
		$VAR_KODE_HAK_AKSES,
		$VAR_KETERANGAN,
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05
		);


if ($return_add_hak_akses==1) {
	echo '<script language="javascript">alert("Data Hak Akses Berhasil di Simpan")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Hak Akses Gagal di Simpan")</script>';
	echo '<script language="javascript">window.location = "hak_akses.php"</script>';
} 
?>
