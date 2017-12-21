<?

require_once 'simplexlsx.class.php';
require_once 'reader.php';
$xlsx = new SimpleXLSX('OLAH-III-09.xlsx');

include_once("config.php");
include_once("../function/function_pelanggan_delta.php");


list($num_cols, $num_rows) = $xlsx->dimension(); 
$jumlah_count=count($xlsx->rows());


// echo "<pre>";
// print_r($xlsx->rows()); // sheet pertama
// echo "</pre>";
//echo "<HR>";
//print_r($xlsx->rows(2)); // sheet ke dua

$sheet_1 = $xlsx->rows();

for ($i=3;$i<count($sheet_1)-1;$i++)
{
	$nama_area = $sheet_1[$i][0];

	 
	$nilai_delta_1 =  $sheet_1[$i][1];
	$nilai_delta_1_blth = '201401';  

 
	 

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
