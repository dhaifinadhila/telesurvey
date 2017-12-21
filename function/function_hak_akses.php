<?php
include_once("lib/config.php");

	function tb_hak_akses_view()
	{
		$query = "select * from tb_hak_akses";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_hak_akses($id_hak_akses,$kode_hak_akses,$nama_hak_akses)
	{ 
		$query="UPDATE tb_hak_akses 
				SET kode_hak_akses = '" .$kode_hak_akses. "',
				nama_hak_akses = '" .$nama_hak_akses. "'
				WHERE id_hak_akses = '" .$id_hak_akses. "' LIMIT 1";
		//echo $sql;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate=1; } else { $returnUpdate=0; }
		return $returnUpdate;
	}

	function search_by_id_hak_akses($id_hak_akses)
	{
		$query = "select * from tb_hak_akses WHERE id_hak_akses ='$id_hak_akses'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function search_by_kd_hak_akses($kd_hak_akses)
	{
		$query = "select * from tb_hak_akses WHERE kode_hak_akses ='$kd_hak_akses'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function delete_hak_akses($id_hak_akses)
	{ 
		$query="DELETE FROM tb_hak_akses WHERE id_hak_akses = " .$id_hak_akses. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_hak_akses($kode_hak_akses,$nama_hak_akses)
	{ 
		$query="INSERT INTO tb_hak_akses (id_hak_akses,kode_hak_akses,nama_hak_akses) VALUES (NULL,'" .$kode_hak_akses. "','" .$nama_hak_akses. "')";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}

	
?>
