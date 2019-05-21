<?php
$showPage = "no";
if( isset($_GET["pack"]) ){
	$showPage = "yes";
	
	switch( $_GET["pack"] ){
/* ====================================================================================================
1LOCKBOX
======================================================================================================= */
		case "lockbox18":
		case "lockbox21":
			/* General
			**************************************************************************************/
			$numPackGen = "1";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 3;			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "lockbox18"  ){
				$model	 = "PCCLT-DVRLB18-18-5TV";
				$numPack = "2"; 
			}
			if( $_GET["pack"] == "lockbox21"  ){ 
				$model	 = "PCCLT-DVRLB21-21-8TV";
				$numPack = "1";	
			}
			$shortDescGen	= "Security Box (Lookbox)";
			$longDescGen 	= "Security Box for your (DVR) Digital Video Recorder/(NVR) Network Video Recorder";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= $shortDescGen;
			$fa_desc 		= $longDescGen;
			$fa_images		= "http://powercctv.com/images/depro/acce/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/						
			$titleProd 		= $longDescGen;
			$description	= "Protect your family, home and you security system whith this LockBox for your DVR) Digital Video Recorder/(NVR) Network Video Recorder. This box is a safety for your recorder and the information that you have on the HD, we have the best solution for you";
			/* Description
			**************************************************************************************/						
			$titleDesc		= "Safety you family and your recorder DVR/NVR";
			$detailDesc		= "You can save your recorder wherever you want, with this box you are sure that nothing will see the videos or stolen the device.";
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<div class="col-lg-12 marginUp10 midDocument animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Download</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
				<div class="col-lg-12 marginUp10 animationRight">
					<div class="col-md-12">
						<p class="titleProd">Documentation</p>
						<p class="bodyProd"><table class="tableDownload" style="border: 1px solid #E7E7E7;" width="100%" >
							<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/ACCE/ACCE-'.$model.'-SPECIFICATIONS.pdf" download>Accessories Specifications Manual</a></td></tr>
						</table></p>
					</div>
				</div>
			';
			$docsPDF		= '';
		break;
/* ====================================================================================================
1RACKS
======================================================================================================= */
		case "rack27":
		case "rack35":
		case "rack42":
			/* General
			**************************************************************************************/
			$numPackGen = "3";
			$numPack 	= "0";
			$cameras 	= "0";
			$channel	= "0";
			$totalIm 	= 3;			
			/* Por equipo
			**************************************************************************************/
			if( $_GET["pack"] == "rack27"  ){
				$model	 = "PCCRCS-2724TV";
				$numPack = "3"; 
				/* Whats Include
				**************************************************************************************/
				$whatInclude	= '
					<div class="col-lg-12 marginUp10 midFeatures animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Features</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
					<div class="col-lg-12 marginUp10 animationRight">
						<div class="col-md-12">
							<p class="titleProd">Description '.$model.'</p>
							<p class="bodyProd">
								The Essex RCS Series Residential Configured Rack System offers exceptional quality and value at cost-effective prices for residential installers. It is completely assembled at the factory and ships with pre-installed accessories to save contractors time in the field while eliminating packaging waste.

								<li>Fully welded steel construction</li>
								<li>Ships fully assembled to save time</li>
								<li>Locking removable side panels for easy integration</li>
								<li>Glass front door, locking rear access panel standard</li>
								<li>Includes front and rear adjustable rackrail</li>
								<li>Assembled with 5 shelves and 5 blank panels</li>
								<li>Top mounted DC fans</li>
								<li>One set of Essex accessory brackets included to mount vertical power or lace strips</li>
								<li>Add a bracket to mount additional Essex accessories, ESX-ACC-BKT</li>
							</p>
						</div>				
					</div>
				';
				//$whatInclude	= '';
			}
			if( $_GET["pack"] == "rack35"  ){ 
				$model	 = "PCCRCS-3524TV";
				$numPack = "4";
				/* Whats Include
				**************************************************************************************/
				$whatInclude	= '
					<div class="col-lg-12 marginUp10 midFeatures animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Features</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
					<div class="col-lg-12 marginUp10 animationRight">
						<div class="col-md-12">
							<p class="titleProd">Description '.$model.'</p>
							<p class="bodyProd">
								The Essex RCS Series Residential Configured Rack System offers exceptional quality and value at cost-effective prices for residential installers. It is completely assembled at the factory and ships with pre-installed accessories to save contractors time in the field while eliminating packaging waste.

								<li>Fully welded steel construction</li>
								<li>Ships fully assembled to save time</li>
								<li>Locking removable side panels for easy integration</li>
								<li>Glass front door, locking rear access panel standard</li>
								<li>Includes front and rear adjustable rackrail</li>
								<li>Assembled with 7 shelves and 7 blank panels</li>
								<li>Top mounted DC fans</li>
								<li>One set of Essex accessory brackets included to mount vertical power or lace strips</li>
								<li>Add a bracket to mount additional Essex accessories, ESX-ACC-BKT</li>
							</p>
						</div>				
					</div>
				';
				//$whatInclude	= '';				
			}
			if( $_GET["pack"] == "rack42"  ){ 
				$model	 = "PCCRCS-4224TV";
				$numPack = "5";	
				/* Whats Include
				**************************************************************************************/
				$whatInclude	= '
					<div class="col-lg-12 marginUp10 midFeatures animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Features</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
					<div class="col-lg-12 marginUp10 animationRight">
						<div class="col-md-12">
							<p class="titleProd">Description '.$model.'</p>
							<p class="bodyProd">
								The Essex RCS Series Residential Configured Rack System offers exceptional quality and value at cost-effective prices for residential installers. It is completely assembled at the factory and ships with pre-installed accessories to save contractors time in the field while eliminating packaging waste.

								<li>Fully welded steel construction</li>
								<li>Ships fully assembled to save time</li>
								<li>Locking removable side panels for easy integration</li>
								<li>Glass front door, locking rear access panel standard</li>
								<li>Includes front and rear adjustable rackrail</li>
								<li>Assembled with 9 shelves and 9 blank panels</li>
								<li>Top mounted DC fans</li>
								<li>One set of Essex accessory brackets included to mount vertical power or lace strips</li>
								<li>Add a bracket to mount additional Essex accessories, ESX-ACC-BKT</li>
							</p>
						</div>				
					</div>
				';
				//$whatInclude	= '';
			}
			$shortDescGen	= "Security Box (Lookbox)";
			$longDescGen 	= "Security Box for your (DVR) Digital Video Recorder/(NVR) Network Video Recorder";
			/* Facebook Developers
			**************************************************************************************/		
			$fa_title		= $shortDescGen;
			$fa_desc 		= $longDescGen;
			$fa_images		= "http://powercctv.com/images/depro/acce/bg/pk_".$numPack.".1.png";
			/* Overview
			**************************************************************************************/						
			$titleProd 		= $longDescGen;
			$description	= "Protect your family, home and you security system whith this LockBox for your DVR) Digital Video Recorder/(NVR) Network Video Recorder. This box is a safety for your recorder and the information that you have on the HD, we have the best solution for you";
			/* Description
			**************************************************************************************/						
			$titleDesc		= "Safety you family and your recorder DVR/NVR";
			$detailDesc		= "Everithing only a one place, with the 3 difentes rack where you could store video, data and voice  width especial server pn the reak";
			/* Download
			**************************************************************************************/
			$docsPDF		= '
				<div class="col-lg-12 marginUp10 midDocument animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Download</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
				<div class="col-lg-12 marginUp10 animationRight">
					<div class="col-md-12">
						<p class="titleProd">Documentation</p>
						<p class="bodyProd"><table class="tableDownload" style="border: 1px solid #E7E7E7;" width="100%" >
							<tr><td valign="left" width="30px" ><img src="images/icon/pdficon.png" width="20px" ></td><td valign="left" style="text-align: left;" ><a href="docs/pdf/ACCE/ACCE-'.$model.'-SPECIFICATIONS.pdf" download>Accessories Specifications Manual</a></td></tr>
						</table></p>
					</div>
				</div>
			';
			//$docsPDF		= '';
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