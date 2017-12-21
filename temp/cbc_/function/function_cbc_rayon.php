<?php

	function cbc_rayon_update($VAR_ID_RAYON,$VAR_KODE_DISTRIBUSI,$VAR_KODE_UNIT,$VAR_KODE_RAYON,$VAR_NAMA_RAYON,$VAR_ALAMAT)
	{ 
		include "lib/config.php";					
		$query = "update cbc_rayon set kode_distribusi = '$VAR_KODE_DISTRIBUSI', kode_unit = '$VAR_KODE_UNIT', kode_rayon ='$VAR_KODE_RAYON', nama_rayon = '$VAR_NAMA_RAYON', alamat = '$VAR_ALAMAT' where id_rayon = $VAR_ID_RAYON";
		echo $query;
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


	function cbc_rayon_search_by_id_rayon($VAR_ID_RAYON)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_rayon where id_rayon = $VAR_ID_RAYON ";
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


	function cbc_rayon_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_rayon";
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

	
	function cbc_rayon_insert(
		$VAR_ID_RAYON,
		$VAR_KODE_DISTRIBUSI,
		$VAR_KODE_UNIT,
		$VAR_KODE_RAYON,
		$VAR_NAMA_RAYON,
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
		$query = "INSERT INTO cbc_rayon
		(
			ID_RAYON,
			KODE_DISTRIBUSI,
			KODE_UNIT,
			KODE_RAYON,
			NAMA_RAYON,
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
			'$VAR_KODE_RAYON',
			'$VAR_NAMA_RAYON',
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

	

	function cbc_rayon_delete($ID_rayon)
	{ 
		include "lib/config.php";					
		$query = "delete from cbc_rayon where ID_rayon = $ID_rayon";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 

?>