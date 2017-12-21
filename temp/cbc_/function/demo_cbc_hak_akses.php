<?
include_once("function_cbc_hak_akses.php");
include_once("config.php");

$data = cbc_hak_akses_view_all();

echo "<pre>";
print_r($data);
echo "</pre>";

$VAR_ID_HAK_AKSES=NULL;
$VAR_KODE_HAK_AKSES='200';
$VAR_KETERANGAN='USER';
$VAR_INFORMASI_01='1';
$VAR_INFORMASI_02='2';
$VAR_INFORMASI_03='3';
$VAR_INFORMASI_04='4';
$VAR_INFORMASI_05='5';

cbc_hak_akses_insert(
		$VAR_ID_HAK_AKSES,
		$VAR_KODE_HAK_AKSES,
		$VAR_KETERANGAN,
		$VAR_INFORMASI_01,
		$VAR_INFORMASI_02,
		$VAR_INFORMASI_03,
		$VAR_INFORMASI_04,
		$VAR_INFORMASI_05
		);


//DEMO DELETE 
$ID_HAK_AKSES=1;
cbc_hak_akses_delete($ID_HAK_AKSES)
//echo "HAPUS=".$hasil_hapus; 

?>