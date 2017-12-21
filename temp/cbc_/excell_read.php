<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once 'lib/config.php';	
require_once 'function/function_cbc_master_call.php';
require_once 'lib/excell/simplexlsx.class.php';
require_once 'lib/excell/reader.php';
$xlsx = new SimpleXLSX('upload_excell/100.xlsx');

$excel_data = $xlsx->rows();

//echo "<pre>";
//print_r($excel_data);
//echo "</pre>";
 

/*
[0]=>NOAGENDA
[1]=>NO_REGISTRASI
[2]=>TGLMOHON
[3]=>IDPEL
[4]=>NAMA
[5]=>ALAMAT
[6]=>NOTELP_PEMOHON
[7]=>NOTELP_HP_PEMOHON
[8]=>ASALMOHON
[9]=>UPIENTRI
[10]=>PETUGASCATAT
[11]=>TARIF_LAMA
[12]=>DAYA_LAMA
[13]=>TARIF
[14]=>DAYA
[15]=>JENIS_TRANSAKSI
[16]=>PAKET_SAR
[17]=>TOTALBIAYA
[18]=>TGLBAYAR
[19]=>LAMAMOHON
[20]=>STATUS_PERMOHONAN
[21]=>TGL_UPDATE_PERMOHONAN
[22]=>TGLPK
[23]=>TGLNYALA
[24]=>NAMAUPI
[25]=>NAMAAP
[26]=>NAMAUP
[27]=>UNITTUJUAN
*/

//list($num_cols, $num_rows) = $xlsx->dimension(); 
//

//$excel_data = $xlsx->rows();

// echo "<pre>";
// print_r($xlsx->rows()); // sheet pertama
// echo "</pre>";
//echo "<HR>";
//print_r($xlsx->rows(2)); // sheet ke dua

 
$jumlah_count=count($excel_data);
 
 echo "<HR>J=".$jumlah_count."<HR>";

for ($i=1;$i<count($excel_data);$i++)
{ 

	$VAR_NOAGENDA = trim($excel_data[$i][0]);	
	$VAR_NO_REGISTRASI = trim($excel_data[$i][1]);	
	$VAR_TGLMOHON = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][2]));	
	
	$VAR_IDPEL = trim($excel_data[$i][3]);	
	$VAR_NAMA = trim($excel_data[$i][4]);	
	$VAR_ALAMAT = trim($excel_data[$i][5]);	
	$VAR_NOTELP_PEMOHON = trim($excel_data[$i][6]);	
	$VAR_NOTELP_HP_PEMOHON = trim($excel_data[$i][7]);	
	$VAR_ASALMOHON = trim($excel_data[$i][8]);	
	$VAR_UPIENTRI = trim($excel_data[$i][9]);	
	$VAR_PETUGASCATAT = trim($excel_data[$i][10]);	
	$VAR_TARIF_LAMA = trim($excel_data[$i][11]);	
	$VAR_DAYA_LAMA = trim($excel_data[$i][12]);	
	$VAR_TARIF = trim($excel_data[$i][13]);	
	$VAR_DAYA = trim($excel_data[$i][14]);	
	$VAR_JENIS_TRANSAKSI = trim($excel_data[$i][15]);	
	$VAR_PAKET_SAR = trim($excel_data[$i][16]);	
	$VAR_TOTALBIAYA = trim($excel_data[$i][17]);	
	$VAR_TGLBAYAR = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][18]));	
	echo "TGL_BAYAR=".$VAR_TGLBAYAR."<BR>";

	$VAR_LAMAMOHON = trim($excel_data[$i][9]);	
	$VAR_STATUS_PERMOHONAN = trim($excel_data[$i][20]);	
	$VAR_TGL_UPDATE_PERMOHONAN = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][21]));	
	echo "VAR_TGL_UPDATE_PERMOHONAN=".$VAR_TGL_UPDATE_PERMOHONAN."<BR>";

	$VAR_TGLPK = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][22]));	
	echo "VAR_TGLPK=".$VAR_TGLPK."<BR>";

	$VAR_TGLNYALA = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][23]));	
	echo "VAR_TGLNYALA=".$VAR_TGLNYALA."<BR>";

	$VAR_NAMAUPI = trim($excel_data[$i][24]);	
	$VAR_NAMAAP = trim($excel_data[$i][25]);	
	$VAR_NAMAUP = trim($excel_data[$i][26]);	
	$VAR_UNITTUJUAN = trim($excel_data[$i][27]);	
	$VAR_CBC_JENIS_MUTASI = '1';
	$VAR_CBC_STATUS_CALL = '0';
	$VAR_CBC_TANGGAL_UPLOAD = date("Y-m-d");
	echo "VAR_CBC_TANGGAL_UPLOAD=".$VAR_CBC_TANGGAL_UPLOAD."<BR>";

	$VAR_CBC_KODE_DISTRIBUSI = '54';
	$VAR_CBC_KODE_UNIT = $excel_data[$i][27];	
	$VAR_CBC_KODE_RAYON = $excel_data[$i][27];	
	$VAR_CBC_ID_FILE_EXCELL = '0';
	$VAR_INFORMASI_01 = 'INFO01';
	$VAR_INFORMASI_02 = 'INFO02';
	$VAR_INFORMASI_03 = 'INFO03';
	$VAR_INFORMASI_04 = 'INFO04';
	$VAR_INFORMASI_05 = 'INFO05';
	$VAR_INFORMASI_06 = 'INFO06';
	$VAR_INFORMASI_07 = 'INFO07';
	$VAR_INFORMASI_08 = 'INFO08';
	$VAR_INFORMASI_09 = 'INFO09';
	$VAR_INFORMASI_10 = 'INFO10';
	$VAR_INFORMASI_11 = 'INFO11';
	$VAR_INFORMASI_12 = 'INFO12';
	$VAR_INFORMASI_13 = 'INFO13';
	$VAR_INFORMASI_14 = 'INFO14';
	$VAR_INFORMASI_15 = 'INFO15';
	$VAR_INFORMASI_16 = 'INFO16';
	$VAR_INFORMASI_17 = 'INFO17';
	$VAR_INFORMASI_18 = 'INFO18';
	$VAR_INFORMASI_19 = 'INFO19';
	$VAR_INFORMASI_20 = 'INFO20';
		 
	 
	cbc_master_call_insert(
		NULL,
		$VAR_NOAGENDA,
		$VAR_NO_REGISTRASI,
		$VAR_TGLMOHON,
		$VAR_IDPEL,
		$VAR_NAMA,
		$VAR_ALAMAT,
		$VAR_NOTELP_PEMOHON,
		$VAR_NOTELP_HP_PEMOHON,
		$VAR_ASALMOHON,
		$VAR_UPIENTRI,
		$VAR_PETUGASCATAT,
		$VAR_TARIF_LAMA,
		$VAR_DAYA_LAMA,
		$VAR_TARIF,
		$VAR_DAYA,
		$VAR_JENIS_TRANSAKSI,
		$VAR_PAKET_SAR,
		$VAR_TOTALBIAYA,
		$VAR_TGLBAYAR,
		$VAR_LAMAMOHON,
		$VAR_STATUS_PERMOHONAN,
		$VAR_TGL_UPDATE_PERMOHONAN,
		$VAR_TGLPK,
		$VAR_TGLNYALA,
		$VAR_NAMAUPI,
		$VAR_NAMAAP,
		$VAR_NAMAUP,
		$VAR_UNITTUJUAN,
		$VAR_CBC_JENIS_MUTASI,
		$VAR_CBC_STATUS_CALL,
		$VAR_CBC_TANGGAL_UPLOAD,
		$VAR_CBC_KODE_DISTRIBUSI,
		$VAR_CBC_KODE_UNIT,
		$VAR_CBC_KODE_RAYON,
		$VAR_CBC_ID_FILE_EXCELL,
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05,
		$VAR_INFORMASI_06,
		$VAR_INFORMASI_07,
		$VAR_INFORMASI_08,
		$VAR_INFORMASI_09,
		$VAR_INFORMASI_10,
		$VAR_INFORMASI_11,
		$VAR_INFORMASI_12,
		$VAR_INFORMASI_13,
		$VAR_INFORMASI_14,
		$VAR_INFORMASI_15,
		$VAR_INFORMASI_16,
		$VAR_INFORMASI_17,
		$VAR_INFORMASI_18,
		$VAR_INFORMASI_19,
		$VAR_INFORMASI_20
		);
	 

	echo $VAR_NOAGENDA." INSERTED ...<BR>";
	 
	 

}

/* 
echo "<HR>";
$sheet = $xlsx->rows();
echo $sheet[0][0];
echo "<HR>";
echo "Jumlah Sheet : ".$xlsx->sheetsCount();
*/

//for ($j==0;$j<)




?>
