<?php
$showPage = "no";
$perFeatures = "no";
if( isset($_GET["pack"]) ){
	$showPage = "yes";
	
	switch( $_GET["pack"] ){
	/*======== PCCCMIP3532FWLTTV */
		case "cam_1_1":
			/******* General */
			$perFeatures	= "si";		$numPerFea 	= 5;
			$totalIm 		= 3;		$vandalPro 	= "no";		$ip66 		= "no";
			$indoor			= "si";		$outdoor	= "no";		$numPackGen	= "1";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_1_1"  ){
				$numPack 	= "1"; 		$model		= "PWCMIP3532FWLT"; /* URL: http://www.ltsecurityinc.com/cmip3532fw.html */
			}
			$describeCam 	= "Platinum Fisheye IP Camera 3.2 MP - Indoor";
			/******* Facebook Developers */
			$fa_title		= "Fisheye IP Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;
			$imgProduct		= "cam_".$numPack.".1.png";
			$nightVision 	= "33";			
			$resoMP			= "3.0 MP";
			$resoPixel		= "2048P";					
			$titleProd 		= $describeCam;
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";			
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>1/3” sensor</li>
				<li>3 Megapixel image sensor</li>
				<li>Up to 2048 x 1536 real-time streaming</li>
				<li>360°view angel</li>
				<li>Multiple viewing modes</li>
				<li>Multiple ePTZ streams with preset and patrol functions</li>
				<li>IR up to 33ft</li>
				<li>View in Fisheye, Panoramic, Split 180&deg;, and 4/PTZ</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCCMIP7532FWLTTV IP Fisheye */
		case "cam_2_1":
		case "cam_3_1":
		case "cam_4_1":
		case "cam_5_1":
			/******* General */
			$totalIm 	= 3;		
			$numPackGen	= "2";
			$perFeatures= "si";		$numPerFea = 5;
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_2_1" ){ 
				/* URL: http://www.ltsecurityinc.com/cmip7532fw.html */
				$numPack = "2"; $model = "PWCMIP7532FWLT"; 	$describeCam = "Platinum Fisheye IP Camera 3.2 MP - Indoor"; 			
				$nightVision = "33"; $resoMP = "3.0 MP";  $resoPixel = "2048P"; 
				$vandalPro 	 = "no";  $ip66	  = "no"; 	   $indoor	  = "si";	  $outdoor = "no";
			}
			if( $_GET["pack"] == "cam_3_1" ){ 
				/* URL: http://www.ltsecurityinc.com/ip-network-fisheye-camera-cmip7562f.html */
				$numPack = "3"; $model = "PWCCMIP7562FLT"; 	$describeCam = "Platinum Fisheye IP Camera 6.0 MP - Indoor";
				$nightVision = "33"; $resoMP = "6.0 MP";  $resoPixel = "3072P"; 
				$vandalPro 	 = "no";  $ip66	  = "no"; 	   $indoor	  = "si";	  $outdoor = "no";
			}
			if( $_GET["pack"] == "cam_4_1" ){ 
				/* URL: http://www.ltsecurityinc.com/ip-network-fisheye-camera-cmip7562f.html */
				$numPack = "4"; $model = "PWCMIP7562F-ELT"; 	$describeCam = "Platinum Fisheye IP Camera 6.0 MP - Outdoor"; 		 	
				$nightVision = "50"; $resoMP = "6.0 MP";  $resoPixel = "3072P"; 
				$vandalPro 	 = "si";  $ip66	  = "si"; 	   $indoor	  = "no";	  $outdoor = "si";
				$numPackGen	 = "4";
			}
			if( $_GET["pack"] == "cam_5_1" ){ 
				/* URL: http://www.ltsecurityinc.com/ip-network-fisheye-camera-cmip75122f-se.html */
				$numPack = "5"; $model = "PWCMIP75122F-SELT";$describeCam = "Platinum Fisheye IP Camera 12.0 MP - Outdoor/Indoor";	
				$nightVision = "50"; $resoMP = "12.0 MP"; $resoPixel = "4000P"; 
				$vandalPro 	 = "si";  $ip66	  = "si"; 	   $indoor	  = "si";	  $outdoor = "si";
				$numPackGen	 = "4";
			}
			/******* Facebook Developers */
			$fa_title		= "Fisheye IP Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;
			$imgProduct		= "cam_".$numPack.".1.png";		
			$titleProd 		= $describeCam;
			$description	= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";			
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			if( $_GET["pack"] == "cam_2_1" ){
				$detailCamera = "
				<ul>																
					<li>1/3” sensor</li>
					<li>3.0 Megapixel image sensor</li>
					<li>Up to 2048 x 1536 real-time streaming</li>
					<li>360°view angel</li>
					<li>Multiple viewing modes</li>
					<li>Multiple ePTZ streams with preset and patrol functions</li>
					<li>IR up to 33ft</li>
					<li>View in Fisheye, Panoramic, Split 180&deg;, and 4/PTZ</li>
				</ul>";
			}
			if( $_GET["pack"] == "cam_3_1" ){
				$detailCamera = "
				<ul>																
					<li>6.0 Megapixel High Definition</li>
					<li>Low-Light, Virtual PTZ</li>
					<li>3072X2048@25fps</li>
					<li>1.27mm Fixed Lens</li>
					<li>360° Panoramic View</li>
					<li>Multiple Viewing Modes</li>
					<li>IR up to 33ft</li>
					<li>Micro SD/SDHC/SDXC</li>
					<li>DC 12V, PoE</li>
				</ul>";
			}
			if( $_GET["pack"] == "cam_4_1" ){
				$detailCamera = "
				<ul>					
					<li>6.0 Megapixel High Defnition</li>
					<li>Low-Light, Virtual PTZ</li>
					<li>1.27mm Fix Lens</li>
					<li>3072×2048@25fps</li>
					<li>Micro SD/SDHC/SDXC Card Slot up to 128GB</li>
					<li>360° Fisheye View</li>
					<li>Audio I/O</li>
					<li>Split 180 °</li>
					<li>DC 12V, PoE</li>
					<li>IR up to 50ft</li>
					<li>Vandal-Proof, IP66</li>
				</ul>";
			}
			if( $_GET["pack"] == "cam_5_1" ){
				$detailCamera = "
				<ul>																
					<li>12.0 Megapixel High Definition</li>
					<li>Outdoor / Indoor Application</li>
					<li>Up to 4000x3072 Resolution</li>
					<li>Real Time Streaming</li>
					<li>360° Fisheye View</li>
					<li>Multiple Viewing Modes, Split 180 °, ePTZ View</li>
					<li>Audio I/O</li>
					<li>IR up to 50ft</li>
					<li>IP66, Vandalproof</li>
					<li>DC 12V, PoE</li>
				</ul>";
			}			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCDS-2CD2142FWD-IKOTV IP DOMES */
		case "cam_6_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "10";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_6_1"  ){
				$numPack 	= "10"; 		$model		= "PWDS-2CD2142FWD-IKO"; /* URL: https://koacctv.com/hikvision-4mp-wdr-fixed-dome-network-camera/ */
			}
			$describeCam 	= " 4MP WDR Fixed Dome Network Camera";
			/******* Facebook Developers */
			$fa_title		= "WDR Fixed Dome Network";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "100";			$resoMP		= "4.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
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
				<li>Up to 130ft IR range</li>
				<li>IP66 weather-proof protection</li>
				<li>IK08(-W model)/IK10(non -W model)</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCDS-2CD2742FWD-IZSKOTV IP DOMES */
		case "cam_7_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "si";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "11";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_7_1"  ){
				$numPack 	= "11"; 		$model		= "PWDS-2CD2742FWD-IKO"; /* URL: https://koacctv.com/hikvision-4mp-wdr-vari-focal-dome-network-camera/ */
			}
			$describeCam 	= " 4MP WDR Vari-focal Dome Network Vandal-Proof";
			/******* Facebook Developers */
			$fa_title		= "WDR Vari-focal Dome Network";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "65";			$resoMP		= "4.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
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
				<li>IR Range 130 ft</li>
				<li>IP66 and IK10 Protection</li>
				<li>Audio and Alarm Input/Output</li>
				<li>Edge Storage, MicroSD Slot, 128 GB</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMIP1142WLTTV IP TURRENTS  */
		case "cam_8_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "12";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_8_1"  ){
				$numPack 	= "12"; 		$model		= "PWCMIP1142W-28LT"; /* URL: http://www.ltsecurityinc.com/ip-network-turret-camera-cmip1142w-28.html */
			}
			$describeCam 	= "Platinum Fixed Lens Turret IP Camera 4.1MP";
			/******* Facebook Developers */
			$fa_title		= "Fixed Lens Turret IP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "100";			$resoMP		= "4.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>4.1MP High Definition</li>
				<li>1/3” CMOS</li>
				<li>2688X1520P@20fps</li>
				<li>4mm Fixed Lens</li>
				<li>1 Matrix IR LED up to 130ft</li>
				<li>3D DNR, WDR, BLC, VCA</li>
				<li>IP66</li>
				<li>Junction Box Sold Seperately</li>
				<li>DC 12V, PoE</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCDS-2CD2342WD-IKOTV IP TURRENTS */
		case "cam_9_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "9";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_9_1"  ){
				$numPack 	= "9"; 		$model		= "PWDS-2CD2342WD-IKO"; /* URL: https://koacctv.com/hikvision-ds-2cd2342wd-i-4mp-wdr-exir-turret-network-camera/ */
			}
			$describeCam 	= "Platinum Fixed Lens Turret IP Camera 4.1MP";
			/******* Facebook Developers */
			$fa_title		= "Fixed Lens Turret IP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "100";			$resoMP		= "4.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>4.1MP High Definition</li>
				<li>1/3” CMOS</li>
				<li>2688X1520P@20fps</li>
				<li>4mm Fixed Lens</li>
				<li>1 Matrix IR LED up to 130ft</li>
				<li>3D DNR, WDR, BLC, VCA</li>
				<li>IP66</li>
				<li>Junction Box Sold Seperately</li>
				<li>DC 12V, PoE</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHR6422W-28LTTV BULLET HD-TVI */
		case "cam_10_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "16";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_10_1"  ){
				$numPack 	= "16"; 		$model		= "PWCMHR6422W-28LT";
			}
			$describeCam 	= "Platinum Fixed Lens Bullet HD-TVI Camera 2.0MP";
			/******* Facebook Developers */
			$fa_title		= "Fixed Lens Bullet HD-TVI Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "65";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>2.1MP High Definition</li>
				<li>1920x1080P@30fps</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 65ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHR96T3DW-ZLTTV BULLET HD-TVI */
		case "cam_11_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "21";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_11_1"  ){
				$numPack 	= "21"; 		$model		= "PWCMHR64T2W-28LT";
			}
			$describeCam 	= "Platinum Bullet HD-TVI Camera 3.0MP";
			/******* Facebook Developers */
			$fa_title		= "Bullet HD-TVI Camera 3.0MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>3MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 130ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHR64T2W-28LTTV BULLET HD-TVI */
		case "cam_12_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "22";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_12_1"  ){
				$numPack 	= "22"; 		$model		= "PWCMHR96T3DW-ZLT";
			}
			$describeCam 	= "Platinum Motorized Bullet HD-TVI Camera 3.0MP";
			/******* Facebook Developers */
			$fa_title		= "Motorized Bullet HD-TVI Camera 3.0MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>3MP High Definition</li>
				<li>2.8mm Motorized Vairfocal Lens</li>
				<li>True WDR 120dB</li>
				<li>6 Matrix IR up to 130ft</li>
				<li>DC 12V, AC 24V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHR92T2W-28LTTV BULLET HD-TVI */
		case "cam_13_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "23";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_13_1"  ){
				$numPack 	= "23"; 		$model		= "PWCMHR92T2W-28LT";
			}
			$describeCam 	= "Platinum Bullet HD-TVI Camera 3.0MP - 2.8mm";
			/******* Facebook Developers */
			$fa_title		= "Bullet HD-TVI Camera 3.0MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>3MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 130ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHD3523DW-ZLTTV DOME HD-TVI */
		case "cam_14_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "si";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "15";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_14_1"  ){
				$numPack 	= "15"; 		$model		= "PWCMHD3523DW-ZLT";
			}
			$describeCam 	= "Platinum Motorized VF Vandal Dome HD-TVI Camera 2.1MP";
			/******* Facebook Developers */
			$fa_title		= "Dome HD-TVI Camera 2.1MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>2.1MP High Definition</li>
				<li>1920x1080P@30fps</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 130ft</li>
				<li>DC 12V, AC 24V</li>
				<li>OSD Menu via UTC technology with Platinum TVI DVR</li>
				<li>IP66 weatherproof</li>
				<li>3-axis</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCTVI-2542VUNTV DOME HD-TVI */
		case "cam_15_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "si";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "13";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_15_1"  ){
				$numPack 	= "13"; 		$model		= "PCCTVI-2542VUNTV";
			}
			$describeCam 	= "HDTVI Vandal Proof Dome Camera 2.1 Megapixel 1080p";
			/******* Facebook Developers */
			$fa_title		= "Dome HD-TVI Camera 2.1MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
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
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCDS-2CE56D5T-(A)VPIR3KOTV DOME HD-TVI */
		case "cam_16_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "si";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "7";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_16_1"  ){
				$numPack 	= "7"; 		$model		= "PWDS-2CE56D5T-(A)VPIR3KO"; /* https://koacctv.com/hikvision-hd-tvi-vandal-proof-dome-camera-ds-2ce56d5t-avpir3/ */
			}
			$describeCam 	= " HD-TVI Vandal Proof IR Dome Camera";
			/******* Facebook Developers */
			$fa_title		= " Vandal Proof Dome";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>																
				<li>HD1080P VIDEO OUTPUT</li>
				<li>ADOPT HDTVI TECHNOLOGY</li>
				<li>TRUE DAY/NIGHT</li>
				<li>2.8 – 12MM VARI-FOCAL LENS</li>
				<li>OSD MENU, 3D DNR, SMART IR</li>
				<li>UP TO 40M IR DISTANCE</li>
				<li>IP66 WEATHERPROOF & VANDAL PROOF</li>
				<li>UP THE COAX(VIA COAXIAL CABLE)</li>
				<li>120 DB WIDE DYNAMIC RANGE</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHD35T3DW-ZLTTV DOME HD-TVI */
		case "cam_17_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "si";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "20";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_17_1"  ){
				$numPack 	= "20"; 		$model		= "PWCMHD35T3DW-ZLT";
			}
			$describeCam 	= "Platinum Motorized Dome HD-TVI Camera 3.0MP";
			/******* Facebook Developers */
			$fa_title		= "Motorized Dome HD-TVI Camera 3.0MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";					
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>
				<li>3MP High Definition</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 130ft</li>
				<li>DC 12V, AC 24V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 weatherproof</li>
				<li>3-Axis</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHT2122-28LTTV TURRENT HD-TVI */
		case "cam_18_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "14";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_18_1"  ){
				$numPack 	= "14"; 	$model		= "PWCMHT2122-28LT";
			}
			$describeCam 	= "Platinum HD-TVI Turret Camera 2.1MP";
			/******* Facebook Developers */
			$fa_title		= "HD-TVI Turret Camera 2.1MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "65";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
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
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCDS-2CE56D5T-IT1KOTV TURRENT HD-TVI */
		case "cam_19_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "8";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_19_1"  ){
				$numPack 	= "8"; 	$model		= "PWDS-2CE56D5T-IT1KO";
			}
			$describeCam 	= " Turbo Full HD EXIR Turret Camera ";
			/******* Facebook Developers */
			$fa_title		= " Turret HD";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>		
				<li>Full HD1080P video output</li>
				<li>Adopt HDTVI Technology</li>
				<li>True WDR, up to 120dB</li>
				<li>True Day/Night</li>
				<li>OSD menu, 3D DNR, Smart IR</li>
				<li>EXIR technology, 130FT IR distance</li>
				<li>IP66 weatherproof</li>
				<li>Up the Coax(via coaxial cable)</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCDS-2CE56D1T-IRMKOTV TURRENT HD-TVI */
		case "cam_20_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "6";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_20_1"  ){
				$numPack 	= "6"; 	$model		= "PWDS-2CE56D1T-IRMKO";
			}
			$describeCam 	= " IR Turret Camera";
			/******* Facebook Developers */
			$fa_title		= " IR Turret";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "65";			$resoMP		= "2.0 MP";					$resoPixel	= "1080P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
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
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCDS-2CE56D1T-IRMKOTV TURRENT HD-TVI */
		case "cam_21_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "17";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_21_1"  ){
				$numPack 	= "17"; 	$model		= "PWDS-2CE56D1T-IRMKO"; /* https://koacctv.com/hikvision-exir-turret-camera/ */
			}
			$describeCam 	= "Platinum Motorized Turret HD-TVI Camera 3.0MP";
			/******* Facebook Developers */
			$fa_title		= "Turret HD-TVI Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>		
				<li>3.0MP High Definition</li>
				<li>2.8-12mm Motorized Varifocal Lens</li>
				<li>True WDR 120dB, 6 Matrix IR up to 130ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 Weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHT17T2W-28LTTV TURRENT HD-TVI */
		case "cam_22_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "18";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_22_1"  ){
				$numPack 	= "18"; 	$model		= "PWCMHT17T2W-28LT";
			}
			$describeCam 	= "Platinum Turret HD-TVI Camera 3.0MP - 2.8mm";
			/******* Facebook Developers */
			$fa_title		= "Turret HD-TVI Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>					
				<li>3.0MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 130ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 Weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCCMHT13T2W-28LTTV TURRENT HD-TVI */
		case "cam_23_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "19";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_23_1"  ){
				$numPack 	= "19"; 	$model		= "PWCMHT13T2W-28LT";
			}
			$describeCam 	= "Platinum Turret HD-TVI Camera 3.0MP";
			/******* Facebook Developers */
			$fa_title		= "Turret HD-TVI Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "65";			$resoMP		= "3.0 MP";					$resoPixel	= "2048P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>		
				<li>3.0MP High Definition</li>
				<li>2.8mm Fixed Lens</li>
				<li>True WDR 120dB</li>
				<li>2 Matrix IR up to 65ft</li>
				<li>DC 12V</li>
				<li>OSD Menu via UTC technology compatible with TVI DVR</li>
				<li>IP66 Weatherproof</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
	/*======== PCLPR100LTTV License Plate IP */
		case "cam_24_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "24";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_24_1"  ){
				$numPack 	= "24"; 	$model		= "PWLPR100LT"; /* URL: http://www.ltsecurityinc.com/platinum-hdtvi-bullet-camera-lpr100.html */
			}
			$describeCam 	= "Platinum HD-TVI License Plate Recognition Bullet Camera, 1.3MP";
			/******* Facebook Developers */
			$fa_title		= "License Plate Network Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "1.3 MP";					$resoPixel	= "720P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>		
				<li>1.3MP High Definition 720IP</li>
				<li>1/3.8” CMOS</li>
				<li>1280X720P@30fps</li>
				<li>6 White Giant Flux IR LEDs up to 130ft</li>
				<li>6-22mm VF Motorized Lens</li>
				<li>Outdoor/ Indoor</li>
				<li>IP66</li>
				<li>Ultra Low Lux</li>
				<li>DC 12V</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;	
	/*======== PTZH512X30IR PTZ HDTVI Camera */
		case "cam_25_1":
		case "cam_26_1":
		case "cam_27_1":
		case "cam_28_1":
		case "cam_29_1":		
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "no";
			$indoor			= "si";		$outdoor	= "si";		
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_25_1"  ){ $numPack = "25"; $model = "PWPTZH772X30IRLT";  $numPackGen = "25"; $nightVision = "394"; $describeCam	= "Platinum HD-TVI PTZ High Speed Dome Camera 2.1MP 6 IR 30X Zoom"; }
			if( $_GET["pack"] == "cam_26_1"  ){ $numPack = "26"; $model = "PWPTZH512X30IRLT";  $numPackGen = "26"; $nightVision = "492"; $describeCam	= "Platinum HD-TVI PTZ High Speed Dome Camera 2.1MP 4 Matrix IR 20X Zoom"; }
			if( $_GET["pack"] == "cam_27_1"  ){ $numPack = "27"; $model = "PWPTZIP762X20IRLT"; $numPackGen = "27"; $nightVision = "492"; $describeCam	= "Platinum IP PTZ High Speed Dome Camera 2.1MP 10IR 20X Zoom"; }
			if( $_GET["pack"] == "cam_28_1"  ){ $numPack = "28"; $model = "PWPTZIP772X30IRLT"; $numPackGen = "28"; $nightVision = "394"; $describeCam	= "Platinum IP PTZ High Speed Dome Camera 2.1MP 6IR 30X Zoom"; }
			if( $_GET["pack"] == "cam_29_1"  ){ $numPack = "29"; $model = "PWPTZIP512X20IRLT"; $numPackGen = "29"; $nightVision = "492"; $describeCam	= "Platinum IP PTZ High Speed Dome Camera 2.1MP 4 Matrix IR 20X Zoom"; }
			/******* Facebook Developers */
			$fa_title		= "PTZ High Speed Dome Camera";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$resoMP			= "2.0 MP";			$resoPixel	= "1080P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			if( $_GET["pack"] == "cam_25_1"  ){
				$detailCamera	= "
				<ul>		
					<li>2.1MP High Definition</li>
					<li>1/3” CMOS</li>
					<li>1920X1080P@30fps</li>
					<li>4-120mm Lens</li>
					<li>6 IR LEDs up to 394ft</li>
					<li>Pan/Tilt Range: Pan: 360° Endless;</li>
					<li>Tilt: -5°~180° (Auto Flip)</li>
					<li>Pan/Tilt Speed: Pan Manual Speed: 0.1° ~ 160°/s,</li>
					<li>Pan Preset Speed: 240°/s,</li>
					<li>Tilt Manual Speed: 0.1° ~ 120°/s,</li>
					<li>Tilt Preset Speed: 200°/s</li>
					<li>256 Preset Positions</li>
					<li>4 Pattern Scan, 8 Cruise</li>
					<li>RS485 Pelco D/Pelco P, Self-adaptive</li>
					<li>AC 24V</li>
					<li>IP66, Outdoor/ Indoor</li>
					<li>6\" Φ</li>
					<li>Wall Mount Bracket Included</li>
				</ul>
				";	
			}
			if( $_GET["pack"] == "cam_26_1"  ){ 
				$detailCamera	= "
				<ul>						
					<li>2.1MP High Definition</li>
					<li>Full HD 1920X1080P</li>
					<li>30X Optical Zoom</li>
					<li>4 Matrix IR LEDs up to 492ft</li>
					<li>Self-adaptive, Pelco-P, Pelco-D</li>
					<li>3D Privacy Masking</li>
					<li>True Day/Night, 3D DNR, DWDR</li>
					<li>Support BNC output</li>
					<li>AC 24V, IP66</li>
					<li>Indoor/Outdoor</li>
					<li>5\"(Φ)</li>
					<li>Wall Mount Bracket Included</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "cam_27_1"  ){ 
				$detailCamera	= "
				<ul>							
					<li>2.1MP High Definition</li>
					<li>1/2.8” CMOS</li>
					<li>1920X1080P@30fps</li>
					<li>Full HD 1080P</li>
					<li>4.7-94mm Lens</li>
					<li>20x Optical Zoom</li>
					<li>10 IR LEDs@495ft</li>
					<li>True Day/Night, 3D-DNR, DWDR, Privacy Masking</li>
					<li>Alarm In/Out</li>
					<li>AC 24V, PoE Plus</li>
					<li>6\"(Φ)</li>
					<li>Wall Mount Bracket Included</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "cam_28_1"  ){ 
				$detailCamera	= "
				<ul>
					<li>2.1MP High Definition</li>
					<li>1/2.8” CMOS</li>
					<li>1920X1080P@30fps</li>
					<li>Full HD 1080P</li>
					<li>4.3-129mm Lens</li>
					<li>30x Optical Zoom</li>
					<li>6 IR LEDs@394ft</li>
					<li>TrueDay/Night, 3D-DNR, D-WDR, Privacy Masking</li>
					<li>AC 24V, PoE Plus</li>
					<li>6\"(Φ)</li>
					<li>Wall Mount Bracket Included</li>
				</ul>
				";
			}
			if( $_GET["pack"] == "cam_29_1"  ){ 
				$detailCamera	= "
				<ul>
					<li>2.1MP High Definition</li>
					<li>1920X1080P@30fps</li>
					<li>4.7-94mm Lens</li>
					<li>20X Optical Zoom</li>
					<li>4 Matrix IR up to 492ft (150m)</li>
					<li>Support up to 128GB on board storage</li>
					<li>3D Privacy Masking</li>
					<li>True Day/Night, 3D DNR, DWDR</li>
					<li>Support BNC Output</li>
					<li>AC 24V, High PoE</li>
					<li>Wall Mount Bracket Included</li>
				</ul>
				";
			}
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;
		/*======== PCLPR100LTTV License Plate IP */
		case "cam_30_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "30";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_30_1"  ){
				$numPack 	= "30"; 	$model		= "PWLPR100LT"; /* URL: http://www.ltsecurityinc.com/platinum-hdtvi-bullet-camera-lpr100.html */
			}
			$describeCam 	= "IP PTZ SMART IR 2.1 MP 20X Zoom - 2.1 MP Indoor/Outdoor";
			/******* Facebook Developers */
			$fa_title		= "IP PTZ SMART IR 2.1 MP 20X Zoom - 2.1 MP Indoor/Outdoor";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "328";			$resoMP		= "2.0 MP";					$resoPixel	= "720P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>		
				<li>1/2.8’’ Progressive Scan CMOS</li>
				<li>1920 x 1080</li>
				<li>20X Optical Zoom</li>
				<li>DWDR</li>
				<li>3D intelligent positioning function</li>
				<li>Support Hik cloud P2P</li>
				<li>Up to 100m IR distance</li>
				<li>12VDC & POE(802.3at) power supply</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;	
		/*======== PCLPR100LTTV License Plate IP */
		case "cam_31_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "31";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_31_1"  ){
				$numPack 	= "31"; 	$model		= "PWDS-2CD6424FWD-10KO"; /* URL: http://www.ltsecurityinc.com/platinum-hdtvi-bullet-camera-lpr100.html */
			}
			$describeCam 	= "IP WDR Pinhole Covert Network Camera 2.1 MP";
			/******* Facebook Developers */
			$fa_title		= "IP WDR Pinhole Covert 2.1 MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "0";			$resoMP		= "2.0 MP";					$resoPixel	= "720P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>						
				<li>1/2.7’’ progressive scan CMOS</li>
				<li>Up to 2MP resolution</li>
				<li>120dB WDR</li>
				<li>ROI codec</li>
				<li>Onboard storage, up to 128GB</li>
				<li>Triple video streams</li>
				<li>Audio/Alarm IO</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
			';
			$docsPDF		= '';
		break;	
		/*======== PCLPR100LTTV License Plate IP */
		case "cam_32_1":
			/******* General */
			$totalIm 		= 2;		$vandalPro 	= "no";		$ip66 		= "si";
			$indoor			= "si";		$outdoor	= "si";		$numPackGen	= "32";
			/******* Por Equipo */
			if( $_GET["pack"] == "cam_32_1"  ){
				$numPack 	= "32"; 	$model		= "PWDS-2CD6986F-HKO"; /* URL: http://www.ltsecurityinc.com/platinum-hdtvi-bullet-camera-lpr100.html */
			}
			$describeCam 	= "IP Panoramic Dome Multi-Sensor 7.3 MP";
			/******* Facebook Developers */
			$fa_title		= "IP Panoramic Dome Multi-Sensor 7.3 MP";
			$fa_desc 		= $describeCam;
			$fa_images		= "http://powercctv.com/images/depro/cam/bg/cam_".$numPack.".1.png";
			/******* Overview */
			$shortCamDesc	= $describeCam;		$imgProduct	= "cam_".$numPack.".1.png"; $titleProd 	= $describeCam;		$description= "Protect your family and home whith this security system cameras. It is a complete powerhouse system that combines our top-of-the-line HD security cameras. Each type of camera within this system is full of high-end capabilities. This includes: pan-tilt-zoom camera lens movement, listen-in audio, and color night vision, just to name a few. With this system you will have a virtually impenetrable security system cameras standing guard at all times.";
			$nightVision 	= "130";			$resoMP		= "7.0 MP";					$resoPixel	= "720P";
			/******* Features */
			$titleCamera	= $model." - ".$describeCam;
			$detailCamera	= "
			<ul>						
				<li>Panoramic camera</li>
				<li>1/1.8” Progressive Scan CMOS</li>
				<li>4 x 5mm fixed lens</li>
				<li>180°Horizontal View</li>
				<li>Up to 7.3MP resolution (4096 × 1800)</li>
				<li>Ultra-low light</li>
				<li>3D DNR</li>
				<li>Support 128G on-board storage</li>
				<li>DC12V/PoE</li>
				<li>Audio/Alarm IO</li>
				<li>IP66 outdoor</li>
				<li>Heater & fan optiona</li>
			</ul>
			";			
			/******* Download */
			$docsPDF		= '
				<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/CAM/CAMERA-'.$model.'-SPECIFICATIONS.pdf" download>'.$titleCamera.' Specifications Manual</a></td></tr>
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
?>