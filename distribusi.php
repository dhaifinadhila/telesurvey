<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {  
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
  echo '<script language="javascript">window.location = "logout.php"</script>';   
}
include_once("lib/config.php");
include_once("function/function_distribusi.php");
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
        				<div align="left"><strong>Data Master </strong>&#8226; Distribusi</div>
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
								<a href="distribusi.php" class="button_default_aw"> Distribusi </a>&nbsp;
								<a href="distribusi_add.php" class="button_default_aw">Add Distribusi </a>&nbsp;
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
		                    	<th>No</th>
		                        
		                        <th><div align='center'>Kode Distribusi</div></th>
		                        <th><div align='center'>Nama Distribusi</div></th>
		                        <th><div align='center'>Keterangan</div></th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody class="_css_font_default_11_b">
		                
							<?php
							$distribusi = tb_distribusi_view();
				          	$nomor=1;
				          	for ($i=0;$i<count($distribusi);$i++) {
				          
				            $id_distribusi   	=$distribusi[$i]['id_distribusi'];
				            $kode_distribusi	=$distribusi[$i]['kode_distribusi'];           
				            $nama_distribusi 	=$distribusi[$i]['nama_distribusi'];
				            $ket_distribusi  	=$distribusi[$i]['keterangan'];
				          
				            echo "<tr>";
				              echo "<td><div align='center'>".$nomor."</div></td>";           
				              echo "<td><div align='center'>".strtoupper($kode_distribusi)."</div></td>";            
				              echo "<td><div align='CENTER'>".strtoupper($nama_distribusi)."</div></td>";              
				              echo "<td><div align='CENTER'>".strtoupper($ket_distribusi)."</div></td>";                            
				                echo "<td class='_css_font_default_link_11'><div align='center'>";
				                echo "<a href='distribusi_edit.php?id=$id_distribusi'><img src='images/icon_edit.gif' width='16' height='16' border='0'></a>&nbsp;";  
				                echo "<a href='distribusi_delete.php?id=$id_distribusi' onclick='return confirm(\"Delete : ".$nama_distribusi." ?\")'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
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


