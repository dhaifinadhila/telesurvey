<?php
include_once("lib/config.php");
include_once("function/function_tm_master.php");

 
					$master_call = TM_MASTER_blm_call();

					$xml = "<data>";
					
					$nomor=1;
					for ($i=0;$i<count($master_call);$i++) {
						$xml = $xml."<customer>";
						$VAR_ID_MASTER		= $master_call[$i]['ID_MASTER'];
						$token 				= md5($key.$VAR_ID_MASTER);
						$VAR_IDPEL			= $master_call[$i]['ID_PELANGGAN'];
						$VAR_NAMA 			= $master_call[$i]['NAMA'];
						$VAR_ALAMAT			= $master_call[$i]['ALAMAT'];
						$VAR_NO_TELP		= $master_call[$i]['NO_TELP'];
						$VAR_NO_HP			= $master_call[$i]['NO_HP'];
						$VAR_TARIF			= $master_call[$i]['TARIF'];
						$VAR_DAYA			= $master_call[$i]['DAYA'];
						$VAR_PEMKWH			= $master_call[$i]['PEMKWH'];
						$VAR_JAM_NYALA		= $master_call[$i]['JAM_NYALA'];
						$VAR_JAM_NYALA_600	= $master_call[$i]['JAM_NYALA_600'];
						$VAR_JAM_NYALA_400	= $master_call[$i]['JAM_NYALA_400'];
						$VAR_ID_POSKO		= $master_call[$i]['ID_POSKO'];
						$VAR_NAMA_POSKO		= $master_call[$i]['NAMA_POSKO'];

						$VAR_TM_KODE_DIS	= $master_call[$i]['TM_KODE_DISTRIBUSI'];
						$VAR_TM_KODE_AREA	= $master_call[$i]['TM_KODE_AREA'];
						$VAR_TM_KODE_RAYON	= $master_call[$i]['TM_KODE_RAYON'];
						$VAR_TM_STATUS_CALL	= $master_call[$i]['TM_STATUS_CALL'];
						$VAR_ID_FILE_UPLOAD	= $master_call[$i]['ID_FILE_UPLOAD'];
						$VAR_TGL_UPLOAD		= $master_call[$i]['TGL_UPLOAD'];
						$VAR_KONVERSI_NYALA	= $master_call[$i]['INFORMASI_01'];
						$VAR_ALASAN_GAGAL	= $master_call[$i]['INFORMASI_02'];
	

						
						$xml = $xml."<id>$VAR_ID_MASTER</id>";
						$xml = $xml."<token>$token</token>";
						$xml = $xml."<name>$VAR_NAMA</name>";
						$xml = $xml."<phone_1>$VAR_NO_TELP</phone_1>";
						$xml = $xml."<phone_2>$VAR_NO_HP</phone_2>";
						$xml = $xml."<idpel>$VAR_IDPEL</idpel>";
						$xml = $xml."<alamat>$VAR_ALAMAT</alamat>";
						$xml = $xml."<tarif>$VAR_TARIF</tarif>";
						$xml = $xml."<daya>$VAR_DAYA</daya>";
						$xml = $xml."<jam_nyala_1>$VAR_JAM_NYALA_600</jam_nyala_1>";
						$xml = $xml."<jam_nyala_2>$VAR_JAM_NYALA_400</jam_nyala_2>";
						$xml = $xml."<date>$VAR_TGL_UPLOAD</date>";
						$xml = $xml."<date><br></date>";
						$xml = $xml."</customer>";
}

$xml = $xml."</data>";

echo $xml;

 
/* $sxe = new SimpleXMLElement($xml);

print $sxe->asXML(); */

?>