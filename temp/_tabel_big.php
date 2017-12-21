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
        <th class="_css_font_default_11" scope="col"><div class="_css_font_default_11_black" style="white-space:pre;overflow:auto;width:900px;">
 
          <table style="width:900px;" border="1" bordercolor="#999999" cellpadding="2" cellspacing="0" >
            <tr>
              <th width="48" rowspan="2"  bgcolor='#CCCCCC'><strong><span class="_css_font_default_11_black">NO</span></strong></th>
              <th width="273" rowspan="2"  bgcolor='#CCCCCC'><strong><span class="_css_font_default_11_black"> ID PELANGGAN </span></strong></th>
              <th width="185" rowspan="2"  bgcolor='#CCCCCC' style=""><strong><span class="_css_font_default_11_black">NAMA PELANGGAN</span></strong></th>
              <th width="26" rowspan="2" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">KONDISI AMPLOP AIL</span></strong></th>
              <th width="100" rowspan="2"  bgcolor='#CCCCCC' style=""><strong><span class="_css_font_default_11_black">KONDISI LABEL AIL</span></strong></th>
              <th colspan="11" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">KELENGKAPAN AIL</span></strong></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">KETERANGAN</span></strong></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">LAST UPDATE</span></strong></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">USER UPDATE BY</span></strong></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">ACTION</span></strong></th>
            </tr>
            <tr>
              <th width="57" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">SURAT PERMOHONAN</span></strong></th>
              <th width="57" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">IDENTITAS PELANGGAN</span></strong></th>
              <th width="140" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">FORMULIR SURVEY</span></strong></th>
              <th width="50" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">JAWABAN PERSETUJUAN</span></strong></th>
              <th width="111" bgcolor="#CCCCCC" style=""><strong><span class="_css_font_default_11_black">SPJBTL</span></strong></th>
              <th width="64" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">SUPLEMEN SPJBTL</span></strong></th>
              <th width="64" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">SERTIFIKAT LAIK OPERASI</span></strong></th>
              <th width="124" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">KUITANSI PEMBAYARAN BP DAN UJL</span></strong></th>
              <th width="61" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">TUL I-09</span></strong></th>
              <th width="87" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">TUL I-10</span></strong></th>
              <th width="87" bgcolor="#CCCCCC"><strong><span class="_css_font_default_11_black">LAIN LAIN</span></strong></th>
            </tr>
            
            <tr onmouseover="this.style.background=&#39;#EEEEEE&#39;;" onmouseout="this.style.background=&#39;&#39;;" >
              <td align="center" nowrap="" class="_css_font_default_11" >1</td>
              <td align="center" nowrap="" class="_css_font_default_11"  >54123123</td>
              <td align="left" nowrap="" class="_css_font_default_11" style="" >Kustab</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_KONDISI_AMPLOP_AIL_bgcolor; ?>" class="_css_font_default_11" style="">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_KONDISI_LABEL_AIL_bgcolor; ?>" class="_css_font_default_11" style="">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_SURAT_PERMOHONAN_bgcolor; ?>" class="_css_font_default_11" style="">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_IDENTITAS_PELANGGAN_bgcolor; ?>" class="_css_font_default_11" style="" >YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_FORMULIR_SURVEY_bgcolor; ?>" class="_css_font_default_11" style="">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_JAWABAN_PERSETUJUAN_bgcolor; ?>" class="_css_font_default_11" style="">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_SPJBTL_bgcolor; ?>" class="_css_font_default_11" style="">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_SUPLEMEN_SPJBTL_bgcolor; ?>" class="_css_font_default_11">AY</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_SERTIFIKAT_LAIK_OPERASI_bgcolor; ?>" class="_css_font_default_11">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_KUITANSI_PEMBAYARAN_BP_DAN_UJL_bgcolor; ?>" class="_css_font_default_11">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_TUL_I_09_bgcolor; ?>" class="_css_font_default_11">YA</td>
              <td align="center" nowrap="" bgcolor="<? echo $get_TUL_I_10_bgcolor; ?>" class="_css_font_default_11">YA</td>
              <td align="center" nowrap="" class="_css_font_default_11">LAIN LAIN</td>
              <td nowrap="" class="_css_font_default_11">KETERANGAN</td>
              <td nowrap="" class="_css_font_default_11">2013-13-02</td>
              <td nowrap="" class="_css_font_default_11">BAMBANG</td>
              <td nowrap=""><div align="center"><img src="images/icon_edit.gif" width="16" height="16"> <img src="images/icon_delete.gif" width="16" height="16"></div></td>
            </tr>
        
            <tr>
              <th width="48" rowspan="2"  bgcolor='#CCCCCC'><span class="_css_font_default_11_black">NO</span></th>
              <th width="273" rowspan="2"  bgcolor='#CCCCCC'><span class="_css_font_default_11_black"> ID PELANGGAN </span></th>
              <th width="185" rowspan="2"  bgcolor='#CCCCCC' style=""><span class="_css_font_default_11_black">NAMA PELANGGAN</span></th>
              <th width="26" rowspan="2" bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">KONDISI AMPLOP AIL</span></th>
              <th width="100" rowspan="2"  bgcolor='#CCCCCC' style=""><span class="_css_font_default_11_black">KONDISI LABEL AIL</span></th>
              <th bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">SURAT PERMOHONAN</span></th>
              <th bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">IDENTITAS PELANGGAN</span></th>
              <th bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">FORMULIR SURVEY</span></th>
              <th bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">JAWABAN PERSETUJUAN</span></th>
              <th bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">SPJBTL</span></th>
              <th bgcolor="#CCCCCC"><span class="_css_font_default_11_black">SUPLEMEN SPJBTL</span></th>
              <th bgcolor="#CCCCCC"><span class="_css_font_default_11_black">SERTIFIKAT LAIK OPERASI</span></th>
              <th bgcolor="#CCCCCC"><span class="_css_font_default_11_black">KUITANSI PEMBAYARAN BP DAN UJL</span></th>
              <th bgcolor="#CCCCCC"><span class="_css_font_default_11_black">TUL I-09</span></th>
              <th bgcolor="#CCCCCC"><span class="_css_font_default_11_black">TUL I-10</span></th>
              <th bgcolor="#CCCCCC"><span class="_css_font_default_11_black">LAIN LAIN</span></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><span class="_css_font_default_11_black">KETERANGAN</span></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><span class="_css_font_default_11_black">LAST UPDATE</span></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><span class="_css_font_default_11_black">USER UPDATE BY</span></th>
              <th width="87" rowspan="2" bgcolor="#CCCCCC"><span class="_css_font_default_11_black">ACTION</span></th>
            </tr>
            <tr>
              <th colspan="11" bgcolor="#CCCCCC" style=""><span class="_css_font_default_11_black">KELENGKAPAN AIL</span></th>
            </tr>
          </table>
          
        </div></th>
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


