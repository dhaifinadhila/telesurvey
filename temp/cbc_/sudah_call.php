<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_file_excell.php");
include_once("function/function_cbc_master_call.php");
include_once("function/function_cbc_pengguna.php");
include_once("function/function_cbc_callback.php");


 //echo "<pre>";
//print_r($data);
//echo "</pre>";

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

	<link rel="stylesheet" type="text/css" href="lib/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="lib/datatables/examples/resources/demo.css">

	<style type="text/css" class="init">
	th, td { white-space: nowrap; }
	div.dataTables_wrapper {
		width: 972px;
		margin: 0 auto;
	}
	</style>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="lib/datatables/examples/resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">

	$(document).ready(function() {
		$('#example').dataTable( {
			"scrollX": true
		} );
	} );

	</script>
	
	
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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Sudah Callback </strong>&#8226; <?php if ($_GET['pbpd']=="1"){ echo "Pelanggan Pasang Baru"; } else { echo "Pelanggan Perubahan Daya";} ?></div></th>
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
		
		<table id="example" class="display" cellspacing="0" width="100%">
				<thead class="_css_font_default_11_b">
					<tr>
                    	<th>N0</th>
						<th><div align='center'>NOAGENDA</div></th>
						<th><div align='center'>NO_REGISTRASI</div></th>
						<th><div align='center'>TGLMOHON</div></th>
						<th><div align='center'>IDPEL</div></th>
						<th><div align='center'>NAMA</div></th>
						<th><div align='center'>ALAMAT</div></th>
						<th><div align='center'>NOTELP_PEMOHON</div></th>
						<th><div align='center'>NOTELP_HP_PEMOHON</div></th>
						<th><div align='center'>ASALMOHON</div></th>
						<th><div align='center'>UPIENTRI</div></th>
						<th><div align='center'>PETUGASCATAT</div></th>
						<th><div align='center'>TARIF_LAMA</div></th>
						<th><div align='center'>DAYA_LAMA</div></th>
						<th><div align='center'>TARIF</div></th>
						<th><div align='center'>DAYA</div></th>
						<th><div align='center'>JENIS_TRANSAKSI</div></th>
						<th><div align='center'>PAKET_SAR</div></th>
						<th><div align='center'>TOTALBIAYA</div></th>
						<th><div align='center'>TGLBAYAR</div></th>
						<th><div align='center'>LAMAMOHON</div></th>
						<th><div align='center'>STATUS_PERMOHONAN</div></th>
						<th><div align='center'>TGL_UPDATE_PERMOHONAN</div></th>
						<th><div align='center'>TGLPK</div></th>
						<th><div align='center'>TGLNYALA</div></th>
						<th><div align='center'>NAMAUPI</div></th>
						<th><div align='center'>NAMAAP</div></th>
						<th><div align='center'>NAMAUP</div></th>
						<th><div align='center'>UNITTUJUAN</div></th>
						<th><div align='center'>CBC_JENIS_MUTASI</div></th>
						<th><div align='center'>CBC_STATUS_CALL</div></th>
						<th><div align='center'>CBC_TANGGAL_UPLOAD</div></th>																																									
						<th><div align='center'>USER_CALLBACK</div></th>						
						<th><div align='center'>TANGGAL CALLBACK</div></th>
 
					</tr>
				</thead>

				<tbody class="_css_font_default_11_b">
                
					<?
					$var_JENIS_MUTASI = trim($_GET['pbpd']);
					$master_call = sudah_callback($var_JENIS_MUTASI); 
					$nomor=1;
					for ($i=0;$i<count($master_call);$i++) {
						$VAR_ID_MASTER_CALL=$master_call[$i]['ID_MASTER_CALL'];
						$token = md5($key.$VAR_ID_MASTER_CALL);
						
						$VAR_NOAGENDA=$master_call[$i]['NOAGENDA'];
						$VAR_NO_REGISTRASI=$master_call[$i]['NO_REGISTRASI'];
						$VAR_TGLMOHON=$master_call[$i]['TGLMOHON'];
						$VAR_IDPEL=$master_call[$i]['IDPEL'];
						$VAR_NAMA=$master_call[$i]['NAMA'];
						$VAR_ALAMAT=$master_call[$i]['ALAMAT'];
						$VAR_NOTELP_PEMOHON=$master_call[$i]['NOTELP_PEMOHON'];
						$VAR_NOTELP_HP_PEMOHON=$master_call[$i]['NOTELP_HP_PEMOHON'];
						$VAR_ASALMOHON=$master_call[$i]['ASALMOHON'];
						$VAR_UPIENTRI=$master_call[$i]['UPIENTRI'];
						$VAR_PETUGASCATAT=$master_call[$i]['PETUGASCATAT'];
						$VAR_TARIF_LAMA=$master_call[$i]['TARIF_LAMA'];
						$VAR_DAYA_LAMA=$master_call[$i]['DAYA_LAMA'];
						$VAR_TARIF=$master_call[$i]['TARIF'];
						$VAR_DAYA=$master_call[$i]['DAYA'];
						$VAR_JENIS_TRANSAKSI=$master_call[$i]['JENIS_TRANSAKSI'];
						$VAR_PAKET_SAR=$master_call[$i]['PAKET_SAR'];
						$VAR_TOTALBIAYA=$master_call[$i]['TOTALBIAYA'];
						$VAR_TGLBAYAR=$master_call[$i]['TGLBAYAR'];
						$VAR_LAMAMOHON=$master_call[$i]['LAMAMOHON'];
						$VAR_STATUS_PERMOHONAN=$master_call[$i]['STATUS_PERMOHONAN'];
						$VAR_TGL_UPDATE_PERMOHONAN=$master_call[$i]['TGL_UPDATE_PERMOHONAN'];
						$VAR_TGLPK=$master_call[$i]['TGLPK'];
						$VAR_TGLNYALA=$master_call[$i]['TGLNYALA'];
						$VAR_NAMAUPI=$master_call[$i]['NAMAUPI'];
						$VAR_NAMAAP=$master_call[$i]['NAMAAP'];
						$VAR_NAMAUP=$master_call[$i]['NAMAUP'];
						$VAR_UNITTUJUAN=$master_call[$i]['UNITTUJUAN'];
						$VAR_CBC_JENIS_MUTASI=$master_call[$i]['CBC_JENIS_MUTASI'];
						$VAR_CBC_STATUS_CALL=$master_call[$i]['CBC_STATUS_CALL'];
						if ($VAR_CBC_STATUS_CALL==0) {
							$VAR_CBC_STATUS_CALL = "BELUM DI CALLBACK";
						} else
						if ($VAR_CBC_STATUS_CALL==1) {
							$VAR_CBC_STATUS_CALL = "ONLINE CALLBACK";
						} else
						if ($VAR_CBC_STATUS_CALL==2) {
							$VAR_CBC_STATUS_CALL = "SELESAI";
						}   

						$VAR_CBC_TANGGAL_UPLOAD=$master_call[$i]['CBC_TANGGAL_UPLOAD'];
						$VAR_CBC_KODE_DISTRIBUSI=$master_call[$i]['CBC_KODE_DISTRIBUSI'];
						$VAR_CBC_KODE_UNIT=$master_call[$i]['CBC_KODE_UNIT'];
						$VAR_CBC_KODE_RAYON=$master_call[$i]['CBC_KODE_RAYON'];
						$VAR_CBC_ID_FILE_EXCELL=$master_call[$i]['CBC_ID_FILE_EXCELL'];
						
						$callback = cbc_callback_search_by_ID_MASTER_CALL($VAR_ID_MASTER_CALL);
						$id_user_call = $callback[0]['ID_PENGGGUNA'];
						$callback_tanggal = $callback[0]['CALLBACK_TANGGAL'];
						
						$callback_pengguna = cbc_pengguna_search_by_id_pengguna($id_user_call);
						$callback_pengguna_nama = $callback_pengguna[0]['NAMA'];
						
						
						//echo "<pre>";
                        //print_r($callback);
						//echo "</pre>"; 
					
						echo "<tr>";
							echo "<td><div align='center'>".$nomor."</div></td>";	
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NOAGENDA)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NO_REGISTRASI)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TGLMOHON)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_IDPEL)."</div></td>";
							echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NAMA)."</div></td>";
							echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_ALAMAT)."</div></td>";
							echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NOTELP_PEMOHON)."</div></td>";
							echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NOTELP_HP_PEMOHON)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_ASALMOHON)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_UPIENTRI)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_PETUGASCATAT)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TARIF_LAMA)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_DAYA_LAMA)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TARIF)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_DAYA)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_JENIS_TRANSAKSI)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_PAKET_SAR)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TOTALBIAYA)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TGLBAYAR)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_LAMAMOHON)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_STATUS_PERMOHONAN)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TGL_UPDATE_PERMOHONAN)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TGLPK)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_TGLNYALA)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NAMAUPI)."</div></td>";
							echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NAMAAP)."</div></td>";
							echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_NAMAUP)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_UNITTUJUAN)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_CBC_JENIS_MUTASI)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_CBC_STATUS_CALL)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($VAR_CBC_TANGGAL_UPLOAD)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($callback_pengguna_nama)."</div></td>";
							echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER_CALL&token=$token'>".strtoupper($callback_tanggal)."</div></td>";
 
							/*
							echo "<td><div align='center'>".strtoupper($VAR_CBC_KODE_DISTRIBUSI)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_CBC_KODE_UNIT)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_CBC_KODE_RAYON)."</div></td>";
							echo "<td><div align='center'>".strtoupper($VAR_CBC_ID_FILE_EXCELL)."</div></td>";
							*/
						
							// echo "<th scope='col'><a href='form_spk_edit.php?id=$current_id_spk'>Edit</a> | <a href='form_spk_delete.php?id=$current_id_spk'>Delete</a></th>";
						echo "</tr>"; 
						$nomor++;
                    }
                    ?>                
				</tbody>
			</table>		</th>
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


