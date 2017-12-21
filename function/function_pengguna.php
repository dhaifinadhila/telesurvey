<?php

include "lib/config.php";	


	function pengguna_view()
	{
		$query = "SELECT * FROM tb_user";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function search_by_id_pengguna($id_pengguna)
	{
		$query = "SELECT * FROM tb_user WHERE id_pengguna ='$id_pengguna'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function update_pengguna($id_pengguna,$kode_distribusi,$kode_area,$nip,$nama,$email,$passwd,$jabatan,$kode_hak_akses)
	{
		$query="UPDATE tb_user 
				SET kode_distribusi = '" .$kode_distribusi. "',
				kode_area = '" .$kode_area. "',
				nip = '" .$nip. "',
				nama = '" .$nama. "',
				email = '" .$email. "',
				passwd = '" .$passwd. "',
				jabatan = '" .$jabatan. "',
				kode_hak_akses = '" .$kode_hak_akses. "'
				WHERE id_pengguna = '" .$id_pengguna. "' LIMIT 1";
		//echo $sql;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate_pengguna=1; } else { $returnUpdate_pengguna=0; }
		return $returnUpdate_pengguna;
	}

	function delete_pengguna($id_pengguna)
	{
		$query="DELETE FROM tb_user WHERE id_pengguna = " .$id_pengguna. " LIMIT 1";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}
	
	function insert_pengguna($kode_distribusi,$kode_area,$nip,$nama,$email,$passwd,$jabatan,$kode_hak_akses)
	{
		$query="INSERT INTO tb_user (id_pengguna,kode_distribusi,kode_area,nip,nama,email,passwd,jabatan,kode_hak_akses) 
				VALUES (NULL,'" .$kode_distribusi. "','" .$kode_area. "','" .$nip. "','" .$nama. "','" .$email. "','" .$passwd. "','" .$jabatan. "','" .$kode_hak_akses. "')";
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}

	function update_password($id_pengguna,$passwd)
	{
		$query="UPDATE tb_user 
				SET 
				passwd = '" .$passwd. "'
				
				WHERE id_pengguna = '" .$id_pengguna. "' LIMIT 1";
		//echo $sql;
		$resultQuery=mysql_query($query);
		if($resultQuery){ $returnUpdate_pengguna=1; } else { $returnUpdate_pengguna=0; }
		return $returnUpdate_pengguna;
	}


?>
