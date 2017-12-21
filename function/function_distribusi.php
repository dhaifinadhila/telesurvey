<?php

include "lib/config.php";	

	function tb_distribusi_view()
	{
		$query = "SELECT * FROM tb_distribusi";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}


	function search_by_id_distribusi($id_distribusi)
	{
		$query = "SELECT * FROM tb_distribusi WHERE id_distribusi ='$id_distribusi'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_distribusi($id_distribusi,$kode_distribusi,$nama_distribusi,$ket_distribusi)
	{ 
	
		$query="UPDATE tb_distribusi 
				SET kode_distribusi = '" .$kode_distribusi. "',
				nama_distribusi = '" .$nama_distribusi. "',
				keterangan = '" .$ket_distribusi. "'
				WHERE id_distribusi = '" .$id_distribusi. "' LIMIT 1";
		//echo $sql;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate=1; } else { $returnUpdate=0; }
		return $returnUpdate;
	}
	
	function delete_distribusi($id_distribusi)
	{ 
		$query="DELETE FROM tb_distribusi WHERE id_distribusi = " .$id_distribusi. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_distribusi($kode_distribusi,$nama_distribusi,$ket_distribusi)
	{ 
		$query="INSERT INTO tb_distribusi (kode_distribusi,nama_distribusi,keterangan) VALUES ('" .$kode_distribusi. "','" .$nama_distribusi. "','" .$ket_distribusi. "')";
		//echo $query;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}

	
?>
