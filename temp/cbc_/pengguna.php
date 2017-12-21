<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_file_excell.php");
include_once("function/function_cbc_pengguna.php");

$data = cbc_pengguna_view_all();

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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226;  Pengguna </div></th>
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
            <div align="left"><a href="pengguna.php" class="button_default_aw">Pengguna</a>&nbsp;<a href="pengguna_add.php" class="button_default_aw">Add New Pengguna</a></div>
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
                <td width="173"><a href="#" class="style1" onClick="return ExcellentExport.excel(this, 'example', 'pengguna');" download="pengguna.xls">Export to Excel</a></td>
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
                         <th><div align='center'>DISTRIBUSI</div></th>
                         <th><div align='center'>UNIT</div></th>						 
                         <th><div align='center'>RAYON</div></th>						 						 
                        <th><div align='center'>NIP</div></th>
                        <th><div align='center'>NAMA</div></th>						
                        <th><div align='center'>EMAIL</div></th>												
                        <th><div align='center'>PASSWORD</div></th>																		
                        <th><div align='center'>JABATAN</div></th>																								
                        <th><div align='center'>HAK AKSES</div></th>																														
                        <th><div align='center'>TARGET</div></th>	
						<th><div align='center'>ACTION</div></th>	
																																									
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$pengguna = cbc_pengguna_view_all();
					$nomor=1;
					for ($i=0;$i<count($pengguna);$i++) {
					
						$VAR_ID_PENGGUNA=$pengguna[$i]['ID_PENGGUNA'];
						$VAR_KODE_DISTRIBUSI=$pengguna[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_UNIT=$pengguna[$i]['KODE_UNIT'];
						$VAR_KODE_RAYON=$pengguna[$i]['KODE_RAYON'];
						$VAR_NIP=$pengguna[$i]['NIP'];
						$VAR_EMAIL=$pengguna[$i]['EMAIL'];
						$VAR_PASSWORD=$pengguna[$i]['PASSWORD'];
						$VAR_NAMA=$pengguna[$i]['NAMA'];
						$VAR_JABATAN=$pengguna[$i]['JABATAN'];
						$VAR_HAK_AKSES=$pengguna[$i]['HAK_AKSES'];
						$VAR_TARGET_CALL=$pengguna[$i]['TARGET_CALL'];
						$VAR_INFORMASI_01=$pengguna[$i]['INFORMASI_01'];
						$VAR_INFORMASI_02=$pengguna[$i]['INFORMASI_02'];
						$VAR_INFORMASI_03=$pengguna[$i]['INFORMASI_03'];
						$VAR_INFORMASI_04=$pengguna[$i]['INFORMASI_04'];
						$VAR_INFORMASI_05=$pengguna[$i]['INFORMASI_05'];
						$VAR_INFORMASI_06=$pengguna[$i]['INFORMASI_06'];
						$VAR_INFORMASI_07=$pengguna[$i]['INFORMASI_07'];
						$VAR_INFORMASI_08=$pengguna[$i]['INFORMASI_08'];
						$VAR_INFORMASI_09=$pengguna[$i]['INFORMASI_09'];
						$VAR_INFORMASI_10=$pengguna[$i]['INFORMASI_10'];
					
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";						
							echo "<td><div align='center'>".strtoupper($VAR_KODE_DISTRIBUSI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_KODE_UNIT)."</div></td>";							
							echo "<td><div align='center'>".strtoupper($VAR_KODE_RAYON)."</div></td>";														
							echo "<td><div align='center'>".strtoupper($VAR_NIP)."</div></td>";																					
							echo "<td><div align='center'>".strtoupper($VAR_NAMA)."</div></td>";																												
							echo "<td><div align='center'>".$VAR_EMAIL."</div></td>";																				
							echo "<td><div align='left'>".$VAR_PASSWORD."</div></td>";																											
							echo "<td><div align='center'>".strtoupper($VAR_JABATAN)."</div></td>";																																		
							echo "<td><div align='center'>".strtoupper($VAR_HAK_AKSES)."</div></td>";																																									
							echo "<td><div align='center'>".strtoupper($VAR_TARGET_CALL)."</div></td>";																																																
						    echo "<td class='_css_font_default_link_11'><div align='center'>";
								echo "<a href='pengguna_edit.php?id=$VAR_ID_PENGGUNA'><img src='images/icon_edit.gif' width='16' height='16' border='0'></a>&nbsp;";	
								echo "<a href='pengguna_delete.php?id=$VAR_ID_PENGGUNA' onclick='return confirm(\"Delete : ".$VAR_NAMA." ?\")'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
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


