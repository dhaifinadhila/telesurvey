<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once 'lib/config.php';	
require_once 'function/function_cbc_master_call.php';
require_once 'function/function_cbc_file_excell.php';
require_once 'lib/excell/simplexlsx.class.php';
require_once 'lib/excell/reader.php';

//echo $HTTP_POST_FILES['ufile']['name'];


$file_name		= $_FILES['ufile']['name'];
$jenis_file		= $_FILES['ufile']['type'];
$ukuran_file	= $_FILES['ufile']['size'];

//echo $file_name."-".$jenis_file."-".$ukuran_file;

//echo $jenis_file; 

//echo "<HR>if (($jenis_file=='application/vnd.ms-excel') || ($jenis_file=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) ";
 

 

if (($jenis_file=='application/vnd.ms-excel') || ($jenis_file=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) 
{
	$file_name_ex = explode('.',$file_name);
	$file_name_default = $file_name_ex[0]; 
	$file_ext = $file_name_ex[1];
	$random_digit=rand(000000,999999).date("yMdhis");
	$new_file_name=md5($random_digit.$file_name).".".$file_ext;
	$path= "upload_excell/".$new_file_name;

	if($ufile !=none)
	{
		if(copy($_FILES['ufile']['tmp_name'], $path))
		{
			// begin insert ke cbc_file_excell
			$VAR_ID_FILE_EXCELL=NULL;
			$VAR_ID_PENGGGUNA='0';
			$VAR_KODE_DISTRIBUSI='0';
			$VAR_KODE_UNIT='0';
			$VAR_KODE_RAYON='0';
			$VAR_NAMA_FILE_ASLI=$file_name;
			$VAR_NAMA_FILE_RENAME=$new_file_name;
			$VAR_UKURAN=$ukuran_file;
			$VAR_TANGGAL_UPLOAD=date("Y-m-d");
			$VAR_INFORMASI_01='INFO01';
			$VAR_INFORMASI_02='INFO02';
			$VAR_INFORMASI_03='INFO03';
			$VAR_INFORMASI_04='INFO04';
			$VAR_INFORMASI_05='INFO05';
			$VAR_INFORMASI_06='INFO06';
			$VAR_INFORMASI_07='INFO07';
			$VAR_INFORMASI_08='INFO08';
			$VAR_INFORMASI_09='INFO09';
			$VAR_INFORMASI_10='INFO10';

			cbc_file_excell_insert(
					$VAR_ID_FILE_EXCELL,
					$VAR_ID_PENGGGUNA,
					$VAR_KODE_DISTRIBUSI,
					$VAR_KODE_UNIT,
					$VAR_KODE_RAYON,
					$VAR_NAMA_FILE_ASLI,
					$VAR_NAMA_FILE_RENAME,
					$VAR_UKURAN,
					$VAR_TANGGAL_UPLOAD,
					$VAR_INFORMASI_01,
					$VAR_INFORMASI_02,
					$VAR_INFORMASI_03,
					$VAR_INFORMASI_04,
					$VAR_INFORMASI_05,
					$VAR_INFORMASI_06,
					$VAR_INFORMASI_07,
					$VAR_INFORMASI_08,
					$VAR_INFORMASI_09,
					$VAR_INFORMASI_10
					); 
			// end insert ke cbc_file_excell

			// begin insert ke cbc_master_call
			$xlsx = new SimpleXLSX('upload_excell/'.$VAR_NAMA_FILE_RENAME.'');
			$excel_data = $xlsx->rows();
			$jumlah_row_excel_data=count($excel_data);
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
				$VAR_LAMAMOHON = trim($excel_data[$i][9]);	
				$VAR_STATUS_PERMOHONAN = trim($excel_data[$i][20]);	
				$VAR_TGL_UPDATE_PERMOHONAN = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][21]));	
				$VAR_TGLPK = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][22]));	
				$VAR_TGLNYALA = date('Y-m-d',$xlsx->unixstamp($excel_data[$i][23]));	
				$VAR_NAMAUPI = trim($excel_data[$i][24]);	
				$VAR_NAMAAP = trim($excel_data[$i][25]);	
				$VAR_NAMAUP = trim($excel_data[$i][26]);	
				$VAR_UNITTUJUAN = trim($excel_data[$i][27]);

				IF ($VAR_JENIS_TRANSAKSI=="PASANG BARU") {
				$VAR_CBC_JENIS_MUTASI = '1';
				} ELSE 
				IF ($VAR_JENIS_TRANSAKSI=="PERUBAHAN DAYA") {
				$VAR_CBC_JENIS_MUTASI = '2';
				}

				$VAR_CBC_STATUS_CALL = '0';
				$VAR_CBC_TANGGAL_UPLOAD = date("Y-m-d");
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
			}
			// end insert ke cbc_master_call

			//echo "Successful<BR/>"; 
			//echo "File Name :".$new_file_name."<BR/>"; 
			//echo "File Size :".$HTTP_POST_FILES['ufile']['size']."<BR/>"; 
			//echo "File Type :".$HTTP_POST_FILES['ufile']['type']."<BR/>"; 


			echo '<script language="javascript">alert("Berhasil Upload Data File Excel dengan '.$jumlah_row_excel_data.' Baris")</script>';
			echo '<script language="javascript">window.location = "upload_view.php"</script>';
 
		}
		else
		{
			echo '<script language="javascript">alert("ERROR : Proses upload gagal, silahkan ulangi kembali")</script>';
			echo '<script language="javascript">window.location = "upload.php"</script>';

		}
	}

} // end excell file
else 
{
	echo '<script language="javascript">alert("ERROR : Pastikan file yg diupload adalah file Excel 2007 dengan format .XLSX ")</script>';
	echo '<script language="javascript">window.location = "upload.php"</script>';
} 

 

?>