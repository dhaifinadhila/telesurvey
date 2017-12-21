<?
include_once("lib/config.php");
include_once("function/function_gejala.php");
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
<table width="940" border="0" align="center" cellpadding="0" cellspacing="0" class="BorderBox_NoColor">
  <!--DWLayoutTable-->
  <tr>
    <td height="147" colspan="3" align="left" valign="top" bgcolor="#f4f4f4"><img src="images/header.png" width="940" height="160"></td>
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
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Daftar Tabel</strong></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><a href="tabel.php" class="button_default_aw">VIEW DATA</a>&nbsp;<a href="tabel_add.php" class="button_default_aw">ADD DATA  </a></div></th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">
		<div align="left">
		  <table width="100%" border="1" cellpadding="1" cellspacing="1" class="BorderBox_NoColor">
            <tr>
              <td width="3%" bgcolor="#666666" class="_css_font_default_12"><div align="center" class="_css_font_default_11_blue"><strong>No</strong></div></td>
              <td width="90%" bgcolor="#666666" class="_css_font_default_12"><div align="center" class="_css_font_default_11_blue"><strong>Nama TABEL </strong></div></td>
              <td width="7%" bgcolor="#666666" class="_css_font_default_12"><div align="center" class="_css_font_default_11_blue"><strong>Action</strong></div></td>
            </tr>
			
			<?
			$nomor=1;
			for ($i=0;$i<10;$i++) {		
 
				
				echo "<tr>";
				  echo "<td><div align='center' class='_css_font_default_link_11 style1'>$nomor</div></td>";
				  echo "<td><div align='left' class='_css_font_default_link_11 style1'>BLA BLA BLA ...</div></td>";
				  echo "<td>";
				  echo "<div align='center'>";
				  echo "<a href='gejala_edit.php?id=$current_id_gejala'><img src='images/icon_edit.gif' width='16' height='16' border='0'></a>&nbsp;";
				  echo "<a href='gejala_delete.php?id=$current_id_gejala'><img src='images/icon_delete.gif' width='16' height='16' border='0'></a>";
				  echo "</div>";
				  echo "</td>";
				echo "</tr>";
				$nomor++;
			}
			?>
          </table>
		</div>		</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th height="19" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col">&nbsp;</th>
      </tr>
      
      <tr>
        <th scope="col">&nbsp;</th>
        <th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
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
</table>
<p>&nbsp;</p>
</body>
</html>


