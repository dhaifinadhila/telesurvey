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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Rekapitulasi  </strong>&#8226; <strong> Rekapitulasi Hight Trust Society </strong>&#8226; HTS Perubahan Daya </div></th>
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
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'rekap_hts_pd');" download="rekap_hts_pd.xls">Export to Excel</a></td>
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
					  <th width="5%">N0</th>
					  <th width="4%"><div align='center'>KODE UNIT</div></th>
					  <th width="5%"><div align='center'>NAMA UNIT</div></th>
                    	<th width="8%"><div align='center'>PELANGGAN</div></th>
						<th width="8%"><div align='center'>BUKAN   PELANGGAN </div></th>
					  <th width="8%"><div align='center'>TOTAL PELANGGAN</div></th>
						<th width="7%"><div align='center'>NOMOR TELEPON KELUARGA</div></th>
						<th width="6%"><div align='center'>NOMOR TELEPON ORANG LAIN </div></th>
						<th width="6%">PROSES SENDIRI </th>
					    <th width="6%">PROSES ORANG LAIN </th>
					    <th width="7%">PROSES DIBANTU PETUGAS PLN </th>
					    <th width="17%">PROSES DIBANTU CATER/TUSBUNG/YANTEK</th>
					    <th width="8%">PROSES DIBANTU INSTALATIR</th>
					    <th width="5%">PROSES DIBANTU LAINYA</th>
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?		 
					
 
					$hts_pb = rekap_hts_pd();
					$nomor=1;

					for ($i=0;$i<count($hts_pb);$i++) {

						$THIS_KODE_UNIT = $hts_pb[$i]['KODE_UNIT'];
 						$unit =  cbc_UNIT_search_BY_KODE_UNIT($THIS_KODE_UNIT);
						$VAR_NAMA_UNIT=$unit[0]['NAMA_UNIT'];

						
						$THIS_TOTAL_PELANGGAN = $hts_pb[$i]['TOTAL_PELANGGAN'];
						$total_pelanggan = $total_pelanggan + $THIS_TOTAL_PELANGGAN;
						 
						$THIS_TELP_PELANGGAN_YES = $hts_pb[$i]['TELP_PELANGGAN_YES'];
						$total_telp_pelanggan_yes = $total_telp_pelanggan_yes + $THIS_TELP_PELANGGAN_YES;
						
						$THIS_TELP_PELANGGAN_NO = $hts_pb[$i]['TELP_PELANGGAN_NO'];
						$total_telp_pelanggan_no = $total_telp_pelanggan_no + $THIS_TELP_PELANGGAN_NO;
						
						$THIS_TELP_PELANGGAN_FAMILY = $hts_pb[$i]['TELP_PELANGGAN_FAMILY'];
						$total_telp_pelanggan_family = $total_telp_pelanggan_family + $THIS_TELP_PELANGGAN_FAMILY;
						
						$THIS_TELP_PELANGGAN_ORANGLAIN = $hts_pb[$i]['TELP_PELANGGAN_ORANGLAIN'];
						$total_telp_pelanggan_oranglain = $total_telp_pelanggan_oranglain + $THIS_TELP_PELANGGAN_ORANGLAIN;
						
						$THIS_PROSES_ORANGLAIN = $hts_pb[$i]['PROSES_ORANGLAIN'];
						$total_proses_oranglain = $total_proses_oranglain + $THIS_PROSES_ORANGLAIN;
						
						$THIS_PROSES_SENDIRI = $hts_pb[$i]['PROSES_SENDIRI'];
						$total_proses_sendiri = $total_proses_sendiri + $THIS_PROSES_SENDIRI;
						
						$THIS_DIBANTU_PETUGAS_PLN_KANTOR = $hts_pb[$i]['DIBANTU_PETUGAS_PLN_KANTOR'];
						$total_dibantu_petugas_pln_kantor = $total_dibantu_petugas_pln_kantor + $THIS_DIBANTU_PETUGAS_PLN_KANTOR;
						
						$THIS_DIBANTU_PETUGAS_PLN_LAPANGAN = $hts_pb[$i]['DIBANTU_PETUGAS_PLN_LAPANGAN'];
						$total_dibantu_petugas_pln_lapangan = $total_dibantu_petugas_pln_lapangan + $THIS_DIBANTU_PETUGAS_PLN_LAPANGAN;
						
						$THIS_DIBANTU_BIRO_JASA = $hts_pb[$i]['DIBANTU_BIRO_JASA'];
						$total_dibantu_biro_jasa = $total_dibantu_biro_jasa + $THIS_DIBANTU_BIRO_JASA;
						
						$THIS_DIBANTU_LAINYA = $hts_pb[$i]['DIBANTU_LAINYA'];
						$total_dibantu_lainya = $total_dibantu_lainya + $THIS_DIBANTU_LAINYA;
						
 						
						 
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";	
							echo "<td><div align='center'>".strtoupper($THIS_KODE_UNIT)."</div></td>";
							echo "<td><div align='left'>".strtoupper($VAR_NAMA_UNIT)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_TELP_PELANGGAN_YES)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_TELP_PELANGGAN_NO)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_TOTAL_PELANGGAN)."</div></td>";

							echo "<td><div align='center'>".strtoupper($THIS_TELP_PELANGGAN_FAMILY)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_TELP_PELANGGAN_ORANGLAIN)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_PROSES_SENDIRI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_PROSES_ORANGLAIN)."</div></td>";

							echo "<td><div align='center'>".strtoupper($THIS_DIBANTU_PETUGAS_PLN_KANTOR)."</div></td>";
							echo "<td><div align='center'>".strtoupper($THIS_DIBANTU_PETUGAS_PLN_LAPANGAN)."</div></td>";
 							echo "<td><div align='center'>".strtoupper($THIS_DIBANTU_BIRO_JASA)."</div></td>";

							echo "<td><div align='center'>".strtoupper($THIS_DIBANTU_LAINYA)."</div></td>";
 
 						echo "</tr>"; 
						$nomor++;
						
                    }
					
                     ?>                
 
					<tr>
                    	<th>JUMLAH</th>
						<th><div align='center'></div></th>
						<th><div align='center'></div></th>
						<th><div align='center'><? echo $total_telp_pelanggan_yes; ?></div></th>
						<th><div align='center'><? echo $total_telp_pelanggan_no; ?></div></th>
						<th><div align='center'><? echo $total_pelanggan; ?></div></th>
					    <th><div align='center'><? echo $total_telp_pelanggan_family; ?></div></th>
					    <th><div align='center'><? echo $total_telp_pelanggan_oranglain; ?></div></th>
						<th><div align='center'><? echo $total_proses_sendiri; ?></div></th>
						<th><div align='center'><? echo $total_proses_oranglain; ?></div></th>
						<th><div align='center'><? echo $total_dibantu_petugas_pln_kantor; ?></div></th>
					    <th><div align='center'><? echo $total_dibantu_petugas_pln_lapangan; ?></div></th>
					    <th><div align='center'><? echo $total_dibantu_biro_jasa; ?></div></th>
					    <th><div align='center'><? echo $total_dibantu_lainya; ?></div></th>
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


