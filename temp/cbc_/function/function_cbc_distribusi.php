<?php

	function cbc_DISTRIBUSI_update($ID_DISTRIBUSI,$KODE_DISTRIBUSI,$NAMA_DISTRIBUSI,$ALAMAT)
	{ 
		include "lib/config.php";					
		$query = "update cbc_distribusi set kode_distribusi = '$KODE_DISTRIBUSI', nama_distribusi = '$NAMA_DISTRIBUSI', alamat = '$ALAMAT' where id_distribusi = '$ID_DISTRIBUSI' ";
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


	function cbc_DISTRIBUSI_search_by_ID_Distribusi($VAR_ID_DISTRIBUSI)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_DISTRIBUSI WHERE id_distribusi = $VAR_ID_DISTRIBUSI ";
		$statement	= oci_parse($connection, $query);
		oci_execute($statement);
		oci_fetch_array ($statement, OCI_ASSOC);
		$row_count	= oci_num_rows($statement);	
		$result = array();				
		if ($row_count > 0) {								
			oci_execute($statement);
			$i=1;		
			while ($row = oci_fetch_array ($statement,OCI_ASSOC)) {	
				array_push($result,$row);					
				$i++;
			}
		}			
		return $result;		
	} 

	function cbc_DISTRIBUSI_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_DISTRIBUSI";
		$statement	= oci_parse($connection, $query);
		oci_execute($statement);
		oci_fetch_array ($statement, OCI_ASSOC);
		$row_count	= oci_num_rows($statement);	
		$result = array();				
		if ($row_count > 0) {								
			oci_execute($statement);
			$i=1;		
			while ($row = oci_fetch_array ($statement,OCI_ASSOC)) {	
				array_push($result,$row);					
				$i++;
			}
		}			
		return $result;		
	}

	
	function cbc_DISTRIBUSI_insert(
		$VAR_ID_DISTRIBUSI,
		$VAR_KODE_DISTRIBUSI,
		$VAR_NAMA_DISTRIBUSI,
		$VAR_ALAMAT,
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
		$query = "INSERT INTO cbc_DISTRIBUSI
		(
			ID_DISTRIBUSI,
			KODE_DISTRIBUSI,
			NAMA_DISTRIBUSI,
			ALAMAT,
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
			'$VAR_KODE_DISTRIBUSI',
			'$VAR_NAMA_DISTRIBUSI',
			'$VAR_ALAMAT',
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

	

	function cbc_DISTRIBUSI_delete($ID_DISTRIBUSI)
	{ 
		include "lib/config.php";					
		$query = "delete from cbc_DISTRIBUSI where ID_DISTRIBUSI = $ID_DISTRIBUSI";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 

?>