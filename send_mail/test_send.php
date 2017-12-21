<?php

/*require 'const.php';

$grupUsn = "taufik.hariadi@pln.co.id";
$judul = "Notifikasi Pelanggan Belum Nyala";

$pesanT = file_get_contents("template_notifikasi_belum_nyala.html");

$srtNo = "04826/065/DIVMUM/2011";
$srtDari = "PLN PUSAT - KDIVMUM";
$srtKepada = "GENERAL MANAGER";
$srtPerihal = "PEMANFAATAN RUMAH DINAS";
$blth = "September 2012";

$rS = array('{noSurat}', '{dari}', '{kepada}', '{perihal}','{tgl}');
$rT = array($srtNo, $srtDari, $srtKepada, $srtPerihal, $blth);

$pesan = str_replace($rS,$rT,$pesanT);

kirimEmail($grupUsn, $judul, $pesan);*/

//$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
date_default_timezone_set('Asia/Beijing');
$date = date('m/d/Y h:i:s a', time());
echo $date;

?>