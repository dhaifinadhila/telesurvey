<?

require_once 'simplexlsx.class.php';
require_once 'reader.php';
$xlsx = new SimpleXLSX('OLAH-III-09.xlsx');

include_once("config.php");
//include_once("../function/function_pelanggan_jumlah.php");
//include_once("../function/function_pelanggan_persen.php");
//include_once("../function/function_va_delta.php");
//include_once("../function/function_va_jumlah.php");
//include_once("../function/function_va_persen.php");
//include_once("../function/function_kwh_delta.php");
//include_once("../function/function_kwh_jumlah.php");
//include_once("../function/function_kwh_persen.php");
//include_once("../function/function_rupiah_delta.php");
//include_once("../function/function_rupiah_jumlah.php");
include_once("../function/function_rupiah_persen.php");


list($num_cols, $num_rows) = $xlsx->dimension(); 
$jumlah_count=count($xlsx->rows());


// echo "<pre>";
// print_r($xlsx->rows()); // sheet pertama
// echo "</pre>";
//echo "<HR>";
//print_r($xlsx->rows(2)); // sheet ke dua

$sheet_1 = $xlsx->rows(12);

for ($i=3;$i<count($sheet_1)-1;$i++)
{
	$nama_area = $sheet_1[$i][0];

	if ($nama_area=="AREA MENTENG") {
		$kode_area="54110";
	} 
	else
	if ($nama_area=="AREA CEMPAKA PUTIH"){
		$kode_area="54130";
	}
	else
	if ($nama_area=="AREA BANDENGAN"){
	} 
	else
	if ($nama_area=="AREA BULUNGAN"){
		$kode_area = "54310";
	}
	else
	if ($nama_area=="AREA KEBUN JERUK"){
		$kode_area = "54330";
	}
	else
	if ($nama_area=="AREA CIPUTAT"){
		$kode_area = "54360";
	}
	else
	if ($nama_area=="AREA BINTARO"){
		$kode_area = "54380";
	}
	else
	if ($nama_area=="AREA JATINEGARA"){
		$kode_area = "54410";
	}
	else
	if ($nama_area=="AREA PONDOK KOPI"){
		$kode_area = "54420";
	}
	else
	if ($nama_area=="AREA TANJUNG PRIOK"){
		$kode_area = "54510";
	}
	else
	if ($nama_area=="AREA MARUNDA"){
		$kode_area = "54530";
	}
	else
	if ($nama_area=="AREA CIKOKOL"){
		$kode_area = "54610";
	}
	else
	if ($nama_area=="AREA SERPONG"){
		$kode_area = "54620";
	}
	else
	if ($nama_area=="AREA CENGKARENG"){
		$kode_area = "54630";
	}
	else
	if ($nama_area=="AREA CIKUPA"){
		$kode_area = "54640";
	}
	else
	if ($nama_area=="AREA TELUK NAGA"){
		$kode_area = "54660";
	}
	else
	if ($nama_area=="AREA KRAMATJATI"){
		$kode_area = "54710";
	}
	else
	if ($nama_area=="AREA CIRACAS"){
		$kode_area = "54720";
	}
	else
	if ($nama_area=="AREA PONDOK GEDE"){
		$kode_area = "54730";
	}
	else
	if ($nama_area=="AREA LENTENG AGUNG"){
		$kode_area = "54740";
	}
	else
	if ($nama_area=="AREA PELAYANAN PRIMA TANGERANG"){
		$kode_area = "54820";
	}
	else
	if ($nama_area=="AREA PELAYANAN PRIMA UTARA"){
		$kode_area = "54830";
	}
	else
	if ($nama_area=="AREA PELAYANAN PRIMA SELATAN"){
		$kode_area = "54840";
	}
	 
	$nilai_delta_1 =  abs($sheet_1[$i][1]);
	$nilai_delta_1_blth = '201401';  

	$nilai_delta_2 =  abs($sheet_1[$i][2]);
	$nilai_delta_2_blth = '201402';  

	$nilai_delta_3 =  abs($sheet_1[$i][3]);
	$nilai_delta_3_blth = '201403';  

	$nilai_delta_4 =  abs($sheet_1[$i][4]);
	$nilai_delta_4_blth = '201404';  

	$nilai_delta_5 =  abs($sheet_1[$i][5]);
	$nilai_delta_5_blth = '201405';  

	$nilai_delta_6 =  abs($sheet_1[$i][6]);
	$nilai_delta_6_blth = '201406';  

	$nilai_delta_7 =  abs($sheet_1[$i][7]);
	$nilai_delta_7_blth = '201407';  

	echo $kode_area."-".$nama_area."-".$nilai_delta_1_blth."-".$nilai_delta_1."<BR>";
	echo $kode_area."-".$nama_area."-".$nilai_delta_2_blth."-".$nilai_delta_2."<BR>";
	echo $kode_area."-".$nama_area."-".$nilai_delta_3_blth."-".$nilai_delta_3."<BR>";
	echo $kode_area."-".$nama_area."-".$nilai_delta_4_blth."-".$nilai_delta_4."<BR>";
	echo $kode_area."-".$nama_area."-".$nilai_delta_5_blth."-".$nilai_delta_5."<BR>";
	echo $kode_area."-".$nama_area."-".$nilai_delta_6_blth."-".$nilai_delta_6."<BR>";
	echo $kode_area."-".$nama_area."-".$nilai_delta_7_blth."-".$nilai_delta_7."<BR>";
	echo "<HR>";

 

	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_1_blth;
	$get_var_delta_pelanggan = $nilai_delta_1;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);

 

	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_2_blth;
	$get_var_delta_pelanggan = $nilai_delta_2;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);




	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_3_blth;
	$get_var_delta_pelanggan = $nilai_delta_3;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);




	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_4_blth;
	$get_var_delta_pelanggan = $nilai_delta_4;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);




	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_5_blth;
	$get_var_delta_pelanggan = $nilai_delta_5;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);


	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_6_blth;
	$get_var_delta_pelanggan = $nilai_delta_6;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);






	$get_var_kode_area = $kode_area;
	$get_var_nama_area = $nama_area;
	$get_var_bulan_tahun = $nilai_delta_7_blth;
	$get_var_delta_pelanggan = $nilai_delta_7;
	$get_var_upload_by = 'SYSTEM';
	$get_var_informasi = '0';
	$return_insert_rupiah_persen = insert_rupiah_persen($get_var_kode_area,$get_var_nama_area,$get_var_bulan_tahun,$get_var_delta_pelanggan,$get_var_upload_by,$get_var_informasi);



 

}

/*
echo "<HR>";
$sheet = $xlsx->rows();
echo $sheet[0][0];
echo "<HR>";
echo "Jumlah Sheet : ".$xlsx->sheetsCount();
*/

//for ($j==0;$j<)




?>
