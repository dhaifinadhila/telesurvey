<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('Asia/Jakarta');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "jatimmail03.jatim.corp.pln.co.id"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "jatimmail02.jatim.corp.pln.co.id"; // sets the SMTP server -- mail.yourdomain.com
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "notifikasi.ams"; // SMTP account username
$mail->Password   = "1qaz0plm";        // SMTP account password

$mail->SetFrom('notifikasi.ams@pln.co.id', 'First Last');
$mail->AddReplyTo('notifikasi.ams@pln.co.id', 'First Last');

$mail->Subject    = "Uji Coba";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddBCC("sandi.kukuh@pln.co.id");
$mail->AddBCC("cahyo.purbo@pln.co.id");

$address = "notifikasi.ams@pln.co.id";
$mail->AddAddress($address, "Jangan Dibalas");

$mail->AddAttachment("images/phpmailer.gif");      // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>
