<?
include_once("function_cbc_callback.php");
include_once("config.php");

$data = cbc_callback_view_all();

echo "<pre>";
print_r($data);
echo "</pre>";

  $VAR_ID_CALLBACK=null;                 
  $VAR_ID_MASTER_CALL='1';             
  $VAR_KODE_DISTRIBUSI='54';            
  $VAR_KODE_UNIT='54110';                  
  $VAR_KODE_RAYON='110';                 
  $VAR_ID_PENGGGUNA='1';               
  $VAR_JENIS_MUTASI='2';               
  $VAR_NOMOR_TELP_PELANGGAN='1';       
  $VAR_NOMOR_TELP_PELANGGAN_BUKAN='0'; 
  $VAR_PERMINTAAN_VIA='2';             
  $VAR_PERMINTAAN_VIA_ORANGLAIN='1';   
  $VAR_KECEPATAN_LAYANAN='1';          
  $VAR_TAMBAHAN_BIAYA='1';             
  $VAR_TAMBAHAN_BIAYA_WAKTU='1';       
  $VAR_TAMBAHAN_BIAYA_ALASAN='2';      
  $VAR_CALLBACK_TANGGAL='2014-09-18';           
  $VAR_CALLBACK_BULAN='201401';             
  $VAR_CALLBACK_POINT='4';             
  $VAR_REPLY_SEND_NOTIFIKASI='0';      
  $VAR_REPLY_TANGGAL='2014-09-20';                 
  $VAR_REPLY_TANGGAL_NYALA='2014-09-21';           
  $VAR_REPLY_KETERANGAN='KETERANGAN OK';           
  $VAR_REPLY_ID_PENGGUNA='1';          
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
  
  /*
  cbc_callback_insert(  
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

  */

//DEMO INSERT
//cbc_pengguna_insert($VAR_KODE_DISTRIBUSI, $VAR_KODE_UNIT, $VAR_KODE_RAYON, $VAR_NIP, $VAR_EMAIL, $VAR_PASSWORD, $VAR_NAMA, $VAR_JABATAN, $VAR_HAK_AKSES, $VAR_TARGET_CALL, $VAR_INFORMASI_01, $VAR_INFORMASI_02, $VAR_INFORMASI_03, $VAR_INFORMASI_04, $VAR_INFORMASI_05, $VAR_INFORMASI_06, $VAR_INFORMASI_07, $VAR_INFORMASI_08, $VAR_INFORMASI_09, $VAR_INFORMASI_10);


//DEMO DELETE 
//$VAR_ID_CALLBACK=1;
//cbc_callback_delete($VAR_ID_CALLBACK);
 

?>