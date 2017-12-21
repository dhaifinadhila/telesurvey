<?php
include_once("lib/config.php");

	function master_view()
	{
		$query = "select * from tb_master";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function search_by_id_master($id_master)
	{
		$query = "select * from tb_master WHERE id_master ='$id_master'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function get_id_pel($id_pelanggan)
	{
		$query = "select * from tb_master WHERE id_pelanggan ='$id_pelanggan'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_master_all($kode_distribusi,$kode_area,$kode_rayon,$id_pelanggan,$nama,$alamat,$no_telp,$no_hp,$tarif,$daya,$pemkwh,$jam_nyala,$jam_nyala_600,$jam_nyala_400,$hasil_konversi,$no_registrasi,$status_call,$id_file_upload,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10)
	{
		$query="UPDATE `tb_master` 
				SET `kode_distribusi`='" .$kode_distribusi. "',
					`kode_area`='" .$kode_area. "',
					`kode_rayon`='" .$kode_rayon. "',
					`id_pelanggan`='" .$id_pelanggan. "',
					`nama`='" .$nama. "',
					`alamat`='" .$alamat. "',
					`no_telp`='" .$no_telp. "',
					`no_hp`='" .$no_hp. "',
					`tarif`='" .$tarif. "',
					`daya`='" .$daya. "',
					`pemkwh`='" .$pemkwh. "',
					`jam_nyala`='" .$jam_nyala. "',
					`jam_nyala_600`='" .$jam_nyala_600. "',
					`jam_nyala_400`='" .$jam_nyala_400. "',
					`hasil_konversi`='" .$hasil_konversi. "',
					`no_registrasi`='" .$no_registrasi. "',
					`status_call`='" .$status_call. "',
					`id_file_upload`='" .$id_file_upload. "',
					`info_01`='" .$info_01. "',
					`info_02`='" .$info_02. "',
					`info_03`='" .$info_03. "',
					`info_04`='" .$info_04. "',
					`info_05`='" .$info_05. "',
					`info_06`='" .$info_06. "',
					`info_07`='" .$info_07. "',
					`info_08`='" .$info_08. "',
					`info_09`='" .$info_09. "',
					`info_10`='" .$info_10. "'
				WHERE id_master='".$id_master."' LIMIT 1";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate=1; } else { $returnUpdate=0; }
		return $returnUpdate;
	}

	function update_master_gagal($id_master,$status_call)
	{
		$query="UPDATE `tb_master` 
				SET `status_call`='" .$status_call. "'	
				WHERE id_master='".$id_master."' LIMIT 1";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate=1; } else { $returnUpdate=0; }
		return $returnUpdate;
	}

	function update_master_success($id_master,$status_call)
	{
		$query="UPDATE `tb_master` 
				SET `status_call`='" .$status_call. "'	
				WHERE id_master='".$id_master."' LIMIT 1";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate=1; } else { $returnUpdate=0; }
		return $returnUpdate;
	}

	function delete_master($id_area)
	{
		$query="DELETE FROM tb_area WHERE id_area = " .$id_area. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_master($kode_distribusi,$kode_area,$kode_rayon,$id_pelanggan,$nama,$alamat,$no_telp,$no_hp,$tarif,$daya,$pemkwh,$jam_nyala,$jam_nyala_600,$jam_nyala_400,$hasil_konversi,$no_registrasi,$status_call,$id_file_upload,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10)
	{
		$query="INSERT INTO `tb_master` ( `kode_distribusi`, `kode_area`, `kode_rayon`, `id_pelanggan`, `nama`, `alamat`, `no_telp`, `no_hp`, `tarif`, `daya`, `pemkwh`, `jam_nyala`, `jam_nyala_600`, `jam_nyala_400`, `hasil_konversi`,`no_registrasi`, `status_call`, `id_file_upload`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`,  `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) 
			 VALUES ('" .$kode_distribusi. "',
			 		'" .$kode_area. "',
			 		'" .$kode_rayon. "',
			 		'" .$id_pelanggan. "',
			 		'" .$nama. "',
			 		'" .$alamat. "',
			 		'" .$no_telp. "',
			 		'" .$no_hp. "',
			 		'" .$tarif. "',
			 		'" .$daya. "',
			 		'" .$pemkwh. "',
			 		'" .$jam_nyala. "',
			 		'" .$jam_nyala_600. "',
			 		'" .$jam_nyala_400. "',
			 		'" .$hasil_konversi. "',
			 		'" .$no_registrasi. "',
			 		'" .$status_call. "',
			 		'" .$id_file_upload. "',
			 		'" .$info_01. "',
			 		'" .$info_02. "',
			 		'" .$info_03. "',
			 		'" .$info_04. "',
			 		'" .$info_05. "',
			 		'" .$info_06. "',
			 		'" .$info_07. "',
			 		'" .$info_08. "',
			 		'" .$info_09. "',
			 		'" .$info_10. "')";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}




?>
