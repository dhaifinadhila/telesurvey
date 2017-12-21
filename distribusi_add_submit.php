<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();


include "function/function_distribusi.php";

$id_distribusi =NULL;
$kode_distribusi =$_POST['kode_distribusi'];
$nama_distribusi =$_POST['nama_distribusi'];
$ket_distribusi  =$_POST['ket_distribusi'];
//echo $kode_distribusi."tes";


if (empty($_POST['kode_distribusi']) || empty($_POST['nama_distribusi']) ) {
	echo '<script language="javascript">alert("Gagal Di Simpan! Data Harus Lengkap!")</script>';
	echo '<script language="javascript">window.location = "distribusi_add.php"</script>';
} else {
	$return_insert = insert_distribusi($kode_distribusi,$nama_distribusi,$ket_distribusi);
	if($return_insert ==1)
		{
			echo '<script language="javascript">alert("Data Distribusi Berhasil di Simpan!")</script>';
			echo '<script language="javascript">window.location = "distribusi.php"</script>';
		}
	else
		{
			echo '<script language="javascript">alert("Data Distribusi Gagal di Simpan!")</script>';
			echo '<script language="javascript">window.location = "distribusi_add.php"</script>';
		}
	
} 

?>