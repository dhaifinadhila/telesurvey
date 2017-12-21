<?php
include_once("lib/config.php");

	function call_view_all()
	{
		$query = "select * from tb_call";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function search_by_id_call($id_call)
	{
		$query = "SELECT * FROM tb_call WHERE id_call ='$id_call'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function get_call_by_id_master($id_master)
	{
		$query = "SELECT * FROM `tb_call` WHERE id_master ='$id_master'";
		//	echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_call($id_call,$id_master,$nama_rek,$nama_penjawab,$kesesuaian_nama,$kepemilikan,$profesi,$jumlah_gaji,$pemakaian_bln,$penghematan,$alasan_hemat,$cara_hemat,$interest_alat_listrik,$pengetahuan_tarif,$gangguan_listrik,$pengaruh_ac,$biaya_tagihan,$saran,$id_user,$tgl_call,$info_01,$info_02,$info_03,$info_04,$info_05)
	{
		$query="UPDATE `tb_call` 
				SET `id_master`='" .$id_master. "',
					`nama_rek`='" .$nama_rek. "',
					`nama_penjawab`='" .$nama_penjawab. "',
					`kesesuaian_nama`='" .$kesesuaian_nama. "',
					`kepemilikan`='" .$kepemilikan. "',
					`profesi`='" .$profesi. "',
					`jumlah_gaji`='" .$jumlah_gaji. "',
					`pemakaian_bln`='" .$pemakaian_bln. "',
					`penghematan`='" .$penghematan. "',
					`alasan_hemat`='" .$alasan_hemat. "',
					`cara_hemat`='" .$cara_hemat. "',
					`interest_alat_listrik`='" .$interest_alat_listrik. "',
					`pengetahuan_tarif`='" .$pengetahuan_tarif. "',
					`gangguan_listrik`='" .$gangguan_listrik. "',
					`pengaruh_ac`='" .$pengaruh_ac. "',
					`biaya_tagihan`='" .$biaya_tagihan. "',
					`saran`='" .$saran. "',
					`id_user`='" .$id_user. "',
					`tgl_call`='" .$tgl_call. "',
					`info_01`='" .$info_01. "',
					`info_02`='" .$info_02. "',
					`info_03`='" .$info_03. "',
					`info_04`='" .$info_04. "',
					`info_05`='" .$info_05. "',
				WHERE id_call = '" .$id_call. "' LIMIT 1";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate=1; } else { $returnUpdate=0; }
		return $returnUpdate;
	}

	function delete_call($id_call)
	{
		$query="DELETE FROM tb_call WHERE id_call = " .$id_call. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_call($id_master,$nama_rek,$nama_penjawab,$kesesuaian_nama,$kepemilikan,$profesi,$profesi_lain,$jumlah_gaji,$pemakaian_bln,$penghematan,$alasan_hemat,$alasan_hemat_lain,$cara_hemat,$cara_hemat_lain,$interest_alat_listrik,$pengetahuan_tarif,$gangguan_listrik,$pengaruh_ac,$biaya_tagihan,$saran,$kriteria_gagal,$id_user,$tgl_call,$info_01,$info_02,$info_03,$info_04,$info_05,$info_06,$info_07,$info_08,$info_09,$info_10)
	{
		$query="INSERT INTO `tb_call` (`id_master`, `nama_rek`, `nama_penjawab`, `kesesuaian_nama`, `kepemilikan`, `profesi`, `profesi_lain`, `jumlah_gaji`, `pemakaian_bln`, `penghematan`, `alasan_hemat`, `alasan_hemat_lain`, `cara_hemat`, `cara_hemat_lain`, `interest_alat_listrik`, `pengetahuan_tarif`, `gangguan_listrik`, `pengaruh_ac`, `biaya_tagihan`, `saran`, `kriteria_gagal`, `id_user`, `tgl_call`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) 
				VALUES ('" .$id_master. "',
						'" .$nama_rek. "',
						'" .$nama_penjawab. "',
						'" .$kesesuaian_nama. "',
						'" .$kepemilikan. "',
						'" .$profesi. "',
						'" .$profesi_lain. "',
						'" .$jumlah_gaji. "',
						'" .$pemakaian_bln. "',
						'" .$penghematan. "',
						'" .$alasan_hemat. "',
						'" .$alasan_hemat_lain. "',
						'" .$cara_hemat. "',
						'" .$cara_hemat_lain. "',
						'" .$interest_alat_listrik. "',
						'" .$pengetahuan_tarif. "',
						'" .$gangguan_listrik. "',
						'" .$pengaruh_ac. "',
						'" .$biaya_tagihan. "',
						'" .$saran. "',
						'" .$kriteria_gagal. "',
						'" .$id_user. "',
						'" .$tgl_call. "',
						'" .$info_01. "',
				 		'" .$info_02. "',
				 		'" .$info_03. "',
				 		'" .$info_04. "',
				 		'" .$info_05. "',
				 		'" .$info_06. "',
				 		'" .$info_07. "',
				 		'" .$info_08. "',
				 		'" .$info_09. "',
				 		'" .$info_10. "'
				 		)";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}


?>
