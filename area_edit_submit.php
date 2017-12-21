<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_area.php");

$VAR_ID_AREA = $_POST['id'];

$VAR_KODE_DISTRIBUSI= $_POST['VAR_KODE_DISTRIBUSI'];
$VAR_KODE_AREA 		= $_POST['VAR_KODE_AREA'];
$VAR_NAMA_AREA 		= $_POST['VAR_NAMA_AREA'];
$VAR_KETERANGAN		= $_POST['VAR_KETERANGAN'];

$return_ = update_area($VAR_ID_AREA,$VAR_KODE_DISTRIBUSI,$VAR_KODE_AREA,$VAR_NAMA_AREA,$VAR_KETERANGAN);
 
if ($return_==1) {
	echo '<script language="javascript">alert("Data Area Berhasil di Update !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} else {
	echo '<script language="javascript">alert("Data Area Gagal di Update !")</script>';
	echo '<script language="javascript">window.location = "area.php"</script>';
} 

?>
