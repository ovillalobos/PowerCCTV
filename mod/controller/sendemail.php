<?php
date_default_timezone_set('America/Los_Angeles');
require_once('../../phpmailer/class.phpmailer.php');
require_once('../../phpmailer/PHPMailerAutoload.php');

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
	$mail->AddAttachment($emailAttachment);

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
$email 		= $_POST["in_Email"];
$subject 	= $_POST["in_Subj"];
$message	= $_POST["in_Mess"];

$in_Salu 	= $_POST["in_Salu"];
$in_Name 	= $_POST["in_Name"];
$in_Phone 	= $_POST["in_Phone"];
$in_Addr 	= $_POST["in_Addr"];
$in_City 	= $_POST["in_City"];
$in_Code 	= $_POST["in_Code"];

/***************************************************************************************************************************************************
EMAIL - CUSTOMER
****************************************************************************************************************************************************/
$emailSubject	= "Contact us (".$date."): ".$subject;
$emailFrom	 	= "info@powercctv.com";
$emailNameFrom	= "PowerCCTV";
$emailTo	 	= $email;
$emailNameTo 	= "CONTACT US";
$emailAttachment= "logo.png";
$emailBody 		= '
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
		<tr align="center" ><td><span style="color: #00AFEF; font-size: 25px;">Thank you for contact us, soon will be attended.</span></td></tr>
	</table><br/>
	<table width="100%" >
		<tr>
			<td width="30%" valign="middle" align="center" >
				<table width="100%" valign="middle" align="center" >
					<tr align="center" ><td><span style="color: #D13A58; font-size: 18px; font-weight: bold;">Sales</span></td></tr>
					<tr align="center" ><td><span style="color: #133766; font-size: 24px; font-weight: bold;">(323) 893-8224</span></td></tr>
					<tr align="center" ><td><span style="color: #00AFEF; font-size: 15px;">7 Days a Week <br/> 8:00am - 8:00pm EST</span></td></tr>
					<tr align="center" ><td><span style="color: #133766; font-size: 13px; ">For product related questions before you make a purchase, or to place an order over the phone.</span></td></tr>
				</table>
			</td>
			<td width="30%" valign="middle" align="center" >
				<table width="100%" valign="middle" align="center" >
					<tr align="center" ><td><span style="color: #D13A58; font-size: 18px; font-weight: bold;">Technical Support</span></td></tr>
					<tr align="center" ><td><span style="color: #133766; font-size: 24px; font-weight: bold;">(323) 893-8224</span></td></tr>
					<tr align="center" ><td><span style="color: #00AFEF; font-size: 15px;">Monday to Saturday <br/> 8:00am - 8:00pm EST</span></td></tr>
					<tr align="center" ><td><span style="color: #133766; font-size: 13px; ">Get help setting up, configuring or troubleshooting your Lorex by FLIR security product.</span></td></tr>
				</table>
			</td>
			<td width="30%" valign="middle" align="center" >
				<table width="100%" valign="middle" align="center" >
					<tr align="center" ><td><span style="color: #D13A58; font-size: 18px; font-weight: bold;">Customer Service</span></td></tr>
					<tr align="center" ><td><span style="color: #133766; font-size: 24px; font-weight: bold;">(323) 893-8224</span></td></tr>
					<tr align="center" ><td><span style="color: #00AFEF; font-size: 15px;">Monday to Saturday <br/> 8:00am - 8:00pm EST</span></td></tr>
					<tr align="center" ><td><span style="color: #133766; font-size: 13px; ">Inquire about your order, or return/exchange a Lorex by FLIR product.</span></td></tr>
				</table>
			</td>
		</tr>
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
/***************************************************************************************************************************************************
EMAIL - CUSTOMER
****************************************************************************************************************************************************/
if( $error == "OK" ){
	$emailSubject	= "Contact us (".$date."): ".$subject;
	$emailFrom	 	= "info@powercctv.com";
	$emailNameFrom	= "PowerCCTV";
	$emailTo	 	= "webdesign@powercctv.com";
	$emailNameTo 	= "CONTACT US";
	$emailAttachment= "logo.png";
	$emailBody 		= '
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
					<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/" >PowerCCTV</a>
				</td>
				<td width="90%" valign="bottom" align="right" >			
					<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/contact.php?page=location" >Services</a>
					<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/contact.php?page=location" >Contact</a>
				</td>
			</tr>
		</table><br/>
		<table width="100%" >
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Date</td><td>'.$date.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Salutation</td><td>'.$in_Salu.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Name</td><td>'.$in_Name.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Phone</td><td>'.$in_Phone.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Email</td><td>'.$email.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Address</td><td>'.$in_Addr.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >City & State</td><td>'.$in_City.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Zip Code</td><td>'.$in_Code.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Subject</td><td>'.$subject.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Message</td><td>'.$message.'</td></tr>
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

	$emailSubject	= "Contact us (".$date."): ".$subject;
	$emailFrom	 	= "info@powercctv.com";
	$emailNameFrom	= "PowerCCTV";
	$emailTo	 	= "edgar@powercctv.com";
	$emailNameTo 	= "CONTACT US";
	$emailAttachment= "logo.png";
	$emailBody 		= '
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
					<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/" >PowerCCTV</a>
				</td>
				<td width="90%" valign="bottom" align="right" >			
					<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/contact.php?page=location" >Services</a>
					<a style="color: #FFFFFF; text-decoration: none; margin-left: 10px;" target="_blank" href="http://www.powercctv.com/contact.php?page=location" >Contact</a>
				</td>
			</tr>
		</table><br/>
		<table width="100%" >
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Date</td><td>'.$date.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Salutation</td><td>'.$in_Salu.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Name</td><td>'.$in_Name.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Phone</td><td>'.$in_Phone.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Email</td><td>'.$email.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Address</td><td>'.$in_Addr.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >City & State</td><td>'.$in_City.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Zip Code</td><td>'.$in_Code.'</td></tr>
			<tr align="left" style="background-color: #EAEAEA;" ><td width="130px" >Subject</td><td>'.$subject.'</td></tr>
			<tr align="left" style="background-color: #FFFFFF;" ><td width="130px" >Message</td><td>'.$message.'</td></tr>
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
}

echo $error;
?>