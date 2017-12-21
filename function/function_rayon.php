<?php
include_once("lib/config.php");

	function tb_rayon_view()
	{
		$query = "select * from tb_rayon";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function search_by_id_rayon($id_rayon)
	{
		$query = "select * from tb_rayon WHERE id_rayon ='$id_rayon'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_rayon($id_rayon,$kode_distribusi,$kode_rayon,$nama_rayon,$ket_rayon)
	{
		$query="UPDATE tb_rayon 
				SET kode_distribusi = '" .$kode_distribusi. "',
				kode_area = '" .$kode_area. "',
				kode_rayon = '" .$kode_rayon. "',
				nama_rayon = '" .$nama_rayon. "',
				keterangan = '" .$ket_rayon. "' 
				WHERE id_rayon = '" .$id_rayon. "' LIMIT 1";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate_rayon=1; } else { $returnUpdate_rayon=0; }
		return $returnUpdate_rayon;
	}

	function delete_rayon($id_rayon)
	{
		$query="DELETE FROM tb_rayon WHERE id_rayon = " .$id_rayon. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_rayon($kode_distribusi,$kode_area,$kode_rayon,$nama_rayon,$ket_rayon)
	{
		$query="INSERT INTO tb_rayon (id_rayon,kode_area,kode_distribusi,kode_rayon,nama_rayon,keterangan) 
		VALUES (NULL,'" .$kode_distribusi. "','" .$kode_area. "','" .$kode_rayon. "','" .$nama_rayon. "','" .$ket_rayon. "')";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}


?>
