<?php

	function cbc_callback_jawaban_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from CBC_CALLBACK_JAWABAN";
		$statement	= oci_parse($connection, $query);
		oci_execute($statement);
		oci_fetch_array ($statement, OCI_ASSOC);
		$row_count	= oci_num_rows($statement);	
		$result = array();				
		if ($row_count > 0) {								
			oci_execute($statement);
			$i=1;		
			while ($row = oci_fetch_array ($statement, OCI_ASSOC)) {	
				array_push($result,$row);					
				$i++;
			}
		}			
		return $result;		
	}


	function cbc_callback_jawaban_insert( 
		$VAR_ID_CALLBACK_JAWABAN,
		$VAR_ID_CALLBACK,
		$VAR_ID_MASTER_CALL,
		$VAR_KODE_DISTRIBUSI,
		$VAR_KODE_UNIT,
		$VAR_KODE_RAYON,
		$VAR_ID_PENGGGUNA,
		$VAR_JENIS_MUTASI,
		$VAR_TANGGAL_CALLBACK,
		$VAR_ID_PERTANYAAN,
		$VAR_ID_PERTANYAAN_JAWABAN,
		$VAR_JAWABAN_KETERANGAN,
		$VAR_JAWABAN_NILAI_POINT,
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
		)
		{
		include "lib/config.php";				
			$query = "
			INSERT INTO cbc_callback_jawaban(
				ID_CALLBACK_JAWABAN,
				ID_CALLBACK,
				ID_MASTER_CALL,
				KODE_DISTRIBUSI,
				KODE_UNIT,
				KODE_RAYON,
				ID_PENGGGUNA,
				JENIS_MUTASI,
				TANGGAL_CALLBACK,
				ID_PERTANYAAN,
				ID_PERTANYAAN_JAWABAN,
				JAWABAN_KETERANGAN,
				JAWABAN_NILAI_POINT,
				INFORMASI_01,
				INFORMASI_02,
				INFORMASI_03,
				INFORMASI_04,
				INFORMASI_05,
				INFORMASI_06,
				INFORMASI_07,
				INFORMASI_08,
				INFORMASI_09,
				INFORMASI_10
			) VALUES (
				'$VAR_ID_CALLBACK_JAWABAN',
				'$VAR_ID_CALLBACK',
				'$VAR_ID_MASTER_CALL',
				'$VAR_KODE_DISTRIBUSI',
				'$VAR_KODE_UNIT',
				'$VAR_KODE_RAYON',
				'$VAR_ID_PENGGGUNA',
				'$VAR_JENIS_MUTASI',
				to_date('$VAR_TANGGAL_CALLBACK','YYYY-MM-DD'),
				'$VAR_ID_PERTANYAAN',
				'$VAR_ID_PERTANYAAN_JAWABAN',
				'$VAR_JAWABAN_KETERANGAN',
				'$VAR_JAWABAN_NILAI_POINT',
				'$VAR_INFORMASI_01',
				'$VAR_INFORMASI_02',
				'$VAR_INFORMASI_03',
				'$VAR_INFORMASI_04',
				'$VAR_INFORMASI_05',
				'$VAR_INFORMASI_06',
				'$VAR_INFORMASI_07',
				'$VAR_INFORMASI_08',
				'$VAR_INFORMASI_09',
				'$VAR_INFORMASI_10'
			)";
			//echo $query; 
			$stmt = oci_parse($connection, $query);						
			if(oci_execute($stmt))
			{ $result = 1;}
			else 
			{ $result = $query; }			
			return $result;		
		}


	function cbc_callback_jawaban_delete($VAR_ID_CALLBACK_JAWABAN)
	{ 
		include "lib/config.php";			
		$query = "delete from cbc_callback_jawaban where ID_CALLBACK_JAWABAN = $VAR_ID_CALLBACK_JAWABAN";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


?>