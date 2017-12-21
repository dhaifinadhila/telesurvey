<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_distribusi.php");
include_once("function/function_cbc_unit.php");
include_once("function/function_cbc_rayon.php");
include_once("function/function_cbc_pengguna.php");
include_once("function/function_cbc_hak_akses.php");

$VAR_ID_PENGGUNA = $_GET['id'];
$pengguna = cbc_pengguna_search_by_id_pengguna($VAR_ID_PENGGUNA);


$PGN_KODE_DISTRIBUSI=$pengguna[0]['KODE_DISTRIBUSI'];
$PGN_KODE_UNIT=$pengguna[0]['KODE_UNIT'];
$PGN_KODE_RAYON=$pengguna[0]['KODE_RAYON'];
$PGN_NIP=$pengguna[0]['NIP'];
$PGN_EMAIL=$pengguna[0]['EMAIL'];
$PGN_PASSWORD=$pengguna[0]['PASSWORD'];
$PGN_NAMA=$pengguna[0]['NAMA'];
$PGN_JABATAN=$pengguna[0]['JABATAN'];
$PGN_HAK_AKSES=$pengguna[0]['HAK_AKSES'];
$PGN_TARGET_CALL=$pengguna[0]['TARGET_CALL'];

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
        <th height="84" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><form action="pengguna_edit_submit.php?id=<? echo $VAR_ID_PENGGUNA;?>" method="post" enctype="multipart/form-data" name="form_callback_sheet">
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
					<?
					$distribusi = cbc_DISTRIBUSI_view_all();
					$nomor=1;
					for ($i=0;$i<count($distribusi);$i++) {
					
						$VAR_ID_PENGGUNA=$distribusi[$i]['ID_DISTRIBUSI'];
						$VAR_KODE_DISTRIBUSI=$distribusi[$i]['KODE_DISTRIBUSI'];
						$VAR_NAMA_DISTRIBUSI=$distribusi[$i]['NAMA_DISTRIBUSI'];
						if ($VAR_KODE_DISTRIBUSI==$PGN_KODE_DISTRIBUSI) {
							echo "<option value='$VAR_KODE_DISTRIBUSI' selected='selected'>$VAR_NAMA_DISTRIBUSI</option>";
						} else {
							echo "<option value='$VAR_KODE_DISTRIBUSI'>$VAR_NAMA_DISTRIBUSI</option>";
						}
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
					<?
					$unit = cbc_UNIT_view_all();
					$nomor=1;
					for ($i=0;$i<count($unit);$i++) {
					
						$VAR_ID_UNIT=$unit[$i]['ID_UNIT'];
						$VAR_KODE_DISTRIBUSI=$unit[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_UNIT=$unit[$i]['KODE_UNIT'];						
						$VAR_NAMA=$unit[$i]['NAMA_UNIT'];
						$VAR_ALAMAT=$unit[$i]['ALAMAT'];
						if ($VAR_KODE_UNIT==$PGN_KODE_UNIT) {
							echo "<option value='$VAR_KODE_UNIT' selected='selected'>$VAR_NAMA</option>";
						} else {
							echo "<option value='$VAR_KODE_UNIT'>$VAR_NAMA</option>";
						}
					}
					?>
                  
                 </select>              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama Rayon </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><select name="VAR_KODE_RAYON" class="_css_input_text">
					<?
					$rayon = cbc_RAYON_view_all();
					$nomor=1;
					for ($i=0;$i<count($rayon);$i++) {
					
						$VAR_ID_UNIT=$rayon[$i]['ID_UNIT'];
						$VAR_KODE_DISTRIBUSI=$rayon[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_UNIT=$rayon[$i]['KODE_UNIT'];						
						$VAR_KODE_RAYON=$rayon[$i]['KODE_RAYON'];	
						$VAR_NAMA=$rayon[$i]['NAMA_RAYON'];
						$VAR_ALAMAT=$rayon[$i]['ALAMAT'];
						if ($VAR_KODE_RAYON==$PGN_KODE_RAYON) {
							echo "<option value='$VAR_KODE_RAYON' selected='selected'>$VAR_NAMA</option>";
						} else {
							echo "<option value='$VAR_KODE_RAYON'>$VAR_NAMA</option>";
						}
					}	
					?>
                
              </select>              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>NIP</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_NIP" type="text" class="_css_input_text" id="VAR_NIP" value="<? echo $PGN_NIP; ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_NAMA" type="text" class="_css_input_text" id="VAR_NAMA" value="<? echo $PGN_NAMA; ?>" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Email</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_EMAIL" type="text" class="_css_input_text" id="VAR_EMAIL" value="<? echo $PGN_EMAIL; ?>" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Password</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_PASSWORD" type="text" class="_css_input_text" id="VAR_PASSWORD" value="<? echo $PGN_PASSWORD; ?>" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Jabatan</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_JABATAN" type="text" class="_css_input_text" id="VAR_JABATAN" value="<? echo $PGN_JABATAN; ?>" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Hak Akses </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><select name="VAR_HAK_AKSES" class="_css_input_text" id="VAR_HAK_AKSES">
					<?
					$hak_akses = cbc_hak_akses_view_all();
					$nomor=1;
					for ($i=0;$i<count($hak_akses);$i++) {										
						$VAR_KODE_HAK_AKSES=$hak_akses[$i]['KODE_HAK_AKSES'];
						$VAR_KETERANGAN=$hak_akses[$i]['KETERANGAN'];
						if ($VAR_KODE_HAK_AKSES==$PGN_HAK_AKSES) {
							echo "<option value='$VAR_KODE_HAK_AKSES' selected='selected'>$VAR_KETERANGAN</option>";
						} else {
							echo "<option value='$VAR_KODE_HAK_AKSES'>$VAR_KETERANGAN</option>";
						}
					}
					?>                  
                </select>              
				</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Target Callback </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_TARGET_CALL" type="text" class="_css_input_text" id="VAR_TARGET_CALL" value="<? echo $PGN_TARGET_CALL; ?>"></td>
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
              <td><input name="Submit" type="submit" class="button_default_aw" value="Update"></td>
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


