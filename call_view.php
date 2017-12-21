<?php
ini_set('session.gc_maxlifetime', 30*60);
session_start();

if($_SESSION['id_pengguna']=="") 
{	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}

include_once("lib/config.php");
include_once("function/engine.php");
include_once("function/function_file_upload.php");
include_once("function/function_master.php");
include_once("function/function_call.php");

$VAR_ID_MASTER = $_GET['id'];

$master = search_by_id_master($VAR_ID_MASTER);

$VAR_ID_MASTER		= $master[0]['id_master'];
$token 				= md5($key.$VAR_ID_MASTER);
$VAR_IDPEL			= $master[0]['id_pelanggan'];
$VAR_NAMA 			= $master[0]['nama'];
$VAR_ALAMAT			= $master[0]['alamat'];
$VAR_NO_TELP		= $master[0]['no_telp'];
$VAR_NO_HP			= $master[0]['no_hp'];
$VAR_TARIF			= $master[0]['tarif'];
$VAR_DAYA			= $master[0]['daya'];
$VAR_PEMKWH			= $master[0]['pemkwh'];
$VAR_JAM_NYALA		= $master[0]['jam_nyala'];
$VAR_JAM_NYALA_600	= $master[0]['jam_nyala_600'];
$VAR_JAM_NYALA_400	= $master[0]['jam_nyala_400'];
$VAR_KODE_DIS		= $master[0]['kode_distribusi'];
$VAR_KODE_AREA		= $master[0]['kode_area'];
$VAR_KODE_RAYON		= $master[0]['kode_rayon'];
$VAR_STATUS_CALL	= $master[0]['status_call'];
$VAR_ID_FILE_UPLOAD	= $master[0]['id_file_upload'];
$VAR_TGL_UPLOAD		= $master[0]['tgl_upload'];
$VAR_KONVERSI_NYALA	= $master[0]['hasil_konversi'];
$VAR_NO_REGISTRASI	= $master[0]['no_registrasi'];

$sudah_call		= get_call_by_id_master($VAR_ID_MASTER);
$VAR_ID_CALL		= $sudah_call[0]['id_call'];
$VAR_NAMA_REK		= $sudah_call[0]['nama_rek'];
$VAR_NAMA_PENJAWAB	= $sudah_call[0]['nama_penjawab'];
$VAR_KESESUAIAN		= $sudah_call[0]['kesesuaian_nama'];
$VAR_KEPEMILIKAN	= $sudah_call[0]['kepemilikan'];
$VAR_PROFESI 		= $sudah_call[0]['profesi'];
$VAR_PROFESI_L		= $sudah_call[0]['profesi_lain'];
$VAR_JUMLAH_GAJI	= $sudah_call[0]['jumlah_gaji'];
$VAR_PEMAKAIAN		= $sudah_call[0]['pemakaian_bln'];
$VAR_PENGHEMATAN	= $sudah_call[0]['penghematan'];
$VAR_ALASAN_HEMAT	= $sudah_call[0]['alasan_hemat'];
$VAR_ALASAN_HEMAT_L	= $sudah_call[0]['alasan_hemat_lain'];
$VAR_ALASAN_HEMAT 	= $sudah_call[0]['cara_hemat'];
$VAR_ALASAN_HEMAT_L	= $sudah_call[0]['cara_hemat_lain'];
$VAR_ALAT_LISTRIK	= $sudah_call[0]['interest_alat_listrik'];
$VAR_PENG_TARIF 	= $sudah_call[0]['pengetahuan_tarif'];
$VAR_GANGGUAN 		= $sudah_call[0]['gangguan_listrik'];
$VAR_PENGARUH_AC	= $sudah_call[0]['pengaruh_ac'];
$VAR_BIAYA_TAGIHAN	= $sudah_call[0]['biaya_tagihan'];
$VAR_KRITERIA_GAGAL	= $sudah_call[0]['kriteria_gagal'];
$VAR_ID_USER		= $sudah_call[0]['id_user'];
$VAR_TGL_CALL 		= $sudah_call[0]['tgl_call'];
$VAR_SARAN			= $sudah_call[0]['saran'];

$check;
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

	<script type="text/javascript" src="lib/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#kriteria_gagal_div").hide();
			//$("#var_nama").hide();	

			$('input[type="checkbox"]').change(function () {
				if (this.checked) {
					$("#kriteria_gagal_div").fadeIn('slow');
				} else 
				{
					$("#kriteria_gagal_div").fadeOut('slow');
				}
			});
		});
	</script>

	<style type="text/css">
	
	.style1 {
		color: #FF0000;
		font-weight: bold;
	}
	
	</style>
</head>

<body  bgcolor="#e9e9e9">
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
					        <div align="left">
					        	Selamat Datang,<strong> <?php echo $_SESSION['nama']." - ".$_SESSION['jabatan']; ?></strong>
					        </div>
					    </th>
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
						<th class="_css_font_default_11" scope="col"><div align="left"><strong>Detail Call </strong>
						&#8226; <?php echo "ID Pelanggan : ".$VAR_IDPEL;?>
						</div></th>
						<th class="_css_font_default_11" scope="col">&nbsp;</th>
					</tr>
	      
					<tr>
						<th height="19" scope="col">&nbsp;</th>
						<th class="_css_font_default_11" scope="col">&nbsp;</th>
						<th class="_css_font_default_11" scope="col">&nbsp;</th>
					</tr>
					<?php 
					$VAR_TGL_CALL 	= date("Y/m/d");
					$TGL_CALL 		= date("d/m/Y");
					?>
					<tr>
						<th height="84" scope="col">&nbsp;</th>
				        <th class="_css_font_default_11" scope="col">
				        	<form name="form_callback_sheet" method="post" action="call_submit.php?id=<?php echo $VAR_ID_MASTER;?>&token=<?php echo $token;?>">	
				        		<table width="90%" align="center" class="_css_font_default_12">
				        			<tr>
										<td colspan="2" align="center">
											<table width="100%" border="0" cellpadding="4" cellspacing="1">
												<tr class="_css_font_default_11">
													<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>SURVEY PERILAKU KONSUMSI ENERGI LISTRIK PELANGGAN RUMAH TANGGA</strong></td>
												</tr>
							  
												<tr class="_css_font_default_11">
													<td width="21%" class="_css_font_default_12"><strong>Tanggal Callback</strong></td>
													<td width="2%" class="_css_font_default_12"><strong>:</strong></td>
													<td width="77%"><?php echo $TGL_CALL; ?></td>
												</tr>
												  
												<tr class="_css_font_default_11">
													<td class="_css_font_default_12"><strong>Operator</strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $_SESSION['nama']; ?></td>
												</tr>
												  
													
												<tr class="_css_font_default_11_b">
													<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>Data Unit</strong></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>Nama Distribusi</strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_KODE_DIS; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>Nama Area</strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_KODE_AREA; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>Data Responden</strong></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>ID Pelanggan </strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_IDPEL; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>Nama </strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_NAMA; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>Alamat</strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_ALAMAT; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>Tarif </strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_TARIF; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>Daya </strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_DAYA; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>No Telepon Pelanggan</strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_NO_TELP; ?></td>
												</tr>
												<tr class="_css_font_default_11_b">
													<td class="_css_font_default_12"><strong>No. HP Pelanggan</strong></td>
													<td class="_css_font_default_12"><strong>:</strong></td>
													<td><?php echo $VAR_NO_HP; ?></td>
												</tr>
												
									
											</table>
										</td>
									</tr>
					
									<tr>
										<td colspan="2" align="center">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" align="center">
											<div align="left"><img src="images/line_full.gif" ></div>
										</td>
									</tr>
									<tr>
										<td colspan="2" align="center">
											<p align="left" class="_css_font_default_14"> 
												Selamat  Pagi/Siang/Sore Bapak/Ibu <?php echo $VAR_NAMA;?> yang terhormat, saya <?php echo $_SESSION['nama']; ?> dari CALL BACK CENTER PLN Distribusi Jakarta Raya bermaksud akan menginformasikan perihal pemakaian listrik di rumah Bapak/Ibu, Mohon Kesediaan Waktunya

											</p>
										</td>
									</tr>
									<tr>
										<td colspan="2" align="center">
											<div align="left"><img src="images/line_full.gif" ></div>
										</td>
									</tr>
									<tr>
										<td align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr>

									<input type="hidden" name="var_id_master" id="var_id_master" value="<?php echo $VAR_ID_MASTER; ?>"></input>
									<input type="hidden" name="var_tgl_call" id="var_tgl_call" value="<?php echo $VAR_TGL_CALL; ?>"></input>

									<input type="hidden" name="ALAMAT" id="ALAMAT" value="<?php echo $VAR_ALAMAT; ?>"></input>

									<tr align="left">
										<td width="27" align="center">1.</td>
										<td>Mohon maaf, saya sedang berbicara dengan Bapak/Ibu siapa <?php// echo $VAR_NAMA;?> ?</td>
									</tr>
									<tr align="left">
										<td>&nbsp;</td>
										<?php if($VAR_KESESUAIAN == '1') $check = ' checked';?>
										<td><input name="p1" id="p1" type="radio" value="1" <? echo $check; ?> disabled>
											Nama sesuai dengan rekening
										</td>
									</tr>
									<tr align="left">
										<td>&nbsp;</td>
										<td>
											<?php if($VAR_KESESUAIAN == '2') $check = ' checked';?>
											<input name="p1" id="p1" type="radio" value="2" <? echo $check; ?> disabled> Nama tidak sama dengan rekening
											<input type="text" name="nama_penjawab" value="<?if($VAR_NAMA_PENJAWAB != '') echo $VAR_NAMA_PENJAWAB;?>"  disabled>
										</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
									</tr>   
									<tr align="left">
										<td width="27" align="center">2.</td>
										<td>Apakah Bapak/Ibu sebagai pemilik/penghuni rumah yang lokasinya tersebut diatas:	
										</td>
									</tr>
									<tr align="left">
										<td height="23">&nbsp;</td>
										<?php if($VAR_KEPEMILIKAN == '1') $check = ' checked';?>
										<td><input name="p2" id="p2" type="radio" value="1" <? echo $check; ?> disabled>Pemilik </td>
									</tr>       
									<tr align="left">
										<td height="23">&nbsp;</td>
										<?php if($VAR_KEPEMILIKAN == '1') $check = ' checked';?>
										<td><input name="p2" id="p2" type="radio" value="2" <? echo $check; ?> disabled>Penghuni/Penyewa</td>
									</tr>
									
									<tr align="left">
										<td height="23">&nbsp;</td>
										<?php if($VAR_KEPEMILIKAN == '1') $check = ' checked';?>
										<td><input name="p2" id="p2" type="radio" value="3" <? echo $check; ?> disabled>Bukan Pemilik atau penghuni (Orang Lain)</td>
									</tr>   

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr>  
									<tr align="left">
										<td width="27" align="center">3.</td>
										<td>
											Apa profesi/pekerjaan Bapak/Ibu?
										</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>
										<?php if($VAR_PROFESI == '1') $check = ' checked';?>
											<input name="p3" id="p3" type="radio" value="1" <? echo $check; ?> disabled> Pegawai BUMN</input>
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '2') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="2" <? echo $check; ?> disabled> Pegawai Negeri/TNI/POLRI </td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '3') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="3" <? echo $check; ?> disabled> Profesional (Dokter/Pengacara/Arsitek/Sejenisnya) </td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '4') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="4" <? echo $check; ?> disabled> Pengusaha</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '5') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="5" <? echo $check; ?> disabled> Karyawan Swasta</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '6') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="6" <? echo $check; ?> disabled> Wiraswasta</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '7') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="7" <? echo $check; ?> disabled> Dosen/Guru</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '8') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="8" <? echo $check; ?> disabled> Pensiunan</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '9') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="9" <? echo $check; ?> disabled> Pelajar/Mahasiswa</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '10') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="10" <? echo $check; ?> disabled> Ibu Rumah Tangga</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '11') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="11" <? echo $check; ?> disabled> Pedagang/Petani</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PROFESI == '12') $check = ' checked';?>
										<td><input name="p3" id="p3" type="radio" value="12" <? echo $check; ?> disabled> Driver/Operator</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>
										<?php if($VAR_PROFESI == '13') $check = ' checked';?>
											<input name="p3" id="p3" type="radio" value="13" <? echo $check; ?> disabled> Lain - Lain 
											<input type="text" name="profesi_lain" value="<?if($VAR_PROFESI_LAIN != '') echo $VAR_PROFESI_LAIN;?>" disabled>
										</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>				
									</tr> 
									
									<tr align="left">
										<td width="27" align="center">4.</td>
										<td>Apakah Bapak/Ibu bersedia menyebutkan jumlah penghasilan sebulan : (Pilih Salah Satu)</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_JUMLAH_GAJI == '1') $check = ' checked';?>
										<td><input name="p4" id="p4" type="radio" value="1" <? echo $check; ?> disabled>  Rp 1,5 Juta						
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_JUMLAH_GAJI == '2') $check = ' checked';?>
										<td><input name="p4" id="p4" type="radio" value="2" <? echo $check; ?> disabled> Rp. 1,5 Juta s/d Rp. 5 Juta
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_JUMLAH_GAJI == '3') $check = ' checked';?>
										<td><input name="p4" id="p4" type="radio" value="3" <? echo $check; ?> disabled> Rp. 5 Juta s/d Rp. 9 Juta
										</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_JUMLAH_GAJI == '4') $check = ' checked';?>
										<td><input name="p4" id="p4" type="radio" value="4" <? echo $check; ?> disabled> Rp. 9 Juta s/d Rp. 15 Juta
										</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_JUMLAH_GAJI == '5') $check = ' checked';?>
										<td><input name="p4" id="p4" type="radio" value="5" <? echo $check; ?> disabled> Rp. 15 Juta
										</td>
									</tr>
					
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">5.</td>
										<td>Apakah memperhatikan kenaikan atau penurunan harga atau pemakaian bulanan?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PEMAKAIAN == '1') $check = ' checked';?>
										<td><input name="p5" id="p5" type="radio" value="1" <? echo $check; ?> disabled> Ya
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PEMAKAIAN == '2') $check = ' checked';?>
										<td><input name="p5" id="p5" type="radio" value="2" <? echo $check; ?> disabled> Tidak
										</td>
									</tr> 
									
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">6	.</td>
										<td>Apakah Bapak/Ibu melakukan penghematan listrik ?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENGHEMATAN == '1') $check = ' checked';?>
										<td><input name="p6" id="p6" type="radio" value="1" <? echo $check; ?> disabled> Ya
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENGHEMATAN == '2') $check = ' checked';?>
										<td><input name="p6" id="p6" type="radio" value="2" <? echo $check; ?> disabled> Tidak
										</td>
									</tr> 
									
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">7	.</td>
										<td>Jika melakukan penghematan listrik, apa yang menjadi alasannya ?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALASAN_HEMAT == '1') $check = ' checked';?>
										<td><input name="p7" id="p7" type="radio" value="1" <? echo $check; ?> disabled> Tarif Listrik dirasakan Mahal
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALASAN_HEMAT == '2') $check = ' checked';?>
										<td><input name="p7" id="p7" type="radio" value="2" <? echo $check; ?> disabled> Sudah Menjadi Prinsip untuk Berhemat
										</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALASAN_HEMAT == '3') $check = ' checked';?>
										<td><input name="p7" id="p7" type="radio" value="3" <? echo $check; ?> disabled> Karena Pengaruh Kenaikan Kebutuhan/Harga Lainnya Naik
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALASAN_HEMAT == '4') $check = ' checked';?>
										<td><input name="p7" id="p7" type="radio" value="4" <? echo $check; ?> disabled> Saya Tidak Peduli dengan besarnya tagihan listrik, karena sudah nyaman dengan kondisi sekarang
										</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALASAN_HEMAT == '5') $check = ' checked';?>
										<td><input name="p7" id="p7" type="radio" value="5" <? echo $check; ?> disabled> Alasan Lainnya
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td><textarea name="alasan_hemat_lain" rows="4" cols="50" disabled><?if($VAR_ALASAN_HEMAT_L != '') echo $VAR_ALASAN_HEMAT_L;?></textarea>
										</td>
									</tr> 
									
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">8	.</td>
										<td>Bagaimana Bapak/Ibu menghemat pengeluaran biaya listrik di rumah?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_CARA_HEMAT == '1') $check = ' checked';?>
										<td><input name="p8" id="p8" type="radio" value="1" <? echo $check; ?> disabled> Mengatur pemakaian AC/TV/ dan peralatan listrik lainnya
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_CARA_HEMAT == '2') $check = ' checked';?>
										<td><input name="p8" id="p8" type="radio" value="2" <? echo $check; ?> disabled> Mengganti lampu konvensional dengan lampu hemat energy (LED)
										</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_CARA_HEMAT == '3') $check = ' checked';?>
										<td><input name="p8" id="p8" type="radio" value="3" <? echo $check; ?> disabled> Saya tidak peduli dengan besarnya tagihan listrik, karena sudah nyaman dengan kondisi sekarang
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_CARA_HEMAT == '4') $check = ' checked';?>
										<td><input name="p8" id="p8" type="radio" value="4" <? echo $check; ?>  disabled> Alasan Lainnya
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td><textarea name="cara_hemat_lain" rows="4" cols="50" disabled><?if($VAR_CARA_HEMAT_L != '') echo $VAR_CARA_HEMAT_L;?></textarea>
										</td>
									</tr> 
									
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr>

									<tr align="left">
										<td width="27" align="center">9	.</td>
										
										<td>Dalam membeli peralatan listrik rumah tangga, apa yang menjadi perhatian?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALAT_LISTRIK == '1') $check = ' checked';?>
										<td><input name="p9" id="p9" type="radio" value="1" <? echo $check; ?> disabled> Harga yang lebih murah
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALAT_LISTRIK == '2') $check = ' checked';?>
										<td><input name="p9" id="p9" type="radio" value="2" <? echo $check; ?> disabled> Daya Listrik yang lebih rendah
										</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_ALAT_LISTRIK == '3') $check = ' checked';?>
										<td><input name="p9" id="p9" type="radio" value="3" <? echo $check; ?> disabled> Merk yang dipercaya berkualitas
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">10 .</td>
										<td>Apakah Bapak/Ibu mengetahui golongan tarif atau daya yang disubsidi dan Non Subsidi?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENG_TARIF == '1') $check = ' checked';?>
										<td><input name="p10" id="p10" type="radio" value="1" <? echo $check; ?> disabled> Ya</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENG_TARIF == '2') $check = ' checked';?>
										<td><input name="p10" id="p10" type="radio" value="2" <? echo $check; ?> disabled> Tidak</td>
									</tr>
									
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">11 .</td>
										<td>Jika dibandingkan dengan tahun lalu, bagaimana gangguan listrik di rumah?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_GANGGUAN == '1') $check = ' checked';?>
										<td><input name="p11" id="p11" type="radio" value="1" <? echo $check; ?> disabled> Tetap Sama
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_GANGGUAN == '2') $check = ' checked';?>
										<td><input name="p11" id="p11" type="radio" value="2" <? echo $check; ?> disabled> Turun</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_GANGGUAN == '3') $check = ' checked';?>
										<td><input name="p11" id="p11" type="radio" value="3" <? echo $check; ?> disabled> Naik</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">12 .</td>
										<td>Menurut, Bapak/Ibu dengan kondisi iklim saat ini, apakah mempengaruhi pemakaian AC di rumah?</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENGARUH_AC == '1') $check = ' checked';?>
										<td><input name="p12" id="p12" type="radio" value="1" <? echo $check; ?> disabled> Ya, lebih hemat
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENGARUH_AC == '2') $check = ' checked';?>
										<td><input name="p12" id="p12" type="radio" value="2" <? echo $check; ?> disabled> Tidak Lebih Hemat
										</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_PENGARUH_AC == '3') $check = ' checked';?>
										<td><input name="p12" id="p12" type="radio" value="3" <? echo $check; ?> disabled> Tidak Tahu/ Ragu-Ragu
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">13 .</td>
										<td>Bapak/Ibu apakah pernah mendapatkan biaya tagihan listrik yang sangat meningkat sedangkan pemakaian listrik dirasa masih sama </td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>dengan bulan sebelumnya? </td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_BIAYA_TAGIHAN == '1') $check = ' checked';?>
										<td><input name="p13" id="p13" type="radio" value="1" <? echo $check; ?> disabled> Ya, pernah
										</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_BIAYA_TAGIHAN == '2') $check = ' checked';?>
										<td><input name="p13" id="p13" type="radio" value="2" <? echo $check; ?> disabled> Tidak
										</td>
									</tr> 

									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<?php if($VAR_BIAYA_TAGIHAN == '3') $check = ' checked';?>
										<td><input name="p13" id="p13" type="radio" value="3" <? echo $check; ?> disabled> Tidak Tahu / Ragu-Ragu
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

									<? if($VAR_KRITERIA_GAGAL == '0') {$check = '';$id=' id="kriteria_gagal_div"';}
										else{ $check = ' checked';$id='';}
									?>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>
											<input type="checkbox" name="gagal_call" value="1" <? echo $check; ?> disabled><font color='#FF0000'><B>GAGAL CALL</B> Pastikan Anda memilih alasan Jika CallBack GAGAL.</font> <br>
										</td>
									</tr>
									<tr <?php echo $id?>>
										<td width="5" align="center"></td>
										<td> 
											<select id="kriteria_gagal" name="kriteria_gagal" DISABLED>
											<?php if($VAR_KRITERIA_GAGAL == '100') $check1 = ' selected';?>
												<option value="100" <? echo $check1; ?>>Telepon Tidak Valid (Tidak Terdaftar / Suara Tulalit)</option>
											<?php if($VAR_KRITERIA_GAGAL == '101') $check2 = ' selected';?>
												<option value="101" <? echo $check2; ?>>Telepon Salah Sambung (dikonfirmasi DIL dengan No Telp)</option>
											<?php if($VAR_KRITERIA_GAGAL == '102') $check3 = ' selected';?>
												<option value="102" <? echo $check3; ?>>Telepon Tersambung dengan Faxmail atau Telepon Kantor PLN Area dan sejenisnya</option>
											<?php if($VAR_KRITERIA_GAGAL == '103') $check4 = ' selected';?>
												<option value="103" <? echo $check4; ?>>Sudah Tambah Daya</option>
											</select> 
										</td>
									</tr>
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td><strong>Saran</strong></td>
									</tr> 
									<tr align="left">
										<td width="27" align="center">&nbsp;</td>
										<td>
											<textarea id="saran" name="saran" rows="4" cols="50"  disabled><?php echo $VAR_SARAN;?></textarea> 
										</td>
									</tr>

									
									<tr>
										<td align="center">&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td align="center">&nbsp;</td>
										<td>&nbsp;</td>
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

