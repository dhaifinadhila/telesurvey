<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/engine.php");
include_once("function/function_cbc_file_excell.php");
include_once("function/function_cbc_master_call.php");
include_once("function/function_cbc_pengguna.php");
include_once("function/function_cbc_callback.php");
include_once("function/function_cbc_unit.php");



 //echo "<pre>";
//print_r($data);
//echo "</pre>";

?>
<html>
<head>	
<link rel="stylesheet" href="css/serverstyle.css">
<link rel="stylesheet" href="css/button.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-base.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-topbar.css" />
<link rel="stylesheet" type="text/css" href="ddlevelsfiles/ddlevelsmenu-sidebar.css" />
<script type="text/javascript" src="ddlevelsfiles/ddlevelsmenu.js"></script>

	<link rel="stylesheet" type="text/css" href="lib/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/demo.css">

	<style type="text/css" class="init">
	th, td { white-space: nowrap; }
	div.dataTables_wrapper {
		width: 972px;
		margin: 0 auto;
	}
	</style>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">

	$(document).ready(function() {
		$('#example').dataTable( {
			"scrollX": true
		} );
	} );

	</script>
	
<script src="lib/excellentexport/excellentexport.js"></script>			
</head>
<body  bgcolor="#e9e9e9">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" class="BorderBox_NoColor">
  <!--DWLayoutTable-->
  <tr>
    <td height="147" colspan="3" align="left" valign="top" bgcolor="#f4f4f4"><img src="images/header.png" width="1024" height="160"></td>
  </tr>
  
  <tr>
    <td width="1028" height="173" colspan="3" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th bgcolor="#414141" scope="col">&nbsp;</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">
		  <? 
		    include "menu.php"; 
		  ?>		</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama_lengkap']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Rekapitulasi  </strong>&#8226; <strong> Rekapitulasi Kecepatan Layanan </strong>&#8226; Kecepatan Perubahan Daya </div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>

      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">
            <table width="200" border="0" cellspacing="1">
              <tr>
                <td width="20"><img src="images/excel-icon.gif"/></td>
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'rekap_kecepatan_pd');" download="rekap_kecepatan_pd.xls">Export to Excel</a></td>
              </tr>
            </table>
        </div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>

      
      <tr>
        <th height="84" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">
		
		<table id="example" class="display" cellspacing="0" width="100%">
				<thead class="_css_font_default_11_b">
					<tr>
                    	<th>N0</th>
						<th><div align='center'>KODE UNIT</div></th>
						<th><div align='center'>NAMA UNIT</div></th>
						<th><div align='center'>TOTAL PELANGGAN</div></th>
						<th><div align='center'> 1 s/d 3 HARI </div></th>
						<th>4 s/d 10 HARI </th>
						<th><div align='center'>LEBIH 10 HARI </div></th>
					    <th>BELUM NYALA </th>
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?		 
					
					//$var_JENIS_MUTASI = trim($_GET['pbpd']);
					$kecepatan_pb = rekap_kecepatan_layanan_pd();
					$nomor=1;
					for ($i=0;$i<count($kecepatan_pb);$i++) {
						$VAR_KODE_UNIT=$kecepatan_pb[$i]['KODE_UNIT'];

						$unit =  cbc_UNIT_search_BY_KODE_UNIT($VAR_KODE_UNIT);
						$VAR_NAMA_UNIT=$unit[0]['NAMA_UNIT'];												
  						
						$VAR_TOTAL_PELANGGAN=$kecepatan_pb[$i]['TOTAL_PELANGGAN'];	
						$total_pelanggan = $total_pelanggan + $VAR_TOTAL_PELANGGAN;
						
						$VAR_DURASI_1SD3HARI = $kecepatan_pb[$i]['DURASI_1SD3HARI'];	
						$total_13hari = $total_13hari + $VAR_DURASI_1SD3HARI;
						
						$VAR_DURASI_4SD10HARI = $kecepatan_pb[$i]['DURASI_4SD10HARI'];	
						$total_410hari = $total_410hari + $VAR_DURASI_4SD10HARI;
						
						$VAR_DURASI_LEBIH_10HARI = $kecepatan_pb[$i]['DURASI_LEBIH_10HARI'];	
						$total_lebib10hari = $total_lebib10hari + $VAR_DURASI_LEBIH_10HARI;
						
						$VAR_BELUM_NYALA = $kecepatan_pb[$i]['BELUM_NYALA'];	
						$total_belumnyala = $total_belumnyala + $VAR_BELUM_NYALA;						

						//DURASI_1SD3HARI
						//DURASI_4SD10HARI
						//DURASI_LEBIH_10HARI
						//BELUM_NYALA
 																			 
						
						
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";	
							echo "<td><div align='center'>".strtoupper($VAR_KODE_UNIT)."</div></td>";
							echo "<td><div align='let'>".strtoupper($VAR_NAMA_UNIT)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TOTAL_PELANGGAN)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_DURASI_1SD3HARI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_DURASI_4SD10HARI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_DURASI_LEBIH_10HARI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_BELUM_NYALA)."</div></td>";
 
 						echo "</tr>"; 
						$nomor++;
						
                    }
					
                     ?>                
 
					<tr>
                    	<th>JUMLAH</th>
						<th><div align='center'></div></th>
						<th><div align='center'></div></th>
						<th><div align='center'><? echo $total_pelanggan; ?></div></th>
						<th><div align='center'><? echo $total_13hari; ?></div></th>
						<th><div align='center'><? echo $total_410hari; ?></div></th>
						<th><div align='center'><? echo $total_lebib10hari; ?></div></th>
					    <th><div align='center'><? echo $total_belumnyala; ?></div></th>
					</tr>
				</tbody>
			</table>		</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp; </th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left" class="_css_font_default_11_b">
          <div align="center">
            <? include_once("copyright.php"); ?>
          </div>         </th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        </tr>
      
    </table></td>
  </tr>
  
  
  <tr>
    <td height="22" colspan="3" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="22" colspan="3" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

