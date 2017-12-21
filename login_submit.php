<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
include_once("lib/config.php");
include_once("function/engine.php");



$get_var_username = $_POST['var_email'];
$get_var_password = $_POST['var_password'];

$pengguna = login($get_var_username,$get_var_password);

//print_r($pengguna);

$VAR_ID_PENGGUNA	=$pengguna[0]['id_pengguna'];
$VAR_KODE_DISTRIBUSI=$pengguna[0]['kode_distribusi'];
$VAR_KODE_AREA		=$pengguna[0]['kode_area'];
//$VAR_KODE_RAYON		=$pengguna[0]['kode_rayon'];
$VAR_NIP			=$pengguna[0]['nip'];
$VAR_NAMA			=$pengguna[0]['nama'];
$VAR_EMAIL			=$pengguna[0]['email'];
$VAR_PASSWD			=$pengguna[0]['passwd'];
$VAR_JABATAN		=$pengguna[0]['jabatan'];
$VAR_HAK_AKSES		=$pengguna[0]['kode_hak_akses'];
$VAR_KETERANGAN		=$pengguna[0]['keterangan'];
 
  
if ($VAR_ID_PENGGUNA=="") {
    echo '<script language="javascript">alert("MESSAGE : Login Gagal, User tidak ditemukan. Silahkan ulangi kembali")</script>';
    echo '<script language="javascript">window.location = "login.php"</script>';
} else {
	$_SESSION['id_pengguna'] 		= $VAR_ID_PENGGUNA;
	$_SESSION['kode_distribusi'] 	= $VAR_KODE_DISTRIBUSI;
	$_SESSION['kode_area'] 			= $VAR_KODE_AREA;
	//$_SESSION['kode_rayon'] 		= $VAR_KODE_RAYON;

	$_SESSION['nip'] 				= $VAR_NIP;		
	$_SESSION['nama'] 				= $VAR_NAMA;		
	$_SESSION['email'] 				= $VAR_EMAIL;
	$_SESSION['jabatan'] 			= $VAR_JABATAN;
	$_SESSION['hak_akses'] 			= $VAR_HAK_AKSES;

	//echo '<script language="javascript">alert("'.$_SESSION['temp_url'].'");</script>';
	if ($_SESSION['temp_url']<>"" or $_SESSION['temp_url']<>null ) {
		echo '<script language="javascript">window.location ="'.$_SESSION["temp_url"].'"</script>';
		$_SESSION['temp_url']="";
	}	
	else {
		echo '<script language="javascript">window.location = "home.php"</script>';
	}	

} 
 

?>