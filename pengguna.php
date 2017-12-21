<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {  
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
  echo '<script language="javascript">window.location = "logout.php"</script>';   
}
include_once("lib/config.php");
include_once("function/function_pengguna.php");
include_once("function/function_hak_akses.php");
?>
<html>
<?php include "lib/header.php";?>
<body  bgcolor="#e9e9e9" >
	<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" class="BorderBox_NoColor">
	<!--DWLayoutTable-->
	<tr>
		<td height="147" colspan="3" align="left" valign="top" bgcolor="#f4f4f4">
			<img src="images/header.png" width="1024" height="160">
		</td>
	</tr>
  
	<tr>
		<td width="1028" height="173" colspan="3" align="left" valign="top" bgcolor="#FFFFFF">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<th bgcolor="#414141" scope="col">&nbsp;</th>
					<th bgcolor="#414141" class="_css_font_default_11" scope="col">
						<?php include "lib/menu.php"; ?>
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
					<th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
					<th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
				</tr>
      
				<tr>
					<th scope="col">&nbsp;</th>
					<th class="_css_font_default_11" scope="col">
						<div align="left"><img src="images/line_full.gif" ></div>
					</th>
					<th class="_css_font_default_11" scope="col">&nbsp;</th>
				</tr>
				      
				<tr>
        			<th height="19" scope="col">&nbsp;</th>
        			<th class="_css_font_default_11" scope="col">
        				<div align="left"><strong>Data Pengguna </strong></div>
        			</th>
        			<th class="_css_font_default_11" scope="col">&nbsp;</th>
      			</tr>

				<tr>
					<th scope="col">&nbsp;</th>
					<th class="_css_font_default_11" scope="col">&nbsp;</th>
					<th class="_css_font_default_11" scope="col">&nbsp;</th>
				</tr>

				<tr>
       				<th height="19" scope="col">&nbsp;</th>
			        <th class="_css_font_default_11" scope="col">
				        <div align="left">
				            <div align="left">
								<a href="pengguna.php" class="button_default_aw"> Pengguna </a>&nbsp;
								<a href="pengguna_add.php" class="button_default_aw">Add Pengguna </a>&nbsp;
							</div>
				        </div>
			       	</th>
			        <th class="_css_font_default_11" scope="col">&nbsp;</th>
			    </tr>
				<tr>

					<th scope="col">&nbsp;</th>
					<th class="_css_font_default_11" scope="col">&nbsp; </th>
					<th class="_css_font_default_11" scope="col">&nbsp;</th>
				</tr>
				<tr>
				    <th height="84" scope="col">&nbsp;</th>
        			<th class="_css_font_default_11" scope="col">
						<table id="example" class="display" cellspacing="0" width="100%">
							<thead class="_css_font_default_11_b">
								<tr>
			                    	<th>N0</th>
			                        <th><div align='center'>Distribusi</div></th>
			                        <th><div align='center'>Area</div></th>						 
			                        <th><div align='center'>Rayon</div></th>						 						 
			                        <th><div align='center'>NIP</div></th>
			                        <th><div align='left'>Nama</div></th>
									<th><div align='left'>Email</div></th>
			                        <th><div align='center'>Password</div></th>																		
			                        <th><div align='center'>Jabatan</div></th>																								
			                        <th><div align='center'>Hak Akses</div></th>
									<th><div align='center'>Action</div></th>	
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
			                
								<?php
								$pengguna = pengguna_view();
								$nomor=1;
								for ($i=0;$i<count($pengguna);$i++) {
								
									$VAR_ID_PENGGUNA	=$pengguna[$i]['id_pengguna'];
									$VAR_KODE_DISTRIBUSI=$pengguna[$i]['kode_distribusi'];
									$VAR_KODE_AREA		=$pengguna[$i]['kode_area'];
									$VAR_KODE_RAYON		=$pengguna[$i]['kode_rayon'];
									if ($VAR_KODE_RAYON=="") {
										$VAR_KODE_RAYON = "-";
									}
									$VAR_NIP			=$pengguna[$i]['nip'];
									$VAR_EMAIL			=$pengguna[$i]['email'];
									$VAR_PASSWORD		=$pengguna[$i]['passswd'];
									$VAR_NAMA			=$pengguna[$i]['nama'];
									$VAR_JABATAN		=$pengguna[$i]['jabatan'];
									$VAR_HAK_AKSES		=$pengguna[$i]['kode_hak_akses'];
									
									$nama_hak_akses		= search_by_kd_hak_akses($VAR_HAK_AKSES);
									$VAR_NAMA_HAK_AKSES	= $nama_hak_akses[0]['nama_hak_akses'];
									
									$VAR_INFORMASI_01=$pengguna[$i]['INFORMASI_01'];
									$VAR_INFORMASI_02=$pengguna[$i]['INFORMASI_02'];
									$VAR_INFORMASI_03=$pengguna[$i]['INFORMASI_03'];
									$VAR_INFORMASI_04=$pengguna[$i]['INFORMASI_04'];
									$VAR_INFORMASI_05=$pengguna[$i]['INFORMASI_05'];
								
									echo "<tr>";
										echo "<td><div align='center'>".$nomor."</div></td>";						
										echo "<td><div align='center'>".strtoupper($VAR_KODE_DISTRIBUSI)."</div></td>";
										echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</div></td>";							
										echo "<td><div align='center'>".strtoupper($VAR_KODE_RAYON)."</div></td>";														
										echo "<td><div align='center'>".strtoupper($VAR_NIP)."</div></td>";																					
										echo "<td><div align='left'>".strtoupper($VAR_NAMA)."</div></td>";																												
										echo "<td><div align='left'>".$VAR_EMAIL."</div></td>";																				
										echo "<td><div align='left'>".md5($VAR_PASSWORD)."</div></td>";																											
										echo "<td><div align='center'>".strtoupper($VAR_JABATAN)."</div></td>";																																		
										echo "<td><div align='center'>".strtoupper($VAR_NAMA_HAK_AKSES)."</div></td>";																																																	
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
					<th class="_css_font_default_11" scope="col">
						<div align="left" class="_css_font_default_11_b">
							<div align="center"><?php include_once("lib/copyright.php"); ?></div>
						</div>
					</th>
					<th class="_css_font_default_11" scope="col">&nbsp;</th>
				</tr>
				      
			</table>
		</td>
	</tr>
				  
	<tr>
		<td height="22" colspan="3" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
	</tr>

</table>
<p>&nbsp;</p>
</body>
</html>


