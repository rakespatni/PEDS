<?php
require_once('phpmailer/class.phpmailer.php');
define('GUSER', 'anonymousnitcstudent@gmail.com'); // GMail username
define('GPWD', 'nitcstudent'); // GMail password
$type=$_POST['type'];
$suggest=$_POST['suggestion'];
function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}


if (smtpmailer('complaintboxnitc@gmail.com', 'anonymousnitcstudent@gmail.com', 'NITC Student', $type.':type mail message', $suggest)) {
	header('Location:submit.php');
	echo "Mail Message Sent-----> Congrats......!";
}
if (!empty($error)) echo $error;

?>
