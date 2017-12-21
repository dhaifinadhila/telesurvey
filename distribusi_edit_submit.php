<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

include_once("function/function_distribusi.php");


$id_distribusi 	= $_POST['id'];
$kode_distribusi= $_POST['kode_distribusi'];
$nama_distribusi= $_POST['nama_distribusi'];
$ket_distribusi	= $_POST['ket_distribusi'];


if (empty($_POST['kode_distribusi']) || empty($_POST['nama_distribusi'])) {
  	echo '<script language="javascript">alert("Gagal di  Update! Data Harus Lengkap!")</script>';
  	echo '<script language="javascript">window.location = "distribusi.php"</script>';
} 
else {
	$return_delete_news_big = update_distribusi($id_distribusi,$kode_distribusi,$nama_distribusi,$ket_distribusi);
	if($return_delete_news_big ==1)
	{
		echo '<script language="javascript">alert("Data Distribusi Berhasil di Update !")</script>';
  		echo '<script language="javascript">window.location = "distribusi.php"</script>';
	}
  	else
  	{
  		echo '<script language="javascript">alert("Data Distribusi Gagal di Update !")</script>';
  		echo '<script language="javascript">window.location = "distribusi.php"</script>';
  	}
}


?>
