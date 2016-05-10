<?php
if( !isset($_POST["first-name"]) || !isset($_POST["last-name"]) || !isset($_POST["home-phone"]) || !isset($_POST["email"]) || !isset($_POST["city"]) || !isset($_POST["zip"]) ){
		header("Location: ../make-an-appointment?status=failure&error=required-forms");
}
else{
	foreach($_POST as $key => $value){
		$message .= $key . ": " . $value . "\r\n";
	}
	$message = htmlspecialchars($message, ENT_QUOTES);
	$message = wordwrap($message,80);

	$headers = 'From: info@wunderfultails.com' . "\r\n" .
	'CC: dreink95@gmail.com' . "\r\n" .
    'Reply-To: info@wunderfultails.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	if(mail("dreink95@gmail.com","Wunderful Tails Appointment Request",$message, $headers))
		header("Location: ../appointment-confirmation?status=success&customer=".$_POST["first-name"]);
	else{
		if( !isset($_POST["first-name"]) ){
			header("Location: ../appointment-confirmation?status=failure&error=mail");
		}
		else{
			header("Location: ../appointment-confirmation?status=failure&error=mail&customer=".$_POST["first-name"] );
		}
	}
}
?>