$(document).ready(function(){

/* CLICK
**********************************************************************************************************/
//$("#bo_Subm").click( function (){ sendEmail(); });
//$("#bo_Clea").click( function (){ clearForm(); });
//$("#closeModal").click( function (){ $("#myModal").modal('hide'); });
$(".openModalMenu").click( function () { openMenu($(this).attr("id")); });

/* FUNCTION
**********************************************************************************************************/
function openMenu(product){
	var urlData 	= "mod/prod_detail/detail_menu.php";
	var titleWindow = "";

	$.ajax({
		url: 	urlData,
		type: 	"POST",
		data: 	"product="+product,
		success:function(request) {
			btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
			
			switch(product){
				/***** PACKAGES
				***************************************************************************************************************************/
				case "tviIRTurrent": 					titleWindow = "Packages Mini Eyeball Smart IR"; 						break;
				case "ltsTVITurrent": 					titleWindow = "Packages Eyeball IR 1080P"; 								break;				
				case "tviTurboTurrent": 				titleWindow = "Packages Turret Turbo Full HD EXIR 1080P"; 				break;				
				case "ltsTVIVFDome":					titleWindow = "Packages Dome Motorized VProof MIR 1080P"; 				break;
				case "tviVandalProof": 					titleWindow = "Packages Dome Vari-focal VProof IR 1080P"; 				break;
				case "ltsTVIDomeVandal":				titleWindow = "Packages Dome Anti-IR Reflection VProof 1080P"; 			break;
				case "ltsTVILensBu":					titleWindow = "Packages Mini Bullet Fixed Lens 1080P"; 					break;
				case "ltsIPTurrent": 					titleWindow = "Packages 2MP Turret IP 1080P";							break;
				case "PWCube_WIFI_3MP_IR_33ft": 		titleWindow = "Packages 3MP IP PWCube IR WIFI";							break;								
				case "ipExirTurrent": 					titleWindow = "Packages 4MP Turret WDR EXIR IP 2688P"; 					break;
				case "ipFixedDome": 					titleWindow = "Packages 4MP Dome WDR Fixed VProof IP 2688P"; 			break;
				case "ipVarifocal": 					titleWindow = "Packages 4MP Dome WDR Vari-focal VProof IP 2688P";		break;
				case "PWTurrent_IP_5MP_EXIR_100ft": 	titleWindow = "Packages 5MP IP PWTurrent EXIR-WDR";						break;
				case "PWDome_Mini_IP_5MP_IR_30ft": 		titleWindow = "Packages 5MP IP Mini PWDome IR";							break;
				case "PWDome_IP_5MP_EXIR_100ft": 		titleWindow = "Packages 5MP IP PWDome EXIR-WDR";						break;
				case "PWBullet_IP_5MP_CMOSIR_100ft": 	titleWindow = "Packages 5MP IP PWBullet CMOS-IR-WDR";					break;
				case "PWBullet_IP_5MP_VARIFOCUS_100ft":	titleWindow = "Packages 5MP IP PWTurrent VARI-FOCUS-WDR";				break;
				case "PWBullet_IP_5MP_EXIR_100ft": 		titleWindow = "Packages 5MP IP PWTurrent EXIR-WDR";						break;
				case "PWDome_WIFI_5MP_IR_30ft": 		titleWindow = "Packages 5MP IP Mini PWDome IR WIFI";					break;
				case "PWBullet_IP_8MP_4K_100ft": 		titleWindow = "Packages 4K IP PWBullet SMART";							break;
				/***** CAMERAS - PRODUCTS
				***************************************************************************************************************************/
				case "recDVR": 			titleWindow = "HD-TVI Digital Video Recorder DVR";						break;
				case "ipDomes": 		titleWindow = "IP Domes Security Cameras 4MP";							break;
				case "ipDomes7mp": 		titleWindow = "IP Domes Security Cameras 7MP";							break;
				case "ipTurrents": 		titleWindow = "IP Turrents Security Cameras 4MP";						break;
				case "ipFisheyes3mp": 	titleWindow = "IP Fisheyes Security Cameras 3MP";						break;
				case "ipFisheyes6mp": 	titleWindow = "IP Fisheyes Security Cameras 6MP";						break;
				case "ipFisheyes12mp": 	titleWindow = "IP Fisheyes Security Cameras 12MP";						break;
				case "ipPtzs": 			titleWindow = "IP PTZs Security Cameras 2.1MP";							break;
				case "ipPinhole": 		titleWindow = "IP WDR Pinhole Covert Network 2.1MP";					break;
				case "tviLicense": 		titleWindow = "HD-TVI License Plate Security Cameras 1.3MP";			break;				
				case "tviBullets2mp": 	titleWindow = "HD-TVI Bullets Security Cameras 2MP";					break;
				case "tviBullets3mp": 	titleWindow = "HD-TVI Bullets Security Cameras 3MP";					break;
				case "tviDomes2mp": 	titleWindow = "HD-TVI Domes Security Cameras 2MP";						break;
				case "tviDomes3mp": 	titleWindow = "HD-TVI Domes Security Cameras 3MP";						break;
				case "tviTurrens2mp": 	titleWindow = "HD-TVI Turrents Security Cameras 2MP";					break;
				case "tviTurrens3mp": 	titleWindow = "HD-TVI Turrents Security Cameras 3MP";					break;
				case "tviTurrens3mp": 	titleWindow = "HD-TVI Turrents Security Cameras 3MP";					break;
				case "tviPtzs": 		titleWindow = "HD-TVI PTZs Security Cameras 2.1MP";						break;
				case "recNVR": 			titleWindow = "IP Network Video Recorder (NVR)";						break;
				
				default:				titleWindow = $("."+product).val();										break;
			}
			
			$("#myModalLabel").html(titleWindow);
			$(".modal-body").html(request);
			$(".modal-footer").html(btn);
			$(".modalMenu").modal();
		},
		error:function() { 
			msg = 'Error (E003) to open the complete menu.';
			btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
			$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
			$(".modal-footer").html(btn);
			$(".modalMenu").modal();
		}
	});
}

function clearForm(){
	$(".form-control").val("");
	grecaptcha.reset();
}

function sendEmail(){
	var request		= "";
	var	msg			= "";
	var btn			= "";
	var urlGoogle 	= "mod/controller/googleRecaptcha.php";	
	var in_RecaResp = $("#g-recaptcha-response").val();

	$(".form-group").removeClass("has-error");
	
	if( in_RecaResp != "" ){
		$.ajax({
			url: 	urlGoogle,
			type: 	"POST",
			data: 	"g-recaptcha-response="+in_RecaResp,
			success:function(request) {
				if( request == "ok" ){
					var urlCon		= "mod/controller/sendemail.php";
					var continuar	= "si";
					var errorNo		= "0";
					var in_Salu		= $("#in_Salu option:selected").val();
					var in_Name		= encodeURIComponent($("#in_Name").val());
					var in_Phone	= encodeURIComponent($("#in_Phone").val());
					var in_Email	= encodeURIComponent($("#in_Email").val());
					var in_Addr		= encodeURIComponent($("#in_Addr").val());
					var in_City		= encodeURIComponent($("#in_City").val());
					var in_Code		= encodeURIComponent($("#in_Code").val());
					var in_Subj		= encodeURIComponent($("#in_Subj").val());
					var in_Mess		= encodeURIComponent($("#in_Mess").val());

					if( in_Name == "" )		{ continuar = "no"; $(".in_Name").addClass("has-error"); }
					if( in_Phone == "" )	{ continuar = "no"; $(".in_Phone").addClass("has-error"); }
					if( in_Email == "" )	{ continuar = "no"; $(".in_Email").addClass("has-error"); }
					if( in_Addr == "" )		{ continuar = "no"; $(".in_Addr").addClass("has-error"); }
					if( in_City == "" )		{ continuar = "no"; $(".in_City").addClass("has-error"); }
					if( in_Code == "" )		{ continuar = "no"; $(".in_Code").addClass("has-error"); }
					if( in_Subj == "" )		{ continuar = "no"; $(".in_Subj").addClass("has-error"); }
					if( in_Mess == "" )		{ continuar = "no"; $(".in_Mess").addClass("has-error"); }
					
					if( continuar == "si" ){
						$.ajax({
							url: 	urlCon,
							type: 	"POST",
							data: 	"in_Salu="+in_Salu+
									"&in_Name="+in_Name+
									"&in_Phone="+in_Phone+
									"&in_Email="+in_Email+
									"&in_Addr="+in_Addr+
									"&in_City="+in_City+
									"&in_Code="+in_Code+
									"&in_Subj="+in_Subj+
									"&in_Mess="+in_Mess,
							success:function(request) {
								if( request == "OK" ){
									msg = 'Thank you for contact us, soon will be attended.';
									btn = '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>';
									$(".modal-body").html(msg);
									$(".modal-footer").html(btn);
									$(".modalMSG").modal();
									
									clearForm();
								} else {
									msg = 'Error (E004) to send the email, please try again.';
									btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
									$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
									$(".modal-footer").html(btn);
									$(".modalMSG").modal();
								}
							},
							error:function() {
								msg = 'Error (E001) to send the email, please try again.';
								btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
								$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
								$(".modal-footer").html(btn);
								$(".modalMSG").modal();
							}
						});
					} else {
						msg = 'Please, complete all fields missing before to send the email.';
						btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
						$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
						$(".modal-footer").html(btn);
						$(".modalMSG").modal();
						grecaptcha.reset();
					}					
				} else {
					msg = 'Error (E002) to send the email, please try again.';
					btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
					$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
					$(".modal-footer").html(btn);
					$(".modalMSG").modal();
				}
			},
			error:function() { 
				msg = 'Error (E003) to send the email, please try again.';
				btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
				$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
				$(".modal-footer").html(btn);
				$(".modalMSG").modal();
			}
		});
	} else {
		msg = 'Please check the verification reCaptcha before to send information.';
		btn = '<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>';
		$(".modal-body").html('<div class="txtRed">'+msg+'</div>');
		$(".modal-footer").html(btn);
		$(".modalMSG").modal();
	}
}

});