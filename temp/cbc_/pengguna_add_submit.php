<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_pengguna.php");


$VAR_KODE_DISTRIBUSI=$_POST['VAR_KODE_DISTRIBUSI'];
$VAR_KODE_UNIT=$_POST['VAR_KODE_UNIT'];
$VAR_KODE_RAYON=$_POST['VAR_KODE_RAYON'];
$VAR_NIP=$_POST['VAR_NIP'];
$VAR_EMAIL=$_POST['VAR_EMAIL'];
$VAR_PASSWORD=$_POST['VAR_PASSWORD'];
$VAR_NAMA=$_POST['VAR_NAMA'];
$VAR_JABATAN=$_POST['VAR_JABATAN'];
$VAR_HAK_AKSES=$_POST['VAR_HAK_AKSES'];
$VAR_TARGET_CALL=$_POST['VAR_TARGET_CALL'];

$VAR_INFORMASI_01='01';
$VAR_INFORMASI_02='02';
$VAR_INFORMASI_03='03';
$VAR_INFORMASI_04='04';
$VAR_INFORMASI_05='05';
$VAR_INFORMASI_06='06';
$VAR_INFORMASI_07='07';
$VAR_INFORMASI_08='08';
$VAR_INFORMASI_09='09';
$VAR_INFORMASI_10='10';


//DEMO INSERT
$return_add_pengguna = cbc_pengguna_insert($VAR_KODE_DISTRIBUSI, $VAR_KODE_UNIT, $VAR_KODE_RAYON, $VAR_NIP, $VAR_EMAIL, $VAR_PASSWORD, $VAR_NAMA, $VAR_JABATAN, $VAR_HAK_AKSES, $VAR_TARGET_CALL, $VAR_INFORMASI_01, $VAR_INFORMASI_02, $VAR_INFORMASI_03, $VAR_INFORMASI_04, $VAR_INFORMASI_05, $VAR_INFORMASI_06, $VAR_INFORMASI_07, $VAR_INFORMASI_08, $VAR_INFORMASI_09, $VAR_INFORMASI_10);


if ($return_add_pengguna==1) {
	echo '<script language="javascript">alert("Data Pengguna Berhasil di Simpan")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} else {
	echo '<script language="javascript">alert("Data pengguna Gagal di Simpan")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} 
?>
