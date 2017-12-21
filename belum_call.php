<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/engine.php");
include_once("function/function_file_upload.php");
include_once("function/function_master.php");
include_once("function/function_call.php");
?>
<html>
<?php include "lib/header.php";?>
<body  bgcolor="#e9e9e9">
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
		        	<th class="_css_font_default_11" scope="col"><div align="left"><strong>Belum Call </strong>&#8226; <?php// if ($_GET['pbpd']=="1"){ echo "Pelanggan Pasang Baru"; } else { echo "Pelanggan Perubahan Daya";} ?></div></th>
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
			                    	<th><div align='center'>Kode Distribusi</div></th>
			                    	<th><div align='center'>Kode Area</div></th>
			                    	<th><div align='center'>Kode Rayon</div></th>
									<th><div align='center'>ID Pelanggan</div></th>
									<th><div align='center'>Nama</div></th>			
									<th><div align='center'>Alamat</div></th>
									<th><div align='center'>No Telepon</div></th>
									<th><div align='center'>No Handphone</div></th>
									<th><div align='center'>Tarif</div></th>
									<th><div align='center'>Daya</div></th>
									<th><div align='center'>PemKWH</div></th>
									<th><div align='center'>Jam Nyala</div></th>
									<th><div align='center'>Jam Nyala 600</div></th>
									<th><div align='center'>Jam Nyala 400</div></th>
									<th><div align='center'>Hasil Konversi</div></th>
									<th><div align='center'>No Registrasi</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
                
							<?php
							
							$master = belum_call(); 
							$nomor=1;
							
							for ($i=0;$i<count($master);$i++) {
								
								$VAR_ID_MASTER		=$master[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_ID_PELANGGAN	=$master[$i]['id_pelanggan'];
								$VAR_NAMA			=$master[$i]['nama'];
								$VAR_ALAMAT			=$master[$i]['alamat'];
								$VAR_NOTELP			=$master[$i]['no_telp'];
								$VAR_NO_HP			=$master[$i]['no_hp'];
								$VAR_PEMKWH			=$master[$i]['pemkwh'];
								$VAR_TARIF			=$master[$i]['tarif'];
								$VAR_DAYA			=$master[$i]['daya'];
								$VAR_JAM_NYALA 		=$master[$i]['jam_nyala'];
								$VAR_JAM_NYALA_600	=$master[$i]['jam_nyala_600'];
								$VAR_JAM_NYALA_400	=$master[$i]['jam_nyala_400'];
								$VAR_HASIL_KONVERSI =$master[$i]['hasil_konversi'];
								$VAR_NO_REG			=$master[$i]['no_registrasi'];

								$VAR_KODE_DISTRIBUSI=$master[$i]['kode_distribusi'];
								$VAR_KODE_AREA		=$master[$i]['kode_area'];
								$VAR_KODE_RAYON		=$master[$i]['kode_rayon'];
							
		 					
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KODE_DISTRIBUSI)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KODE_RAYON)."</a></div></td>";

									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_ID_PELANGGAN)."</a></div></td>";
									echo "<td><div align='left'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NAMA)."</a></div></td>";
									echo "<td><div align='left'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_ALAMAT)."</a></div></td>";
									echo "<td><div align='left'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NOTELP)."</a></div></td>";
									echo "<td><div align='left'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NO_HP)."</a></div></td>";
									
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_TARIF)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_DAYA)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_PEMKWH)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_JAM_NYALA)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_JAM_NYALA_600)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_JAM_NYALA_400)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_HASIL_KONVERSI)."</a></div></td>";
									echo "<td><div align='center'><a href='call.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NO_REG)."</a></div></td>";
									
									
									
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
  	<tr>
    	<td height="22" colspan="3" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  	</tr>
</table>
<p>&nbsp;</p>
</body>
</html>


