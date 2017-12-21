<?php

	function cbc_file_excell_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from CBC_FILE_EXCELL";
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

	function cbc_file_excell_insert(
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
		) 
	{
		include "lib/config.php";					
		$query = "INSERT INTO cbc_file_excell
		(
		ID_FILE_EXCELL,
		ID_PENGGGUNA,
		KODE_DISTRIBUSI,
		KODE_UNIT,
		KODE_RAYON,
		NAMA_FILE_ASLI,
		NAMA_FILE_RENAME,
		UKURAN,
		TANGGAL_UPLOAD,
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
		) 
		values
		(
		NULL,
		'$VAR_ID_PENGGGUNA',
		'$VAR_KODE_DISTRIBUSI',
		'$VAR_KODE_UNIT',
		'$VAR_KODE_RAYON',
		'$VAR_NAMA_FILE_ASLI',
		'$VAR_NAMA_FILE_RENAME',
		'$VAR_UKURAN',
		to_date('$VAR_TANGGAL_UPLOAD','YYYY-MM-DD'),       
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
		)
		";

		//echo $query;
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;	
	}


	function cbc_file_excell_delete($ID_FILE_EXCELL)
	{ 
		include "lib/config.php";					
		$query = "delete from cbc_file_excell where ID_FILE_EXCELL = $ID_FILE_EXCELL";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

?>