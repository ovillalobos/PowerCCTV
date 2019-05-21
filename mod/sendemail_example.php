<?php
date_default_timezone_set('America/Los_Angeles');
require_once('../phpmailer/class.phpmailer.php');
require_once('../phpmailer/PHPMailerAutoload.php');

function sendEmail($emailSubject, $emailFrom, $emailNameFrom, $emailTo, $emailNameTo, $emailBody, $emailAttachment){
	$request = "";
	
	$mail = new PHPMailer();
	// CONECTION SMTP	
	$mail->IsHTML(true);
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->CharSet = 'utf-8';
	$mail->Host = "smtpout.secureserver.net:80";
	$mail->SMTPAuth = true;  
	$mail->Username = "webdesign@skysecuritycenter.com";
	$mail->Password = "P455w0rd#123";
	$mail->port = 80;
	// SET DATA INFO TO SEND EMAIL	
	$mail->SetFrom($emailFrom, $emailNameFrom);
	$mail->AddAddress($emailTo, $emailNameTo);
	$mail->addReplyTo($emailTo);
	// SET EMAIL BODY
	$mail->Subject    = $emailSubject;
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($emailBody);
	// ATTACHMENT
	//$mail->AddAttachment($emailAttachment);

	if(!$mail->Send()) {
	  //$request = "ERROR".$mail->ErrorInfo;//." email-".$address."|".$_POST["con_name"]."|".$_POST["con_emai"]."|".$_POST["con_subj"]."|".$_POST["message"];
	  $request = "ERROR";
	} else {
	  $request = "OK";
	}

	return $request;
}

$date  		= date("F/d/Y - H:i:s");
$error 		= "OK";
$email 		= "weeken_04mx@hotmail.com";
$firstname 	= "Omar Villalobos";

/***************************************************************************************************************************************************
EMAIL - CUSTOMER
****************************************************************************************************************************************************/
$emailSubject	= "INFO: Grover";
$emailFrom	 	= "eteam@groverproducts.com";
$emailNameFrom	= "Contact US - Grover";
$emailTo	 	= $email;
$emailNameTo 	= $firstname;
$emailAttachment= "email/ba_powercctv.png";
$emailBody = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PowerCCTV</title>
</head>
<body style="font-family: Century Gothic, Calibri, Arial; background-color: #F7F7F7;" >
<div style="border-right: 3px solid #C6C6C6;
	border-bottom: 3px solid #C6C6C6;
	border-left: 3px solid #EAEAEA;
	border-top: 3px solid #EAEAEA;
	width: 100%; max-width: 800px; min-width: 500px;
	background-color: #FFFFFF;
	padding: 10px;
	margin: 10px auto;
	display: block;" >
	<table style="background-color: #0D3D73; padding: 8px;" width="100%" >
		<tr>
			<td width="10%" valign="middle" align="left" >
				<a href="http://www.powercctv.com/" target="_blank" ><img src="http://powercctv.com/images/email/logo.png" width="100%" ></a>
			</td>
			<td width="90%" valign="bottom" align="right" >			
				<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/contact.php?page=location" >Services</a>
				<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/contact.php?page=location" >Contact</a>
			</td>
		</tr>
	</table><br/>
	<img src="http://powercctv.com/images/email/ba_powercctv.png" width="100%" ><br/><br/>
	<table width="100%" >
		<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Salutation</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Name</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Phone</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Email</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Address</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >City & State</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Zip Code</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Subject</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Message</td><td>Mr</td></tr>
		<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Salutation</td><td>Mr</td></tr>
	</table><br/>
	<table style="background-color: #373737; padding: 8px;" width="100%" >
		<tr>
			<td width="100%" valign="middle" align="center" >			
				<span style="color: #FFFFFF; font-size: 14px;" >Copyright © 2016 PowerCCTV Corp.</span>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
';

$error = sendEmail($emailSubject, $emailFrom, $emailNameFrom, $emailTo, $emailNameTo, $emailBody, $emailAttachment);

if( $error == "OK" ){	


$error = sendEmail($emailSubject, $emailFrom, $emailNameFrom, $emailTo, $emailNameTo, $emailBody, $emailAttachment);
}

echo $error;
?>