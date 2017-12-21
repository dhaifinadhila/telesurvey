<?php
session_start();
if($_SESSION['id_user']=="") {	
    echo '<script language="javascript">alert("MESSAGE : Session expired, please login again.")</script>';
	echo '<script language="javascript">window.location = "logout.php"</script>';		
}
  include_once 'lib/config.php';	
  include_once("function/function_cbc_master_call.php");
  require_once 'function/function_cbc_callback.php';



  $VAR_ID_CALLBACK=null;                 
  $VAR_ID_MASTER_CALL=$_GET['id'];             
  $token = md5($key.$VAR_ID_MASTER_CALL);
  
  $notelp = trim($_POST['VAR_P2_TELP']);
  if ($notelp<>"") {
	  // update master call
	  update_master_call_telp($notelp,$VAR_ID_MASTER_CALL);
      echo '<script language="javascript">alert("Nomor HP Pelanggan diupdate, silahkan lakukan CallBack Ulang. Terima Kasih")</script>';
	  echo '<script language="javascript">window.location = "call.php?id='.$VAR_ID_MASTER_CALL.'"</script>';
  }
  else
  {
		$master_call_data = cbc_master_call_search_by_ID_MASTER_CALL($VAR_ID_MASTER_CALL); 

		$MASTERCALL_NOAGENDA=$master_call_data[0]['NOAGENDA'];
		$MASTERCALL_NO_REGISTRASI=$master_call_data[0]['NO_REGISTRASI'];
		$MASTERCALL_TGLMOHON=$master_call_data[0]['TGLMOHON'];
		$MASTERCALL_IDPEL=$master_call_data[0]['IDPEL'];
		$MASTERCALL_NAMA=$master_call_data[0]['NAMA'];
		$MASTERCALL_ALAMAT=$master_call_data[0]['ALAMAT'];
		$MASTERCALL_NOTELP_PEMOHON=$master_call_data[0]['NOTELP_PEMOHON'];
		$MASTERCALL_NOTELP_HP_PEMOHON=$master_call_data[0]['NOTELP_HP_PEMOHON'];
		$MASTERCALL_ASALMOHON=$master_call_data[0]['ASALMOHON'];
		$MASTERCALL_UPIENTRI=$master_call_data[0]['UPIENTRI'];
		$MASTERCALL_PETUGASCATAT=$master_call_data[0]['PETUGASCATAT'];
		$MASTERCALL_TARIF_LAMA=$master_call_data[0]['TARIF_LAMA'];
		$MASTERCALL_DAYA_LAMA=$master_call_data[0]['DAYA_LAMA'];
		$MASTERCALL_TARIF=$master_call_data[0]['TARIF'];
		$MASTERCALL_DAYA=$master_call_data[0]['DAYA'];
		$MASTERCALL_JENIS_TRANSAKSI=$master_call_data[0]['JENIS_TRANSAKSI'];
		$MASTERCALL_PAKET_SAR=$master_call_data[0]['PAKET_SAR'];
		$MASTERCALL_TOTALBIAYA=$master_call_data[0]['TOTALBIAYA'];
		$MASTERCALL_TGLBAYAR=$master_call_data[0]['TGLBAYAR'];
		$MASTERCALL_LAMAMOHON=$master_call_data[0]['LAMAMOHON'];
		$MASTERCALL_STATUS_PERMOHONAN=$master_call_data[0]['STATUS_PERMOHONAN'];
		$MASTERCALL_TGL_UPDATE_PERMOHONAN=$master_call_data[0]['TGL_UPDATE_PERMOHONAN'];
		$MASTERCALL_TGLPK=$master_call_data[0]['TGLPK'];
		$MASTERCALL_TGLNYALA=$master_call_data[0]['TGLNYALA'];
		$MASTERCALL_NAMAUPI=$master_call_data[0]['NAMAUPI'];
		$MASTERCALL_NAMAAP=$master_call_data[0]['NAMAAP'];
		$MASTERCALL_NAMAUP=$master_call_data[0]['NAMAUP'];
		$MASTERCALL_UNITTUJUAN=$master_call_data[0]['UNITTUJUAN'];
		$MASTERCALL_CBC_JENIS_MUTASI=$master_call_data[0]['CBC_JENIS_MUTASI'];
		$MASTERCALL_CBC_STATUS_CALL=$master_call_data[0]['STATUS_CALL'];
		$MASTERCALL_CBC_TANGGAL_UPLOAD=$master_call_data[0]['CBC_TANGGAL_UPLOAD'];
		$MASTERCALL_CBC_KODE_DISTRIBUSI=$master_call_data[0]['CBC_KODE_DISTRIBUSI'];
		$MASTERCALL_CBC_KODE_UNIT=$master_call_data[0]['CBC_KODE_UNIT'];
		$MASTERCALL_CBC_KODE_RAYON=$master_call_data[0]['CBC_KODE_RAYON'];
		$MASTERCALL_CBC_ID_FILE_EXCELL=$master_call_data[0]['CBC_ID_FILE_EXCELL'];

		$GET_P1 = trim($_POST['p1']);
		$GET_P2 = trim($_POST['p2']);
		$GET_P3 = trim($_POST['p3']);
		$GET_P4 = trim($_POST['p4']);
		$GET_P5 = trim($_POST['p5']);
		$GET_P6 = trim($_POST['p6']);
		$GET_P7 = trim($_POST['p7']);
		$GET_P8 = trim($_POST['p8']);

  $VAR_KODE_DISTRIBUSI=$MASTERCALL_UNITTUJUAN[0].$MASTERCALL_UNITTUJUAN[1];            
  $VAR_KODE_UNIT=$MASTERCALL_UNITTUJUAN;                  
  $VAR_KODE_RAYON=$MASTERCALL_UNITTUJUAN;                 
  $VAR_ID_PENGGGUNA=$_SESSION['id_user'];               
  $VAR_JENIS_MUTASI=$MASTERCALL_CBC_JENIS_MUTASI;               
  $VAR_NOMOR_TELP_PELANGGAN=$GET_P1;       
  $VAR_NOMOR_TELP_PELANGGAN_BUKAN=$GET_P2; 
  $VAR_PERMINTAAN_VIA=$GET_P3;             
  $VAR_PERMINTAAN_VIA_ORANGLAIN=$GET_P4;   
  $VAR_KECEPATAN_LAYANAN=$GET_P5;          
  $VAR_TAMBAHAN_BIAYA=$GET_P6;             
  $VAR_TAMBAHAN_BIAYA_WAKTU=$GET_P7;       
  $VAR_TAMBAHAN_BIAYA_ALASAN=$GET_P8;      
  $VAR_CALLBACK_TANGGAL=date("Y-m-d");           
  $VAR_CALLBACK_BULAN=date("Ym");   
  



  // point p2
  if ($GET_P2=="2") {
	$VAR_CALLBACK_POINT='0';
  }

  // point p3
  if ($GET_P3=="1") {
	$VAR_CALLBACK_POINT='2';
  } else
  if ($GET_P3=="2") {
	$VAR_CALLBACK_POINT='5';
  }

  // point p4
  if ($GET_P4=="1") {
	$VAR_CALLBACK_POINT='1';
  } else
  if ($GET_P4=="2") {
	$VAR_CALLBACK_POINT='2';
  } else
  if ($GET_P4=="3") {
	$VAR_CALLBACK_POINT='3';
  } else
  if ($GET_P4=="4") {
	$VAR_CALLBACK_POINT='4';
  }


  // point p5
  if ($GET_P5=="1") {
	$VAR_CALLBACK_POINT='7';
  } else
  if ($GET_P5=="2") {
	$VAR_CALLBACK_POINT='5';
  } else
  if ($GET_P5=="3") {
	$VAR_CALLBACK_POINT='2';
  } else
  if ($GET_P5=="4") {
	$VAR_CALLBACK_POINT='0';
  }

  // point p6
  if ($GET_P6=="2") {
	$VAR_CALLBACK_POINT='7';
  }

  // point p8
  if ($GET_P8=="1") {
	$VAR_CALLBACK_POINT='1';
  } else
  if ($GET_P8=="2") {
	$VAR_CALLBACK_POINT='1';
  } else
  if ($GET_P8=="3") {
	$VAR_CALLBACK_POINT='1';
  } else
  if ($GET_P8=="4") {
	$VAR_CALLBACK_POINT='1';
  }




  if ($GET_P5=="4") { // belum nyala EMAIL ke managernya           
	  $VAR_REPLY_SEND_NOTIFIKASI='1';      
	  $VAR_REPLY_TANGGAL=date("Y-m-d");                 
	  $VAR_REPLY_TANGGAL_NYALA=null;           
	  $VAR_REPLY_KETERANGAN='0';           
	  $VAR_REPLY_ID_PENGGUNA='0';
  } else {
	  $VAR_REPLY_SEND_NOTIFIKASI='0';      
	  $VAR_REPLY_TANGGAL=date("Y-m-d");                 
	  $VAR_REPLY_TANGGAL_NYALA=date("Y-m-d", strtotime($MASTERCALL_TGLNYALA));            
	  $VAR_REPLY_KETERANGAN='0';           
	  $VAR_REPLY_ID_PENGGUNA='0';
  }
  

  $VAR_INFORMASI_01='1';               
  $VAR_INFORMASI_02='2';               
  $VAR_INFORMASI_03='3';               
  $VAR_INFORMASI_04='4';               
  $VAR_INFORMASI_05='5';               
  $VAR_INFORMASI_06='6';               
  $VAR_INFORMASI_07='7';               
  $VAR_INFORMASI_08='8';               
  $VAR_INFORMASI_09='9';               
  $VAR_INFORMASI_10='10';               
  $VAR_INFORMASI_11='11';               
  $VAR_INFORMASI_12='12';               
  $VAR_INFORMASI_13='13';               
  $VAR_INFORMASI_14='14';               
  $VAR_INFORMASI_15='15';               
  $VAR_INFORMASI_16='16';               
  $VAR_INFORMASI_17='17';               
  $VAR_INFORMASI_18='18';               
  $VAR_INFORMASI_19='19';               
  $VAR_INFORMASI_20='20'; 

  //echo $VAR_CALLBACK_POINT; 
  

 
  $savecall =  cbc_callback_insert(  
	  $VAR_ID_CALLBACK,                 
	  $VAR_ID_MASTER_CALL,             
	  $VAR_KODE_DISTRIBUSI,            
	  $VAR_KODE_UNIT,                  
	  $VAR_KODE_RAYON,                 
	  $VAR_ID_PENGGGUNA,               
	  $VAR_JENIS_MUTASI,               
	  $VAR_NOMOR_TELP_PELANGGAN,       
	  $VAR_NOMOR_TELP_PELANGGAN_BUKAN, 
	  $VAR_PERMINTAAN_VIA,             
	  $VAR_PERMINTAAN_VIA_ORANGLAIN,   
	  $VAR_KECEPATAN_LAYANAN,          
	  $VAR_TAMBAHAN_BIAYA,             
	  $VAR_TAMBAHAN_BIAYA_WAKTU,       
	  $VAR_TAMBAHAN_BIAYA_ALASAN,      
	  $VAR_CALLBACK_TANGGAL,           
	  $VAR_CALLBACK_BULAN,             
	  $VAR_CALLBACK_POINT,             
	  $VAR_REPLY_SEND_NOTIFIKASI,      
	  $VAR_REPLY_TANGGAL,              
	  $VAR_REPLY_TANGGAL_NYALA,        
	  $VAR_REPLY_KETERANGAN,           
	  $VAR_REPLY_ID_PENGGUNA,          
	  $VAR_INFORMASI_01,               
	  $VAR_INFORMASI_02,               
	  $VAR_INFORMASI_03,               
	  $VAR_INFORMASI_04,               
	  $VAR_INFORMASI_05,               
	  $VAR_INFORMASI_06,               
	  $VAR_INFORMASI_07,               
	  $VAR_INFORMASI_08,               
	  $VAR_INFORMASI_09,               
	  $VAR_INFORMASI_10,               
	  $VAR_INFORMASI_11,               
	  $VAR_INFORMASI_12,               
	  $VAR_INFORMASI_13,               
	  $VAR_INFORMASI_14,               
	  $VAR_INFORMASI_15,               
	  $VAR_INFORMASI_16,               
	  $VAR_INFORMASI_17,               
	  $VAR_INFORMASI_18,               
	  $VAR_INFORMASI_19,               
	  $VAR_INFORMASI_20
	  );

	if ($savecall=="1") {
		update_master_call_sudah_callback($VAR_ID_MASTER_CALL); 
		echo '<script language="javascript">alert("Data CallBack Berhasil disimpan. Terima Kasih")</script>';
		echo '<script language="javascript">window.location = "belum_call.php?pbpd='.$MASTERCALL_CBC_JENIS_MUTASI.'"</script>';
	} 
	else 
	{	 
		echo '<script language="javascript">alert("ERROR : Data Callback Gagal disimpan.")</script>';
		echo '<script language="javascript">window.location = "belum_call.php?pbpd='.$MASTERCALL_CBC_JENIS_MUTASI.'"</script>';
	}

} // end no telp
 
?>