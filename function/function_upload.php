<?php
include "lib/config.php";	
	function select_fileupload()
	{
		$sql="SELECT * FROM tb_file_upload  ORDER BY id_file_upload DESC " ;
		$resultQuery=mysql_query($sql);
		while ($rows=mysql_fetch_array($resultQuery)){
			$data[] = $rows;
		}
		return $data;
	}

	function get_by_nama_file($nama_file)
	{
		$sql="SELECT * FROM tb_file_upload WHERE nama_file = '" .mysql_real_escape_string(trim($nama_file)). "'  ";
	  	//echo $sql;
		$resultQuery=mysql_query($sql);
		while ($rows=mysql_fetch_array($resultQuery)){
			$data[] = $rows;
		}
		return $data;
	}

	function delete_by_id($var_id_file_upload)
	{
		$sql="DELETE FROM tb_file_upload WHERE id_file_upload= " .mysql_real_escape_string(trim($var_id_file_upload)). " LIMIT 1";
		$resultQuery=mysql_query($sql);
		if($resultQuery){ $returnDelete=1; } else { $returnDelete=0; }
		return $returnDelete;
	}

	function insert_fileupload($var_id_pengguna,$var_kode_area,$var_nama_file,$var_jumlah_row,$var_tgl_upload)
	{
		$sql="INSERT INTO tb_file_upload (`id_pengguna`, `kode_area`, `nama_file`, `jumlah_row`, `tgl_upload`)
				VALUES (
				'" .mysql_real_escape_string(trim($var_id_pengguna)). "',
				'" .mysql_real_escape_string(trim($var_kode_area)). "',
				'" .mysql_real_escape_string(trim($var_nama_file)). "',
				'" .mysql_real_escape_string(trim($var_jumlah_row)). "',
				'" .mysql_real_escape_string(trim($var_tgl_upload)). "')";
				//echo $sql;
		$resultQuery=mysql_query($sql);
		if($resultQuery){ $returnInsert=1; } else { $returnInsert=0; }
		return $returnInsert;
	}


?>
