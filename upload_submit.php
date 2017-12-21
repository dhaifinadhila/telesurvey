<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once 'lib/config.php';	
require_once 'function/function_master.php';
require_once 'function/function_upload.php';
require_once 'lib/excell/simplexlsx.class.php';
require_once 'lib/excell/reader.php';

$file_name		= $_FILES['ufile']['name'];
$jenis_file		= $_FILES['ufile']['type'];
$ukuran_file	= $_FILES['ufile']['size'];

if (($jenis_file=='application/vnd.ms-excel') || ($jenis_file=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) 
{
	$file_name_ex 		= explode('.',$file_name);
	$file_name_default 	= $file_name_ex[0]; 
	$file_ext 			= $file_name_ex[1];
	$random_digit		= rand(000000,999999).date("yMdhis");
	$new_file_name 		= md5($random_digit.$file_name).".".$file_ext;
	$path 				= "upload_excell/".$new_file_name;

	if($ufile !=none)
	{
		if(copy($_FILES['ufile']['tmp_name'], $path))
		{
			$xlsx = new SimpleXLSX('upload_excell/'.$new_file_name.'');
			$excel_data = $xlsx->rows();
			$jumlah_row_excel_data=count($excel_data);
			//echo $jumlah_row_excel_data;

			$VAR_ID_PENGGGUNA	= $_SESSION['id_pengguna'];
			$VAR_KODE_AREA		= $_SESSION['kode_area'];
			$VAR_NAMA_FILE		= $file_name;
			$VAR_JUM_ROW		= $jumlah_row_excel_data - 1;
			$VAR_TGL_UPLOAD		= date("Y-m-d");

			$get_id_file 	= get_by_nama_file($file_name);
			$get_nama_file 	= $get_id_file[0]['nama_file'];
			$id_file_upload = $get_id_file[0]['id_file_upload'];

			if($get_nama_file == $VAR_NAMA_FILE)
			{
				echo '<script language="javascript">alert("ERROR : Proses Upload Gagal, File Sudah Ada")</script>';
				echo '<script language="javascript">window.location = "upload_file.php"</script>'; 
			}
			else
			{
				insert_fileupload($VAR_ID_PENGGGUNA,$VAR_KODE_AREA,$VAR_NAMA_FILE,$VAR_JUM_ROW,$VAR_TGL_UPLOAD);

				for ($i=1;$i<count($excel_data);$i++)
				{ 
					$VAR_KODE_DISTRIBUSI= trim($excel_data[$i][0]);		
					$VAR_KODE_AREA		= trim($excel_data[$i][1]);	
					$VAR_KODE_RAYON		= trim($excel_data[$i][2]);

					$VAR_ID_PELANGGAN	= trim($excel_data[$i][3]);	
					$VAR_NAMA	 		= trim($excel_data[$i][4]);	
					$VAR_ALAMAT			= trim($excel_data[$i][5]);					
					$VAR_NO_TELP		= trim($excel_data[$i][6]);	
					$VAR_NO_HP			= trim($excel_data[$i][7]);
					$VAR_TARIF			= trim($excel_data[$i][8]);	
					$VAR_DAYA			= trim($excel_data[$i][9]);	
					$VAR_PEMKWH			= trim($excel_data[$i][10]);	
					$VAR_JAM_NYALA		= trim($excel_data[$i][11]);	
					$VAR_JAM_NYALA_600	= trim($excel_data[$i][12]);	
					$VAR_JAM_NYALA_400 	= trim($excel_data[$i][13]);	
					$VAR_HASIL_KONVERSI	= trim($excel_data[$i][14]);
					$VAR_NO_REG 		= trim($excel_data[$i][15]);	
					$VAR_STATUS_CALL	= '0';
					$TGL_UPLOAD			= date("Y-m-d");

					$info_01 = '01';
					$info_02 = '02';
					$info_03 = '03';
					$info_04 = '04';
					$info_05 = '05';
					$info_06 = '06';
					$info_07 = '07';
					$info_08 = '08';
					$info_09 = '09';
					$info_10 = '10';
					$MASTER_ID_PEL 	= get_id_pel($VAR_ID_PELANGGAN);
					$CHECK_ID_PEL 	= $MASTER_ID_PEL[0]['id_pelanggan'];
					//echo $CHECK_ID_PEL;

					if($CHECK_ID_PEL == $VAR_ID_PELANGGAN)
					{
						update_master_all($VAR_KODE_DISTRIBUSI,$VAR_KODE_AREA,$VAR_KODE_RAYON,$VAR_ID_PELANGGAN,$VAR_NAMA,$VAR_ALAMAT,$VAR_NO_TELP,$VAR_NO_HP,$VAR_TARIF,$VAR_DAYA,$VAR_PEMKWH,$VAR_JAM_NYALA,$VAR_JAM_NYALA_600,$VAR_JAM_NYALA_400,$VAR_HASIL_KONVERSI,$VAR_NO_REG,$VAR_STATUS_CALL,$id_file_upload,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10);
					}
					else{
						insert_master($VAR_KODE_DISTRIBUSI,$VAR_KODE_AREA,$VAR_KODE_RAYON,$VAR_ID_PELANGGAN,$VAR_NAMA,$VAR_ALAMAT,$VAR_NO_TELP,$VAR_NO_HP,$VAR_TARIF,$VAR_DAYA,$VAR_PEMKWH,$VAR_JAM_NYALA,$VAR_JAM_NYALA_600,$VAR_JAM_NYALA_400,$VAR_HASIL_KONVERSI,$VAR_NO_REG,$VAR_STATUS_CALL,$id_file_upload,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10);
					}
				}
				echo '<script language="javascript">alert("Berhasil Upload Data File Excel dengan Jumlah '.$VAR_JUM_ROW.' Baris")</script>';
				echo '<script language="javascript">window.location = "upload.php"</script>'; 
			}
			
					
				
		}	
		 	 
 
	}
	else
	{
		echo '<script language="javascript">alert("ERROR : Proses upload gagal, silahkan ulangi kembali")</script>';
		echo '<script language="javascript">window.location = "upload_file.php"</script>'; 

	}
}

else 
{
	echo '<script language="javascript">alert("ERROR : Pastikan file yg diupload adalah file Excel 2007 dengan format .XLSX ")</script>';
	echo '<script language="javascript">window.location = "upload_file.php"</script>';
} 

?>