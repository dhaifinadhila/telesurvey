<?php
session_start();
include_once("lib/config.php");
include_once("function/engine.php");
include_once("function/function_cbc_DISTRIBUSI.php");
include_once("function/function_cbc_UNIT.php");


$get_var_username = $_POST['var_email'];
$get_var_password = $_POST['var_password'];

$pengguna = login($get_var_username,$get_var_password);

//print_r($pengguna);

$VAR_ID_PENGGUNA=$pengguna[0]['ID_PENGGUNA'];
$VAR_KODE_DISTRIBUSI=$pengguna[0]['KODE_DISTRIBUSI'];
$VAR_KODE_UNIT=$pengguna[0]['KODE_UNIT'];
$VAR_KODE_RAYON=$pengguna[0]['KODE_RAYON'];
$VAR_NIP=$pengguna[0]['NIP'];
$VAR_EMAIL=$pengguna[0]['EMAIL'];
$VAR_PASSWORD=$pengguna[0]['PASSWORD'];
$VAR_NAMA=$pengguna[0]['NAMA'];
$VAR_JABATAN=$pengguna[0]['JABATAN'];
$VAR_HAK_AKSES=$pengguna[0]['HAK_AKSES'];
$VAR_TARGET_CALL=$pengguna[0]['TARGET_CALL'];
 

if ($VAR_ID_PENGGUNA=="") {
    echo '<script language="javascript">alert("MESSAGE : Login Gagal, User tidak ditemukan. Silahkan ulangi kembali")</script>';
    echo '<script language="javascript">window.location = "login.php"</script>';
} else {
	$_SESSION['id_user'] = $VAR_ID_PENGGUNA;
	$_SESSION['kode_distribusi'] = $VAR_KODE_DISTRIBUSI;
	$_SESSION['kode_unit'] = $VAR_KODE_UNIT;
	$_SESSION['kode_rayon'] = $VAR_KODE_RAYON;

	$_SESSION['nip'] = $VAR_NIP;	
	$_SESSION['hak_akses'] = $VAR_HAK_AKSES;	
	$_SESSION['nama_lengkap'] = $VAR_NAMA;		
	$_SESSION['email'] = $VAR_EMAIL;
	$_SESSION['jabatan'] = $VAR_JABATAN;
	$_SESSION['target_call'] = $VAR_TARGET_CALL;	



	$VAR_ID_UNIT = $VAR_KODE_UNIT;
	$unit = cbc_UNIT_search_ID_UNIT($VAR_ID_UNIT);

	$VAR_ID_UNIT=$unit[0]['ID_UNIT'];
	$VAR_KODE_DISTRIBUSI=$unit[0]['KODE_DISTRIBUSI'];
	//echo $VAR_KODE_DISTRIBUSI;
	$VAR_KODE_UNIT=$unit[0]['KODE_UNIT'];
	$VAR_NAMA_UNIT=$unit[0]['NAMA_UNIT'];
	$VAR_ALAMAT=$unit[0]['ALAMAT'];

	$_SESSION['nama_unit'] = $VAR_NAMA_UNIT;	


    echo '<script language="javascript">window.location = "home.php"</script>';
} 


?>