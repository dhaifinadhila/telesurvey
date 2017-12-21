<?php
include_once("lib/config.php");

	function rekap_penerima_tlp()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.kesesuaian_nama = '1' then c.id_master end) as nama_sesuai, 
				count(case when c.kesesuaian_nama = '2' then c.id_master end) as nama_tidak_sesuai, 
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}

	function rekap_kepemilikan()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.kepemilikan = '1' then c.id_master end) as pemilik, 
				count(case when c.kepemilikan = '2' then c.id_master end) as penghuni, 
				count(case when c.kepemilikan = '3' then c.id_master end) as orang_lain, 
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_penerima_telp()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.kesesuaian_nama = '1' then c.id_master end) as nama_sesuai, 
				count(case when c.kesesuaian_nama = '2' then c.id_master end) as nama_tidak_sesuai, 
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_profesi_pelanggan()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.profesi = '1' then c.id_master end) as pegawai_bumn,
				count(case when c.profesi = '2' then c.id_master end) as pegawai_negeri,
				count(case when c.profesi = '3' then c.id_master end) as profesional,
				count(case when c.profesi = '4' then c.id_master end) as pengusaha,
				count(case when c.profesi = '5' then c.id_master end) as karyawan_swasta,
				count(case when c.profesi = '6' then c.id_master end) as wiraswasta,
				count(case when c.profesi = '7' then c.id_master end) as dosen,
				count(case when c.profesi = '8' then c.id_master end) as pensiunan,
				count(case when c.profesi = '9' then c.id_master end) as pelajar,
				count(case when c.profesi = '10' then c.id_master end) as irt,
				count(case when c.profesi = '11' then c.id_master end) as pedagang,
				count(case when c.profesi = '12' then c.id_master end) as driver,
				count(case when c.profesi = '13' then c.id_master end) as lainnya,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_penghasilan_pelanggan()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.jumlah_gaji = '1' then c.id_master end) as gol_1,
				count(case when c.jumlah_gaji = '2' then c.id_master end) as gol_2,
				count(case when c.jumlah_gaji = '3' then c.id_master end) as gol_3,
				count(case when c.jumlah_gaji = '4' then c.id_master end) as gol_4,
				count(case when c.jumlah_gaji = '5' then c.id_master end) as gol_5,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_kenaikan_tarif()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.pemakaian_bln = '1' then c.id_master end) as ya,
				count(case when c.pemakaian_bln = '2' then c.id_master end) as tidak,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_penghematan()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.penghematan = '1' then c.id_master end) as ya,
				count(case when c.penghematan = '2' then c.id_master end) as tidak,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_alasan_penghematan()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.alasan_hemat = '1' then c.id_master end) as mahal,
				count(case when c.alasan_hemat = '2' then c.id_master end) as prinsip,
				count(case when c.alasan_hemat = '3' then c.id_master end) as kebutuhan,
				count(case when c.alasan_hemat = '4' then c.id_master end) as tidak_peduli,
				count(case when c.alasan_hemat = '5' then c.id_master end) as lainnya,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_cara_penghematan()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.cara_hemat = '1' then c.id_master end) as pemakaian_ac,
				count(case when c.cara_hemat = '2' then c.id_master end) as pemakaian_led,
				count(case when c.cara_hemat = '3' then c.id_master end) as tidak_peduli,
				count(case when c.cara_hemat = '4' then c.id_master end) as lainnya,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_pembelian_rt()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.interest_alat_listrik  = '1' then c.id_master end) as harga_murah,
				count(case when c.interest_alat_listrik  = '2' then c.id_master end) as daya_rendah,
				count(case when c.interest_alat_listrik  = '3' then c.id_master end) as merk_kualitas,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_golongan_tarif()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.pengetahuan_tarif  = '1' then c.id_master end) as ya,
				count(case when c.pengetahuan_tarif  = '2' then c.id_master end) as tidak,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_gangguan_listrik()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.gangguan_listrik  = '1' then c.id_master end) as sama,
				count(case when c.gangguan_listrik  = '2' then c.id_master end) as turun,
				count(case when c.gangguan_listrik  = '3' then c.id_master end) as naik,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_pemakaian_ac()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.pengaruh_ac  = '1' then c.id_master end) as ya,
				count(case when c.pengaruh_ac  = '2' then c.id_master end) as tidak_hemat,
				count(case when c.pengaruh_ac  = '3' then c.id_master end) as tidak_tahu,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_pemakaian_listrik()
	{
		$query = "select u.kode_area,
				a.nama_area,		
				count(case when c.pengaruh_ac  = '1' then c.id_master end) as ya,
				count(case when c.pengaruh_ac  = '2' then c.id_master end) as tidak,
				count(case when c.pengaruh_ac  = '3' then c.id_master end) as tidak_tahu,
				count(c.id_master) as jumlah, 
				c.info_01 as blth from tb_call c, tb_user u,tb_area a 
				where c.kriteria_gagal = 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
	function rekap_gagal_call()
	{
		$query = "select u.kode_area, 
		a.nama_area,
		count(case when c.kriteria_gagal = '100' then c.id_master end) as telepon_tidak_valid, 
		count(case when c.kriteria_gagal = '101' then c.id_master end) as salah_sambung, 
		count(case when c.kriteria_gagal = '102' then c.id_master end) as telepon_pln, 
		count(case when c.kriteria_gagal = '103' then c.id_master end) as sudah_tambah_daya, 
		count(c.id_master) as jumlah, c.info_01 as blth 
		from tb_call c, tb_user u,tb_area a 
		where c.kriteria_gagal != 0 and c.id_user = u.id_pengguna and u.kode_area = a.kode_area group by c.info_01,u.kode_area";
		//echo $query;
		$result = mysql_query($query);
		while ($rows = mysql_fetch_array($result)) {
			$data[] = $rows;
		}
		return $data;
	}
	
?>