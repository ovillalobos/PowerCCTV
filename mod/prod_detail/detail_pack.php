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
			$modelCam	= "PWDS-2CE56D1T-IRMKO";
			$modelRec	= "REC-DS7204TV";
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "irTurrent4"  ){
				$modelRec	= "REC-DS7204TV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "1";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "irTurrent8"  ){ 
				$modelRec	= "REC-DS7208TV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "2";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "irTurrent16" ){ 
				$modelRec	= "REC-DS7216TV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "3";	 $channel = "16";	$hdStorage		= "5";
			}
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." & Turbo HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." IR Eyeball Camera 1080p & Turbo HD TVI DVR";
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= "IR Eyeball Camera 1080p";
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "65";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." IR Eyeball Camera 1080p & Turbo HD TVI DVR";			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Turbo HD TVI DVR";
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
			$titleCamera	= $modelCam." IR Eyeball Camera ";
			$detailCamera	= "
			<ul>
				<li>HD1080P Video Output</li>
				<li>Adopt HDTVI Technology</li>
				<li>True Day/Night, Smart IR</li>
				<li>65ft IR distance</li>
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
			$vandalPro 	= "si";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "vandalPro4"  ){
				$modelRec	= "CC-DS7204TV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "4";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "vandalPro8"  ){ 
				$modelRec	= "CC-DS7208TV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "5";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "vandalPro16" ){ 
				$modelRec	= "CC-DS7216TV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "6";	 $channel = "16";	$hdStorage		= "5";
			}
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." & Turbo HD TVI DVR";
			$fa_desc 		= "Package ".$cameras." HD-TVI Vandal Proof IR Dome Camera 1080p & Turbo HD TVI DVR";
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= "HD-TVI Vandal Proof IR Dome Camera 1080p";
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." HD-TVI Vandal Proof IR Dome Camera 1080p & Turbo HD TVI DVR";			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." Turbo HD TVI DVR";
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
			$titleCamera	= $modelCam." IR Turret Camera ";
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
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "fullHD4"  ){
				$modelRec	= "CC-DS7204TV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "7";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "fullHD8"  ){ 
				$modelRec	= "CC-DS7208TV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "8";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "fullHD16" ){ 
				$modelRec	= "CC-DS7216TV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "9";	 $channel = "16";	$hdStorage		= "5";
			}
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras."  & Turbo HD TVI DVR";
			$fa_desc 		= "Package ".$cameras."  Turbo Full HD EXIR Turret Camera 1080p & Turbo HD TVI DVR";
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= " Turbo Full HD EXIR Turret Camera";
			$shortQuaCam	= "2.1 Megapixel HD 1080p";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras."  Turbo Full HD EXIR Turret Camera 1080p & Turbo HD TVI DVR";			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec."  Turbo HD TVI DVR";
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
			$titleCamera	= $modelCam."  Turbo Full HD EXIR Turret Camera";
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
			$vandalPro 	= "no";
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
				$cameras = "16"; 	$numPack = "27";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "HDTVI Eyeball Camera 2.1 Megapixel 1080p";
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
			$nightVision 	= "65";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
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
			$vandalPro 	= "si";
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
				$cameras = "16"; 	$numPack = "24";	 $channel = "16";	$hdStorage		= "5";
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
			$marcaRecord	= "";
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
				<li>DC 12V</li>
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
PCCCMHR6422W-28 Platinum Fixed Lens Bullet HD-TVI Camera 2.1MP - 2.8mm
======================================================================================================= */
		case "ltsTVILensBu4":
		case "ltsTVILensBu8":
		case "ltsTVILensBu16":
			/* General
			**************************************************************************************/
			$numPackGen = "31";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHR6422W-28";
			$modelRec	= "";
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ltsTVILensBu4"  ){
				$modelRec	= "	PCCLTD8304T-FTLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "31";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ltsTVILensBu8"  ){ 
				$modelRec	= "	PCCLTD8308T-FTLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "32";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ltsTVILensBu16" ){ 
				$modelRec	= "	PCCLTD8316T-FTLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "33";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Fixed Lens Bullet HD-TVI Camera 2.1 Megapixel 1080p";
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
			$nightVision 	= "65";			
			$resoMP			= "2.1 MP";
			$resoPixel		= "1080p";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "ltsTVILensBu4"  ){
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
			if( $_GET["pack"] == "ltsTVILensBu8"  ){ 
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
			if( $_GET["pack"] == "ltsTVILensBu16" ){ 
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
				<li>1920x1080P@30fps</li>
				<li>2.8mm Fixed Lens</li>
				<li>True 120dB WDR</li>
				<li>2 Matrix IR up to 65ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
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
PCCCMHD3523DW-Z Platinum Motorized VF Vandal Dome HD-TVI Camera 2.1MP
======================================================================================================= */
		case "ltsTVIVFDome4":
		case "ltsTVIVFDome8":
		case "ltsTVIVFDome16":
			/* General
			**************************************************************************************/
			$numPackGen = "28";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHD3523DW-Z";
			$modelRec	= "";
			$vandalPro 	= "si";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ltsTVIVFDome4"  ){
				$modelRec	= "	PCCLTD8304T-FTLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "28";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ltsTVIVFDome8"  ){ 
				$modelRec	= "	PCCLTD8308T-FTLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "29";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ltsTVIVFDome16" ){ 
				$modelRec	= "	PCCLTD8316T-FTLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "30";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "HDTVI Motorized VF Vandal Dome HD-TVI Camera 2.1 Megapixel 1080p";
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
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "ltsTVIVFDome4"  ){
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
			if( $_GET["pack"] == "ltsTVIVFDome8"  ){ 
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
			if( $_GET["pack"] == "ltsTVIVFDome16" ){ 
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
				<li>1920x1080P@30fps</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True 120dB WDR</li>
				<li>2 Matrix IR up to 131ft (40m)</li>
				<li>DC 12V, AC 24V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
				<li>3-axis</li>
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
PPDS-2CD2342WD-IT1 HIKVISION 4MP WDR EXIR Turret Network
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
			$modelCam	= "PWDS-2CD2342WD-IKO";
			$modelRec	= "";
			$vandalPro 	= "no";			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ipExirTurren4"  ){
				$modelRec	= "REC-DS-7608NI-I28P";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "10";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ipExirTurren8"  ){ 
				$modelRec	= "REC-DS-7608NI-I28P";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "11";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ipExirTurren16" ){ 
				$modelRec	= "REC-DS-7716NI-I416P";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "12";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "4MP WDR EXIR Turret Network Camera";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras  & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras."  ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "4.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras."  ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec."  ".$describeRec;
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
			
			$titleCamera	= $modelCam."  ".$describeCam;
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
			$vandalPro 	= "no";			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ipFixedDome4"  ){
				$modelRec	= "CCDS-7608NI-I28P";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "13";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ipFixedDome8"  ){ 
				$modelRec	= "CCDS-7608NI-I28P";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "14";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ipFixedDome16" ){ 
				$modelRec	= "CCDS-7716NI-I416P";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "15";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "4MP WDR Fixed Dome Network Camera";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras  & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras."  ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "4.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras."  ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec."  ".$describeRec;
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
			
			$titleCamera	= $modelCam."  ".$describeCam;
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
			$modelCam	= "PWDS-2CD2742FWD-IKO";
			$modelRec	= "";			
			$vandalPro 	= "si";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ipVarifocal4"  ){
				$modelRec	= "REC-DS-7608NI-I28P";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "16";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ipVarifocal8"  ){ 
				$modelRec	= "REC-DS-7608NI-I28P";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "17";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ipVarifocal16" ){ 
				$modelRec	= "REC-DS-7716NI-I416P";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "18";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "4MP WDR Vari-focal Dome Network Camera";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras  & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras."  ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "4.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "65";			
			$resoMP			= "4.1 MP";
			$resoPixel		= "2688x1520P";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras."  ".$describeCam." 2688x1520P & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec."  ".$describeRec;
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
			
			$titleCamera	= $modelCam."  ".$describeCam;
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
				<li>IR Range 65 FT</li>
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
PCCCMIP1142WLTTV LTSECURITY Platinum Fixed Lens Turret IP Camera 4.1MP - 4mm
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
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "ltsIPTurrent4"  ){
				$modelRec	= "PCCLTN8704-P4LTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "19";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "ltsIPTurrent8"  ){ 
				$modelRec	= "PCCLTN8708-P8LTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "20";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "ltsIPTurrent16" ){ 
				$modelRec	= "PCCLTN8716-P8LTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "21";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "IP Turrent Camera 2.1 MP 2688x1520P";
			$describeRec = "Embedded Plug & Play NVR ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras IP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "2.1 Megapixel HD 2688x1520P";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "2.1 MP";
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
				<li>1/3 CMOS</li>
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
PCCCMHT19T3W-ZLTTV
======================================================================================================= */
		case "lts_3MP_34_4":
		case "lts_3MP_34_8":
		case "lts_3MP_34_16":
			/* General
			**************************************************************************************/
			$numPackGen = "34";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHT19T3W-ZLTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_34_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "34";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_34_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "35";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_34_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "36";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Motorized Turret HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_34_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_34_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_34_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>3.0MP High Definition</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True WDR 120dB, 6 Matrix IR up to 130ft (40m)</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 Weatherproof</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
PCCCMHT17T2W-28LTTV
======================================================================================================= */
		case "lts_3MP_37_4":
		case "lts_3MP_37_8":
		case "lts_3MP_37_16":
			/* General
			**************************************************************************************/
			$numPackGen = "37";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHT17T2W-28LTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_37_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "37";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_37_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "38";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_37_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "39";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Turret HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_37_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_37_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_37_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>3.0MP High Definition</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True WDR 120dB, 6 Matrix IR up to 130FT (40m)</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 Weatherproof</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
PCCCMHT13T2W-28LTTV
======================================================================================================= */
		case "lts_3MP_40_4":
		case "lts_3MP_40_8":
		case "lts_3MP_40_16":
			/* General
			**************************************************************************************/
			$numPackGen = "40";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHT13T2W-28LTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_40_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "40";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_40_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "41";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_40_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "42";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Turret HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "65";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_40_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_40_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_40_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>		
				<li>3.0MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 65ft (20m)</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 Weatherproof</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
PCCCMHD35T3DW-ZLTTV
======================================================================================================= */
		case "lts_3MP_43_4":
		case "lts_3MP_43_8":
		case "lts_3MP_43_16":
			/* General
			**************************************************************************************/
			$numPackGen = "43";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHD35T3DW-ZLTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_43_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "43";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_43_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "44";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_43_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "45";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Motorized Dome HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_43_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_43_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_43_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>3MP High Definition</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 131ft (40m)</li>
				<li>DC 12V, AC 24V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 weatherproof</li>
				<li>3-Axis</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
PCCCMHR64T2W-28LTTV
======================================================================================================= */
		case "lts_3MP_46_4":
		case "lts_3MP_46_8":
		case "lts_3MP_46_16":
			/* General
			**************************************************************************************/
			$numPackGen = "46";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHR64T2W-28LTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_46_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "46";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_46_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "47";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_46_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "48";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Bullet HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "65";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_46_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_46_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_46_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>3MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 65ft (20m)</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
PCCCMHR96T3DW-ZLTTV
======================================================================================================= */
		case "lts_3MP_49_4":
		case "lts_3MP_49_8":
		case "lts_3MP_49_16":
			/* General
			**************************************************************************************/
			$numPackGen = "49";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHR96T3DW-ZLTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_49_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "49";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_49_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "50";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_49_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "51";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Motorized Bullet HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_49_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_49_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_49_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>3MP High Definition</li>
				<li>2.8-12mm Motorized Vairfocal Lens</li>
				<li>True WDR 120dB</li>
				<li>6 Matrix IR up to 131ft (40m)</li>
				<li>DC 12V, AC 24V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
PCCCMHR92T2W-28LTTV
======================================================================================================= */
		case "lts_3MP_52_4":
		case "lts_3MP_52_8":
		case "lts_3MP_52_16":
			/* General
			**************************************************************************************/
			$numPackGen = "52";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PCCCMHR92T2W-28LTTV";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
				$modelRec	= "PCCLTD8504T-STLTTV";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "52";  $channel = "4"; 	$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
				$modelRec	= "PCCLTD8508T-STLTTV";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "53";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
				$modelRec	= "PCCLTD8516T-STLTTV";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "54";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages Bullet HD-TVI Camera 3.0MP";
			$describeRec = "HD-TVI DVR - Supports 3.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 3.0MP & FULL HD DVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD 2052x1536";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "130";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2052x1536";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "DVR";
			$descRecorder	= "Digital Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." 2052x1536 & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
				$detailRecord	= "		
				<ul>								
					<li>4 CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 4CH HD-TVI 3MP / Analog / Analog HD Cameras+ 2CH IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>1 SATA up to 8TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>2 USB 2.0</li>
					<li>4CH Audio Input</li>
					<li>Long distance transmission over twisted-pair cable and coax cable</li>
					<li>Supports LTS 3MP HD-TVI Cameras</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 8 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>16CH HD-TVI DVR</li>
					<li>Support Live View, Storage, Playback up to 16 HD-TVI 3MP / Analog / Analog HD Cameras+ 2 IP Camera up to 4.1MP</li>
					<li>Up to 1080P  (1920x1080) HDMI Video Output</li>
					<li>3MP@15fps/1080p@30fps</li>
					<li>CVBS Output</li>
					<li>2 SATA up to 16TB HDD</li>
					<li>H.264/H.264 Zip+</li>
					<li>3 USB 2.0</li>
					<li>4CH Audio input</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>3MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 131ft (40m)</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWTurrent_IP_5MP_EXIR_100ft
		======================================================================================================= */
		case "PWTurrent_IP_5MP_EXIR_100ft_4":
		case "PWTurrent_IP_5MP_EXIR_100ft_8":
		case "PWTurrent_IP_5MP_EXIR_100ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "55";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD2352-IKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWTurrent_IP_5MP_EXIR_100ft_4"  ){
				$modelRec	= "RECLTD8504T-STLT";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "55";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWTurrent_IP_5MP_EXIR_100ft_8"  ){ 
				$modelRec	= "RECLTD8508T-STLT";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "56";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWTurrent_IP_5MP_EXIR_100ft_16" ){ 
				$modelRec	= "RECLTD8516T-STLT";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "57";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP PWTurrent EXIR - WDR";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras."CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>Up to 5 megapixel high resolution</li>
				<li>Electronic shutter</li>
				<li>Dual video streams</li>
				<li>Digital Wide Dynamic Range</li>
				<li>3D Digital Noise Reduction</li>
				<li>3-axis adjustment</li>
				<li>DC12V & PoE</li>
				<li>EXIR Infrared LED</li>
				<li>Up to 100ft IR range</li>
				<li>IP66 weather-proof protection</li>
				<li>Mobile Monitoring via EZVIZ P2P or iVMS-4500</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWDome_Mini_IP_5MP_IR_30ft
		======================================================================================================= */
		case "PWDome_Mini_IP_5MP_IR_30ft_4":
		case "PWDome_Mini_IP_5MP_IR_30ft_8":
		case "PWDome_Mini_IP_5MP_IR_30ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "58";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD2552F-IWSKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWDome_Mini_IP_5MP_IR_30ft_4"  ){
				$modelRec	= "RECDS-7604NI-VPKO";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "58";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWDome_Mini_IP_5MP_IR_30ft_8"  ){ 
				$modelRec	= "RECDS-7608NI-VPKO";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "59";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWDome_Mini_IP_5MP_IR_30ft_16" ){ 
				$modelRec	= "RECDS-7616NI-VPKO";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "60";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP Mini PWDome IR-WDR";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "33";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>Up to 5 megapixel (2560 × 1920) @ 20 fps resolution</li>
				<li>Standard video compression with high compression ratio, ROI (region of interest) encoding</li>
				<li>Progressive scan CMOS</li>
				<li>PoE (Power over Ethernet)</li>
				<li>Built-in Micro SD/SDHC/SDXC card slot, up to 128 GB</li>
				<li>IR range approx. 10 meters</li>
				<li>Two-way audio(-S)</li>
				<li>Built-in microphone and audio output(-S)</li>
				<li>Support wifi(-W)</li>
				<li>IR cut filter with auto switch</li>
				<li>3D digital Noise Reduction</li>
				<li>Support dual stream, and the sub-stream for mobile surveillance</li>
				<li>Support Backlight Compensation Digital Wide Dynamic Range Auto-electronic shutter and so on</li>
				<li>Three-axis adjustment for easy installation</li>
				<li>Ingress Protection level: IP66</li>
				<li>Impact Protection: IEC60068-2-75 test, Eh, 20J; EN50102, up to IK08</li>
				<li>Other functions: heartbeat, mirror image, reset button, etc</li>
				<li>Support VCA, which is compatible with NVR for the second time of video searching and analysing</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWDome_Mini_WIFI_5MP_IR_30ft_4
		======================================================================================================= */
		case "PWDome_Mini_WIFI_5MP_IR_30ft_4":
		case "PWDome_Mini_WIFI_5MP_IR_30ft_8":
		case "PWDome_Mini_WIFI_5MP_IR_30ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "76";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 5;
			$modelCam	= "PWDS-2CD2552F-IWSKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWDome_Mini_WIFI_5MP_IR_30ft_4"  ){
				$modelRec	= "RECDS-7604NI-VPKO";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "76";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWDome_Mini_WIFI_5MP_IR_30ft_8"  ){ 
				$modelRec	= "RECDS-7608NI-VPKO";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "77";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWDome_Mini_WIFI_5MP_IR_30ft_16" ){ 
				$modelRec	= "RECDS-7616NI-VPKO";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "78";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP Mini WIFI PWDome IR-WDR";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "33";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "PWDome_Mini_WIFI_5MP_IR_30ft_4"  ){
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 5 Megapixels resolution recording</li>
					<li>HDMI and VGA output at up to 1920×1080P resolution</li>
					<li>HDD quota and group management</li>
					<li>4 independent PoE network interfaces (Only DS-</li>
					<li>7604/7608/7616NI-VP)</li>
					<li>Vertical design for easy HDD installation</li>
					<li>HDD hot-swap supported</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "PWDome_Mini_WIFI_5MP_IR_30ft_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 5 Megapixels resolution recording</li>
					<li>HDMI and VGA output at up to 1920×1080P resolution</li>
					<li>HDD quota and group management</li>
					<li>4 independent PoE network interfaces (Only DS-</li>
					<li>7604/7608/7616NI-VP)</li>
					<li>Vertical design for easy HDD installation</li>
					<li>HDD hot-swap supported</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "PWDome_Mini_WIFI_5MP_IR_30ft_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>Third-party network cameras supported</li>
					<li>Up to 5 Megapixels resolution recording</li>
					<li>HDMI and VGA output at up to 1920×1080P resolution</li>
					<li>HDD quota and group management</li>
					<li>4 independent PoE network interfaces (Only DS-</li>
					<li>7604/7608/7616NI-VP)</li>
					<li>Vertical design for easy HDD installation</li>
					<li>HDD hot-swap supported</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>Up to 5 megapixel (2560 × 1920) @ 20 fps resolution</li>
				<li>Standard video compression with high compression ratio, ROI (region of interest) encoding</li>
				<li>Progressive scan CMOS</li>
				<li>PoE (Power over Ethernet)</li>
				<li>Built-in Micro SD/SDHC/SDXC card slot, up to 128 GB</li>
				<li>IR range approx. 10 meters</li>
				<li>Two-way audio(-S)</li>
				<li>Built-in microphone and audio output(-S)</li>
				<li>Support wifi(-W)</li>
				<li>IR cut filter with auto switch</li>
				<li>3D digital Noise Reduction</li>
				<li>Support dual stream, and the sub-stream for mobile surveillance</li>
				<li>Support Backlight Compensation Digital Wide Dynamic Range Auto-electronic shutter and so on</li>
				<li>Three-axis adjustment for easy installation</li>
				<li>Ingress Protection level: IP66</li>
				<li>Impact Protection: IEC60068-2-75 test, Eh, 20J; EN50102, up to IK08</li>
				<li>Other functions: heartbeat, mirror image, reset button, etc</li>
				<li>Support VCA, which is compatible with NVR for the second time of video searching and analysing</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWCube_WIFI_3MP_IR_33ft
		======================================================================================================= */
		case "PWCube_WIFI_3MP_IR_33ft_4":
		case "PWCube_WIFI_3MP_IR_33ft_8":
		case "PWCube_WIFI_3MP_IR_33ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "79";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 5;
			$modelCam	= "PWDS-2CD2552F-IWSKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWCube_WIFI_3MP_IR_33ft_4"  ){
				$modelRec	= "RECLTN8208-WKO";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "79";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWCube_WIFI_3MP_IR_33ft_8"  ){ 
				$modelRec	= "RECLTN8208-WKO";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "80";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWCube_WIFI_3MP_IR_33ft_16" ){ 
				$modelRec	= "RECLTN8208-WKO";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "81";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 3MP IP WIFI PWCube IR-WDR";
			$describeRec = "HD NVR - Supports 3.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "3.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "33";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "PWCube_WIFI_3MP_IR_33ft_4"  ){
				$detailRecord	= "		
				<ul>				
					<li>8 Channel Wifi Network Video Recorder</li>
					<li>Video Input: 8CH IP@50Mbps</li>
					<li>Video Output: HDMI up to 1920x1080P</li>
					<li>Recording Resolution: Up to 6MP Resolution (3072x2048)</li>
					<li>Playback Channel: 8CH</li>
					<li>Playback Resolution: Up to 6MP Resolution (3072x2048)</li>
					<li>Network: 1 RJ-45 10/100 Mbps WAN Interface</li>
					<li>3 RJ-45 10/100M LAN Interfaces/ Wifi Router</li>
					<li>Storage: 1TB Pre-Installed, 1 USB 3.0</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "PWCube_WIFI_3MP_IR_33ft_8"  ){ 
				$detailRecord	= "		
				<ul>				
					<li>8 Channel Wifi Network Video Recorder</li>
					<li>Video Input: 8CH IP@50Mbps</li>
					<li>Video Output: HDMI up to 1920x1080P</li>
					<li>Recording Resolution: Up to 6MP Resolution (3072x2048)</li>
					<li>Playback Channel: 8CH</li>
					<li>Playback Resolution: Up to 6MP Resolution (3072x2048)</li>
					<li>Network: 1 RJ-45 10/100 Mbps WAN Interface</li>
					<li>3 RJ-45 10/100M LAN Interfaces/ Wifi Router</li>
					<li>Storage: 1TB Pre-Installed, 1 USB 3.0</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "PWCube_WIFI_3MP_IR_33ft_16" ){ 
				$detailRecord	= "		
				<ul>				
					<li>8 Channel Wifi Network Video Recorder</li>
					<li>Video Input: 8CH IP@50Mbps</li>
					<li>Video Output: HDMI up to 1920x1080P</li>
					<li>Recording Resolution: Up to 6MP Resolution (3072x2048)</li>
					<li>Playback Channel: 8CH</li>
					<li>Playback Resolution: Up to 6MP Resolution (3072x2048)</li>
					<li>Network: 1 RJ-45 10/100 Mbps WAN Interface</li>
					<li>3 RJ-45 10/100M LAN Interfaces/ Wifi Router</li>
					<li>Storage: 1TB Pre-Installed, 1 USB 3.0</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>3.2MP High Definition</li>
				<li>1/3” CMOS</li>
				<li>2048X1536P@20fps</li>
				<li>4mm Fixed Lens</li>
				<li>1 IR LED up to 33ft</li>
				<li>Micro SD/SDHC/SDXC Card Slot</li>
				<li>Built-in Microphone</li>
				<li>Built-in Speaker</li>
				<li>WiFi, Alarm In, Out</li>
				<li>3D DNR, DWDR, BLC, PIR, VCA</li>
				<li>DC 12V, PoE</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWDome_IP_5MP_EXIR_100ft
		======================================================================================================= */
		case "PWDome_IP_5MP_EXIR_100ft_4":
		case "PWDome_IP_5MP_EXIR_100ft_8":
		case "PWDome_IP_5MP_EXIR_100ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "61";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD2152F-IKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWDome_IP_5MP_EXIR_100ft_4"  ){
				$modelRec	= "RECLTD8504T-STLT";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "61";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWDome_IP_5MP_EXIR_100ft_8"  ){ 
				$modelRec	= "RECLTD8508T-STLT";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "62";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWDome_IP_5MP_EXIR_100ft_16" ){ 
				$modelRec	= "RECLTD8516T-STLT";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "63";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP PWDome EXIR-WDR";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>Up to 5 megapixel high resolution</li>
				<li>Electronic shutter</li>
				<li>Dual video streams</li>
				<li>2.8mm/4mm/6mm fixed lens</li>
				<li>Digital Wide Dynamic Range</li>
				<li>3D Digital Noise Reduction</li>
				<li>3-axis adjustment</li>
				<li>Support on-board storage, up to 128GB</li>
				<li>DC12V & PoE</li>
				<li>Up to 100ft IR range</li>
				<li>IP66 weather-proof protection</li>
				<li>IK10 impact protection</li>
				<li>Reset button</li>
				<li>-S: Audio/Alarm IO</li>
				<li>Mobile Monitoring via EZVIZ P2P or iVMS-4500</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWBullet_IP_5MP_CMOSIR_100ft
		======================================================================================================= */
		case "PWBullet_IP_5MP_CMOSIR_100ft_4":
		case "PWBullet_IP_5MP_CMOSIR_100ft_8":
		case "PWBullet_IP_5MP_CMOSIR_100ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "64";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD2052-IKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWBullet_IP_5MP_CMOSIR_100ft_4"  ){
				$modelRec	= "RECLTD8504T-STLT";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "64";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWBullet_IP_5MP_CMOSIR_100ft_8"  ){ 
				$modelRec	= "RECLTD8508T-STLT";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "65";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWBullet_IP_5MP_CMOSIR_100ft_16" ){ 
				$modelRec	= "RECLTD8516T-STLT";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "66";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP PWBullet CMOS Infrared";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>												
				<li>Up to 5 megapixel (2560 × 1920) resolution</li>
				<li>Standard video compression with high compression ratio, ROI (region of interest) encoding</li>
				<li>Progressive scan CMOS, capture motion video without incised margin</li>
				<li>Support dual stream, and the sub-stream for mobile surveillance</li>
				<li>High-performance and long service life Infrared LED, Approx. 100ft IR range</li>
				<li>IR cut filter with auto switch</li>
				<li>PoE (Power over Ethernet)</li>
				<li>Ingress Protection level: IP66</li>
				<li>Electronic shutter for different surveillance environments</li>
				<li>Other functions: alarm, reset button, mirror, etc</li>
				<li>3-axis adjustment</li>
				<li>Support VCA, which is compatible with NVR for the second time of video searching and analysing</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWBullet_IP_5MP_VARIFOCUS_100ft
		======================================================================================================= */
		case "PWBullet_IP_5MP_VARIFOCUS_100ft_4":
		case "PWBullet_IP_5MP_VARIFOCUS_100ft_8":
		case "PWBullet_IP_5MP_VARIFOCUS_100ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "67";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD2652F-IZSKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWBullet_IP_5MP_VARIFOCUS_100ft_4"  ){
				$modelRec	= "RECLTD8504T-STLT";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "67";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWBullet_IP_5MP_VARIFOCUS_100ft_8"  ){ 
				$modelRec	= "RECLTD8508T-STLT";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "68";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWBullet_IP_5MP_VARIFOCUS_100ft_16" ){ 
				$modelRec	= "RECLTD8516T-STLT";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "69";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP PWBullet Vari-focus";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>Up to 5 megapixel high resolution</li>
				<li>Vari-focus</li>
				<li>Digital Wide Dynamic Range</li>
				<li>3D Digital Noise Reduction</li>
				<li>3-axis adjustment</li>
				<li>Support on-board storage, up to 128GB</li>
				<li>DC12V & PoE</li>
				<li>Up to 100ft IR range</li>
				<li>IP66 weather-proof protection</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWBullet_IP_5MP_EXIR_100ft
		======================================================================================================= */
		case "PWBullet_IP_5MP_EXIR_100ft_4":
		case "PWBullet_IP_5MP_EXIR_100ft_8":
		case "PWBullet_IP_5MP_EXIR_100ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "70";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD2T52-I3KO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWBullet_IP_5MP_EXIR_100ft_4"  ){
				$modelRec	= "RECLTD8504T-STLT";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "70";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWBullet_IP_5MP_EXIR_100ft_8"  ){ 
				$modelRec	= "RECLTD8508T-STLT";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "71";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWBullet_IP_5MP_EXIR_100ft_16" ){ 
				$modelRec	= "RECLTD8516T-STLT";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "72";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 5MP IP PWBullet EXIR-WDR";
			$describeRec = "HD NVR - Supports 5.0MP ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "5.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "100";			
			$resoMP			= "5.0 MP";
			$resoPixel		= "4080";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>				
				<li>Up to 5 megapixel high resolution</li>
				<li>Digital Wide Dynamic Range</li>
				<li>3D Digital Noise Reduction</li>
				<li>Up to 100ft IR range</li>
				<li>IP66 weather-proof protection</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/* ====================================================================================================
		PWBullet_IP_8MP_4K_100ft
		======================================================================================================= */
		case "PWBullet_IP_8MP_4K_100ft_4":
		case "PWBullet_IP_8MP_4K_100ft_8":
		case "PWBullet_IP_8MP_4K_100ft_16":
			/* General
			**************************************************************************************/
			$numPackGen = "73";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$detailRecord = "";
			$totalIm 	= 4;
			$modelCam	= "PWDS-2CD4A85F-IZKO";
			$modelRec	= "";	
			$vandalPro 	= "no";
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "PWBullet_IP_8MP_4K_100ft_4"  ){
				$modelRec	= "RECLTD8504T-STLT";
				$model	 = "4".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "4";  	$numPack = "73";  $channel = "4"; 		$hdStorage		= "1";  
			}
			if( $_GET["pack"] == "PWBullet_IP_8MP_4K_100ft_8"  ){ 
				$modelRec	= "RECLTD8508T-STLT";
				$model	 = "8".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "8"; 	$numPack = "74";	 $channel = "8"; 	$hdStorage		= "2";
			}
			if( $_GET["pack"] == "PWBullet_IP_8MP_4K_100ft_16" ){ 
				$modelRec	= "RECLTD8516T-STLT";
				$model	 = "16".$modelCam."-".$modelRec; /* PP[CAMERA MODEL]-CC-[RECORDER MODEL]TV */
				$cameras = "16"; 	$numPack = "75";	 $channel = "16";	$hdStorage		= "5";
			}
			
			$describeCam = "Packages 8MP IP PWBullet 4K Smart EXIR-WDR";
			$describeRec = "HD NVR - Supports 8MP 4K Smart Camera ".$cameras." CH";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= "Package ".$cameras." Cameras 5.0MP & FULL HD NVR";
			$fa_desc 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;
			$fa_images		= "http://powercctv.com/images/depro/pack/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/
			/*>>> CAMERA*/
			$shortCamDesc	= $describeCam;
			$shortQuaCam	= "8.0 Megapixel HD";
			$imgProduct		= "pk_".$numPack.".1.png";
			$nightVision 	= "164";			
			$resoMP			= "4K MP";
			$resoPixel		= "4096";					
			$place			= "Outdoor & Indoor";
			/*>>> RECORDER*/
			$recorder		= "NVR";
			$descRecorder	= "Network Video Recorder";
			$marcaRecord	= "";
			/*>>> INFORMATION ABOUT THE PACKAGE*/
			$titleProd 		= "Package ".$cameras." ".$describeCam." & ".$describeRec;			
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line ".$cameras."-channel ".$descRecorder." (".$recorder.") HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system of ".$cameras." cameras standing guard at all times.";			
			/* Features
			**************************************************************************************/
			$titleRecord	= $modelRec." ".$describeRec;
			if( $_GET["pack"] == "lts_3MP_52_4"  ){
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
			if( $_GET["pack"] == "lts_3MP_52_8"  ){ 
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
			if( $_GET["pack"] == "lts_3MP_52_16" ){ 
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
					<li>Up to 100ft IR range</li>
					<li>IP66 weather-proof protection</li>
					<li>IK08(-W model)/IK10(non -W model)</li>
				</ul>
				";
			}
			
			$titleCamera	= $modelCam." ".$describeCam;
			$detailCamera	= "
			<ul>								
				<li>1/1.7” Progressive Scan CMOS</li>
				<li>4096 × 2160 @22fps frame rate</li>
				<li>Slow shutter</li>
				<li>DWDR</li>
				<li>3D DNR</li>
				<li>Up to 50m IR range</li>
				<li>Motorized lens with Smart Focus</li>
				<li>Support 128G on-board storage</li>
				<li>DC12V/PoE</li>
				<li>IP67</li>
			</ul>
			";			
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$modelCam.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/'.$recorder.'/'.$recorder.'-'.$modelRec.'-SPECIFICATIONS.pdf" download>'.$titleRecord.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
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