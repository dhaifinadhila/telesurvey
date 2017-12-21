<?php
/**
 * KUMPULAN FUNCTION YANG DIGUNAKAN
 *
 * @author     Cahyo P <capuha@yahoo.com>
 * @version    1.2
 * @since      File available since Release 1.0
 *	
 */
 
//============= fungsi Umum ==============
function id_unik() {
	return base_convert(uniqid(),16,35).".".base_convert(rand(100,999),10,35);
}

function original_ip()
{	if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
	{ $ip=$_SERVER['HTTP_CLIENT_IP']; }
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
	{ $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
	else
	{ $ip=$_SERVER['REMOTE_ADDR']; }
	return $ip;
}

function mysql_esc_string($inp) {
//Untuk menghasilkan string yang aman untuk proses query
	if(is_array($inp)) 
		return array_map(__METHOD__, $inp); 

	if(!empty($inp) && is_string($inp)) {
		return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
	} 
	return $inp;
}

//============= fungsi Khusus AMS ==============
function get_user_from_uid() {
	//Untuk fungsi pengamanan jika cookies usn dirubah, uid dicocokkan dengan UID lewat database.
	//Ambil cookies UID
	$uid = $_COOKIE['UID'];
	$sql = "SELECT usn FROM login_session WHERE session_kode='$uid'";
	$rs = mysql_query($sql);
	if ($row = mysql_fetch_assoc($rs)) {
		return $row['usn'];
	} else { return ""; }
}

function update_last_active() {
	//Digunakan di ajax_refresh.php untuk memberitahukan ke sistem bahwa user masih aktif
	$uid = $_COOKIE['UID'];
	$sql = "UPDATE login_session SET last_active=now() WHERE session_kode='$uid'";
	mysql_query($sql);
}

function cek_user_active() {
	//Digunakan di ajax_refresh.php untuk mencari user yang sudah tidak menjalankan AMS lebih dari 5 Menit
	//Karena update_last_active selalu berlaku tiap 10 detik maka seharusnya user diatas 5 menit dianggap logout
	//Karena bisa dipastikan user menutup windownya(AMS) tanpa logout
	$uid = $_COOKIE['UID'];
	$sql = "SELECT * FROM login_session WHERE last_active > now()-5";
}
	
function getMeta($usn, $key)
{
	$sql = "SELECT meta_value FROM m_usermeta WHERE usn='$usn' AND meta_key='$key'";
	$rsMeta = mysql_query($sql);
	
	if ($rowMeta = mysql_fetch_assoc($rsMeta))
	{ return $rowMeta["meta_value"]; } else
	{ return ""; }
}

function setMeta($usn,$key,$val) {
	$sql = "";

}

function getStatusUser() {
	global $mail_host;
	echo "Test $mail_host";
}

function getMasalah($kode) {
	$sql = "SELECT uraian FROM m_masalah WHERE kode_masalah='$kode'";
	$resKM = mysql_query($sql);

	if ($rowKM = mysql_fetch_assoc($resKM)) { return $rowKM["uraian"]; } else { return ""; };
}

// ===== KIRIM EMAIL =====
function kirimEmail($grupUsn, $Judul, $pesan ) {
	//Pendefinisian variabel dari variabel global
	global $docRoot;
	
	global $mail_active;
	global $mail_host;
	global $mail_port;
	global $mail_usn;
	global $mail_pwd;
	global $mail_addr;
	
	//Jika fungsi pengiriman email digunakan
	if ($mail_active) {
		//$grupUsn = kumpulan usn dalam string dengan pemisah tanda ;
		//$pesan = Isi Email yang akan dikirim berupa html
		error_reporting(E_STRICT);

		date_default_timezone_set('Asia/Bangkok');

		#== Cek parameter apakah sudah benar semua / tidak kosong. Jika kosong Exit
		if (empty($grupUsn) || empty($pesan)) { exit; }

		#== Split $grupUsn jadikan Array
		$rgroup = explode(";", $grupUsn);

		#== Cari Email dari masing2 usn di $grupUsn
		$gr4sql = "'".str_replace(";", "','", $grupUsn)."'";

		$sql = "SELECT AD_mail FROM m_user WHERE usn IN ($gr4sql)";
		$rsEmailAddr = mysql_query($sql);

		#== Pendefinisian Object Email dan komponen2nya
		require_once('classes/class.phpmailer.php');

		$mail             = new PHPMailer();
		$body             = $pesan;
		$body             = eregi_replace("[\]",'',$body);

		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
																							 // 1 = errors and messages
																							 // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "$mail_host"; // sets the SMTP server -- mail.yourdomain.com
		$mail->Port       = $mail_port;            // set the SMTP port for the GMAIL server
		$mail->Username   = "$mail_usn"; // SMTP account username
		$mail->Password   = "$mail_pwd";        // SMTP account password

		$mail->SetFrom("$mail_addr", 'Informasi CBC');
		$mail->AddReplyTo("$mail_addr", 'Informasi CBC');

		$mail->Subject    = "CBC - $Judul";

		$mail->AltBody    = "Untuk dapat melihat pesan, tolong gunakan email client yang support HTML!"; // optional, comment out and test

		$mail->MsgHTML($body);

		//while ( $aRow = mysql_fetch_assoc($rsEmailAddr) )
		//{
			//$mail->AddBCC($aRow["AD_mail"]);
		//}
		$mail->AddBCC($grupUsn);

		$address = "$mail_addr";
		//$mail->AddAddress($address, "Tidak Perlu Dibalas");

		# Mulai proses kirim
		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message sent!";
		}
	}
} // ===== END KIRIM EMAIL =====

?>