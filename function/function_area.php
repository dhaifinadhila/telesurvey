<?php
include_once("lib/config.php");

	function tb_area_view()
	{
		$query = "select * from tb_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function search_by_id_area($id_area)
	{
		$query = "select * from tb_area WHERE id_area ='$id_area'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_area($id_area,$kode_distribusi,$kode_area,$nama_area,$ket_area)
	{
		$query="UPDATE tb_area 
				SET kode_distribusi = '" .$kode_distribusi. "',
				kode_area = '" .$kode_area. "',
				nama_area = '" .$nama_area. "',
				keterangan = '" .$ket_area. "' 
				WHERE id_area = '" .$id_area. "' LIMIT 1";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate_area=1; } else { $returnUpdate_area=0; }
		return $returnUpdate_area;
	}

	function delete_area($id_area)
	{
		$query="DELETE FROM tb_area WHERE id_area = " .$id_area. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_area($kode_distribusi,$kode_area,$nama_area,$ket_area)
	{
		$query="INSERT INTO tb_area (id_area,kode_distribusi,kode_area,nama_area,keterangan) VALUES (NULL,'" .$kode_distribusi. "','" .$kode_area. "','" .$nama_area. "','" .$ket_area. "')";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}


?>
