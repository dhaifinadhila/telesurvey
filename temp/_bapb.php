<?
include_once("lib/config.php");
include_once("function/function_bapb.php");
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
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang, <strong>User MPayment</strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left">
          <div align="left"><strong>Dokumen Kontrak - BA Pemeriksaan Barang</strong></div></div></th>
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
                         <th><div align='center'>PEKERJAAN SPK</div></th>
                        <th><div align='center'>Nomor bapb</div></th>
 						<th>Tanggal  </th>
                        <th>Direksi Pekerjaan</th>
                        <th>Direksi Vendor</th>
                        <th>File Kontrak bapb</th>                        
						<th>Bidang</th>
                        <th>User Input</th>                        
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$bapb = select_bapb();
					$nomor=1;
					for ($i=0;$i<count($bapb);$i++) {
                    
					$current_id_bapb = $bapb[$i][0];
					$current_id_spk = $bapb[$i][1];
					$current_id_spk_angsuran = $bapb[$i][2];
					$current_nomor_bapb = $bapb[$i][3];
					$current_tanggal_bapb = $bapb[$i][4];
					$current_direksi_pekerjaan = $bapb[$i][5];
					if (trim($current_direksi_pekerjaan=="")) { $current_direksi_pekerjaan="Direksi Pekerjaan not found";}


					$current_direksi_vendor = $bapb[$i][6];
					if (trim($current_direksi_vendor=="")) { $current_direksi_vendor="Direksi Vendor not found";}

					
					$current_file_bapb = $bapb[$i][7];
					$current_keterangan = $bapb[$i][8];
					$current_unit_bidang = $bapb[$i][9];
					$current_user_input = $bapb[$i][10];
					$current_user_input_date = $bapb[$i][11];
					$current_info1 = $bapb[$i][12];
					$current_info2 = $bapb[$i][13];
					$current_info3 = $bapb[$i][14];
					$current_info4 = $bapb[$i][15];
					$current_info5 = $bapb[$i][16];
					$current_info6 = $bapb[$i][17];
					$current_info7 = $bapb[$i][18];
					$current_info8 = $bapb[$i][19];
					$current_info9 = $bapb[$i][20];
					$current_info10 = $bapb[$i][21];
					
					echo "<tr>";
						echo "<td>".$nomor."</td>";	
                        echo "<td>".$current_id_spk."</td>";
						echo "<td><div align='right'>".strtoupper($current_nomor_bapb)."</div></td>";
                        echo "<td>".strtoupper($current_tanggal_bapb)."</td>";
                        
                        echo "<td>".strtoupper($current_direksi_pekerjaan)."</td>";
                        echo "<td>".strtoupper($current_direksi_vendor)."</td>";
                        echo "<td>".$current_file_bapb."</td>";
                             echo "<td>".$current_unit_bidang."</td>";
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


