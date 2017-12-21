<?
include_once("lib/config.php");
include_once("function/function_keuangan.php");
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
          <div align="left"><strong>Bidang keuangan</strong></div>
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
						<th>SPK</th>
 						<th><div align='left'>Nomor SPK</div></th>						
						<th>Tanggal Masuk keuangan</th>
						<th>Approval By</th>
						<th>Status Approval</th>
						<th>Tanggal Approval</th>
 					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$keuangan = select_keuangan();
					$nomor=1;
					for ($i=0;$i<count($keuangan);$i++) {
						$current_id_keuangan = $keuangan[$i][0];
						$current_id_spk = $keuangan[$i][1];
						$current_id_spk_angsuran = $keuangan[$i][2];
						$current_tanggal_masuk = $keuangan[$i][3];
						$current_nomor_spk = $keuangan[$i][4];
						$current_approval_pelaksana = $keuangan[$i][5];
						$current_approval_pelaksana_status = $keuangan[$i][6];
						$current_approval_pelaksana_tanggal = $keuangan[$i][7];
						$current_approval_pelaksana_keterangan = $keuangan[$i][8];
						$current_approval_dm = $keuangan[$i][9];
						$current_approval_dm_status = $keuangan[$i][10];
						$current_approval_dm_tanggal = $keuangan[$i][11];
						$current_approval_dm_keterangan = $keuangan[$i][12];
						$current_approval_mb = $keuangan[$i][13];
						$current_approval_mb_status = $keuangan[$i][14];
						 
						if (trim($current_approval_mb_status)==1) {$current_approval_mb_status="Approve";} else {$current_approval_mb_status="REJECT";}
						$current_approval_mb_tanggal = $keuangan[$i][15];
						$current_approval_mb_keterangan = $keuangan[$i][16];
						$current_status_lunas = $keuangan[$i][17];
						$current_unit_bidang = $keuangan[$i][18];
						$current_info1 = $keuangan[$i][19];
						$current_info2 = $keuangan[$i][20];
						$current_info3 = $keuangan[$i][21];
						$current_info4 = $keuangan[$i][22];
						$current_info5 = $keuangan[$i][23];
						$current_info6 = $keuangan[$i][24];
						$current_info7 = $keuangan[$i][25];
						$current_info8 = $keuangan[$i][26];
						$current_info9 = $keuangan[$i][27];
						$current_info10 = $keuangan[$i][28];
						
					echo "<tr>";
						echo "<td>".$nomor."</td>";	
                        echo "<td>".$current_id_spk."</td>";
                         echo "<td>".strtoupper($current_nomor_spk)."</td>";
                        
                        echo "<td>".strtoupper($current_tanggal_masuk)."</td>";
                        echo "<td>".strtoupper($current_approval_mb)."</td>";
                        echo "<td>".$current_approval_mb_status."</td>";
                        echo "<td>".strtoupper($current_approval_mb_tanggal)."</td>";
 				

                    
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


