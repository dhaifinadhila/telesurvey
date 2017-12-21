<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
include_once("lib/config.php");
include_once("function/function_cbc_master_call.php");

$var_ID_MASTER_CALL = $_GET['id'];
$master_call = cbc_master_call_search_by_ID_MASTER_CALL($var_ID_MASTER_CALL);
$VAR_ID_MASTER_CALL=$master_call[0]['ID_MASTER_CALL'];
$token = md5($key.$VAR_ID_MASTER_CALL);
$VAR_NOAGENDA=$master_call[0]['NOAGENDA'];
$VAR_NO_REGISTRASI=$master_call[0]['NO_REGISTRASI'];
$VAR_TGLMOHON=$master_call[0]['TGLMOHON'];
$VAR_IDPEL=$master_call[0]['IDPEL'];
$VAR_NAMA=$master_call[0]['NAMA'];
$VAR_ALAMAT=$master_call[0]['ALAMAT'];
$VAR_NOTELP_PEMOHON=$master_call[0]['NOTELP_PEMOHON'];
$VAR_NOTELP_HP_PEMOHON=$master_call[0]['NOTELP_HP_PEMOHON'];
$VAR_ASALMOHON=$master_call[0]['ASALMOHON'];
$VAR_UPIENTRI=$master_call[0]['UPIENTRI'];
$VAR_PETUGASCATAT=$master_call[0]['PETUGASCATAT'];
$VAR_TARIF_LAMA=$master_call[0]['TARIF_LAMA'];
$VAR_DAYA_LAMA=$master_call[0]['DAYA_LAMA'];
$VAR_TARIF=$master_call[0]['TARIF'];
$VAR_DAYA=$master_call[0]['DAYA'];
$VAR_JENIS_TRANSAKSI=$master_call[0]['JENIS_TRANSAKSI'];
$VAR_PAKET_SAR=$master_call[0]['PAKET_SAR'];
$VAR_TOTALBIAYA=$master_call[0]['TOTALBIAYA'];
$VAR_TGLBAYAR=$master_call[0]['TGLBAYAR'];
$VAR_LAMAMOHON=$master_call[0]['LAMAMOHON'];
$VAR_STATUS_PERMOHONAN=$master_call[0]['STATUS_PERMOHONAN'];
$VAR_TGL_UPDATE_PERMOHONAN=$master_call[0]['TGL_UPDATE_PERMOHONAN'];
$VAR_TGLPK=$master_call[0]['TGLPK'];
$VAR_TGLNYALA=$master_call[0]['TGLNYALA'];
$VAR_NAMAUPI=$master_call[0]['NAMAUPI'];
$VAR_NAMAAP=$master_call[0]['NAMAAP'];
$VAR_NAMAUP=$master_call[0]['NAMAUP'];
$VAR_UNITTUJUAN=$master_call[0]['UNITTUJUAN'];
$VAR_CBC_JENIS_MUTASI=$master_call[0]['CBC_JENIS_MUTASI'];
$VAR_CBC_STATUS_CALL=$master_call[0]['CBC_STATUS_CALL'];
$VAR_CBC_TANGGAL_UPLOAD=$master_call[0]['CBC_TANGGAL_UPLOAD'];
$VAR_CBC_KODE_DISTRIBUSI=$master_call[0]['CBC_KODE_DISTRIBUSI'];
$VAR_CBC_KODE_UNIT=$master_call[0]['CBC_KODE_UNIT'];
$VAR_CBC_KODE_RAYON=$master_call[0]['CBC_KODE_RAYON'];
$VAR_CBC_ID_FILE_EXCELL=$master_call[0]['CBC_ID_FILE_EXCELL'];
//echo $VAR_CBC_STATUS_CALL; 
if ($VAR_CBC_STATUS_CALL=="2") {
	echo '<script language="javascript">alert("Pelanggan ini sudah dilakukan Callback. Silahkan mencari pelanggan yang lain.")</script>';
	echo '<script language="javascript">window.location = "belum_call.php?pbpd='.$VAR_CBC_JENIS_MUTASI.'"</script>';
}
                    
                    

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



<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
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
        <th class="_css_font_default_11" scope="col"><div align="left"><strong>Belum Callback </strong>&#8226; <strong>
		<?php if ($VAR_CBC_JENIS_MUTASI=="1"){ echo "Pelanggan Pasang Baru"; } else { echo "Pelanggan Perubahan Daya";} ?></strong>
		&#8226; <?php echo "Nomor Agenda : ".$VAR_NOAGENDA;?>
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
		
		<form name="form_callback_sheet" method="post" action="call_submit.php?id=<? echo $var_ID_MASTER_CALL;?>&token=<? echo $token;?>">						  
		
				  <table width="90%" align="center" class="_css_font_default_12">
				  
				  <tr>
				    <td colspan="2" align="center">
<table width="100%" border="1" cellpadding="4" cellspacing="1">
  <tr class="_css_font_default_11">
    <td colspan="3" bgcolor="#CCCCCC" class="_css_font_horizontal_title"><strong>DATA NOMOR </strong></td>
    </tr>
  
  <tr class="_css_font_default_11">
    <td width="21%" class="_css_font_default_12"><strong>No Telepon</strong></td>
    <td width="2%" class="_css_font_default_12"><strong>:</strong></td>
    <td width="77%"><?php echo $VAR_NOTELP_PEMOHON; ?></td>
    </tr>
  
  <tr class="_css_font_default_11">
    <td class="_css_font_default_12"><strong>No HP </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_NOTELP_HP_PEMOHON; ?></td>
    </tr>
  
  <tr class="_css_font_default_11">
    <td width="21%" class="_css_font_default_12"><strong>No Registrasi </strong></td>
    <td width="2%" class="_css_font_default_12"><strong>:</strong></td>
    <td width="77%"><?php echo $VAR_NO_REGISTRASI; ?></td>
    </tr>
  
  <tr class="_css_font_default_11">
    <td class="_css_font_default_12"><strong>No Agenda </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_NOAGENDA; ?></td>
    </tr>
  
  <tr class="_css_font_default_11_b">
    <td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>IDENTITAS PELANGGAN </strong></td>
    </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>ID Pelanggan </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_IDPEL; ?></td>
    </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Nama</strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_NAMA; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Alamat</strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_ALAMAT; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Asal Pemohon </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_ASALMOHON; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Tarif Lama </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_TARIF_LAMA; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Daya Lama </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_DAYA_LAMA; ?></td>
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
    <td class="_css_font_default_12"><strong>Paket SAR </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_PAKET_SAR; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Total Biaya </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_TOTALBIAYA; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td colspan="3" bgcolor="#CCCCCC" class="_css_font_default_12"><strong>TANGGAL TRANSAKSI </strong></td>
    </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Tanggal Permohonan </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_TGLMOHON; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Tanggal Bayar </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_TGLBAYAR; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Tanggal PK </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_TGLPK; ?></td>
  </tr>
  <tr class="_css_font_default_11_b">
    <td class="_css_font_default_12"><strong>Tanggal Nyala </strong></td>
    <td class="_css_font_default_12"><strong>:</strong></td>
    <td><?php echo $VAR_TGLNYALA; ?></td>
  </tr>
</table></td>
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
				    <td colspan="2" align="center"><p align="left" class="_css_font_default_14">Selamat  <?php echo "Siang"; ?> Bapak/Ibu <?php echo $VAR_NAMA;?> yang terhormat, saya 
					<?php echo $_SESSION['myusername']; ?> dari CALL BACK CENTER bermaksud menanyakan beberapa hal terkait pelayanan dan pelaksanaan Pasang Baru di tempat Bapak/Ibu, mohon kesediaan waktunya.</p></td>
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
				  <tr>
				    <td width="27" align="center">1.</td>
                    <td>Mohon maaf, apakah kami sedang berbicara dengan Bapak/Ibu <?php echo $VAR_NAMA;?> ? </td>
                  </tr>
				  <tr>
				    <td>&nbsp;</td>
				    <td><input name="p1" id="p1" type="radio" value="1">
Ya, saya sendiri <strong>[lanjut ke pertanyaan no 3]</strong></td>
				    </tr>
				  <tr>
				    <td>&nbsp;</td>
                    <td><input name="p1" id="radio3" type="radio" value="2">
Bukan Saya <strong>[lanjut ke pertanyaan no 2]</strong></td>
                    </tr>  
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">2.</td>
                    <td><strong>Jika bukan dengan Bapak/Ibu <?php echo $VAR_NAMA; ?></strong>, lalu dengan Bapak/Ibu siapa saya berbicara?</td>
                  </tr>
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>Dan apakah ada hubungan keluarga dengan Bapak/Ibu <?php echo $VAR_NAMA; ?></td>
                  </tr>
				  <tr>
				    <td height="23">&nbsp;</td>
                    <td>						
						<input name="p2" id="p2" type="radio" value="1">
						Masih ada hubungan keluarga (Suami/Istri/Anak dan seterusnya) <strong>[lanjut ke pertanyaan no 3]</strong></td>
                    </tr>       
				<tr>
				  <td height="23">&nbsp;</td>
                  <td><input name="p2" id="radio" type="radio" value="2">
Orang Lain (Teman/Tetangga/Biro Jasa dan seterusnya). </td>
                    </tr>    
				 <tr>
				   <td align="center">&nbsp;</td>
				   <td>Bisakah kami diberi nomor telpon Bapak/Ibu <?php echo $VAR_NAMA; ?>?
                     <input name="VAR_P2_TELP" type="text" class="_css_input_text" id="VAR_P2_TELP" >
                     <span class="style1">[STOP]</span></td>
				   </tr>
				 <tr>
				   <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr> 
				   
				 <tr>
				   <td width="27" align="center">3.</td>
                    <td>Apakah Bapak/Ibu <?php echo $VAR_NAMA;?> melakukan sendiri proses permohonan Pasang Baru?</td>
                  </tr> 
				  <tr>
				    <td height="23">&nbsp;</td>
				    <td><input name="p3" id="p3" type="radio" value="1">
Tidak <strong>[lanjut ke pertanyaan no 4] </strong></td>
				    </tr>
				  <tr>
				    <td height="23">&nbsp;</td>
                    <td><input name="p3" id="radio2" type="radio" value="2">
Ya, melalui CC123, web PLN atau Loket PLN <strong>[lanjut ke pertanyaan no 5] </strong></td>
                    </tr> 
				 <tr>
				   <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                 </tr>   	   	                                    
				  <tr>
				    <td width="27" align="center">4.</td>
                    <td>Jika Bapak/Ibu <?php echo $VAR_NAMA;?> tidak melakukan sendiri proses permohonan Pasang Baru, siapakah yang membantu dalam proses tersebut?</td>
                  </tr> 
				   <tr>
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="1"> Petugas PLN yang berada di sekitar kantor PLN  </td>
                  </tr> 
				   <tr>
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="2"> Petugas lapangan PLN (Baca Meter, Pemutusan/Penyambungan, Layanan Teknik) </td>
                  </tr> 
				   <tr>
				     <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="3"> Perusahaan biro jasa / instalatir dan sejenisnya</td>
                  </tr> 				   <tr>
                    <td width="27" align="center">&nbsp;</td>
                    <td>
                        <input name="p4" id="p4" type="radio" value="4"> 
                        Selain ketiga poin di atas </td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                 </tr>   	
				  <tr>
				    <td width="27" align="center">5.</td>
                    <td>Setelah Bapak/Ibu <?php echo $VAR_NAMA; ?> membayar biaya Penyambungan, berapa lamakah waktu yang diperlukan hingga listrik menyala?</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><em>[data AP2T: <?php echo $VAR_LAMAMOHON; ?> hari] </em></td>
                  </tr> 
				   <tr>
				     <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="1"> 1 hari s/d 3 hari kerja</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="2"> 4 hari s/d 10 hari kerja</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="3"> lebih dari 10 hari kerja</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p5" id="p5" type="radio" value="4"> Belum menyala</td>
                  </tr> 
				   <tr>
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">6.</td>
                    <td>Apakah Bapak/Ibu <?php echo $VAR_NAMA; ?> dikenakan biaya tambahan di luar biaya yang tertera pada Nomor Register Pasang Baru?</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="1"> Ya, memberi biaya tambahan <strong>[lanjut ke pertanyaan no 7]</strong></td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p6" id="p6" type="radio" value="2"> Tidak mengeluarkan biaya tambahan lainnya <span class="style1">[STOP]</span></td>
                  </tr> 
				   <tr>
				     <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr>
				    <td width="27" align="center">7.</td>
                    <td>Kapan Bapak/Ibu <?php echo $VAR_NAMA; ?> memberikan biaya tambahan di luar ketentuan tersebut?</td>
                  </tr>
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="1"> Awal proses permohonan Pasang Baru</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="2"> Saat proses permohonan Pasang Baru</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p7" id="p7" type="radio" value="3"> Setelah proses permohonan Pasang Baru</td>
                  </tr>
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">8.</td>
                    <td>Apakah alasan Bapak/Ibu <?php echo $VAR_NAMA; ?> memberikan biaya tambahan di luar ketentuan tersebut?</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="1">
                      Petugas meminta sebagai jasa layanan/tip atau biaya tambah kabel<span class="style1"> [STOP]</span></td>
                  </tr>     
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="2">
                      Agar proses Pasang Baru dapat dipercepat pengerjaannya<span class="style1"> [STOP]</span></td>
                  </tr>     
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="3">
                      Untuk biaya Jaminan Instalasi dan SLO (Sertifikat Laik Operasi) <span class="style1">[STOP]</span></td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td><input name="p8" id="p8" type="radio" value="4">Sebagai ucapan terima kasih kepada petugas <span class="style1">[STOP]</span></td>
                  </tr>  				
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>  
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>Terima kasih Bapak/Ibu <?php echo $VAR_NAMA; ?> telah meluangkan waktu untuk kami.</td>
                  </tr> 
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>Jawaban ini sangat berarti bagi kami untuk meningkatkan mutu pelayanan PLN. Selamat <?php echo "Siang"; ?></td>
                  </tr> 				  
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr> 
				  	   
				  <tr>
				    <td width="27" align="center">&nbsp;</td>
                    <td>						
						<input class="button" type="submit" name="Submit" value="SIMPAN">
						 <input class="button" type="reset" name="reset" value="RESET"></td>
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


