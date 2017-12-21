<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_distribusi.php");
include_once("function/function_area.php");

include_once("function/function_pengguna.php");
include_once("function/function_hak_akses.php");

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
		  <?php 
		    include "lib/menu.php"; 
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
        <th class="_css_font_default_11" scope="col"><div align="left">Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong></div></th>
        <th width="25" class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Pengguna </strong> &#8226; Tambah Pengguna </div></th>
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
        <th height="84" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><form action="pengguna_add_submit.php" method="post" enctype="multipart/form-data" name="form_callback_sheet">
          <table width="80%" border="0" align="left" class="BorderBox_ColorStandard">
            <tr>
              <td width="10">&nbsp;</td>
              <td width="144">&nbsp;</td>
              <td width="10">&nbsp;</td>
              <td width="573">&nbsp;</td>
              <td width="18">&nbsp;</td>
            </tr>
            
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama Distribusi </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td>
			  <select name="VAR_KODE_DISTRIBUSI" class="_css_input_text">
					<?php
					$distribusi = tb_distribusi_view();
					$nomor=1;
					for ($i=0;$i<count($distribusi);$i++) {
					
						$VAR_ID_PENGGUNA=$distribusi[$i]['id_distribusi'];
						$VAR_KODE_DISTRIBUSI=$distribusi[$i]['kode_distribusi'];
						$VAR_NAMA_DISTRIBUSI=$distribusi[$i]['nama_distribusi'];
						echo "<option value='$VAR_KODE_DISTRIBUSI'>$VAR_NAMA_DISTRIBUSI</option>";
					 }
					?>			  
              </select>              
			  </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama Unit atau Area </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><select name="VAR_KODE_UNIT" class="_css_input_text">
					<?php
					$unit = tb_area_view();
					$nomor=1;
					for ($i=0;$i<count($unit);$i++) {
					
						$VAR_ID_AREA		=$unit[$i]['id_area'];
						$VAR_KODE_DISTRIBUSI=$unit[$i]['kode_distribusi'];
						$VAR_KODE_AREA		=$unit[$i]['kode_area'];						
						$VAR_NAMA			=$unit[$i]['nama_area'];
						echo "<option value='$VAR_KODE_AREA'>$VAR_NAMA</option>";
					}
					?>
                  
                 </select>              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>NIP</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_NIP" type="text" class="_css_input_text" id="VAR_NIP"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_NAMA" type="text" class="_css_input_text" id="VAR_NAMA" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Username</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_EMAIL" type="text" class="_css_input_text" id="VAR_EMAIL" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Password</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_PASSWORD" type="password" class="_css_input_text" id="VAR_PASSWORD" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Jabatan</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_JABATAN" type="text" class="_css_input_text" id="VAR_JABATAN" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Hak Akses </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><select name="VAR_HAK_AKSES" class="_css_input_text" id="VAR_HAK_AKSES">
					<?php
					$hak_akses = tb_hak_akses_view();
					$nomor=1;
					for ($i=0;$i<count($hak_akses);$i++) {										
						$VAR_KODE_HAK_AKSES=$hak_akses[$i]['kode_hak_akses'];
						$VAR_KETERANGAN=$hak_akses[$i]['nama_hak_akses'];
						echo "<option value='$VAR_KODE_HAK_AKSES'>$VAR_KETERANGAN</option>";
					}
					?>                  
                </select>              
				</td>
              <td>&nbsp;</td>
            </tr>
			<!--
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Target Callback </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_TARGET_CALL" type="text" class="_css_input_text" id="VAR_TARGET_CALL"></td>
              <td>&nbsp;</td>
            </tr>
            -->
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
              <td><input name="Submit" type="submit" class="button_default_aw" value="Submit"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form></th>
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
            <?php include_once("lib/copyright.php"); ?></div>
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


