<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_pengguna.php");

$id_cbc_pengguna = $_GET['id'];
$return_delete_news_big = cbc_pengguna_delete($id_cbc_pengguna);
if ($return_delete_news_big==1) {
	echo '<script language="javascript">alert("Data pengguna Berhasil di Hapus !")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} else {
	echo '<script language="javascript">alert("Data pengguna Gagal di Hapus !")</script>';
	echo '<script language="javascript">window.location = "pengguna.php"</script>';
} 
?>
