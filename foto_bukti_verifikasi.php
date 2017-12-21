<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_user']=="") {
	if ($_SESSION['temp_url']=="") {
		$_SESSION['temp_url']="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "login.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_master_call.php");
include_once("function/function_cbc_callback.php");
include_once("function/function_cbc_pengguna.php");

$var_ID_MASTER_CALL 		= $_GET['id'];
echo $var_ID_MASTER_CALL;
$master_call 				= cbc_master_call_search_by_ID_MASTER_CALL($var_ID_MASTER_CALL);
$VAR_ID_MASTER_CALL			= $master_call[0]['ID_MASTER_CALL'];
$token 						= md5($key.$VAR_ID_MASTER_CALL);
$VAR_NOAGENDA				= $master_call[0]['NOAGENDA'];
$VAR_NO_REGISTRASI			= $master_call[0]['NO_REGISTRASI'];
$VAR_TGLMOHON				= $master_call[0]['TGLMOHON'];
$VAR_IDPEL					= $master_call[0]['IDPEL'];
$VAR_NAMA					= $master_call[0]['NAMA'];
$VAR_ALAMAT					= $master_call[0]['ALAMAT'];
$VAR_NOTELP_PEMOHON			= $master_call[0]['NOTELP_PEMOHON'];
$VAR_NOTELP_HP_PEMOHON		= $master_call[0]['NOTELP_HP_PEMOHON'];
$VAR_ASALMOHON				= $master_call[0]['ASALMOHON'];
$VAR_UPIENTRI				= $master_call[0]['UPIENTRI'];
$VAR_PETUGASCATAT			= $master_call[0]['PETUGASCATAT'];
$VAR_TARIF_LAMA				= $master_call[0]['TARIF_LAMA'];
$VAR_DAYA_LAMA				= $master_call[0]['DAYA_LAMA'];
$VAR_TARIF					= $master_call[0]['TARIF'];
$VAR_DAYA					= $master_call[0]['DAYA'];
$VAR_JENIS_TRANSAKSI		= $master_call[0]['JENIS_TRANSAKSI'];
$VAR_PAKET_SAR				= $master_call[0]['PAKET_SAR'];
$VAR_TOTALBIAYA				= $master_call[0]['TOTALBIAYA'];
$VAR_TGLBAYAR				= $master_call[0]['TGLBAYAR'];
$VAR_LAMAMOHON				= $master_call[0]['LAMAMOHON'];
$VAR_STATUS_PERMOHONAN		= $master_call[0]['STATUS_PERMOHONAN'];
$VAR_TGL_UPDATE_PERMOHONAN	= $master_call[0]['TGL_UPDATE_PERMOHONAN'];
$VAR_TGLPK					= $master_call[0]['TGLPK'];
$VAR_TGLNYALA				= $master_call[0]['TGLNYALA'];
$VAR_NAMAUPI				= $master_call[0]['NAMAUPI'];
$VAR_NAMAAP					= $master_call[0]['NAMAAP'];
$VAR_NAMAUP					= $master_call[0]['NAMAUP'];
$VAR_UNITTUJUAN				= $master_call[0]['UNITTUJUAN'];
$VAR_CBC_JENIS_MUTASI		= $master_call[0]['CBC_JENIS_MUTASI'];
$VAR_CBC_STATUS_CALL		= $master_call[0]['STATUS_CALL'];
$VAR_CBC_TANGGAL_UPLOAD		= $master_call[0]['CBC_TANGGAL_UPLOAD'];
$VAR_CBC_KODE_DISTRIBUSI	= $master_call[0]['CBC_KODE_DISTRIBUSI'];
$VAR_CBC_KODE_UNIT			= $master_call[0]['CBC_KODE_UNIT'];
$VAR_CBC_KODE_RAYON			= $master_call[0]['CBC_KODE_RAYON'];
$VAR_CBC_ID_FILE_EXCELL		= $master_call[0]['CBC_ID_FILE_EXCELL'];


if ($VAR_CBC_JENIS_MUTASI=="1") {
$pb_pd_what = "Pasang Baru";
}
else
if ($VAR_CBC_JENIS_MUTASI=="2") {
$pb_pd_what = "Perubahan Daya";
}

$callback_data = cbc_callback_search_by_ID_MASTER_CALL($var_ID_MASTER_CALL);

$CB_DATA_ID_CALLBACK		=$callback_data[0]['ID_CALLBACK'];
$CB_DATA_ID_MASTER_CALL		=$callback_data[0]['ID_MASTER_CALL'];
$CB_DATA_KODE_DISTRIBUSI	=$callback_data[0]['KODE_DISTRIBUSI'];
$CB_DATA_KODE_UNIT			=$callback_data[0]['KODE_UNIT'];
$CB_DATA_KODE_RAYON			=$callback_data[0]['KODE_RAYON'];
$CB_DATA_ID_PENGGGUNA		=$callback_data[0]['ID_PENGGGUNA'];
$CB_DATA_JENIS_MUTASI		=$callback_data[0]['JENIS_MUTASI'];
$CB_DATA_NOMOR_TELP_PELANGGAN		=$callback_data[0]['NOMOR_TELP_PELANGGAN'];
$CB_DATA_NOMOR_TELP_PELANGGAN_BUKAN	=$callback_data[0]['NOMOR_TELP_PELANGGAN_BUKAN'];
$CB_DATA_PERMINTAAN_VIA				=$callback_data[0]['PERMINTAAN_VIA'];
$CB_DATA_PERMINTAAN_VIA_ORANGLAIN	=$callback_data[0]['PERMINTAAN_VIA_ORANGLAIN'];
$CB_DATA_KECEPATAN_LAYANAN			=$callback_data[0]['KECEPATAN_LAYANAN'];
$CB_DATA_TAMBAHAN_BIAYA				=$callback_data[0]['TAMBAHAN_BIAYA'];
$CB_DATA_TAMBAHAN_BIAYA_WAKTU		=$callback_data[0]['TAMBAHAN_BIAYA_WAKTU'];
$CB_DATA_TAMBAHAN_BIAYA_ALASAN		=$callback_data[0]['TAMBAHAN_BIAYA_ALASAN'];
$CB_DATA_CALLBACK_TANGGAL			=$callback_data[0]['CALLBACK_TANGGAL'];
$CB_DATA_CALLBACK_BULAN				=$callback_data[0]['CALLBACK_BULAN'];
$CB_DATA_CALLBACK_POINT				=$callback_data[0]['CALLBACK_POINT'];
$CB_DATA_REPLY_SEND_NOTIFIKASI		=$callback_data[0]['REPLY_SEND_NOTIFIKASI'];
$CB_DATA_REPLY_TANGGAL				=$callback_data[0]['REPLY_TANGGAL'];
$CB_DATA_REPLY_TANGGAL_NYALA		=$callback_data[0]['REPLY_TANGGAL_NYALA'];
$CB_DATA_REPLY_KETERANGAN			=$callback_data[0]['REPLY_KETERANGAN'];
$CB_DATA_REPLY_ID_PENGGUNA			=$callback_data[0]['REPLY_ID_PENGGUNA'];
$CB_DATA_INFORMASI_01				=$callback_data[0]['INFORMASI_01'];
$CB_DATA_INFORMASI_02				=$callback_data[0]['INFORMASI_02'];
$CB_DATA_INFORMASI_03				=$callback_data[0]['INFORMASI_03'];
if ($callback_data[0]['INFORMASI_04'] == "") {
	$CB_DATA_INFORMASI_04="";
}else {
	$CB_DATA_INFORMASI_04=" (".$callback_data[0]['INFORMASI_04'].")";
}
$CB_DATA_INFORMASI_05=$callback_data[0]['INFORMASI_05'];
$CB_DATA_INFORMASI_06=$callback_data[0]['INFORMASI_06'];
$CB_DATA_INFORMASI_07=$master_call[0]['INFORMASI_07'];
$CB_DATA_INFORMASI_08=$master_call[0]['INFORMASI_08'];
$CB_DATA_INFORMASI_09=$callback_data[0]['INFORMASI_09'];
$CB_DATA_INFORMASI_10=$callback_data[0]['INFORMASI_10'];
$CB_DATA_INFORMASI_11=$callback_data[0]['INFORMASI_11'];
$CB_DATA_INFORMASI_12=$callback_data[0]['INFORMASI_12'];
$CB_DATA_INFORMASI_13=$callback_data[0]['INFORMASI_13'];
$CB_DATA_INFORMASI_14=$callback_data[0]['INFORMASI_14'];
$CB_DATA_INFORMASI_15=$callback_data[0]['INFORMASI_15'];
$CB_DATA_INFORMASI_16=$callback_data[0]['INFORMASI_16'];
$CB_DATA_INFORMASI_17=$callback_data[0]['INFORMASI_17'];
$CB_DATA_INFORMASI_18=$callback_data[0]['INFORMASI_18'];
$CB_DATA_INFORMASI_19=$callback_data[0]['INFORMASI_19'];
$CB_DATA_INFORMASI_20=$callback_data[0]['INFORMASI_20'];

//echo "<pre>";
//prnt_r($callback_data);
//echo "</pre>";


$VAR_ID_PENGGUNA = $CB_DATA_ID_PENGGGUNA;
$pengguna = cbc_pengguna_search_by_id_pengguna($VAR_ID_PENGGUNA);
$PGN_NAMA=$pengguna[0]['NAMA'];
                    	
?>
<!DOCTYPE html>
<html>
<head>	
<link rel="stylesheet" href="css/serverstyle.css">
<link rel="stylesheet" href="css/button.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>

	<link rel="stylesheet" type="text/css" href="lib/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/demo.css">

	<style type="text/css" class="init">
	th, td { white-space: nowrap; }
	div.dataTables_wrapper {
		width: 972px;
		margin: 0 auto;
	}
	.style1 {font-size: 11px}
    </style>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
		$('#example').dataTable( {
			"scrollX": true
		} );
	} );

	</script>
	
<script src="lib/excellentexport/excellentexport.js"></script>		
</head>
<body  bgcolor="#e9e9e9">
	
<?
$query = "update cbc_callback set INFORMASI_01= '$VAR_INFORMASI_01', INFORMASI_02= '$VAR_INFORMASI_02'
				where ID_CALLBACK = '$VAR_ID_MASTER_CALL'";  

			//echo $query; 
			$stmt = oci_parse($connection, $query);						
			if(oci_execute($stmt))
			{ $result = 1;}
			else 
			{ $result = $query; }			
			return $result;		
?>
	
<p>&nbsp;</p>
</body>
</html>