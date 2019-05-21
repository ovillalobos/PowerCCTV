<?php    
/************************************************************************************************
MOD: GOOGLE RECAPTCHA
*************************************************************************************************/
$captcha = "";

if(isset($_POST["g-recaptcha-response"])) {
	$captcha = $_POST["g-recaptcha-response"];
}
	
if(!$captcha) {
	echo "error";
} else {
	/* THIS SECRET KEY YOU COULD BE GET ON THE WEBSITE OF GOOGLE */
	$secret = "6LeZeiATAAAAAEu9xKMnitatuedvQi1cV6WJHWmh";
	$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

	if($response["success"] != false) {
		@mail($email_to, $subject, $finalMsg);
		echo "ok";
	} else {
		echo "error";
	}
}
?>