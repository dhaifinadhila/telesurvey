<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_DISTRIBUSI.php");
include_once("function/function_cbc_UNIT.php");
include_once("function/function_cbc_rayon.php");
 
$rayon = cbc_RAYON_view_all();
 
//echo "<pre>";
//print_r($rayon);
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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226;  <strong>Distribusi, Unit dan Rayon </strong>&#8226; Kantor Rayon </div></th>
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
            <div align="left"><a href="rayon.php" class="button_default_aw">Rayon</a>&nbsp;<a href="rayon_add.php" class="button_default_aw">Add New Rayon </a></div>
        </div></th>
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
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'rayon');" download="rayon.xls">Export to Excel</a></td>
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
                         <th><div align='center'>KODE DISTRIBUSI</div></th>
                         <th><div align='center'>KODE UNIT</div></th>
						 <th><div align='center'>KODE RAYON</div></th>						 
                         <th><div align='center'>NAMA</div></th>						 
                         <th><div align='center'>ALAMAT</div></th>
                         <th><div align='center'>RAYON</div></th>						 						 						 
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$rayon = cbc_RAYON_view_all();
					$nomor=1;
					for ($i=0;$i<count($rayon);$i++) {
					
						$VAR_ID_RAYON=$rayon[$i]['ID_RAYON'];
						$VAR_KODE_DISTRIBUSI=$rayon[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_UNIT=$rayon[$i]['KODE_UNIT'];						
						$VAR_KODE_RAYON=$rayon[$i]['KODE_RAYON'];	
						$VAR_NAMA=$rayon[$i]['NAMA_RAYON'];
						$VAR_ALAMAT=$rayon[$i]['ALAMAT'];
						$VAR_INFORMASI_01=$rayon[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$rayon[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$rayon[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$rayon[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$rayon[$i]['INFORMASI_05'];
						$VAR_INFORMASI_06=$rayon[$i]['INFORMASI_06'];
						$VAR_INFORMASI_07=$rayon[$i]['INFORMASI_07'];
						$VAR_INFORMASI_08=$rayon[$i]['INFORMASI_08'];
						$VAR_INFORMASI_09=$rayon[$i]['INFORMASI_09'];
						$VAR_INFORMASI_10=$rayon[$i]['INFORMASI_10'];
						
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";						
							echo "<td><div align='center'>".strtoupper($VAR_KODE_DISTRIBUSI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_UNIT)."</div></td>";	
							echo "<td><div align='left'>".strtoupper($VAR_KODE_RAYON)."</div></td>";														
							echo "<td><div align='left'>".strtoupper($VAR_NAMA)."</div></td>";							
							echo "<td><div align='center'>".strtoupper($VAR_ALAMAT)."</div></td>";														
						    echo "<td class='_css_font_default_link_11'><div align='center'>";
								echo "<a href='rayon_edit.php?id=$VAR_ID_RAYON'><img src='images/icon_edit.gif' width='16' height='16' border='0'></a>&nbsp;";	
								echo "<a href='rayon_delete.php?id=$VAR_ID_RAYON' onclick='return confirm(\"Delete : ".$VAR_NAMA." ?\")'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
						    echo "</div>";
						    echo "</td>";
 																																															
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


