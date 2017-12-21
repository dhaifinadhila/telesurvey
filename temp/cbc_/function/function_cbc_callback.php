<?php

	function cbc_callback_search_by_ID_MASTER_CALL($ID_MASTER_CALL)
	{	
		include "lib/config.php";		
		$query = "select * from CBC_CALLBACK where ID_MASTER_CALL = $ID_MASTER_CALL ";
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



	function cbc_callback_search_by_ID_CALLBACK($ID_CALLBACK)
	{	
		include "lib/config.php";		
		$query = "select * from CBC_CALLBACK where ID_CALLBACK = $ID_CALLBACK ";
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


	function cbc_callback_view_all()
	{	
		include "lib/config.php";		
		$query = "select * from CBC_CALLBACK";
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


	function cbc_callback_insert(  
	  $VAR_ID_CALLBACK,                 
	  $VAR_ID_MASTER_CALL,             
	  $VAR_KODE_DISTRIBUSI,            
	  $VAR_KODE_UNIT,                  
	  $VAR_KODE_RAYON,                 
	  $VAR_ID_PENGGGUNA,               
	  $VAR_JENIS_MUTASI,               
	  $VAR_NOMOR_TELP_PELANGGAN,       
	  $VAR_NOMOR_TELP_PELANGGAN_BUKAN, 
	  $VAR_PERMINTAAN_VIA,             
	  $VAR_PERMINTAAN_VIA_ORANGLAIN,   
	  $VAR_KECEPATAN_LAYANAN,          
	  $VAR_TAMBAHAN_BIAYA,             
	  $VAR_TAMBAHAN_BIAYA_WAKTU,       
	  $VAR_TAMBAHAN_BIAYA_ALASAN,      
	  $VAR_CALLBACK_TANGGAL,           
	  $VAR_CALLBACK_BULAN,             
	  $VAR_CALLBACK_POINT,             
	  $VAR_REPLY_SEND_NOTIFIKASI,      
	  $VAR_REPLY_TANGGAL,              
	  $VAR_REPLY_TANGGAL_NYALA,        
	  $VAR_REPLY_KETERANGAN,           
	  $VAR_REPLY_ID_PENGGUNA,          
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
	  )
	{ 
		include "lib/config.php";			
		$query = "
		INSERT INTO cbc_callback (
				  ID_CALLBACK,                 
				  ID_MASTER_CALL,             
				  KODE_DISTRIBUSI,            
				  KODE_UNIT,                  
				  KODE_RAYON,                 
				  ID_PENGGGUNA,               
				  JENIS_MUTASI,               
				  NOMOR_TELP_PELANGGAN,       
				  NOMOR_TELP_PELANGGAN_BUKAN, 
				  PERMINTAAN_VIA,             
				  PERMINTAAN_VIA_ORANGLAIN,   
				  KECEPATAN_LAYANAN,          
				  TAMBAHAN_BIAYA,             
				  TAMBAHAN_BIAYA_WAKTU,       
				  TAMBAHAN_BIAYA_ALASAN,      
				  CALLBACK_TANGGAL,           
				  CALLBACK_BULAN,             
				  CALLBACK_POINT,             
				  REPLY_SEND_NOTIFIKASI,      
				  REPLY_TANGGAL,              
				  REPLY_TANGGAL_NYALA,        
				  REPLY_KETERANGAN,           
				  REPLY_ID_PENGGUNA,          
				  INFORMASI_01,               
				  INFORMASI_02,               
				  INFORMASI_03,               
				  INFORMASI_04,               
				  INFORMASI_05,               
				  INFORMASI_06,               
				  INFORMASI_07,               
				  INFORMASI_08,               
				  INFORMASI_09,               
				  INFORMASI_10,               
				  INFORMASI_11,               
				  INFORMASI_12,               
				  INFORMASI_13,               
				  INFORMASI_14,               
				  INFORMASI_15,               
				  INFORMASI_16,               
				  INFORMASI_17,               
				  INFORMASI_18,               
				  INFORMASI_19,               
				  INFORMASI_20    
				)
				values 
				(
				   NULL,                 
				  '$VAR_ID_MASTER_CALL',             
				  '$VAR_KODE_DISTRIBUSI',            
				  '$VAR_KODE_UNIT',                  
				  '$VAR_KODE_RAYON',                 
				  '$VAR_ID_PENGGGUNA',               
				  '$VAR_JENIS_MUTASI',               
				  '$VAR_NOMOR_TELP_PELANGGAN',       
				  '$VAR_NOMOR_TELP_PELANGGAN_BUKAN', 
				  '$VAR_PERMINTAAN_VIA',             
				  '$VAR_PERMINTAAN_VIA_ORANGLAIN',   
				  '$VAR_KECEPATAN_LAYANAN',          
				  '$VAR_TAMBAHAN_BIAYA',             
				  '$VAR_TAMBAHAN_BIAYA_WAKTU',       
				  '$VAR_TAMBAHAN_BIAYA_ALASAN',      
				  to_date('$VAR_CALLBACK_TANGGAL','YYYY-MM-DD'),
				  '$VAR_CALLBACK_BULAN',             
				  '$VAR_CALLBACK_POINT',             
				  '$VAR_REPLY_SEND_NOTIFIKASI',  
				  to_date('$VAR_REPLY_TANGGAL','YYYY-MM-DD'),
				  to_date('$VAR_REPLY_TANGGAL_NYALA','YYYY-MM-DD'),       
				  '$VAR_REPLY_KETERANGAN',           
				  '$VAR_REPLY_ID_PENGGUNA',          
				  '$VAR_INFORMASI_01',               
				  '$VAR_INFORMASI_02',               
				  '$VAR_INFORMASI_03',               
				  '$VAR_INFORMASI_04',               
				  '$VAR_INFORMASI_05',               
				  '$VAR_INFORMASI_06',               
				  '$VAR_INFORMASI_07',               
				  '$VAR_INFORMASI_08',               
				  '$VAR_INFORMASI_09',               
				  '$VAR_INFORMASI_10',               
				  '$VAR_INFORMASI_11',               
				  '$VAR_INFORMASI_12',               
				  '$VAR_INFORMASI_13',               
				  '$VAR_INFORMASI_14',               
				  '$VAR_INFORMASI_15',               
				  '$VAR_INFORMASI_16',               
				  '$VAR_INFORMASI_17',               
				  '$VAR_INFORMASI_18',               
				  '$VAR_INFORMASI_19',               
				  '$VAR_INFORMASI_20'       
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



	function cbc_callback_jawaban_delete($ID_CALLBACK)
	{ 
		include "lib/config.php";				
		$query = "delete from cbc_callback where ID_CALLBACK = $ID_CALLBACK";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

?>