<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {  
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
  	echo '<script language="javascript">window.location = "logout.php"</script>';   
}
include_once("lib/config.php");
include_once("function/function_upload.php");
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
        				<div align="left"><strong>Upload File Excell </strong></div>
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
								<a href="upload.php" class="button_default_aw"> File Excell </a>&nbsp;
								<a href="upload_file.php" class="button_default_aw">Add New File Excell </a>&nbsp;
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
						<form action="upload_submit.php" method="post" enctype="multipart/form-data" name="form_callback_sheet">
							<table width="80%" border="0" align="left" cellpadding="4" class="BorderBox_ColorStandard">
								<tr>
              						<td width="115">&nbsp;</td>
					              	<td width="5">&nbsp;</td>
					              	<td width="594">&nbsp;</td>
					              	<td width="21">&nbsp;</td> 	
            					</tr>
            					<tr>
              						<td class="_css_font_default_12">
              							<div align="right"><strong>Pilih  File Excell </strong></div>
              						</td>
					              	<td class="_css_font_default_12"><strong>:</strong></td>
					              	<td><input name="ufile" type="file" class="_css_input_text" id="ufile"></td>
					              	<td>&nbsp;</td>
            					</tr>
            					<tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td class="_css_font_default_link_11"><strong>Note : </strong></td>
					              	<td>&nbsp;</td>
					            </tr>
					            <tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td><span class="_css_font_default_link_11">- Template File dapat diunduh <a href="Book1.xlsx">disini</a> </span></td>
					              	<td>&nbsp;</td>
					            </tr>
					            <tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td><span class="_css_font_default_link_11">- Pastikan file yang diupload adalah <strong>FILE EXCEL</strong> dengan tipe extension <strong>.XLSX</strong> </span></td>
					              	<td>&nbsp;</td>
					            </tr>
					            <tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td><span class="_css_font_default_link_11">- Pastikan nama file yang akan diupload berbeda</span></td>
					              	<td>&nbsp;</td>
					            </tr>
					            <tr>
				              		<td>&nbsp;</td>
				              		<td>&nbsp;</td>
				              		<td><span class="_css_font_default_link_11">- Untuk memproses file ini memerlukan waktu &plusmn; 1 menit. Mohon sabar untuk menunggu sampai selesai. </span></td>
				              		<td>&nbsp;</td>
				            	</tr>
				            	<tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td><input name="Submit" type="submit" class="button_default_aw" value="UPLOAD SEKARANG"></td>
					              	<td>&nbsp;</td>
					            </tr>
				            	<tr>
              						<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					            </tr>
							</table>
							
						</form>
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


 	