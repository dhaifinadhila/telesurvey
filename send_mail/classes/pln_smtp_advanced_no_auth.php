<html>
<head>
<title>PHPMailer - SMTP advanced test with no authentication</title>
</head>
<body>

<?php
require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "jatimmail03.jatim.corp.pln.co.id"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->AddReplyTo('cahyo.purbo@pln.co.id', 'Balas Ke');
  $mail->AddAddress('cahyo.purbo@gmail.com', 'si Cahyo');
  $mail->SetFrom('cahyo.purbo@pln.co.id', 'Kiriman Dari');
  $mail->AddReplyTo('capuha@yahoo.com', 'YahooMail');
  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML(file_get_contents('contents.html'));
  $mail->AddAttachment('images/phpmailer.gif');      // attachment
  $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>

</body>
</html>
