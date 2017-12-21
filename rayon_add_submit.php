<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_tm_RAYON.php");
 

$VAR_KODE_DISTRIBUSI	=$_POST['VAR_KODE_DISTRIBUSI'];
$VAR_KODE_AREA			=$_POST['VAR_KODE_AREA'];
$VAR_KODE_RAYON			=$_POST['VAR_KODE_RAYON'];
$VAR_NAMA_RAYON			=$_POST['VAR_NAMA_RAYON'];
$VAR_KETERANGAN			=$_POST['VAR_KETERANGAN'];

$return_rayon_add = tm_rayon_insert($VAR_KODE_DISTRIBUSI,$VAR_KODE_AREA,$VAR_KODE_RAYON,$VAR_NAMA_RAYON,$VAR_KETERANGAN);

		
if ($return_rayon_add==1) {
	echo '<script language="javascript">alert("Data Rayon Berhasil di Simpan !")</script>';
	echo '<script language="javascript">window.location = "rayon.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Rayon Gagal di Simpan !")</script>';
	echo '<script language="javascript">window.location = "rayon.php"</script>';
} 

?>
