<?php
$showPage = "no";
if( isset($_GET["pack"]) ){
	$showPage = "yes";
	
	switch( $_GET["pack"] ){	
	/*======== 	PCCLTD8304T-FTLTTV DVR 4CH */
		case "rec_1_1":
			$hdStorage 		= 1; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 4; 	$resolution = "1080";
			$numPack   		= "1"; 	$model		= "PCCLTD8304T-FTLTTV";
			$shortTitle		= "Digital Video Recorder DVR 4CH";
			$describe  		= "Platinum Advanced Level 4 Channel HD-TVI DVR - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>		
				<li>4 Channel Digital Video Recorder</li>
				<li>Analog & HD-TVI Video In: 4CH</li>
				<li>IPC Input: 1CH 1080P@30fps</li>
				<li>Video Output: VGA/HDMI up to 1080P</li>
				<li>Playback Channel: 4CH</li>
				<li>Audio In/Out: 1CH/1CH, RCA</li>
				<li>Network: 10/100M</li>
				<li>Storage: 1 SATA up to 8TB</li>
				<li>USB: 2 USB 2.0</li>
				<li>PTZ: 1 RS485</li>
				<li>Support POS #: 1</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCLTD8308T-FTLTTV DVR 8CH */
		case "rec_2_1":
			$hdStorage 		= 2; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 8; 	$resolution = "1080";
			$numPack   		= "2"; 	$model		= "PCCLTD8308T-FTLTTV";
			$shortTitle		= "Digital Video Recorder DVR 8CH";
			$describe  		= "Platinum Advanced Level 8 Channel HD-TVI DVR - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>		
				<li>8 Channel Digital Video Recorder</li>
				<li>Analog & HD-TVI Video In: 8CH</li>
				<li>IPC Input: 2CH 1080P@30fps</li>
				<li>Video Output: VGA/HDMI up to 1080P</li>
				<li>Playback Channel: 8CH</li>
				<li>Audio In/Out: 1CH/1CH, RCA</li>
				<li>Network: 10/100M</li>
				<li>Storage: 1 SATA up to 8TB</li>
				<li>USB: 2 USB 2.0</li>
				<li>PTZ: 1 RS485</li>
				<li>Support POS #: 1</li>
			</ul>
			";			
			$docsPDF		= '
			
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== 	PCCLTD8316T-FTLTTV DVR 16CH */
		case "rec_3_1":
			$hdStorage 		= 4; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 16; 	$resolution = "1080";
			$numPack   		= "3"; 	$model		= "PCCLTD8316T-FTLTTV";
			$shortTitle		= "Digital Video Recorder DVR 16CH";
			$describe  		= "Platinum Advanced Level 16 Channel HD-TVI DVR - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>		
				<li>16 Channel Digital Video Recorder</li>
				<li>Analog & HD-TVI Video In: 16CH</li>
				<li>IPC Input: 2CH 1080P@30fps</li>
				<li>Video Output: VGA/HDMI up to 1080P</li>
				<li>Playback Channel: 4CH</li>
				<li>Audio In/Out: 1CH/1CH, RCA</li>
				<li>Network: 10/100M</li>
				<li>Storage: 2 SATA up to 12TB</li>
				<li>USB: 2 USB 2.0</li>
				<li>PTZ: 1 RS485</li>
				<li>Support POS #: 1</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== 	PCCLTD8432T-FALTTV DVR 32CH 1U */
		case "rec_4_1":
			$hdStorage 		= 4; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 32; 	$resolution = "1080";
			$numPack   		= "4"; 	$model		= "PCCLTD8432T-FALTTV";
			$shortTitle		= "Digital Video Recorder DVR 32CH";
			$describe  		= "Platinum Advanced Level 32 Channel HD-TVI DVR 1U - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>		
				<li>32 Channel Tri-brid Digital Video Recorder</li>
				<li>Analog & HD-TVI Video In: 32CH</li>
				<li>IPC Input: Up to 8CH 1080P@30fps</li>
				<li>Video Output: VGA/HDMI up to 1080P</li>
				<li>Playback Channel: 32CH</li>
				<li>Audio In/Out: 4CH/1CH, RCA</li>
				<li>Alarm In/Out: 16/4</li>
				<li>Network: 10/100/1000M</li>
				<li>Storage: 4 SATA up to 32TB</li>
				<li>eSATA: 1</li>
				<li>USB: 3 USB 2.0</li>
				<li>PTZ: 1 RS485</li>
				<li>Support POS #: 8</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== 	PCCLTD9232T-FALTTV DVR 32CH 2U */
		case "rec_5_1":
			$hdStorage 		= 4; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 32; 	$resolution = "1080";
			$numPack   		= "5"; 	$model		= "PCCLTD9232T-FALTTV";
			$shortTitle		= "Digital Video Recorder DVR 32CH";
			$describe  		= "Platinum Advanced Level 32 Channel HD-TVI DVR 2U - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>					
				<li>32 Channel Digital Video Recorder</li>
				<li>Analog & HD-TVI Video In: 32CH</li>
				<li>IPC Input: 16CH 1080P@30fps</li>
				<li>Video Output: 1 VGA, 2 HDMI up to 1080P</li>
				<li>Playback Channel: 32CH</li>
				<li>Audio In/Out: 16CH/1CH, RCA</li>
				<li>Alarm In/Out: 16/8</li>
				<li>Network: 10/100/1000M, 2x RJ45</li>
				<li>Storage: 8 SATA up to 64TB</li>
				<li>eSATA: 1</li>
				<li>USB: 3 USB 2.0</li>
				<li>PTZ: 1 RS485</li>
				<li>Support POS #: 16</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== 	PCCLTD9232T-FALTTV DVR 32CH 2U */
		case "rec_6_1":
			$hdStorage 		= 1; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 4; 	$resolution = "4000";
			$numPack   		= "6"; 	$model		= "PWDS-7204HUHI-F1NKO";
			$shortTitle		= "Digital Video Recorder DVR 4CH";
			$describe  		= "HD-TVI 4CH TURBO 4K DVR - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>									
				<li>H.264 ,H.264+& Dual-stream video compression</li>
				<li>Support  HD-TVI, IPC,AHD and analog cameras with adaptive access</li>
				<li>Support Cloud storage(One Drive, Google Drive or Drop Box)</li>
				<li>HDMI and VGA output at up to 1920×1080P resolution, HDMI output at up to 4K(3840×2160) resolution for DS-7208HUHI-F1/N</li>
				<li>Long transmission distance over coax cable</li>
				<li>Up  to 4-ch synchronous playback at 1080p resolution</li>
				<li>Playback at up to 256X speed.</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;	
	/*======== 	PCCLTD9232T-FALTTV DVR 32CH 2U */
		case "rec_7_1":
			$hdStorage 		= 2; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 8; 	$resolution = "4000";
			$numPack   		= "7"; 	$model		= "PWDS-7208HUHI-F1NKO";
			$shortTitle		= "Digital Video Recorder DVR 8CH";
			$describe  		= "HD-TVI 8CH TURBO 4K DVR - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>									
				<li>H.264 ,H.264+& Dual-stream video compression</li>
				<li>Support  HD-TVI, IPC,AHD and analog cameras with adaptive access</li>
				<li>Support Cloud storage(One Drive, Google Drive or Drop Box)</li>
				<li>HDMI and VGA output at up to 1920×1080P resolution, HDMI output at up to 4K(3840×2160) resolution for DS-7208HUHI-F1/N</li>
				<li>Long transmission distance over coax cable</li>
				<li>Up  to 8-ch synchronous playback at 1080p resolution</li>
				<li>Playback at up to 256X speed.</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;	
	/*======== 	PCCLTD9232T-FALTTV DVR 32CH 2U */
		case "rec_8_1":
			$hdStorage 		= 5; 	$totalIm 	= 2;		$typeRecor = "dvr";
			$channels  		= 16; 	$resolution = "4000";
			$numPack   		= "8"; 	$model		= "PWDS-7216HUHI-F1NKO";
			$shortTitle		= "Digital Video Recorder DVR 16CH";
			$describe  		= "HD-TVI 16CH TURBO 4K DVR - Compact Case";
			$imgProduct 	= "rec_".$numPack.".1.png";  
			$titleProd 		= $describe;		
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$title			= $model." - ".$describe;
			$detail			= "
			<ul>									
				<li>H.264 ,H.264+& Dual-stream video compression</li>
				<li>Support  HD-TVI, IPC,AHD and analog cameras with adaptive access</li>
				<li>Support Cloud storage(One Drive, Google Drive or Drop Box)</li>
				<li>4K (3840×2160)/30Hz, 2K (2560×1440)/60Hz</li>
				<li>Long transmission distance over coax cable</li>
				<li>Up  to 16-ch synchronous playback at 1080p resolution</li>
				<li>Playback at up to 256X speed.</li>
			</ul>
			";			
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$title.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;	
	/* DEFAULT
	======================================================================================================= */
		default:
			$showPage = "no";
		break;
	}
} 
if( $showPage != "no" ){	
	/******* Facebook Developers */
	$fa_title		= $shortTitle;
	$fa_desc 		= $describe;
	$fa_images		= "http://powercctv.com/images/depro/".$typeRecor."/bg/cam_".$numPack.".1.png";
}
?>