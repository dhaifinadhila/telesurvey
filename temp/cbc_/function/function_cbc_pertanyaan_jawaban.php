<?php

	function cbc_pertanyaan_jawaban_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_pertanyaan_jawaban";
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

	
	function cbc_pertanyaan_jawaban_insert(
		$VAR_ID_PERTANYAAN_JAWABAN,
		$VAR_ID_PERTANYAAN,
		$VAR_JAWABAN,
		$VAR_JAWABAN_POINT,
		$VAR_URUTAN_KE,
		$VAR_KETERANGAN,
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
		$query = "INSERT INTO cbc_pertanyaan_jawaban
		(
			ID_PERTANYAAN_JAWABAN,
			ID_PERTANYAAN,
			JAWABAN,
			JAWABAN_POINT,
			URUTAN_KE,
			KETERANGAN,
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
		VALUES 
		(
			NULL,
			'$VAR_ID_PERTANYAAN',
			'$VAR_JAWABAN',
			'$VAR_JAWABAN_POINT',
			'$VAR_URUTAN_KE',
			'$VAR_KETERANGAN',
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
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	

	function cbc_pertanyaan_jawaban_delete($ID_PERTANYAAN_JAWABAN)
	{ 
		include "lib/config.php";					
		$query = "delete from cbc_pertanyaan_jawaban where ID_PERTANYAAN_JAWABAN = $ID_PERTANYAAN_JAWABAN";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 

?>