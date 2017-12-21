<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_pengguna.php");

$VAR_ID_PENGGUNA 	= $_GET['id'];
$VAR_PASSWORD		=$_POST['VAR_PASSWORD'];
$VAR_PASSWORD_BARU	=$_POST['VAR_PASSWORD_BARU'];
$VAR_PASSWORD_ULANG	=$_POST['VAR_PASSWORD_ULANG'];

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

$pengguna 		= search_by_id_pengguna($VAR_ID_PENGGUNA);
$PGN_PASSWORD	= $pengguna[0]['passwd'];


//CEK KEBENARAN DATA
if ($VAR_PASSWORD == "" or $VAR_PASSWORD_BARU == "" or $VAR_PASSWORD_ULANG == "")
{
	echo '<script language="javascript">alert("Password pengguna Gagal diupdate, data password masih ada yang kosong")</script>';
	echo '<script language="javascript">window.location = "ganti_password.php"</script>';
	exit;
}
if ($PGN_PASSWORD <> $VAR_PASSWORD)
{
	echo '<script language="javascript">alert("Password pengguna Gagal diupdate, password lama tidak cocok '.$PGN_PASSWORD.'-'.$VAR_PASSWORD.'")</script>';
	echo '<script language="javascript">window.location = "ganti_password.php"</script>';
	exit;
}
if ($VAR_PASSWORD_BARU <> $VAR_PASSWORD_ULANG)
{
	echo '<script language="javascript">alert("Password pengguna Gagal diupdate, password baru dan password baru ulang tidak sama")</script>';
	echo '<script language="javascript">window.location = "ganti_password.php"</script>';
	exit;
}


//DEMO INSERT
$return_add_pengguna = update_password($VAR_ID_PENGGUNA,$VAR_PASSWORD_BARU);


if ($return_add_pengguna==1) {
	echo '<script language="javascript">alert("Password Pengguna Berhasil diupdate")</script>';
	echo '<script language="javascript">window.location = "home.php"</script>';
} else {
	echo '<script language="javascript">alert("Password pengguna Gagal diupdate")</script>';
	echo '<script language="javascript">window.location = "ganti_password.php"</script>';
} 
?>
