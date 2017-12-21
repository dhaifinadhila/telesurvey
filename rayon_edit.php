<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_tm_DISTRIBUSI.php");
include_once("function/function_tm_AREA.php");
include_once("function/function_tm_RAYON.php");

$VAR_ID_RAYON = $_GET['id'];

$rayon = tm_rayon_search_by_id_rayon($VAR_ID_RAYON);
/* echo "<pre>";
print_r($rayon);
echo "</pre>"; */
 

$GET_ID_RAYON		=$rayon[0]['ID_RAYON'];
$GET_KODE_DISTRIBUSI=$rayon[0]['KODE_DISTRIBUSI'];
$GET_KODE_AREA		=$rayon[0]['KODE_AREA'];
$GET_KODE_RAYON		=$rayon[0]['KODE_RAYON'];
$GET_NAMA_RAYON		=$rayon[0]['NAMA_RAYON'];
$GET_KETERANGAN		=$rayon[0]['KETERANGAN'];



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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226; <strong> Rayon</strong><strong> </strong>&#8226; Kantor Rayon </div></th>
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
          <div align="left"><a href="rayon.php" class="button_default_aw">Rayon</a>&nbsp;<a href="rayon_add.php" class="button_default_aw">Add New Rayon </a></div>
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
		<form action="rayon_edit_submit.php?id=<? echo $GET_ID_RAYON; ?>" method="post" enctype="multipart/form-data" name="form_callback_sheet">
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
              <td><select name="VAR_KODE_DISTRIBUSI" class="_css_input_text">
                <?
					$distribusi = tm_DISTRIBUSI_view_all();
					$nomor=1;
					for ($i=0;$i<count($distribusi);$i++) {					
						$THIS_ID_PENGGUNA=$distribusi[$i]['ID_DISTRIBUSI'];
						$THIS_KODE_DISTRIBUSI=$distribusi[$i]['KODE_DISTRIBUSI'];
						$THIS_NAMA_DISTRIBUSI=$distribusi[$i]['NAMA_DISTRIBUSI'];
						$THIS_ALAMAT=$distribusi[$i]['ALAMAT'];
						if ($THIS_KODE_DISTRIBUSI==$GET_KODE_DISTRIBUSI) {						
							echo "<option value='$THIS_KODE_DISTRIBUSI' selected='selected'>$THIS_NAMA_DISTRIBUSI</option>";
						} else {
							echo "<option value='$THIS_KODE_DISTRIBUSI'>$THIS_NAMA_DISTRIBUSI</option>";
						}
					}
				?>
              </select></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama Area </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td>
			  <select name="VAR_KODE_AREA" class="_css_input_text">
					<?
					$AREA = tm_area_view();
					$nomor=1;
					for ($i=0;$i<count($AREA);$i++) {
					
						$VAR_ID_AREA=$AREA[$i]['ID_AREA'];
						$VAR_KODE_DISTRIBUSI=$AREA[$i]['KODE_DISTRIBUSI'];
						$VAR_KODE_AREA=$AREA[$i]['KODE_AREA'];						
						$VAR_NAMA=$AREA[$i]['NAMA_AREA'];
						if ($VAR_KODE_AREA==$GET_KODE_AREA) {
							echo "<option value='$VAR_KODE_AREA' selected='selected'>$VAR_NAMA</option>";
						} else {
							echo "<option value='$VAR_KODE_AREA'>$VAR_NAMA</option>";
						}
					}
					?>			  
              </select>
			  </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Rayon</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_KODE_RAYON" type="text" class="_css_input_text" id="VAR_KODE_RAYON" value="<? echo $GET_KODE_RAYON; ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama Rayon </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_NAMA_RAYON" type="text" class="_css_input_text" id="VAR_NAMA_RAYON" value="<? echo $GET_NAMA_RAYON; ?>" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="_css_font_default_12"><div align="left"><strong>Alamat</strong></div></td>
              <td valign="top" class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><textarea name="VAR_KETERANGAN" cols="61" rows="3" class="_css_input_text" id="VAR_KETERANGAN"><? echo $GET_KETERANGAN; ?></textarea></td>
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


