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

$VAR_ID_AREA = $_GET['id'];
$AREA = search_by_id_area($VAR_ID_AREA);

$VAR_ID_AREA		    =$AREA[0]['id_area'];
$VAR_KODE_DISTRIBUSI=$AREA[0]['kode_distribusi'];
$VAR_KODE_AREA		  =$AREA[0]['kode_area'];
$VAR_NAMA_AREA		  =$AREA[0]['nama_area'];
$VAR_KETERANGAN		   =$AREA[0]['keterangan'];
 
//print_r("<pre>");
//print_r($AREA);
//print_r("</pre>");
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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Data Master </strong>&#8226; <strong>Area </strong><strong> </strong>&#8226; Edit Area</div></th>
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
          <div align="left"><a href="AREA.php" class="button_default_aw">Area</a>&nbsp;<a href="AREA_add.php" class="button_default_aw">Add New Area </a></div>
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
		<form action="area_edit_submit.php?id=<?php echo $VAR_ID_AREA; ?>" method="post" enctype="multipart/form-data" name="form_callback_sheet">
          <table width="80%" border="0" align="left" class="BorderBox_ColorStandard">
            <tr>
              <td width="15">&nbsp;</td>
              <td width="151">&nbsp;</td>
              <td width="17">&nbsp;</td>
              <td width="731">&nbsp;</td>
              <td width="24">&nbsp;</td>
            </tr>
            <input type="hidden" name="id" value="<?php echo $VAR_ID_AREA; ?>">
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
						$THIS_ID_PENGGUNA     =$distribusi[$i]['id_distribusi'];
						$THIS_KODE_DISTRIBUSI =$distribusi[$i]['kode_distribusi'];
						$THIS_NAMA_DISTRIBUSI =$distribusi[$i]['nama_distribusi'];
						$THIS_ALAMAT=$distribusi[$i]['alamat'];
						if ($THIS_KODE_DISTRIBUSI==$VAR_KODE_DISTRIBUSI) {						
							echo "<option value='$THIS_KODE_DISTRIBUSI' selected='selected'>$THIS_NAMA_DISTRIBUSI</option>";
						} else {
							echo "<option value='$THIS_KODE_DISTRIBUSI'>$THIS_NAMA_DISTRIBUSI</option>";
						}
					}
				?>			  
              </select>              
			  </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Kode Area</strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_KODE_AREA" type="text" class="_css_input_text" id="VAR_KODE_AREA" value="<?php echo $VAR_KODE_AREA; ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="_css_font_default_12"><div align="left"><strong>Nama Area </strong></div></td>
              <td class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><input name="VAR_NAMA_AREA" type="text" class="_css_input_text" id="VAR_NAMA_AREA" value="<?php echo $VAR_NAMA_AREA; ?>" size="60"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td valign="top" class="_css_font_default_12"><div align="left"><strong>Keterangan</strong></div></td>
              <td valign="top" class="_css_font_default_12"><div align="center"><strong>:</strong></div></td>
              <td><textarea name="VAR_KETERANGAN" cols="61" rows="3" class="_css_input_text"><?php echo $VAR_KETERANGAN; ?></textarea></td>
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
              <td><input name="Submit" type="submit" class="button_default_aw" value="UPDATE"></td>
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
            <?php include_once("lib/copyright.php"); ?>
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


