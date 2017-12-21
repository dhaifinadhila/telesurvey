<?php

	function cbc_hak_akses_update($VAR_ID_HAK_AKSES,$VAR_KODE_HAK_AKSES,$VAR_KETERANGAN)
	{	
		include "lib/config.php";				
		$query = "update cbc_hak_akses set kode_hak_akses = '$VAR_KODE_HAK_AKSES', keterangan = '$VAR_KETERANGAN' where id_hak_akses = $VAR_ID_HAK_AKSES ";
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;			
	}


	function cbc_hak_akses_search_by_id_hak_akses($VAR_ID_HAK_AKSES)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_HAK_AKSES where id_hak_akses = $VAR_ID_HAK_AKSES";
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

	function cbc_hak_akses_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_HAK_AKSES";
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

	
	function cbc_hak_akses_insert(
		$VAR_ID_HAK_AKSES,
		$VAR_KODE_HAK_AKSES,
		$VAR_KETERANGAN,
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05
		)
	{ 
		include "lib/config.php";					
		$query = "INSERT INTO cbc_hak_akses
		(
			ID_HAK_AKSES,
			KODE_HAK_AKSES,
			KETERANGAN,
			INFORMASI_01,
			INFORMASI_02,
			INFORMASI_03,
			INFORMASI_04,
			INFORMASI_05  
		) 
		VALUES 
		(
		    NULL,
			'$VAR_KODE_HAK_AKSES',
			'$VAR_KETERANGAN',
			'$VAR_INFORMASI_01',
			'$VAR_INFORMASI_02',
			'$VAR_INFORMASI_03',
			'$VAR_INFORMASI_04',
			'$VAR_INFORMASI_05'    
		)
		";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	}

	

	function cbc_hak_akses_delete($ID_HAK_AKSES)
	{ 
		include "lib/config.php";					
		$query = "delete from cbc_hak_akses where ID_HAK_AKSES = $ID_HAK_AKSES";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 

?>