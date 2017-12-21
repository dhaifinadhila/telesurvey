<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_area.php");
 

$VAR_KODE_DISTRIBUSI=$_POST['VAR_KODE_DISTRIBUSI'];
$VAR_KODE_AREA		=$_POST['VAR_KODE_AREA'];
$VAR_NAMA_AREA		=$_POST['VAR_NAMA_AREA'];
$VAR_KETERANGAN		=$_POST['VAR_KETERANGAN'];
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';
$VAR_INFORMASI_06='6';
$VAR_INFORMASI_07='7';
$VAR_INFORMASI_08='8';
$VAR_INFORMASI_09='9';
$VAR_INFORMASI_10='10';


$return_insert = insert_area($VAR_KODE_DISTRIBUSI,$VAR_KODE_AREA,$VAR_NAMA_AREA,$VAR_KETERANGAN);
		
if ($return_insert==1) {
	echo '<script language="javascript">alert("Data Area Berhasil di Simpan !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Area Gagal di Simpan !")</script>';
	echo '<script language="javascript">window.location = "area_add.php"</script>';
} 

?>
