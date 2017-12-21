<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/engine.php");
include_once("function/function_tm_file_upload.php");
include_once("function/function_tm_master.php");
include_once("function/function_tm_call.php");
include_once("function/function_tm_pengguna.php");
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
		$('#example_exp').hide();
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
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Rekapitulasi </strong>&#8226; Rekapitulasi Pilihan Penggunaan Meter</div> </th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
	  <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">
            <table width="200" border="0" cellspacing="1">
              <tr>
                <td width="20"><img src="images/excel-icon.gif"/></td>
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example_exp', 'sudah_call');" download="sudah_call.xls">Export to Excel</a></td>
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
                    	<th>No</th>
						
						<th><div align='center'>Kode Area</div></th>
						<th><div align='center'>Nama Area</div></th>	
						<th><div align='center'>Paska Bayar ke Paska Bayar</div></th>						
						<th><div align='center'>Paska Bayar ke Pra Bayar</div></th>
						<th><div align='center'>Pra Bayar ke Pra Bayar</div></th>
						<th><div align='center'>Tidak Bersedia</div></th>
						<th><div align='center'>Jawaban Kosong</div></th>
						<th><div align='center'>Total Pelanggan</div></th>	
						<th><div align='center'>Bulan Tahun</div></th>
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$master = mv_penggunaan_meter_view(); 
					$nomor=1;
					
					for ($i=0;$i<count($master);$i++) {
						
						$VAR_KODE_AREA			=$master[$i]['KODE_AREA'];						
						$VAR_NAMA_AREA			=$master[$i]['NAMA_AREA'];
						$VAR_PASKA_TO_PASKA		=$master[$i]['PASKA_TO_PASKA'];
						$VAR_PASKA_TO_PRA		=$master[$i]['PASKA_TO_PRA'];
						$VAR_PRA_TO_PRA			=$master[$i]['PRA_TO_PRA'];
						$VAR_TDK_BERSEDIA		=$master[$i]['TDK_BERSEDIA'];
						$VAR_JAWABAN_KOSONG		=$master[$i]['JAWABAN_KOSONG'];
						$VAR_TOTAL_PLGN			=$master[$i]['TOTAL_PELANGGAN'];
						$VAR_BLTH				=$master[$i]['BULAN_TAHUN'];
						
					
					
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_PASKA_TO_PASKA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_PASKA_TO_PRA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_PRA_TO_PRA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TDK_BERSEDIA)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_JAWABAN_KOSONG)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_TOTAL_PLGN)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_BLTH)."</div></td>";
							
							// echo "<th scope='col'><a href='form_spk_edit.php?id=$current_id_spk'>Edit</a> | <a href='form_spk_delete.php?id=$current_id_spk'>Delete</a></th>";
						echo "</tr>"; 
						$nomor++;
                    }
                    ?>                
				</tbody>
			</table>
		</th>
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