<?php
$showPage = "no";
if( isset($_GET["pack"]) ){
	$showPage = "yes";
	
	switch( $_GET["pack"] ){
/* ====================================================================================================
PPDS-2CE56D1T-IRM HIKVISION IR TURRENT CAMERA
======================================================================================================= */
		case "irTurrent4":
		case "irTurrent8":
		case "irTurrent16":
			/* General
			**************************************************************************************/
			$numPackGen = "1";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PPDS-2CE56D1T-IRM";
			$modelRec	= "CC-DS7204TV";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "irTurrent4"  ){
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "1";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "irTurrent8"  ){ 
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "2";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "irTurrent16" ){ 
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "3";	 $channel = "16";	$hdStorage		= "4";
			}
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Hikvision & Turbo HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." Hikvision IR Turret Camera 1080p & Turbo HD TVI DVR";
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= "Hikvision IR Turret Camera 1080p";
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." Hikvision IR Turret Camera 1080p & Turbo HD TVI DVR";			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Hikvision Turbo HD TVI DVR";
			$detailRecord	= "		
			<ul>
				<li>H.264 & Dual-stream video compression</li>
				<li>Support both HD-TVI and analog cameras with adaptive access</li>
				<li>Full channel@720P resolution real-time recording</li>
				<li>HDMI and VGA output at up to 1920×1080P resolution</li>
				<li>Long transmission distance over coax cable</li>
				<li>Support up to 16-ch synchronous playback at 1080P resolution</li>
			</ul>
			";
			$titleCamera	= $modelCam." Hikvision IR Turret Camera ";
			$detailCamera	= "
			<ul>
				<li>HD1080P Video Output</li>
				<li>Adopt HDTVI Technology</li>
				<li>True Day/Night, Smart IR</li>
				<li>20m IR distance</li>
				<li>IP66 weatherproof</li>
				<li>OSD menu controlled via UTC</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
DS-2CE56D5T-AVPIR3 HIKVISION VANDAL PROOF
======================================================================================================= */
		case "vandalPro4":
		case "vandalPro8":
		case "vandalPro16":
			/* General
			**************************************************************************************/
			$numPackGen = "4";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PPDS-2CE56D5T-AVPIR3";
			$modelRec	= "CC-DS7204TV";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "vandalPro4"  ){
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "4";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "vandalPro8"  ){ 
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "5";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "vandalPro16" ){ 
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "6";	 $channel = "16";	$hdStorage		= "4";
			}
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Hikvision & Turbo HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." Hikvision HD-TVI Vandal Proof IR Dome Camera 1080p & Turbo HD TVI DVR";
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= "Hikvision HD-TVI Vandal Proof IR Dome Camera 1080p";
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." Hikvision HD-TVI Vandal Proof IR Dome Camera 1080p & Turbo HD TVI DVR";			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Hikvision Turbo HD TVI DVR";
			$detailRecord	= "		
			<ul>
				<li>H.264 & Dual-stream video compression</li>
				<li>Support both HD-TVI and analog cameras with adaptive access</li>
				<li>Full channel@720P resolution real-time recording</li>
				<li>HDMI and VGA output at up to 1920×1080P resolution</li>
				<li>Long transmission distance over coax cable</li>
				<li>Support up to 16-ch synchronous playback at 1080P resolution</li>
			</ul>
			";
			$titleCamera	= $modelCam." Hikvision IR Turret Camera ";
			$detailCamera	= "
			<ul>				
				<li>HD1080P VIDEO OUTPUT</li>
				<li>ADOPT HDTVI TECHNOLOGY</li>
				<li>TRUE DAY/NIGHT</li>
				<li>2.8 – 12MM VARI-FOCAL LENS</li>
				<li>OSD MENU, 3D DNR, SMART IR</li>
				<li>UP TO 65FT IR DISTANCE</li>
				<li>IP66 WEATHERPROOF & VANDAL PROOF</li>
				<li>UP THE COAX(VIA COAXIAL CABLE)</li>
				<li>120 DB WIDE DYNAMIC RANGE</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
DS-2CE56D5T-IT1 HIKVISION FULL HD EXIR TURRENT CAMERA
======================================================================================================= */
		case "fullHD4":
		case "fullHD8":
		case "fullHD16":
			/* General
			**************************************************************************************/
			$numPackGen = "7";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PPDS-2CE56D5T-IT1";
			$modelRec	= "CC-DS7204TV";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "fullHD4"  ){
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "7";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "fullHD8"  ){ 
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "8";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "fullHD16" ){ 
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "9";	 $channel = "16";	$hdStorage		= "4";
			}
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Hikvision & Turbo HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." Hikvision Turbo Full HD EXIR Turret Camera 1080p & Turbo HD TVI DVR";
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= "Hikvision Turbo Full HD EXIR Turret Camera";
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." Hikvision Turbo Full HD EXIR Turret Camera 1080p & Turbo HD TVI DVR";			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Hikvision Turbo HD TVI DVR";
			$detailRecord	= "		
			<ul>
				<li>H.264 & Dual-stream video compression</li>
				<li>Support both HD-TVI and analog cameras with adaptive access</li>
				<li>Full channel@720P resolution real-time recording</li>
				<li>HDMI and VGA output at up to 1920×1080P resolution</li>
				<li>Long transmission distance over coax cable</li>
				<li>Support up to 16-ch synchronous playback at 1080P resolution</li>
			</ul>
			";
			$titleCamera	= $modelCam." Hikvision Turbo Full HD EXIR Turret Camera";
			$detailCamera	= "
			<ul>								
				<li>Full HD1080P video output</li>
				<li>Adopt HDTVI Technology</li>
				<li>True WDR, up to 120dB</li>
				<li>True Day/Night</li>
				<li>OSD menu, 3D DNR, Smart IR</li>
				<li>EXIR technology, 20/40m IR distance</li>
				<li>IP66 weatherproof</li>
				<li>Up the Coax(via coaxial cable)</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
PPCCMHT2122-28LT LTSECURITY TURRENT CAMERA
======================================================================================================= */
		case "ltsTVITurrent4":
		case "ltsTVITurrent8":
		case "ltsTVITurrent16":
			/* General
			**************************************************************************************/
			$numPackGen = "25";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PPCCMHT2122-28LT";
			$modelRec	= "CC-LTD8304T-FTLT";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ltsTVITurrent4"  ){
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "25";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ltsTVITurrent8"  ){ 
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "26";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ltsTVITurrent16" ){ 
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "27";	 $channel = "16";	$hdStorage		= "4";
			}
			
			$describeCam = "HDTVI Turret Camera 2.1 Megapixel 1080p";
			$describeRec = "Embedded Plug & Play HD TVI DVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." HD TVI Cameras & HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "ltsTVITurrent4"  ){
				$detailRecord	= "		
				<ul>				
					<li>4 Channel Digital Video Recorder</li>
					<li>Analog & HD-TVI Video In: 4CH</li>
					<li>IPC Input: 1CH 1080P@30fps</li>
					<li>Video Output: VGA/HDMI up to 1080P</li>
					<li>Playback Channel: 4CH</li>
					<li>Audio In/Out: 1CH/1CH, RCA</li>
					<li>Network: 10/100M</li>
					<li>Storage: 1 SATA up to 6TB</li>
					<li>USB: 2 USB 2.0</li>
					<li>PTZ: 1 RS485</li>
					<li>Support POS #: 1</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ltsTVITurrent8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8 Channel Digital Video Recorder</li>
					<li>Analog & HD-TVI Video In: 8CH</li>
					<li>IPC Input: 2CH 1080P@30fps</li>
					<li>Video Output: VGA/HDMI up to 1080P</li>
					<li>Playback Channel: 8CH</li>
					<li>Audio In/Out: 1CH/1CH, RCA</li>
					<li>Network: 10/100M</li>
					<li>Storage: 1 SATA up to 6TB</li>
					<li>USB: 2 USB 2.0</li>
					<li>PTZ: 1 RS485</li>
					<li>Support POS #: 4</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ltsTVITurrent16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16 Channel Digital Video Recorder</li>
					<li>Analog & HD-TVI Video In: 16CH</li>
					<li>IPC Input: 2CH 1080P@30fps</li>
					<li>Video Output: VGA/HDMI up to 1080P</li>
					<li>Playback Channel: 16CH</li>
					<li>Audio In/Out: 1CH/1CH, RCA</li>
					<li>Network: 10/100M</li>
					<li>Storage: 2 SATA up to 12TB</li>
					<li>USB: 2 USB 2.0</li>
					<li>PTZ: 1 RS485</li>
					<li>Support POS #:</li>
				</ul>
				";
			}
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>2.1MP High Definition</li>
				<li>Full HD 1080P</li>
				<li>1920X1080P@30fps</li>
				<li>2.8mm Fixed Lens</li>
				<li>24 IR LEDs up to 65ft</li>
				<li>Outdoor/Indoor</li>
				<li>DC 12V</li>
				<li>IP66</li>
				<li>UTC</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
PCCTVI-2542VUNTV LTSECURITY VANDAL PROOF DOME
======================================================================================================= */
		case "ltsTVIDomeVandal4":
		case "ltsTVIDomeVandal8":
		case "ltsTVIDomeVandal16":
			/* General
			**************************************************************************************/
			$numPackGen = "22";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PCCTVI-2542VUNTV";
			$modelRec	= "";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ltsTVIDomeVandal4"  ){
				$modelRec	= "	PCCLTD8304T-FTLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "22";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ltsTVIDomeVandal8"  ){ 
				$modelRec	= "	PCCLTD8308T-FTLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "23";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ltsTVIDomeVandal16" ){ 
				$modelRec	= "	PCCLTD8316T-FTLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "24";	 $channel = "16";	$hdStorage		= "4";
			}
			
			$describeCam = "HDTVI Vandal Proof Dome Camera 2.1 Megapixel 1080p";
			$describeRec = "Embedded Plug & Play HD TVI DVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." HD TVI Cameras & HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "ltsTVIDomeVandal4"  ){
				$detailRecord	= "		
				<ul>				
					<li>4 Channel Digital Video Recorder</li>
					<li>Analog & HD-TVI Video In: 4CH</li>
					<li>IPC Input: 1CH 1080P@30fps</li>
					<li>Video Output: VGA/HDMI up to 1080P</li>
					<li>Playback Channel: 4CH</li>
					<li>Audio In/Out: 1CH/1CH, RCA</li>
					<li>Network: 10/100M</li>
					<li>Storage: 1 SATA up to 6TB</li>
					<li>USB: 2 USB 2.0</li>
					<li>PTZ: 1 RS485</li>
					<li>Support POS #: 1</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ltsTVIDomeVandal8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8 Channel Digital Video Recorder</li>
					<li>Analog & HD-TVI Video In: 8CH</li>
					<li>IPC Input: 2CH 1080P@30fps</li>
					<li>Video Output: VGA/HDMI up to 1080P</li>
					<li>Playback Channel: 8CH</li>
					<li>Audio In/Out: 1CH/1CH, RCA</li>
					<li>Network: 10/100M</li>
					<li>Storage: 1 SATA up to 6TB</li>
					<li>USB: 2 USB 2.0</li>
					<li>PTZ: 1 RS485</li>
					<li>Support POS #: 4</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ltsTVIDomeVandal16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16 Channel Digital Video Recorder</li>
					<li>Analog & HD-TVI Video In: 16CH</li>
					<li>IPC Input: 2CH 1080P@30fps</li>
					<li>Video Output: VGA/HDMI up to 1080P</li>
					<li>Playback Channel: 16CH</li>
					<li>Audio In/Out: 1CH/1CH, RCA</li>
					<li>Network: 10/100M</li>
					<li>Storage: 2 SATA up to 12TB</li>
					<li>USB: 2 USB 2.0</li>
					<li>PTZ: 1 RS485</li>
					<li>Support POS #:</li>
				</ul>
				";
			}
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>HD-TVI - High Definition Transport Video Interface 1080p FULL HD Flawless Video</li>
				<li>1/2.9” Sony CMOS</li>
				<li>2.8~12mm Auto-Iris Vari-Focal Lens</li>
				<li>0 Lux at IR On (High Power LED 4pcs)</li>
				<li>Upgraded Waterproof Housing (IP68 Rating)</li>
				<li>Smart IR / DNR (Digital Noise Reduction) / True Day & Night (ICR)</li>
				<li>RS-485 Option</li>
				<li>Easy Installation</li>
				<li>DC 12V
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
>>>> NETWORK
======================================================================================================= */
/* ====================================================================================================
DS-2CD2342WD-I HIKVISION 4MP WDR EXIR Turret Network
======================================================================================================= */
		case "ipExirTurren4":
		case "ipExirTurren8":
		case "ipExirTurren16":
			/* General
			**************************************************************************************/
			$numPackGen = "10";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PPDS-2CD2342WD-I";
			$modelRec	= "";			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ipExirTurren4"  ){
				$modelRec	= "CCDS-7608NI-I2/8P";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "10";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ipExirTurren8"  ){ 
				$modelRec	= "CCDS-7608NI-I2/8P";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "11";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ipExirTurren16" ){ 
				$modelRec	= "CCDS-7716NI-I4/16P";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "12";	 $channel = "16";	$hdStorage		= "4";
			}
			
			$describeCam = "4MP WDR EXIR Turret Network Camera";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras Hikvision & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." Hikvision ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "4.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." Hikvision ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Hikvision ".$describeRec;
			if( $_GET["pack"] == "ipExirTurren4"  ){
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>8ch network cameras can be connected with</li>
					<li>80M/160M incoming bandwidth</li>
					<li>Up to 2 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ipExirTurren8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>8ch network cameras can be connected with</li>
					<li>80M/160M incoming bandwidth</li>
					<li>Up to 2 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ipExirTurren16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>16ch network cameras can be connected with 160M/256M incoming bandwidth</li>
					<li>Up to 4 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." Hikvision ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>Up to 4 megapixel high resolution</li>
				<li>Full HD1080p video</li>
				<li>Dual video streams</li>
				<li>2.8mm/4.0mm fixed lens</li>
				<li>120dB Wide Dynamic Range</li>
				<li>3D Digital Noise Reduction</li>
				<li>Backlight Compensation</li>
				<li>DC12V & PoE</li>
				<li>Support H.264+</li>
				<li>High performance EXIR LED</li>
				<li>Up to 130 FT IR range</li>
				<li>IP66 weather-proof protection</li>
				<li>3-axis adjustment</li>
				<li>Dual video streams</li>
				<li>Mobile Monitoring via EZVIZ P2P or iVMS-4500</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
DS-2CD2142FWD-I HIKVISION 4MP WDR Fixed Dome Network Camera
======================================================================================================= */
		case "ipFixedDome4":
		case "ipFixedDome8":
		case "ipFixedDome16":
			/* General
			**************************************************************************************/
			$numPackGen = "13";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "DS-2CD2142FWD-I";
			$modelRec	= "";			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ipFixedDome4"  ){
				$modelRec	= "CCDS-7608NI-I2/8P";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "13";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ipFixedDome8"  ){ 
				$modelRec	= "CCDS-7608NI-I2/8P";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "14";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ipFixedDome16" ){ 
				$modelRec	= "CCDS-7716NI-I4/16P";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "15";	 $channel = "16";	$hdStorage		= "4";
			}
			
			$describeCam = "4MP WDR Fixed Dome Network Camera";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras Hikvision & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." Hikvision ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "4.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." Hikvision ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Hikvision ".$describeRec;
			if( $_GET["pack"] == "ipFixedDome4"  ){
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>8ch network cameras can be connected with</li>
					<li>80M/160M incoming bandwidth</li>
					<li>Up to 2 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ipFixedDome8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>8ch network cameras can be connected with</li>
					<li>80M/160M incoming bandwidth</li>
					<li>Up to 2 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ipFixedDome16" ){ 
				$detailRecord	= "		
				<ul>								
					<li>Up to 4 megapixel high resolution</li>
					<li>Full HD1080p video</li>
					<li>Dual video streams</li>
					<li>2.8mm/4mm fixed lens</li>
					<li>120dB Wide Dynamic Range</li>
					<li>3D Digital Noise Reduction</li>
					<li>3-axis adjustment</li>
					<li>DC12V & PoE</li>
					<li>Support H.264+</li>
					<li>Up to 30m IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." Hikvision ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>Full HD1080P video output</li>
				<li>Adopt HDTVI Technology</li>
				<li>True WDR, up to 120dB</li>
				<li>True Day/Night</li>
				<li>OSD menu, 3D DNR, Smart IR</li>
				<li>EXIR technology, 130 FT IR distance</li>
				<li>IP66 weatherproof</li>
				<li>Up the Coax(via coaxial cable)</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
DS-2CD2742FWD-IZS HIKVISION 4MP WDR Vari-focal Dome Network Camera 
======================================================================================================= */
		case "ipVarifocal4":
		case "ipVarifocal8":
		case "ipVarifocal16":
			/* General
			**************************************************************************************/
			$numPackGen = "16";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PPDS-2CD2342WD-I";
			$modelRec	= "";			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ipVarifocal4"  ){
				$modelRec	= "CCDS-7608NI-I2/8P";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "16";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ipVarifocal8"  ){ 
				$modelRec	= "CCDS-7608NI-I2/8P";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "17";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ipVarifocal16" ){ 
				$modelRec	= "CCDS-7716NI-I4/16P";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "18";	 $channel = "16";	$hdStorage		= "4";
			}
			
			$describeCam = "4MP WDR Vari-focal Dome Network Camera";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras Hikvision & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." Hikvision ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "4.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "Hikvision";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." Hikvision ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Hikvision ".$describeRec;
			if( $_GET["pack"] == "ipVarifocal4"  ){
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>8ch network cameras can be connected with</li>
					<li>80M/160M incoming bandwidth</li>
					<li>Up to 2 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ipVarifocal8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>8ch network cameras can be connected with</li>
					<li>80M/160M incoming bandwidth</li>
					<li>Up to 2 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ipVarifocal16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 12 Megapixels resolution recording</li>
					<li>Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840×2160) resolution</li>
					<li>16ch network cameras can be connected with 160M/256M incoming bandwidth</li>
					<li>Up to 4 SATA interfaces</li>
					<li>Plug & Play with up to 16 independent PoE network interfaces</li>
					<li>Support dual-os to ensure high reliablility of system running</li>
					<li>Support various VCA detection alarm and VCA search</li>
					<li>Support H.265/H.264/MPEG4 video formats</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." Hikvision ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>4 Megapixel High Resolution</li>
				<li>Full HD1080p Video</li>
				<li>Dual Video Streams</li>
				<li>2.8 mm to 12 mm Motorized Lens</li>
				<li>120 dB Wide Dynamic Range</li>
				<li>3D Digital Noise Reduction</li>
				<li>Smart Features</li>
				<li>PoE (802.3af)</li>
				<li>IR Range 130 FT</li>
				<li>IP66 and IK10 Protection</li>
				<li>Audio and Alarm Input/Output</li>
				<li>Edge Storage, MicroSD Slot, 128 GB</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
DS-2CD2742FWD-IZS HIKVISION 4MP WDR Vari-focal Dome Network Camera 
======================================================================================================= */
		case "ltsIPTurrent4":
		case "ltsIPTurrent8":
		case "ltsIPTurrent16":
			/* General
			**************************************************************************************/
			$numPackGen = "19";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMIP1142WLTTV";
			$modelRec	= "";			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ltsIPTurrent4"  ){
				$modelRec	= "	PCCLTN8704-P4LTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "19";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ltsIPTurrent8"  ){ 
				$modelRec	= "	PCCLTN8708-P8LTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "20";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ltsIPTurrent16" ){ 
				$modelRec	= " PCCLTN8716-P8LTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "21";	 $channel = "16";	$hdStorage		= "4";
			}
			
			$describeCam = "Network Turrent Camera 4.1 MP 2688x1520P";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras Network & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "2.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "ltsIPTurrent4"  ){
				$detailRecord	= "		
				<ul>				
					<li>4 Channel Network Video Recorder</li>
					<li>Video Input: 4CH IP@40Mbps</li>
					<li>Video Output: VGA/HDMI up to 1920x1080P</li>
					<li>Pentaplex Operation: Record, Playback, Backup, Live & Remote Access</li>
					<li>Recording Resolution: Up to 6MP (3072x2048)</li>
					<li>Recording Mode: Manual, Schedule, Video Detection, Motion Detection, Video Loss, Stop</li>
					<li>Playback Channel: 4CH</li>
					<li>Playback Resolution: Up to 6MP (3072x2048)</li>
					<li>Audio In/Out: 1CH/ 1CH, RCA</li>
					<li>Built-in PoE: 4CH</li>
					<li>Network: 10/100/1000M</li>
					<li>Storage: 1 SATA up to 6TB 2 USB, Support NAS, IP SAN</li>
					<li>Support POS #: 1</li>
					<li>Backup: USB or NAS</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ltsIPTurrent8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8 Channel Network Video Recorder</li>
					<li>Video Input: 8CH IP@80Mbps</li>
					<li>Video Output: VGA/HDMI up to 1920x1080P</li>
					<li>Pentaplex Operation: Record, Playback, Backup, Live & Remote Access</li>
					<li>Recording Resolution: Up to 6MP (3072x2048)</li>
					<li>Recording Mode: Manual, Schedule, Video Detection, Motion Detection, Video Loss, Stop</li>
					<li>Playback Channel: 8CH</li>
					<li>Playback Resolution: Up to 6MP (3072x2048)</li>
					<li>Audio In/Out: 1CH/ 1CH, RCA</li>
					<li>Built-in PoE: 8CH</li>
					<li>Network: 10/100/1000M</li>
					<li>Storage: 1 SATA up to 6TB 2 USB, Support NAS, IP SAN</li>
					<li>Support POS #: 4</li>
					<li>Backup: USB or NAS</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "ltsIPTurrent16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16 Channel Network Video Recorder</li>
					<li>Video Input: 16CH IP@160Mbps</li>
					<li>Video Output: VGA/HDMI up to 1920x1080P</li>
					<li>Pentaplex Operation: Record, Playback, Backup, Live & Remote Access</li>
					<li>Recording Resolution: Up to 6MP (3072x2048)</li>
					<li>Recording Mode: Manual, Schedule, Video Detection, Motion Detection, Video Loss, Stop</li>
					<li>Playback Channel: 16CH</li>
					<li>Playback Resolution: Up to 6MP (3072x2048)</li>
					<li>Audio In/Out: 1CH/ 1CH, RCA</li>
					<li>Built-in PoE: 8CH</li>
					<li>Network: 10/100/1000M</li>
					<li>Storage: 1 SATA up to 6TB 2 USB, Support NAS, IP SAN</li>
					<li>Support POS #: 4</li>
					<li>Backup: USB or NAS</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>2.1MP High Definition</li>
				<li>1/3aaaaaaaaaaaaaaa CMOS</li>
				<li>2688X1520P@20fps</li>
				<li>2.8-12mm Varifocal Lens</li>
				<li>1 Matrix IR LED up to 100ft</li>
				<li>3D DNR, WDR, BLC, VCA</li>
				<li>IP66</li>
				<li>Junction Box Sold Seperately</li>
				<li>DC 12V, PoE</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
		break;
/* ====================================================================================================
DEFAULT
======================================================================================================= */
		default:
			$showPage = "no";
		break;
	}
} 
?>