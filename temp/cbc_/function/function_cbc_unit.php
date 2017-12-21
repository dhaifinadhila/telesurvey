<?php

	function cbc_UNIT_search_BY_KODE_UNIT($VAR_KODE_UNIT)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_UNIT where KODE_UNIT = $VAR_KODE_UNIT";
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

	function cbc_UNIT_update($ID_UNIT,$KODE_DISTRIBUSI,$KODE_UNIT,$NAMA_UNIT,$ALAMAT)
	{ 
		include "lib/config.php";					
		$query = "update cbc_unit set kode_distribusi = '$KODE_DISTRIBUSI', kode_unit='$KODE_UNIT', nama_unit = '$NAMA_UNIT', alamat='$ALAMAT' where id_unit = '$ID_UNIT' ";
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function cbc_UNIT_search_ID_UNIT($VAR_ID_UNIT)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_UNIT where ID_UNIT = $VAR_ID_UNIT";
		
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


	function cbc_UNIT_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_UNIT";
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

	
	function cbc_UNIT_insert(
		$VAR_ID_UNIT,
		$VAR_KODE_DISTRIBUSI,
		$VAR_KODE_UNIT,
		$VAR_NAMA_UNIT,
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
		$query = "INSERT INTO cbc_UNIT
		(
			ID_UNIT,
			KODE_DISTRIBUSI,
			KODE_UNIT,
			NAMA_UNIT,
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
			'$VAR_KODE_UNIT',
			'$VAR_NAMA_UNIT',
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

	

	function cbc_UNIT_delete($ID_UNIT)
	{ 
		include "lib/config.php";				
		$query = "delete from cbc_UNIT where ID_UNIT = $ID_UNIT";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 

?>