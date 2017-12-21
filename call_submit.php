<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}

include_once 'lib/config.php';	
include_once("function/function_file_upload.php");
include_once("function/function_master.php");
include_once("function/function_call.php");

$var_id_pengguna 	= $_SESSION['id_pengguna'];
$VAR_ID_MASTER		= $_POST['var_id_master'];

$master = search_by_id_master($VAR_ID_MASTER);
$token 				= md5($key.$VAR_ID_MASTER);
$MASTER_IDPEL		= $master[0]['id_pelanggan'];
$MASTER_NAMA 		= $master[0]['nama'];
$MASTER_ALAMAT		= $master[0]['alamat'];
$MASTER_NO_TELP		= $master[0]['no_telp'];
$MASTER_NO_HP		= $master[0]['no_hp'];
$MASTER_TARIF		= $master[0]['tarif'];
$MASTER_DAYA		= $master[0]['daya'];
$MASTER_PEMKWH		= $master[0]['pemkwh'];
$MASTER_JAM_NYALA	= $master[0]['jam_nyala'];
$MASTER_JAM_NYALA_600	= $master[0]['jam_nyala_600'];
$MASTER_JAM_NYALA_400	= $master[0]['jam_nyala_400'];


$MASTER_KODE_DIS		= $master[0]['kode_distribusi'];
$MASTER_KODE_AREA		= $master[0]['kode_area'];
$MASTER_KODE_RAYON		= $master[0]['kode_rayon'];
$MASTER_STATUS_CALL		= $master[0]['status_call'];
$MASTER_ID_FILE_UPLOAD	= $master[0]['id_file_upload'];
$MASTER_TGL_UPLOAD		= $master[0]['tgl_upload'];
$MASTER_KONVERSI_NYALA	= $master[0]['hasil_konversi'];

$VAR_GAGAL_CALL = trim($_POST['gagal_call']);

$GET_P1 = trim($_POST['p1']);
if($GET_P1=='1')
	{ $VAR_NAMA		= $MASTER_NAMA; }
if($GET_P1=='2')
	{ $VAR_NAMA		= $_POST['nama_penjawab']; } 

$GET_P2 = trim($_POST['p2']);	
$GET_P3 = trim($_POST['p3']);	
if($GET_P3=='13')
	{ $VAR_PROFESI_LAIN = $_POST['profesi_lain']; } 
$GET_P4 = trim($_POST['p4']);
$GET_P5 = trim($_POST['p5']);
$GET_P6 = trim($_POST['p6']);
$GET_P7 = trim($_POST['p7']);
if($GET_P7=='5')
	{ $VAR_ALASAN_HEMAT = $_POST['alasan_hemat_lain']; } 
$GET_P8 = trim($_POST['p8']);
if($GET_P8=='4')
	{ $VAR_CARA_HEMAT = $_POST['cara_hemat_lain']; } 
$GET_P9 = trim($_POST['p9']);
$GET_P10 = trim($_POST['p10']);
$GET_P11 = trim($_POST['p11']);
$GET_P12 = trim($_POST['p12']);
$GET_P13 = trim($_POST['p13']);	
		
$tgl_call			= $_POST['var_tgl_call'];
$info_01 			= date('Ym');
$VAR_NO_REGISTRASI 	= $_POST['var_no_registrasi'];
$VAR_SARAN 			= $_POST['saran'];
			
if($VAR_GAGAL_CALL!='1'){
	
	$VAR_STATUS_CALL	= '1';
	$VAR_KRITERIA_GAGAL = '';

	update_master_success($VAR_ID_MASTER,$VAR_STATUS_CALL );
		
	$return_insert_call = insert_call($VAR_ID_MASTER,$MASTER_NAMA,$VAR_NAMA,$GET_P1,$GET_P2,$GET_P3,$VAR_PROFESI_LAIN,$GET_P4,$GET_P5,$GET_P6,$GET_P7,$VAR_ALASAN_HEMAT,$GET_P8,$VAR_CARA_HEMAT,$GET_P9,$GET_P10,$GET_P11,$GET_P12,$GET_P13,$VAR_SARAN,$VAR_KRITERIA_GAGAL,$var_id_pengguna,$tgl_call,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10); 
								
	if ($return_insert_call==1)
	{
		echo '<script language="javascript">alert("Data Call Berhasil di Simpan")</script>';
		echo '<script language="javascript">window.location = "sudah_call.php"</script>';
	}
	else {
		echo '<script language="javascript">alert("Data Call Gagal di Simpan")</script>';
		echo '<script language="javascript">window.location = "belum_call.php"</script>';
	} 
	
}

if ($VAR_GAGAL_CALL == "1")
{
	$VAR_KRITERIA_GAGAL	= $_POST['kriteria_gagal'];
	$VAR_STATUS_CALL 	= '2';
	
	update_master_gagal($VAR_ID_MASTER,$VAR_STATUS_CALL);
	
	$gagal_call = insert_call($VAR_ID_MASTER,$MASTER_NAMA,$VAR_NAMA,$VAR_KESESUAIAN,$GET_P2,$GET_P3,$VAR_PROFESI_LAIN,$GET_P4,$GET_P5,$GET_P6,$GET_P7,$VAR_ALASAN_HEMAT,$GET_P8,$VAR_CARA_HEMAT,$GET_P9,$GET_P10,$GET_P11,$GET_P12,$GET_P13,$VAR_SARAN,$VAR_KRITERIA_GAGAL,$var_id_pengguna,$tgl_call,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10); 
			
	if ($gagal_call==1)
		{
			echo '<script language="javascript">alert("Pelanggan Gagal Di Call")</script>';
			echo '<script language="javascript">window.location = "belum_call.php"</script>';
		}

}
?>