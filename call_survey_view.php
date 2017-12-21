<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();
if($_SESSION['id_pengguna']=="") {
	if ($_SESSION['temp_url']=="") {
		$_SESSION['temp_url']="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "login.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_tm_master.php");
include_once("function/function_tm_call.php");
include_once("function/function_tm_pengguna.php");
$VAR_ID_MASTER = $_GET['id'];

$master_call = tm_master_search_by_ID_MASTER($VAR_ID_MASTER);

$VAR_ID_MASTER			= $master_call[0]['ID_MASTER'];
$token 					= md5($key.$VAR_ID_MASTER);
$MASTER_IDPEL			= $master_call[0]['ID_PELANGGAN'];
$MASTER_NAMA 			= $master_call[0]['NAMA'];
$MASTER_ALAMAT			= $master_call[0]['ALAMAT'];
$MASTER_NO_TELP			= $master_call[0]['NO_TELP'];
$MASTER_NO_HP			= $master_call[0]['NO_HP'];
$MASTER_TARIF			= $master_call[0]['TARIF'];
$MASTER_DAYA			= $master_call[0]['DAYA'];
$MASTER_PEMKWH			= $master_call[0]['PEMKWH'];
$MASTER_JAM_NYALA		= $master_call[0]['JAM_NYALA'];
$MASTER_JAM_NYALA_600	= $master_call[0]['JAM_NYALA_600'];
$MASTER_JAM_NYALA_400	= $master_call[0]['JAM_NYALA_400'];
$MASTER_ID_POSKO		= $master_call[0]['ID_POSKO'];
$MASTER_NAMA_POSKO		= $master_call[0]['NAMA_POSKO'];

$MASTER_TM_KODE_DIS		= $master_call[0]['TM_KODE_DISTRIBUSI'];
$MASTER_TM_KODE_AREA	= $master_call[0]['TM_KODE_AREA'];
$MASTER_TM_KODE_RAYON	= $master_call[0]['TM_KODE_RAYON'];
$MASTER_TM_STATUS_CALL	= $master_call[0]['TM_STATUS_CALL'];
$MASTER_ID_FILE_UPLOAD	= $master_call[0]['ID_FILE_UPLOAD'];
$MASTER_TGL_UPLOAD		= $master_call[0]['TGL_UPLOAD'];
$MASTER_KONVERSI_NYALA	= $master_call[0]['INFORMASI_01'];
$MASTER_GAGAL_CALL		= $master_call[0]['INFORMASI_02'];
                 
$sudah_call		= tm_call_search_by_id_master($VAR_ID_MASTER);
$VAR_ID_CALL		= $sudah_call[0]['ID_CALL'];
$VAR_KODE_DIS		= $sudah_call[0]['KODE_DISTRIBUSI'];
$VAR_KODE_AREA		= $sudah_call[0]['KODE_AREA'];
$VAR_KODE_RAYON		= $sudah_call[0]['KODE_RAYON'];
$VAR_ID_PENGGUNA	= $sudah_call[0]['ID_PENGGUNA'];
$VAR_IDPEL			= $sudah_call[0]['ID_PELANGGAN'];
$VAR_NAMA 			= $sudah_call[0]['NAMA'];
$VAR_ALAMAT			= $sudah_call[0]['ALAMAT'];
$VAR_NO_TELP		= $sudah_call[0]['NO_TELP'];
$VAR_NO_HP			= $sudah_call[0]['NO_HP'];
$VAR_KESESUAIAN		= $sudah_call[0]['KESESUAIAN_NAMA'];
$VAR_KEPEMILIKAN	= $sudah_call[0]['KEPEMILIKAN'];
$VAR_KESEDIAAN		= $sudah_call[0]['KESEDIAAN'];
$VAR_JENIS_BAYAR	= $sudah_call[0]['JENIS_TRANSAKSI'];
$VAR_JENIS_IDENTITAS= $sudah_call[0]['JENIS_IDENTITAS'];
$VAR_NO_IDENTITAS	= $sudah_call[0]['NOMOR_IDENTITAS'];
$VAR_SURAT_KUASA	= $sudah_call[0]['SURAT_KUASA'];
$VAR_NO_REGISTRASI	= $sudah_call[0]['NO_REGISTRASI'];
$VAR_TGL_CALL		= $sudah_call[0]['TGL_CALL'];
$VAR_CALL_BLTH		= $sudah_call[0]['CALL_BLTH'];
$VAR_KETERANGAN		= $sudah_call[0]['KETERANGAN'];


$pengguna 			= tm_pengguna_search_by_id_pengguna($VAR_ID_PENGGUNA);
$NAMA_PENGGUNA		=$pengguna[0]['NAMA'];

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
	 <link rel="stylesheet" href="css/jquery-ui.css">
	<script src="lib/jquery-1.10.2.js"></script>
	<script src="lib/jquery-ui.js"></script>

	<script>
	$(function() {
		$( "#tgl_konfirm" ).datepicker({
			showButtonPanel: true
		});
		$("#Submit").hide()
	});
	</script>

	<style type="text/css">
	<!--
	.style1 {
		color: #FF0000;
		font-weight: bold;
	}
	-->
	.backgroundRed{
			background: #F00;
		}

	  #divtoBlink{
			-webkit-transition: background 1.0s ease-in-out;
			-moz-transition:    background 1.0s ease-in-out;
			-ms-transition:     background 1.0s ease-in-out;
			transition:         background 1.0s ease-in-out;
		}
	</style>
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
				<? include "menu.php"; ?>
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
			<th class="_css_font_default_11" scope="col"><div align="left"><img src="images/line_full.gif" ></div></th>
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
					<form name="form_callback_sheet" method="post" action="call_confirm.php?id=<? echo $VAR_ID_MASTER;?>&token=<? echo $token;?>">						  
					<table width="90%" align="center" class="_css_font_default_12">
					<tr>
						<td colspan="2" align="center">
							<table width="100%" border="0" cellpadding="4" cellspacing="1">
								<tr class="_css_font_default_11">
									<td colspan="3" bgcolor="#CCCCCC" class="_css_font_horizontal_title"><strong class="_css_font_default_12">CALL</strong></td>
								</tr>
	  
								<tr class="_css_font_default_11">
									<td class="_css_font_default_12"><strong>Tanggal Call </strong></td>
									<td class="_css_font_default_12">:</td>
									<td><? echo $VAR_TGL_CALL; ?></td>
								</tr>
								
								<tr class="_css_font_default_11">
									<td class="_css_font_default_12"><strong>Operator   </strong></td>
									<td class="_css_font_default_12">:</td>
									<td><? echo $NAMA_PENGGUNA; ?></td>
								</tr>
											
								<tr class="_css_font_default_11">
									<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><span class="_css_font_default_12"><strong>DATA NOMOR </strong></span></td>
								</tr>
								
								<tr class="_css_font_default_11">
									<td width="25%" class="_css_font_default_12"><strong>No Telepon</strong></td>
									<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
									<td width="73%"><?php echo $VAR_NO_TELP; ?></td>
								</tr>
	  
								<tr class="_css_font_default_11">
									<td class="_css_font_default_12"><strong>No HP </strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $VAR_NO_HP; ?></td>
								</tr>
	  
								<tr class="_css_font_default_11">
									<td width="25%" class="_css_font_default_12"><strong>No Registrasi </strong></td>
									<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
									<td width="73%"><?php echo $VAR_NO_REGISTRASI; ?></td>
								</tr>
	  
	  
								<tr class="_css_font_default_11_b">
									<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>IDENTITAS PELANGGAN </strong></td>
								</tr>
								
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>ID Pelanggan </strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_IDPEL; ?></td>
								</tr>
								
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Nama</strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_NAMA; ?></td>
								</tr>
								
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Alamat</strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_ALAMAT; ?></td>
								</tr>

								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Tarif </strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_TARIF; ?></td>
								</tr>
								
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Daya </strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_DAYA; ?></td>
								</tr>
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Pemakaian  KWh</strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_PEMKWH; ?></td>
								</tr>
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Jam Nyala Bulan Terakhir </strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_JAM_NYALA; ?></td>
								</tr>
								<tr class="_css_font_default_11_b">
									<td class="_css_font_default_12"><strong>Hasil Konversi Jam Nyala Selayaknya Daya </strong></td>
									<td class="_css_font_default_12"><strong>:</strong></td>
									<td><?php echo $MASTER_KONVERSI_NYALA; ?></td>
								</tr>
	  

							</table>
						</td>
				    </tr>
					
					<tr>
						<td colspan="2" align="center">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><div align="left"><img src="images/line_full.gif" ></div></td>
					</tr>
					<tr>
						<td colspan="2" align="center">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<p align="left" class="_css_font_default_14">Selamat  <?php echo "Siang"; ?> Bapak/Ibu <?php echo $VAR_NAMA;?> yang terhormat, saya 
							<?php echo $NAMA_PENGGUNA; ?> dari CALL BACK CENTER PLN Distribusi Jakarta Raya bermaksud akan menginformasikan perihal pemakaian listrik di rumah Bapak/Ibu, Mohon Kesediaan Waktunya
							</p>
						</td>
					</tr>
					<tr>
					<td align="center">&nbsp;</td>
					<td width="849">&nbsp;</td>
					</tr>
					<tr>
					<td colspan="2" align="center"><div align="left"><img src="images/line_full.gif" ></div></td>
					</tr>
				  
					<tr>
						<td align="center">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					
					<tr align="left">
						<td width="27" align="center">1.</td>
						<td>Mohon maaf, saya sedang berbicara dengan Bapak/Ibu siapa <?php// echo $VAR_NAMA;?> ?</td>
					</tr>
				  
					<tr>
						<td height="23">&nbsp;</td>
						<td>			
						<? if ($VAR_KESESUAIAN=="1") { $p2_check_1 = 'checked'; } ?>				
						<input name="p1" id="p1" type="radio" value="1" <? echo $p2_check_1; ?> disabled='disabled'>
						Nama Penerima Telepon sama dengan Rekening
						</td>
					</tr>  
					<tr>
						<td>&nbsp;</td>
						<td>
						<? if ($VAR_KESESUAIAN=="2") { $p1_check_2 = 'checked'; } ?>					
						<input name="p1" id="p1" type="radio" value="2"  <? echo $p1_check_2; ?> disabled='disabled'>
						Pemilik baru, atau keluarganya seperti anak/istri/suami/orang tuanya
						<input type="text" name="var_nama_1" id="var_nama_1" DISABLED></input>
						</td>
					</tr> 
					<tr>
						<td>&nbsp;</td>
						<td>
						<? if ($VAR_KESESUAIAN=="3") { $p1_check_2 = 'checked'; } ?>					
						<input name="p1" id="p1" type="radio" value="3"  <? echo $p1_check_2; ?> disabled='disabled'>
						Penyewa/Penghuni dsb, tetapi Bukan Keluarga
						<input type="text" name="var_nama_1" id="var_nama_1" DISABLED></input>
						</td>
					</tr> 	
					<tr>
						<td>&nbsp;</td>
						<td>
						<? if ($VAR_KESESUAIAN=="4") { $p1_check_2 = 'checked'; } ?>					
						<input name="p1" id="p1" type="radio" value="4"  <? echo $p1_check_2; ?> disabled='disabled'>
						Orang Lain dan bukan penghuni 
						<input type="text" name="var_nama_1" id="var_nama_1" DISABLED></input>
						</td>
					</tr> 					
					

				 
					<tr>
						<td width="27" align="center">&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					</tr> 
				   
					<tr align="left">
						<td width="27" align="center">2.</td>
						<td>Untuk diketahui bahwa pemakaian listrik di rumah Bapak/Ibu selama tiga bulan terakhir melebihi dari batas daya kontrak atau sudah maksimum			
						</td>
					</tr>
					
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>oleh karena itu kami akan mendaftarkan penambahan daya dengan menggunakan kWh meter: 
						<!--<strong>Pra Bayar,</strong> dengan harapan agar </td>-->
					</tr>
					<!--
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>Maka kami akan mendaftarkan untuk penambahan daya di rumah Bapak/Ibu menjadi daya : <?//echo daya hasil konversi?> dengan menggunakan meter 
						<strong>Pra Bayar,</strong> dengan harapan agar </td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>lebih menguntungkan dan memudahkan pelanggan seperti: </td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>a. Tidak dibebankan Uang Jaminan Langganan </td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>b. Tidak dibebankan Biaya Beban setiap bulannya </td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>c. Terhindar dari pemutusan dan kesalahan catat meter </td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>d. Dapat mengendalikan pemakaian dan penghematan </td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>Atau Pelanggan menginginkan pakai Paska Bayar</td>
					</tr>-->			
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_BAYAR=="1") { $p2_check_1 = 'checked'; } ?>
						<input name="p3" id="p3" type="radio" value="2" <? echo $p2_check_1; ?> disabled='disabled'>
						Paska Bayar ke Paska Bayar 
						</td>
					</tr>     
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_BAYAR=="2") { $p2_check_2 = 'checked'; } ?>
						<input name="p3" id="p3" type="radio" value="2" <? echo $p2_check_2; ?> disabled='disabled'>
						Paska Bayar ke Pra Bayar
						</td>
					</tr>
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_BAYAR=="3") { $p2_check_2 = 'checked'; } ?>
						<input name="p3" id="p3" type="radio" value="3" <? echo $p2_check_2; ?> disabled='disabled'>
						Pra Bayar ke Pra Bayar (Pra Bayar ke Paska Bayar Tidak Bisa)
						</td>
					</tr>
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_BAYAR=="4") { $p2_check_2 = 'checked'; } ?>
						<input name="p3" id="p3" type="radio" value="4" <? echo $p2_check_2; ?> disabled='disabled'>
						Tidak Bersedia
						</td>
					</tr>
					
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>  
					<tr align="left">
						<td width="27" align="center">3.</td>
						<td>
							Bila Bapak/Ibu bersedia, kami akan mendaftarkan penambahan daya dan memberikan Nomor Register untuk dapat dilakukan pembayaran di ATM 
						</td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>atau Counter yang bekerjasama dengan PLN</td>
					</tr>

				
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_KESEDIAAN=="1") { $p3_check_1 = 'checked'; } ?>
						<input name="p4" id="p4" type="radio" value="1" <? echo $p3_check_1; ?> disabled='disabled'> 
						Bersedia PD dan diterbitkan Nomor Register <font color="red">[Lanjut Ke Pertanyaan Berikut]</font>
						<input type="text" id="var_no_registrasi" name="var_no_registrasi" value="<? echo $VAR_NO_REGISTRASI; ?>" disabled></input>					
						</td>
					</tr>
					
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_KESEDIAAN=="2") { $p3_check_2 = 'checked'; } ?>
						<input name="p4" id="radio2" type="radio" value="2" <? echo $p3_check_2; ?>  disabled='disabled'>
						Tidak Bersedia PD (minta waktu untuk pertimbangan) (dan bersedia ditelepon kembali)
						</td>
					</tr> 
					
					<tr>
						<td height="23">&nbsp;</td>
						<td>
						<? if ($VAR_KESEDIAAN=="3") { $p3_check_3 = 'checked'; } ?>
						<input name="p4" id="radio2" type="radio" value="3" <? echo $p3_check_3; ?>  disabled='disabled'>
						Tidak Bersedia PD dan kWh meter minta di cek/P2TL
						</td>
					</tr>
					
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
						<? if ($VAR_KESEDIAAN=="4") { $p3_check_4= 'checked'; } ?>
						<input name="p5" id="p5" type="radio" value="4" <?echo $p3_check_4;?> disabled = 'disabled'>
						Tidak Bersedia PD dengan Berbagai Alasan
						</td>
					</tr>
					
					<tr align="left">
						<td width="27" align="center"></td>
						<td>Pelanggan diberitahu Nomor Register dapat dibayar kapan saja sampai batas waktunya 1 bulan</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>&nbsp;</td>				
					</tr> 
					
					<tr align="left">
						<td width="27" align="center">4.</td>
						<td>Bapak/Ibu mohon menyebutkan Nomor Identitasnya berupa : </td>
					</tr>

					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_IDENTITAS=="1") { $p4_check_1 = 'checked'; } ?>
						<input name="p6" id="p6" type="radio" value="1" <? echo $p4_check_1; ?> disabled='disabled'> KTP
						
						</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_IDENTITAS=="2") { $p4_check_2 = 'checked'; } ?>
						<input name="p6" id="p6" type="radio" value="2" <? echo $p4_check_2; ?> disabled='disabled'> SIM
						
						</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_IDENTITAS=="3") { $p4_check_3 = 'checked'; } ?>
						<input name="p6" id="p6" type="radio" value="3" <? echo $p4_check_3; ?> disabled='disabled'> PASPOR/Lainnya
					
						</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
						<? if ($VAR_JENIS_IDENTITAS=="4") { $p4_check_4 = 'checked'; } ?>
						<input name="p6" id="p6" type="radio" value="4" <? echo $p4_check_4; ?> disabled='disabled'> Tidak Ada/Tidak Bersedia
					
						</td>
					</tr>
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
						Nomor Identitas
						<input type="text" id="var_no_identitas" name="var_no_identitas" value="<? echo $VAR_NO_IDENTITAS; ?>" disabled='disabled'></input>
						</td>
					</tr> 
				
					
					<tr align="left">
						<td>
							<tr align="left">
								<td width="27" align="center">&nbsp;</td>
								<td>Alamat Lengkap </td>
							</tr>
							<tr align="left">
								<td width="27" align="center">&nbsp;</td>
								<td><textarea id="var_alamat" name="var_alamat" rows="4" cols="50"  DISABLED><?echo $VAR_ALAMAT;?></textarea> 
								</td>
							</tr>
							<tr align="left">
								<td width="27" align="center">&nbsp;</td>
								<td>
									Nomor Telepon Yang Dapat Dihubungi
									<input type="text" id="var_no_telp" name="var_no_telp" value="<? echo $VAR_NO_TELP; ?>" disabled></input>
								</td>
								<td width="27" align="center">&nbsp;</td>
							</tr>
							
						</td>
					</tr> 

					
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>&nbsp;</td>
					</tr>  
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>Terima kasih atas kesediaan waktu Bapak/Ibu <?php echo $VAR_NAMA; ?> untuk menerima telepon kami,</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>Untuk hal-hal yang kurang jelas Bapak/Ibu dapat menghubungi Contact Center PLN 123, Terima Kasih</td>
					</tr> 


					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
							<input type="checkbox" name="gagal_call" id="gagal_call" value="1" disabled>
							<font color='#FF0000'><B>GAGAL CALL</B> Pastikan Anda memilih alasan Jika CallBack GAGAL.</font>
							<br>
						</td>
					</tr>
					
					<tr id="kriteria_gagal_div">
						<td width="5" align="center"></td>
						<td> 
						<?if ($MASTER_TM_STATUS_CALL == '1')
						{	
							echo "	<select id='kriteria_gagal' name='kriteria_gagal' disabled>";
								if ($MASTER_GAGAL_CALL == '100')
									{echo "<option value='100'>Telepon Tidak Valid (Tidak Terdaftar / Suara Tulalit)</option>";}
								if ($MASTER_GAGAL_CALL == '101')
									{echo "<option value='101'>Telepon Salah Sambung (dikonfirmasi DIL dengan No Telp)</option>";}
								if ($MASTER_GAGAL_CALL == '102')
									{echo "<option value='102'>Telepon Tersambung dengan Faxmail atau Telepon Kantor PLN Area dan sejenisnya</option>";}
								if ($MASTER_GAGAL_CALL == '103')
									{echo "<option value='103'>Sudah Tambah Daya</option>";}
							echo "	</select> ";
						}
						?>
						</td>
					</tr>
					
					
					
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>&nbsp;</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>Keterangan</td>
					</tr> 
					<tr align="left">
						<td width="27" align="center">&nbsp;</td>
						<td>
							<textarea id="keterangan" name="keterangan" rows="4" cols="50" disabled><?php echo $VAR_KETERANGAN; ?></textarea> 
						</td>
					</tr>
						        
				</table>
			</form>
		</th>
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
		</div>
		</th>
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