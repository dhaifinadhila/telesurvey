<?php

	function cbc_pengguna_update($VAR_ID_PENGGUNA,$VAR_KODE_DISTRIBUSI, $VAR_KODE_UNIT, $VAR_KODE_RAYON, $VAR_NIP, $VAR_EMAIL, $VAR_PASSWORD, $VAR_NAMA, $VAR_JABATAN, $VAR_HAK_AKSES, $VAR_TARGET_CALL)
	{ 
		include "lib/config.php";					
		$query = "	update cbc_pengguna set kode_distribusi = '$VAR_KODE_DISTRIBUSI',kode_unit='$VAR_KODE_UNIT',kode_rayon='$VAR_KODE_RAYON', nip='$VAR_NIP',email='$VAR_EMAIL',password='$VAR_PASSWORD',nama='$VAR_NAMA',jabatan='$VAR_JABATAN', hak_akses='$VAR_HAK_AKSES',
		target_call = '$VAR_TARGET_CALL' 
		where
		id_pengguna = '$VAR_ID_PENGGUNA' ";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function cbc_pengguna_search_by_id_pengguna($VAR_ID_PENGGUNA)
	{	
		include "lib/config.php";				
		$query = "select * from CBC_PENGGUNA where id_pengguna = $VAR_ID_PENGGUNA";
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


	function cbc_pengguna_view_all()
	{	
		include "lib/config.php";				
		$query = "select * from CBC_PENGGUNA";
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

	
	function cbc_pengguna_insert($VAR_KODE_DISTRIBUSI, $VAR_KODE_UNIT, $VAR_KODE_RAYON, $VAR_NIP, $VAR_EMAIL, $VAR_PASSWORD, $VAR_NAMA, $VAR_JABATAN, $VAR_HAK_AKSES, $VAR_TARGET_CALL, $VAR_INFORMASI_01, $VAR_INFORMASI_02, $VAR_INFORMASI_03, $VAR_INFORMASI_04, $VAR_INFORMASI_05, $VAR_INFORMASI_06, $VAR_INFORMASI_07, $VAR_INFORMASI_08, $VAR_INFORMASI_09, $VAR_INFORMASI_10)
	{ 
		include "lib/config.php";					
		$query = "INSERT INTO cbc_pengguna
		(
		  ID_PENGGUNA,     
		  KODE_DISTRIBUSI, 
		  KODE_UNIT,       
		  KODE_RAYON,      
		  NIP,             
		  EMAIL,           
		  PASSWORD,        
		  NAMA,            
		  JABATAN,         
		  HAK_AKSES,       
		  TARGET_CALL,     
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
		  '$VAR_NIP',             
		  '$VAR_EMAIL',           
		  '$VAR_PASSWORD',        
		  '$VAR_NAMA',            
		  '$VAR_JABATAN',         
		  '$VAR_HAK_AKSES',       
		  '$VAR_TARGET_CALL',     
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

	

	function cbc_pengguna_delete($id_cbc_pengguna)
	{ 
		include "lib/config.php";					
		$query = "delete from cbc_pengguna where ID_PENGGUNA = $id_cbc_pengguna";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 
?>