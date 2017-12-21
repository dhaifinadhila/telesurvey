<?php

	function update_master_call_telp($notelp,$ID_MASTER_CALL)
	{ 
 		include "lib/config.php";		
		$query = "update cbc_master_call set notelp_pemohon = '$notelp', cbc_status_call = '0' where id_master_call = $ID_MASTER_CALL ";		
		//echo $query;
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 

	function update_master_call_sudah_callback($ID_MASTER_CALL)
	{ 
 		include "lib/config.php";		
		$query = "UPDATE cbc_master_call SET cbc_status_call='2' where ID_MASTER_CALL = $ID_MASTER_CALL";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


	// pencarian data sudah callback by jenis mutasi
	function sudah_callback($var_JENIS_MUTASI) 
	{	
		include "lib/config.php";		
		//$query = "select * from CBC_MASTER_CALL where CBC_JENIS_MUTASI = $var_JENIS_MUTASI AND CBC_STATUS_CALL='2' ";
		$query = "select * from cbc_master_call where id_master_call in ( select id_master_call from cbc_callback  where jenis_mutasi = $var_JENIS_MUTASI )";
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

	// pencarian data belum callback by jenis mutasi
	function belum_callback($var_JENIS_MUTASI) 
	{	
		include "lib/config.php";		
		$query = "select * from CBC_MASTER_CALL where CBC_JENIS_MUTASI = $var_JENIS_MUTASI AND CBC_STATUS_CALL='0' ";
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


	function cbc_master_call_search_by_ID_MASTER_CALL($var_ID_MASTER_CALL)
	{	
		include "lib/config.php";		
		$query = "select * from CBC_MASTER_CALL where ID_MASTER_CALL = $var_ID_MASTER_CALL";
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


	function cbc_master_call_view_all()
	{	
		include "lib/config.php";		
		$query = "select * from CBC_MASTER_CALL";
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

	
	function cbc_master_call_insert(
		$VAR_ID_MASTER_CALL,
		$VAR_NOAGENDA,
		$VAR_NO_REGISTRASI,
		$VAR_TGLMOHON,
		$VAR_IDPEL,
		$VAR_NAMA,
		$VAR_ALAMAT,
		$VAR_NOTELP_PEMOHON,
		$VAR_NOTELP_HP_PEMOHON,
		$VAR_ASALMOHON,
		$VAR_UPIENTRI,
		$VAR_PETUGASCATAT,
		$VAR_TARIF_LAMA,
		$VAR_DAYA_LAMA,
		$VAR_TARIF,
		$VAR_DAYA,
		$VAR_JENIS_TRANSAKSI,
		$VAR_PAKET_SAR,
		$VAR_TOTALBIAYA,
		$VAR_TGLBAYAR,
		$VAR_LAMAMOHON,
		$VAR_STATUS_PERMOHONAN,
		$VAR_TGL_UPDATE_PERMOHONAN,
		$VAR_TGLPK,
		$VAR_TGLNYALA,
		$VAR_NAMAUPI,
		$VAR_NAMAAP,
		$VAR_NAMAUP,
		$VAR_UNITTUJUAN,
		$VAR_CBC_JENIS_MUTASI,
		$VAR_CBC_STATUS_CALL,
		$VAR_CBC_TANGGAL_UPLOAD,
		$VAR_CBC_KODE_DISTRIBUSI,
		$VAR_CBC_KODE_UNIT,
		$VAR_CBC_KODE_RAYON,
		$VAR_CBC_ID_FILE_EXCELL,
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
		$query = "INSERT INTO cbc_master_call
		(
			ID_MASTER_CALL,
			NOAGENDA,
			NO_REGISTRASI,
			TGLMOHON,
			IDPEL,
			NAMA,
			ALAMAT,
			NOTELP_PEMOHON,
			NOTELP_HP_PEMOHON,
			ASALMOHON,
			UPIENTRI,
			PETUGASCATAT,
			TARIF_LAMA,
			DAYA_LAMA,
			TARIF,
			DAYA,
			JENIS_TRANSAKSI,
			PAKET_SAR,
			TOTALBIAYA,
			TGLBAYAR,
			LAMAMOHON,
			STATUS_PERMOHONAN,
			TGL_UPDATE_PERMOHONAN,
			TGLPK,
			TGLNYALA,
			NAMAUPI,
			NAMAAP,
			NAMAUP,
			UNITTUJUAN,
			CBC_JENIS_MUTASI,
			CBC_STATUS_CALL,
			CBC_TANGGAL_UPLOAD,
			CBC_KODE_DISTRIBUSI,
			CBC_KODE_UNIT,
			CBC_KODE_RAYON,
			CBC_ID_FILE_EXCELL,
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
		VALUES 
		(
			NULL,
			'$VAR_NOAGENDA',
			'$VAR_NO_REGISTRASI',
			to_date('$VAR_TGLMOHON','YYYY-MM-DD'),
			'$VAR_IDPEL',
			'$VAR_NAMA',
			'$VAR_ALAMAT',
			'$VAR_NOTELP_PEMOHON',
			'$VAR_NOTELP_HP_PEMOHON',
			'$VAR_ASALMOHON',
			'$VAR_UPIENTRI',
			'$VAR_PETUGASCATAT',
			'$VAR_TARIF_LAMA',
			'$VAR_DAYA_LAMA',
			'$VAR_TARIF',
			'$VAR_DAYA',
			'$VAR_JENIS_TRANSAKSI',
			'$VAR_PAKET_SAR',
			'$VAR_TOTALBIAYA',
			to_date('$VAR_TGLBAYAR','YYYY-MM-DD'),
			'$VAR_LAMAMOHON',
			'$VAR_STATUS_PERMOHONAN',
			to_date('$VAR_TGL_UPDATE_PERMOHONAN','YYYY-MM-DD'),
			to_date('$VAR_TGLPK','YYYY-MM-DD'),
			to_date('$VAR_TGLNYALA','YYYY-MM-DD'),
			'$VAR_NAMAUPI',
			'$VAR_NAMAAP',
			'$VAR_NAMAUP',
			'$VAR_UNITTUJUAN',
			'$VAR_CBC_JENIS_MUTASI',
			'$VAR_CBC_STATUS_CALL',
			to_date('$VAR_CBC_TANGGAL_UPLOAD','YYYY-MM-DD'),
			'$VAR_CBC_KODE_DISTRIBUSI',
			'$VAR_CBC_KODE_UNIT',
			'$VAR_CBC_KODE_RAYON',
			'$VAR_CBC_ID_FILE_EXCELL',
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

	

	function cbc_master_call_delete($ID_MASTER_CALL)
	{ 
 		include "lib/config.php";		
		$query = "delete from cbc_master_call where ID_MASTER_CALL = $ID_MASTER_CALL";		
		$stmt = oci_parse($connection, $query);						
		if(oci_execute($stmt))
		{ $result = 1;}
		else 
		{ $result = $query; }			
		return $result;		
	} 


 

?>