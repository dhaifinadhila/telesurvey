<?php

	function login($usernamenya,$passwordnya)
	{	
		include "lib/config.php";				
		$query = "select * from  CBC_PENGGUNA where email = '$usernamenya' AND password = '$passwordnya' ";
		//echo $query;
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


	function biaya_sendiri_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_sendiri_pb ";
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

	function biaya_sendiri_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_sendiri_pd ";
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


	function biaya_oranglain_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_oranglain_pb ";
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


	function biaya_oranglain_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_biaya_oranglain_pd ";
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



	function kecepatan_sendiri_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_sendiri_pb ";
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

	function kecepatan_oranglain_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_oranglain_pb ";
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


	function kecepatan_sendiri_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_sendiri_pd ";
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

	function kecepatan_oranglain_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_oranglain_pd ";
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

	function analisa_diurus_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_diurus_pd ";
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

	function analisa_diurus_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_diurus_pb ";
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



	function mv_analisa_telp_plg_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_telp_plg_pb ";
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

	function mv_analisa_telp_plg_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_analisa_telp_plg_pd ";
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



	function rekap_tambahan_biaya_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_tambahan_biaya_pb ";
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

	function rekap_tambahan_biaya_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_tambahan_biaya_pd ";
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



	function rekap_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_rekap_pb ";
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

	function rekap_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_rekap_pd ";
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


	function rekap_kecepatan_layanan_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_layanan_pd ";
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


	function rekap_kecepatan_layanan_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_kecepatan_layanan_pb ";
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


	function rekap_hts_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  MV_HTS_PD ";
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


	function rekap_hts_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  MV_HTS_PB ";
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

	function rekap_integritas_pd()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_integritas_pd ";
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

	function rekap_integritas_pb()
	{	
		include "lib/config.php";				
		$query = "select * from  mv_integritas_pb ";
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


	function rekap_petugas_by_kontribusi_blth_sum($blth)
	{	
		include "lib/config.php";				
		$query = "select SUM(total_pelanggan) as TOTAL_PLG from mv_pengguna_kinerja_blth where callback_bulan = '$blth' ";
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

	function rekap_petugas_by_kontribusi_sum()
	{	
		include "lib/config.php";				
		$query = "select SUM(total_pelanggan) as TOTAL_PLG from mv_pengguna_kinerja";
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


	function rekap_petugas_by_kontribusi()
	{	
		include "lib/config.php";				
		$query = "select * from mv_pengguna_kinerja";
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

	function rekap_petugas_by_kontribusi_blth($blth)
	{	
		include "lib/config.php";				
		$query = "select * from mv_pengguna_kinerja_blth where callback_bulan = '$blth' ";
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


?>