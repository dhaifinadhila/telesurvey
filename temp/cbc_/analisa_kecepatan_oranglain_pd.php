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
	.style1 {font-size: 11px}
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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Analisa Callback   </strong>&#8226; <strong> Analisa Kecepatan Proses Pelayanan </strong>&#8226; Kecepatan Layanan Proses Perubahan Daya Diurus Orang Lain </div></th>
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
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'analisa_kecepatan_oranglain_pd');" download="analisa_kecepatan_oranglain_pd.xls">Export to Excel</a></td>
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
						<th><div align='center'>DIURUS ORANG LAIN </div></th>
						<th><div align='center'>1 s/d 3 HARI KERJA</div></th>
						<th><div align='center'>4 s/d 10 HARI KERJA</div></th> 
					    <th><div align='center'>LEBIH 10 HARI KERJA</div></th>
					    <th><div align='center'>BELUM NYALA</div></th>
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?		 
					
					//$var_JENIS_MUTASI = trim($_GET['pbpd']);
					$rekap_pb = kecepatan_oranglain_pd();
					$nomor=1;
					for ($i=0;$i<count($rekap_pb);$i++) {
						$VAR_KODE_UNIT=$rekap_pb[$i]['KODE_UNIT'];

						$unit =  cbc_UNIT_search_BY_KODE_UNIT($VAR_KODE_UNIT);
						$VAR_NAMA_UNIT=$unit[0]['NAMA_UNIT']; 
						
						$VAR_TOTAL_PELANGGAN=$rekap_pb[$i]['TOTAL_PELANGGAN'];	
						$total_pelanggan = $total_pelanggan + $VAR_TOTAL_PELANGGAN;	
						
						$VAR_DIURUS_SENDIRI=$rekap_pb[$i]['DIURUS_ORANGLAIN'];
						$total_DIURUS_SENDIRI= $total_DIURUS_SENDIRI + $VAR_DIURUS_SENDIRI;													
						
						$VAR_DURASI_1SD3HARI=$rekap_pb[$i]['DURASI_1SD3HARI'];		
						$total_DURASI_1SD3HARI = $total_DURASI_1SD3HARI + $VAR_DURASI_1SD3HARI;
																
						$VAR_DURASI_4SD10HARI=$rekap_pb[$i]['DURASI_4SD10HARI'];
						$total_DURASI_4SD10HARI = $total_DURASI_4SD10HARI + $VAR_DURASI_4SD10HARI;						
						
						$VAR_DURASI_LEBIH_10HARI=$rekap_pb[$i]['DURASI_LEBIH_10HARI'];
						$total_DURASI_LEBIH_10HARI = $total_DURASI_LEBIH_10HARI + $VAR_DURASI_LEBIH_10HARI;	
						
						$VAR_BELUM_NYALA=$rekap_pb[$i]['BELUM_NYALA'];
						$total_BELUM_NYALA = $total_BELUM_NYALA + $VAR_BELUM_NYALA;	
												
		 													
 						
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";	
							echo "<td><div align='center'>".strtoupper($VAR_KODE_UNIT)."</div></td>";
							echo "<td><div align='left'>".strtoupper($VAR_NAMA_UNIT)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TOTAL_PELANGGAN)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_DIURUS_SENDIRI)."</div></td>";
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
						<th><div align='center'><? echo $total_DIURUS_SENDIRI; ?></div></th>
						<th><div align='center'><? echo $total_DURASI_1SD3HARI; ?></div></th>
						<th><div align='center'><? echo $total_DURASI_4SD10HARI; ?></div></th>						
						<th><div align='center'><? echo $total_DURASI_LEBIH_10HARI; ?></div></th>						
						<th><div align='center'><? echo $total_BELUM_NYALA; ?></div></th>						
   
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


