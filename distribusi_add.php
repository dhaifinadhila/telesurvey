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

<body bgcolor="#e9e9e9">
	<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" class="BorderBox_NoColor">
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
			        <th class="_css_font_default_11" scope="col">
			        	<div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div>
			        </th>
			        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      			</tr>
      
      			<tr>
			        <th scope="col">&nbsp;</th>
			        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
			        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      			</tr>
      
      			<tr>
			        <th height="19" scope="col">&nbsp;</th>
			        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226;  <strong>Distribusi </strong>&#8226; Kantor Distribusi</div></th>
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
			            <div align="left">
			            	<a href="distribusi.php" class="button_default_aw">Distribusi</a>&nbsp;
			            	<a href="distribusi_add.php" class="button_default_aw">Add New Distribusi</a>
			        	</div>
			        </th>
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
			    		<form action="distribusi_add_submit.php" method="post">
			          		<table width="80%" border="0" align="left" class="BorderBox_ColorStandard">
					            <tr>
						            <td width="15">&nbsp;</td>
						            <td width="151">&nbsp;</td>
						            <td width="17">&nbsp;</td>
						            <td width="731">&nbsp;</td>
						            <td width="24">&nbsp;</td>
					            </tr>

			            		<tr>
			              			<td>&nbsp;</td>
			              			<td class="_css_font_default_12">
			              				<div align="left"><strong>Kode Distribusi</strong></div>
			              			</td>
			              			<td class="_css_font_default_12">
			              				<div align="center"><strong>:</strong></div>
			              			</td>
			              			<td>
			              				<input name="kode_distribusi" type="text" class="_css_input_text">
			              			</td>
			              			<td>&nbsp;</td>
			            		</tr>
			            		<tr>
			              			<td>&nbsp;</td>
			              			<td class="_css_font_default_12">
			              				<div align="left"><strong>Nama Distribusi</strong></div>
			              			</td>
			              			<td class="_css_font_default_12">
			              				<div align="center"><strong>:</strong></div>
			              			</td>
			              			<td>
			              				<input name="nama_distribusi" type="text" class="_css_input_text">
			              			</td>
			              			<td>&nbsp;</td>
			            		</tr>
			            		<tr>
			              			<td>&nbsp;</td>
			              			<td valign="top" class="_css_font_default_12">
			              				<div align="left"><strong>Keterangan</strong></div>
			              			</td>
			              			<td valign="top" class="_css_font_default_12">
			              				<div align="center"><strong>:</strong></div>
			              			</td>
			              			<td><textarea name="ket_distribusi" cols="61" rows="3" class="_css_input_text"></textarea></td>
			              			<td>&nbsp;</td>
			            		</tr>
			            		<tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
			            		</tr>
				            	<tr>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>&nbsp;</td>
					              	<td>
					              		<input name="Submit" type="submit" class="button_default_aw" value="Submit">  <input type = 'reset' name = 'Reset' value = 'Reset' class="button_default_aw">
					              	</td>
				            	</tr>
				            	<tr>
				              		<td>&nbsp;</td>
				              		<td>&nbsp;</td>
				              		<td>&nbsp;</td>
				              		<td>&nbsp;</td>
				              		<td>&nbsp;</td>
				            	</tr>
			          		</table>
			        	</form>
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