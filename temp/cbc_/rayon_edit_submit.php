<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_RAYON.php");
 
$VAR_ID_RAYON=$_GET['id'];
$VAR_KODE_DISTRIBUSI=$_POST['VAR_KODE_DISTRIBUSI'];
$VAR_KODE_UNIT=$_POST['VAR_KODE_UNIT'];
$VAR_KODE_RAYON=$_POST['VAR_KODE_RAYON'];
$VAR_NAMA_RAYON=$_POST['VAR_NAMA_RAYON'];
$VAR_ALAMAT=$_POST['VAR_ALAMAT'];
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

 

$return_rayon_edit = cbc_rayon_update(
		$VAR_ID_RAYON,
		$VAR_KODE_DISTRIBUSI,
		$VAR_KODE_UNIT,
		$VAR_KODE_RAYON,
		$VAR_NAMA_RAYON,
		$VAR_ALAMAT
		);

		

 
if ($return_rayon_edit==1) {
	echo '<script language="javascript">alert("Data Rayon Berhasil di Update !")</script>';
	echo '<script language="javascript">window.location = "rayon.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Rayon Gagal di Update !")</script>';
	echo '<script language="javascript">window.location = "rayon.php"</script>';
} 

?>
