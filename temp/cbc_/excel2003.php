<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
require_once ('lib/excel/reader.php');
 
$xls = new Spreadsheet_Excel_Reader();
//$xls->read('indiastamps_yearsets.xls');	// replace with your excel file
$xls->read('TABEL_BAGIAN.xls');	


$no_of_columns = $xls->sheets[0]['numCols'];
$no_of_rows = $xls->sheets[0]['numRows'];

//echo 'Number of columns: ' . $no_of_columns . '<br />';
//echo 'Number of rows: ' . $no_of_rows . '<br /><br />';


for($i= 2; $i<= $no_of_rows; $i++) {
 
		echo "N0=".$i;
		echo "<BR>";
		$get_var_kode = strtoupper(trim($xls->sheets[0]['cells'][$i][1]));		
		echo "KODE=".$get_var_kode; 
		echo "<BR>";
		$get_var_bidang = strtoupper(trim($xls->sheets[0]['cells'][$i][2]));
		echo "BIDANG=".$get_var_bidang;
		echo "<BR>";
		$get_var_unit = strtoupper(trim($xls->sheets[0]['cells'][$i][3]));
		echo "UNIT=".$get_var_unit;
		echo "<BR>";	 
		//$return_insert_master_bagian = insert_master_bagian($get_var_kode,$get_var_bidang,$get_var_unit);
		echo "<HR>";		
		
 
	
}

?>
