<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {  
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
  echo '<script language="javascript">window.location = "logout.php"</script>';   
}
include_once("lib/config.php");

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
						<div align="left"><strong>Home</strong></div>
					</th>
					<th class="_css_font_default_11" scope="col">&nbsp;</th>
				</tr>
				      
				<tr>
					<th scope="col">&nbsp;</th>
					<th class="_css_font_default_11" scope="col"><div align="center">
					<table width="100%" border="0">
						<tr>
							<td width="9%">&nbsp;</td>
							<td width="89%">&nbsp;</td>
							<td width="2%">&nbsp;</td>
						</tr>
					</table>
					</div></th>
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

</table>
<p>&nbsp;</p>
</body>
</html>


