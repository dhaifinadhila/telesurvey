<?
include_once("lib/config.php");
include_once("function/function_spk.php");
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
		width: 1250px;
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
    
    
</head>
<body  bgcolor="#e9e9e9">
<table width="1276" border="0" align="center" cellpadding="0" cellspacing="0" class="BorderBox_NoColor">
  <!--DWLayoutTable-->
  <tr>
    <td height="147" colspan="3" align="left" valign="top" bgcolor="#f4f4f4"><img src="images/header.png" width="1274" height="160"></td>
  </tr>
  
  <tr>
    <td width="1028" height="173" colspan="3" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th bgcolor="#414141" scope="col">&nbsp;</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">
		  <? 
		    include "menu.php"; 
		  ?>
		</th>
        <th bgcolor="#414141" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th width="25" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong>User MPayment</strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">
          <div align="left"><strong>Dokumen Kontrak - Surat Perintah Kerja</strong></div>
        </div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
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
						<th>Nama Vendor</th>
                        <th><div align='center'>Nomor SPK</div></th>
						<th><div align='left'>PEKERJAAN</div></th>						
						<th>Tanggal SPK</th>
						<th>Bidang</th>
						<th>Pihak Pertama</th>
						<th>Pihak Kedua</th>
						<th>Rupiah SPK</th>
						<th>Tanggal Selesai Kontrak</th>
                        <th>Direksi Pekerjaan</th>
                        <th>Rupiah Denda</th>
                        <th>File Kontrak SPK</th>
                        <th>User Input</th>                        
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
                    $spk = select_spk();
                    $nomor=1;
                    for ($i=0;$i<count($spk);$i++) {
                    
                    $current_id_spk = $spk[$i][0];
					
                    $current_id_vendor = $spk[$i][1];
					if (trim($current_id_vendor=="")) { $current_id_vendor="Vendor not found";}
					
                    $current_nama_pekerjaan = $spk[$i][2];
					if (trim($current_nama_pekerjaan=="")) { $current_nama_pekerjaan="Pekerjaan not found";}
					
                    $current_nomor_spk = $spk[$i][3];
					if (trim($current_nomor_spk=="")) { $current_nomor_spk="Nomor spk not found";}
					
                    $current_tanggal_spk = $spk[$i][4];
					
                    $current_unit_bidang = $spk[$i][5];
					if (trim($current_unit_bidang=="")) { $current_unit_bidang="Unit not found";}
					
                    $current_pihak_pertama = $spk[$i][6];
					if (trim($current_pihak_pertama=="")) { $current_pihak_pertama="Pihak Pertama not found";}
					
                    $current_pihak_kedua = $spk[$i][7];
					if (trim($current_pihak_kedua=="")) { $current_pihak_kedua="Pihak Kedua not found";}

                    $current_rupiah_spk = $spk[$i][8];
					if (trim($current_rupiah_spk=="0")) { $current_rupiah_spk="Rupiah not found";} else {  $current_rupiah_spk=number_format($current_rupiah_spk);}

                    $current_tanggal_selesai_kontrak = $spk[$i][9];
                    $current_direksi_pekerjaan = $spk[$i][10];
					if (trim($current_direksi_pekerjaan=="")) { $current_direksi_pekerjaan="Direksi not found";}
					
                    $current_pembayaran_diangsur = $spk[$i][11];
                    $current_denda = $spk[$i][12];
					if (trim($current_denda=="0")) { $current_denda="Rupiah not found";} else {  $current_denda=number_format($current_denda);}
					
					
                    $current_file_spk = $spk[$i][13];
                    $current_keterangan = $spk[$i][14];
                    $current_user_input = $spk[$i][15];
                    $current_user_input_date = $spk[$i][16];
                    $current_jenis_pekerjaan = $spk[$i][17];
                    $current_uraian_denda = $spk[$i][18];
                    $current_info1 = $spk[$i][19];
                    $current_info2 = $spk[$i][20];
                    $current_info3 = $spk[$i][21];
                    $current_info4 = $spk[$i][22];
                    $current_info5 = $spk[$i][23];
                    $current_info6 = $spk[$i][24];
                    $current_info7 = $spk[$i][25];
                    $current_info8 = $spk[$i][26];
                    $current_info9 = $spk[$i][27];
                    $current_info10 = $spk[$i][28];
					
					echo "<tr>";
						echo "<td>".$nomor."</td>";	
                        echo "<td>".$current_id_vendor."</td>";
						echo "<td><div align='right'>".strtoupper($current_nomor_spk)."</div></td>";
                        echo "<td>".strtoupper($current_nama_pekerjaan)."</td>";
                        
                        echo "<td>".strtoupper($current_tanggal_spk)."</td>";
                        echo "<td>".strtoupper($current_unit_bidang)."</td>";
                        echo "<td>".strtoupper($current_pihak_pertama)."</td>";
                        echo "<td>".strtoupper($current_pihak_kedua)."</td>";
                        echo "<td><div align='right'>".$current_rupiah_spk."</div></td>";
                        echo "<td>".$current_tanggal_selesai_kontrak."</td>";
                        echo "<td>".strtoupper($current_direksi_pekerjaan)."</td>";
                        echo "<td><div align='right'>".strtoupper($current_denda)."</div></td>";
                        echo "<td>".$current_file_spk."</td>";
                        echo "<td>".strtoupper($current_user_input)."</td>";					

                    
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
</table>
<p>&nbsp;</p>
</body>
</html>


