$(document).ready(function(){

/* CLICK
**********************************************************************************************************/
$("#bo_Subm").click( function (){ sendEmail(); });
$("#bo_Clea").click( function (){ clearForm(); });
$("#closeModal").click( function (){ $("#myModal").modal('hide'); });

/* FUNCTION
**********************************************************************************************************/
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