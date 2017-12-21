<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_DISTRIBUSI.php");


$VAR_ID_DISTRIBUSI=NULL;
$VAR_KODE_DISTRIBUSI=$_POST['KODE_DISTRIBUSI'];
$VAR_NAMA_DISTRIBUSI=$_POST['NAMA_DISTRIBUSI'];
$VAR_ALAMAT=$_POST['ALAMAT'];
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



$return_delete_news_big = cbc_DISTRIBUSI_insert(
		$VAR_ID_DISTRIBUSI,
		$VAR_KODE_DISTRIBUSI,
		$VAR_NAMA_DISTRIBUSI,
		$VAR_ALAMAT,
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05,
		$VAR_INFORMASI_06,
		$VAR_INFORMASI_07,
		$VAR_INFORMASI_08,
		$VAR_INFORMASI_09,
		$VAR_INFORMASI_10
		);


if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data Distribusi Berhasil di Simpan")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Distribusi Gagal di Simpan")</script>';
	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} 
?>
