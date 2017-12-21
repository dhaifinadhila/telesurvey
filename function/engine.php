<?php
	function login($usernamenya,$passwordnya)
	{	
		include "lib/config.php";				
		$query = "select * from  tb_user where email = '$usernamenya' AND passwd = '$passwordnya' ";
		//echo $query;
		
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function belum_call()
	{
		$query = "SELECT * FROM tb_master WHERE status_call ='0'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function sudah_call()
	{
		$query = "SELECT * FROM tb_master WHERE status_call ='1'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function call_blth($blth)
	{
		$query = "SELECT * FROM tb_master m, tb_call c 
					WHERE m.status_call ='1' 
					AND c.info_01 = '$blth'
					AND m.id_master=c.id_master";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function gagal_call()
	{
		$query = "SELECT * FROM tb_master WHERE status_call ='2'";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}



?>