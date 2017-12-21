<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_rekap.php");
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
		        	<th class="_css_font_default_11" scope="col"><div align="left"><strong>Pemakaian Listrik</strong>&#8226; <?php// if ($_GET['pbpd']=="1"){ echo "Pelanggan Pasang Baru"; } else { echo "Pelanggan Perubahan Daya";} ?></div></th>
		        	<th class="_css_font_default_11" scope="col">&nbsp;</th>
		      	</tr>
      			<tr>
			        <th height="19" scope="col">&nbsp;</th>
			        <th class="_css_font_default_11" scope="col"><div align="left">
            			<table width="200" border="0" cellspacing="1">
			              	<tr>
				                <td width="20"><img src="images/excel-icon.gif"/></td>
				                <td width="173"><a href="export/export_rekap_pemakaian_listrik.php"  >Export to Excel</a></td>
			              	</tr>
            			</table>
        			</div></th>
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
									<th><div align='center'>Ya</div></th>
									<th><div align='center'>Tidak</div></th>
									<th><div align='center'>Tidak Tahu</div></th>
									<th><div align='center'>Total Pelanggan</div></th>
									<th><div align='center'>Bulan Tahun</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
                
							<?php
							
							$rekap = rekap_pemakaian_listrik(); 
							$nomor=1;
							
							for ($i=0;$i<count($rekap);$i++) {
								
								$VAR_ID_MASTER		=$rekap[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_KODE_AREA				=$rekap[$i]['kode_area'];
								$VAR_NAMA_AREA				=$rekap[$i]['nama_area'];
								$VAR_YA						=$rekap[$i]['ya'];
								$VAR_TIDAK					=$rekap[$i]['tidak'];
								$VAR_TIDAK_TAHU				=$rekap[$i]['tidak_tahu'];
								$VAR_JUMLAH					=$rekap[$i]['jumlah'];
								$VAR_BLTH					=$rekap[$i]['blth'];
		 					
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_YA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_TIDAK)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_TIDAK_TAHU)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_JUMLAH)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_BLTH)."</a></div></td>";
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


