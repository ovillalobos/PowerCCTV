<div class="container marginUp10 treeBody">
	<div class="col-lg-9 treeData">				
		<a href="index.php" class="linkTree" >Home )</a> Support - Download
	</div>
</div>
<div class="container marginUp10">		
	<?php /*************************************************************************************************************************************/ ?>
	<div class="col-lg-12 marginUp10 midOverview">
		<img src="images/support/ba_download.png" width="100%" >
	</div>
	<div class="col-md-3 marginUp10 midOverview">
		<div class="cssmenu_vert midOverview marginUp10">
			<ul>
				<?php				
				if( $_GET['subpage'] == "firmware" 	 ) { $clFirm   = "has-sub active"; } else { $clFirm   = "has-sub"; }
				if( $_GET['subpage'] == "magic" 	 ) { $clMagic  = "has-sub active"; } else { $clMagic  = "has-sub"; }
				if( $_GET['subpage'] == "tools" 	 ) { $clTool   = "has-sub active"; } else { $clTool   = "has-sub"; }
				if( $_GET['subpage'] == "sdk" 		 ) { $clSDK    = "has-sub active"; } else { $clSDK    = "has-sub"; }
				if( $_GET['subpage'] == "clientsoft" ) { $clClient = "has-sub active"; } else { $clClient = "has-sub"; }
				if( $_GET['subpage'] == "manuals" 	 ) { $clManual = "has-sub active"; } else { $clManual = "has-sub"; }
				if( $_GET['subpage'] == "programs" 	 ) { $clProgra = "has-sub active"; } else { $clProgra = "has-sub"; }
				if( $_GET['subpage'] == "mobile" 	 ) { $clMobile = "has-sub active"; } else { $clMobile = "has-sub"; }
				if( $_GET['subpage'] == "remotepro"  ) { $clRemote = "has-sub active"; } else { $clRemote = "has-sub"; }
				
				$menu_left    = '<li class="'.$clFirm.'"  ><a class="midMenu" href="support.php?page=download&subpage=firmware&nop=1"><span>Firmware PowerHik</span></a></li>';
				$menu_left   .= '<li class="'.$clTool.'"  ><a class="midMenu" href="support.php?page=download&subpage=tools&nop=1"><span>Tools</span></a></li>';
				$menu_left   .= '<li class="'.$clSDK.'"   ><a class="midMenu" href="support.php?page=download&subpage=sdk&nop=1"><span>SDK</span></a></li>';
				$menu_left   .= '<li class="'.$clClient.'"><a class="midMenu" href="support.php?page=download&subpage=clientsoft"><span>Client Software</span></a></li>';
				$menu_leftNo  = '<li class="'.$clManual.'"><a class="midMenu" href="support.php?page=download&subpage=manuals"><span>Manuals</span></a></li>';
				$menu_left   .= '<li class="'.$clMagic.'" ><a class="midMenu" href="support.php?page=download&subpage=magic&nop=1"><span>Magic Series DVR / NVR</span></a></li>';
				$menu_left   .= '<li class="'.$clProgra.'"><a class="midMenu" href="support.php?page=download&subpage=programs&nop=1"><span>Programs / Manuals / Firmware</span></a></li>';
				$menu_left   .= '<li class="'.$clMobile.'"><a class="midMenu" href="support.php?page=download&subpage=mobile"><span>Mobile</span></a></li>';
				$menu_left   .= '<li class="'.$clRemote.'"><a class="midMenu" href="support.php?page=download&subpage=remotepro"><span>Remote Programs</span></a></li>';
				
				echo $menu_left;
				?>
			</ul>
		</div>
	</div>
	<div class="col-md-9 marginUp10 midOverview table-responsive" >
		<?php
		/**** FIRMWARE
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "firmware" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Model</strong></td><td><strong>Version</strong></td><td><strong>Action</strong></td></tr>';
			
			if( $_GET['nop'] == '1' ){
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-90xx&96xx-ST&77xx-SP_USA", 	"version"=>"3.4.21_160630",		"link"=>"<a href='down/hik/firmware/1/DS-90xx&96xx-ST&77xx-SP_USA_Firmware_V3.4.21_160630.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-76xxNI-E1(E2)P_USA", 			"version"=>"3.4.21_160630",		"link"=>"<a href='down/hik/firmware/1/DS-76xxNI-E1(E2)P_USA_Firmware_V3.4.21_160630.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2xx2", 						"version"=>"5.4.0_160530",		"link"=>"<a href='down/hik/firmware/1/DS-2xx2_5.4.0_160530.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2x22FWD,2x42FWD", 			"version"=>"5.4.0_160401",		"link"=>"<a href='down/hik/firmware/1/DS-2x22FWD,2x42FWD_5.4.0_160401.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-4x25,4x35,4x65,4x85", 		"version"=>"5.4.0_160421",		"link"=>"<a href='down/hik/firmware/1/DS-4x25,4x35,4x65,4x85_5.4.0_160421.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-4x24FWD,4x26FWD,6026FHWD", 	"version"=>"5.4.0_160414",		"link"=>"<a href='down/hik/firmware/1/DS-4x24FWD,4x26FWD,6026FHWD_5.4.0_160414.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-4x12,4x24F,4x32,6412FWD", 	"version"=>"5.4.0_160419",		"link"=>"<a href='down/hik/firmware/1/DS-4x12,4x24F,4x32,6412FWD_5.4.0_160419.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-72xxHGHI&73xxHQHI&90xxHQHI",	"version"=>"3.1.13_160721",		"link"=>"<a href='down/hik/firmware/1/DS-72xxHGHI&73xxHQHI&90xxHQHI_TurboHD_DVR_USA_Firmware_V3.1.13_160721.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-72xxHGHI&73xxHQHI&90xxHQHI", 	"version"=>"3.1.12_160216",		"link"=>"<a href='down/hik/firmware/1/DS-72xxHGHI&73xxHQHI&90xxHQHI_TurboHD_DVR_USA_Firmware_V3.1.12_160216.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD63xxF(WD)-I(V)(S)", 		"version"=>"5.3.5 151209",		"link"=>"<a href='down/hik/firmware/1/DS-2CD63xxF-I(V)(S)_Firmware_v5.3.5_151209.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-90xx&96xx&77xx-ST", 			"version"=>"3.3.6_151230",		"link"=>"<a href='down/hik/firmware/1/DS-90xx&96xx-ST&77xx-SP_USA_Firmware_V3.3.6_151230.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-76xxNI-E1(E2)P/DS-76xxNI-E1", "version"=>"3.3.6_151229",		"link"=>"<a href='down/hik/firmware/1/DS-76xxNI-E1(E2)P_USA_Firmware_V3.3.6_151229.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"5.3.10: DF Series PTZ", 			"version"=>"5.3.10_150917",		"link"=>"<a href='down/hik/firmware/1/Raptor_DF_Pro_PTZ_Firmware_v5.3.10_150917.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"5.3.9: DE Series PTZ", 			"version"=>"5.3.9_150910",		"link"=>"<a href='down/hik/firmware/1/Raptor DE_value_PTZ_ Firmware__5.3.9_150910.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2x22FWD,2x42FWD_IPC",			"version"=>"5.3.6_151105",		"link"=>"<a href='down/hik/firmware/1/DS-2x22FWD,2x42FWD_5.3.6_151105.zip' download>Download</a>" );	
				
				$pagination = '
				<ul class="pagination">
					<li class="disabled" ><a href="#" >&laquo;</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=firmware&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=3">3</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=4">4</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=2" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '2' ){
				$menu[]	 =  array( "com"=>"HIK", "title"=>"TurboHD:DS-72xxHGHI&73xx&90xx",	"version"=>"3.1.10_151211",		"link"=>"<a href='down/hik/firmware/2/DS-72xxHGHI&73xxHQHI&90xxHQHI_TurboHD_DVR_USA_Firmware_V3.1.10_151211.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DVR/NVR:DS-90xx&96xx-ST&77xx",	"version"=>"3.3.5_151119",		"link"=>"<a href='down/hik/firmware/2/DS-90xx&96xx-ST&77xx-SP_USA_Firmware_V3.3.5_151119.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-76xx N1-E1(E2)DS-76xxNI-E1",	"version"=>"3.3.5_151127",		"link"=>"<a href='down/hik/firmware/2/DS-76xxNI-E1(E2)P_USA_Firmware_V3.3.5_151127.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-90xx&96xx-ST&77xx-SP",		"version"=>"3.3.4",				"link"=>"<a href='down/hik/firmware/2/DS-90xx&96xx-ST&77xx-SP_USA_Firmware_v3.3.4_Build_150811.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-76xxNI-E1(E2)P",				"version"=>"3.3.4",				"link"=>"<a href='down/hik/firmware/2/DS-76xxNI-E1(E2)P_USA_Firmware_3.3.4_150811.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"TurboHD DVR USA",				"version"=>"3.1.8",				"link"=>"<a href='down/hik/firmware/2/DS-72xxHGHI&73xxHQHI&90xxHGHI_TurboHD_DVR_USA_Firmware_V3.1.8_150821.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD8xx,7xx,82xx,72xx,71xx IP","version"=>"5.1.0",				"link"=>"<a href='down/hik/firmware/2/DS-2CD8xx,7xx,82xx,72xx,71xx IP Camera Firmware v5.1.0_131202.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-90xx&91xx&96xx-SH",			"version"=>"1.3.6_140915",		"link"=>"<a href='down/hik/firmware/2/DS-90xx&91xx&96xx-SH_USA_Firmware_v1.3.6_140915.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7216HVI-ST_USA",				"version"=>"1.3.0_140913",		"link"=>"<a href='down/hik/firmware/2/DS-7216HVI-ST_USA_Firmware_v1.3.0_140913.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7104NI-SL(W)_USA",			"version"=>"2.3.5_141201",		"link"=>"<a href='down/hik/firmware/2/DS-7104NI-SL(W)_USA_Firmware_v2.3.5_141201.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7204HWI-SH_USA",				"version"=>"3.0.2_141201",		"link"=>"<a href='down/hik/firmware/2/DS-7204HWI-SH_USA_Firmware_v3.0.2_141201.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7208&7308HWI-SH_USA",			"version"=>"3.0.2_141201",		"link"=>"<a href='down/hik/firmware/2/DS-7208&7308HWI-SH_USA_Firmware_v3.0.2_141201.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7216&7316HWI-SH_USA",			"version"=>"3.0.2_141201",		"link"=>"<a href='down/hik/firmware/2/DS-7216&7316HWI-SH_USA_Firmware_v3.0.2_141201.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7308&7316HFI-ST_USA",			"version"=>"2.0.4_141202",		"link"=>"<a href='down/hik/firmware/2/DS-7308&7316HFI-ST_USA_Firmware_v2.0.4_141202.zip' download>Download</a>" );	
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7332HWI-SH_USA",				"version"=>"3.0.2_141201",		"link"=>"<a href='down/hik/firmware/3/DS-7332HWI-SH_USA_Firmware_v3.0.2_141201.zip' download>Download</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=firmware&nop=1" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=1">1</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=firmware&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=3">3</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=4">4</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=3" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '3' ){
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-7604&7608NI-SE(P)",			"version"=>"2.3.11",			"link"=>"<a href='down/hik/firmware/3/DS-76xxNI-SE(P)_USA_Firmware_V2.3.11_150625.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-96128&256_Super_NVR",			"version"=>"3.0.3",				"link"=>"<a href='down/hik/firmware/3/DS-96128&256_Super_NVR_USA_Firmware_V3.0.3_150708.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-90xx&96xx-ST&77xx-SP",		"version"=>"3.1.5_150514",		"link"=>"<a href='down/hik/firmware/3/digicap(USA_NETRA_EN_STD_V3.1.5_150514).zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-72xxHGHI&73xxHQHI",			"version"=>"3.1.6_150601",		"link"=>"<a href='down/hik/firmware/3/digicap(USA_TVI_EN_STD_V3.1.6_150601).zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-96128&256_Super_NVR",			"version"=>"3.0.2_141125",		"link"=>"<a href='down/hik/firmware/3/DS-96128&256_Super_NVR_USA_Firmware_v3.0.2_141125.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-76xxNI-SE(P)",				"version"=>"2.3.10_141128",		"link"=>"<a href='down/hik/firmware/3/DS-76xxNI-SE(P)_USA_Firmware_v2.3.10_141128.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-76xxNI-E1(E2)P",				"version"=>"3.1.0_150511",		"link"=>"<a href='down/hik/firmware/3/digicap(USA_3535_EN_STD_V3.1.0_150511).zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD2x10,2x20,2x14 IP",		"version"=>"5.3.0_150513",		"link"=>"<a href='down/hik/firmware/3/DS-2CD2x10,2x20,2x14 IP camera firmware v5.3.0_150513.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD2x12,2x32 IP",				"version"=>"5.3.0_150513",		"link"=>"<a href='down/hik/firmware/3/DS-2CD2x12,2x32 IP camera firmware v5.3.0_150513.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD4x12,4x24F,4x32 IP",		"version"=>"5.3.0_150513",		"link"=>"<a href='down/hik/firmware/3/DS-2CD4x12,4x24F,4x32 IP camera firmware v5.3.0_150513.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD2942 Eco-fisheye",			"version"=>"5.2.1_141120",		"link"=>"<a href='down/hik/firmware/3/DS-2CD2942 Eco-fisheye camera firmware v5.2.1_141120.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD6332 Fisheye",				"version"=>"5.0.9 141009",		"link"=>"<a href='down/hik/firmware/3/DS-2CD6332 Fisheye firmware v5.0.9 141009.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2CD6412FWD-C2 Dual lens",		"version"=>"5.1.7 140904",		"link"=>"<a href='down/hik/firmware/3/DS-2CD6412FWD-C2 Dual lens camera firmware v5.1.7 140904.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-2x22,2x42 IP",				"version"=>"5.3.1_150410",		"link"=>"<a href='down/hik/firmware/4/DS-2x22,2x42 IP camera firmware v5.3.1_150410.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-4x24FWD,4x26FWD,6026FHWD IP",	"version"=>"5.3.0_150513",		"link"=>"<a href='down/hik/firmware/4/DS-4x24FWD,4x26FWD,6026FHWD IP camera firmware v5.3.0_150513.zip' download>Download</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=firmware&nop=2" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=2">2</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=firmware&nop=3">3</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=4">4</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=4" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '4' ){				
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DS-4x25,4x35,4x65,4x85 IP",		"version"=>"5.3.0_150513",		"link"=>"<a href='down/hik/firmware/4/DS-4x25,4x35,4x65,4x85 IP camera firmware v 5.3.0_150513.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"E Series (DS-2DE series)PTZ",	"version"=>"5.3.0_150417",		"link"=>"<a href='down/hik/firmware/4/E Series (DS-2DE series)PTZ camera firmware v5.3.0_150417.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"F Series(DS-2DF series) PTZ",	"version"=>"5.3.0_150410",		"link"=>"<a href='down/hik/firmware/4/F Series(DS-2DF series) PTZ camera firmware v5.3.0_150410.zip' download>Download</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=firmware&nop=3" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=firmware&nop=3">3</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=firmware&nop=4">4</a></li>
					<li class="disabled" ><a href="#" >&raquo;</a></li>
				</ul>';
			}
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['version'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			
			echo $string;
			echo $pagination;
		}
		/**** MAGIC
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "magic" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Model</strong></td><td><strong>Version</strong></td><td><strong>Action</strong></td></tr>';
			
			if( $_GET['nop'] == '1' ){
				$menu[]	 =  array( "com"=>"LT", "title"=>"LTD7204-HV", 			"desc"=>"<strong>Firmware</strong><br/>2.2.10_140522",			"link"=>"<a href='down/firm/DVR1_V2.2.10_140522.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVST 8800 SERIES", 	"desc"=>"<strong>Firmware</strong><br/>2014.08.08",				"link"=>"<a href='down/firm/16CH_1021-1003-1008-1004.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVST 8800 SERIES", 	"desc"=>"<strong>Firmware</strong><br/>2012.05.17",				"link"=>"<a href='down/eye/16CH_1015-1002-1006-1003.zip' download>16CH</a> / <a href='down/eye/8CH_1015-1005-1009-1004.zip' download>8CH</a> / <a href='down/eye/4CH_1017-1003-1009-1003.zip' download>4CH</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVST 8800 SERIES", 	"desc"=>"<strong>Application</strong><br/>VideoViewer",			"link"=>"<a href='down/eye/8800 Series MAC.rar' download>Mac</a> / <a href='down/eye/8800 Series Windows.rar' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVST 8800 SERIES", 	"desc"=>"<strong>Manuals</strong><br/>PDF",						"link"=>"<a href='down/eye/9000 Series User manual.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVS 9000 SERIES", 	"desc"=>"<strong>Application</strong><br/>Server 5.5.13.0",		"link"=>"<a href='down/eye/55130bm_EYEMAX.exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVS 9000 SERIES", 	"desc"=>"<strong>Application</strong><br/>Client5.5.13.0",		"link"=>"<a href='down/eye/55130bm_client_EYEMAX.exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVS 9000 SERIES", 	"desc"=>"<strong>Application</strong><br/>i-CENS",				"link"=>"<a href='down/eye/i-CENS(1.4.1_2012.10.15).exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"DVS 9000 SERIES", 	"desc"=>"<strong>Firmware</strong><br/>2.2.10_140522",			"link"=>"<a href='down/firm/DVR1_V2.2.10_140522.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"MAGIC SERIES", 		"desc"=>"<strong>Firmware</strong><br/>2.0.1.3B",				"link"=>"<a href='down/eye/TA_unixip_2.0.1.3B.rar' download>Download</a>" );			
				
				$pagination = '
				<ul class="pagination">
					<li class="disabled" ><a href="#" >&laquo;</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=magic&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=magic&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=magic&nop=2" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '2' ){				
				$menu[]	 =  array( "com"=>"EY", "title"=>"MAGIC SERIES", 		"desc"=>"<strong>Firmware</strong><br/>2.0.1.3C",				"link"=>"<a href='down/eye/TA_unixip_2.0.1.3C.rar' download>Download</a>" );			
				$menu[]	 =  array( "com"=>"EY", "title"=>"MAGIC SERIES", 		"desc"=>"<strong>Application</strong><br/>RECOVERY",			"link"=>"<a href='down/eye/TVST MAGIC SERIES RECOVERY.rar' download>Download</a>" );			
				$menu[]	 =  array( "com"=>"EY", "title"=>"MAGIC SERIES", 		"desc"=>"<strong>Manuals</strong><br/>PDF",						"link"=>"<a href='down/eye/TVST MAGIC SERIES MANUALS.rar' download>Download</a>" );			
				$menu[]	 =  array( "com"=>"EY", "title"=>"TVST PVT SERIES", 	"desc"=>"<strong>Firmware</strong><br/>2.0.1.3B",				"link"=>"<a href='down/eye/TAPR_unix_2.0.1.3B.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"TVST PVT SERIES", 	"desc"=>"<strong>Firmware</strong><br/>2.0.1.3C",				"link"=>"<a href='down/eye/TAPR_unix_2.0.1.3C.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EY", "title"=>"XVST MAGIC SERIES", 	"desc"=>"<strong>Manuals</strong><br/>PDF",						"link"=>"<a href='down/eye/XVST MAGIC SERIES MANUALS.rar' download>Download</a>" );			
				$menu[]	 =  array( "com"=>"EY", "title"=>"XVST MAGIC SERIES", 	"desc"=>"<strong>Application</strong><br/>CMS",					"link"=>"<a href='down/eye/XVST MAGIC SERIES MAC.rar' download>Mac</a> / <a href='down/eye/XVST MAGIC SERIES WINDOWS.rar' download>Windows</a>" );			
				$menu[]	 =  array( "com"=>"EY", "title"=>"XVST MAGIC SERIES", 	"desc"=>"<strong>Application</strong><br/>NetDownloader3040",	"link"=>"<a href='down/eye/NetDownloader3040.rar' download>Windows</a>" );			
				$menu[]	 =  array( "com"=>"EY", "title"=>"XVST MAGIC SERIES", 	"desc"=>"<strong>Firmware</strong><br/>2.0.1.0Z12",				"link"=>"<a href='down/eye/FXVST MAGIC SERIES FIRMWARE/32CH.rar' download>32CH</a> / <a href='down/eye/FXVST MAGIC SERIES FIRMWARE/MAGIC LITE ONLY.rar' download>MAGIC LITE ONLY</a><br/><a href='down/eye/FXVST MAGIC SERIES FIRMWARE/NMS&MAGIC PLUS.rar' download>NMS&MAGIC PLUS</a> / <a href='down/eye/FXVST MAGIC SERIES FIRMWARE/RECOVERY FOR 32 CH.rar' download>RECOVERY</a><br/><a href='down/eye/FXVST MAGIC SERIES FIRMWARE/NVR_unix_2.0.1.0Z12.rar' download>NVR_unix_2.0.1.0Z12</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=magic&nop=1" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=magic&nop=1">1</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=magic&nop=2">2</a></li>
					<li class="disabled" ><a href="#" >&raquo;</a></li>
				</ul>';
			}
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
			echo $pagination;
		}
		/**** TOOLS
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "tools" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			if( $_GET['nop'] == '1' ){
				
				$menu[]	 =  array( "com"=>"HIK", "title"=>"VSPlayer V7.2.0", 					"desc"=>"Player for video stream from Hikvision product, suitable for play, edit of the recorded video file and live view of RTSP stream",	"link"=>"<a href='down/hik/tools/VSPlayer V7.2.0.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"PowerCCTVHik Tools", 				"desc"=>"Version 1.2.1.2",	"link"=>"<a href='down/hik/tools/Tools_v1.2.1.2build20150629.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"SADP Tool", 							"desc"=>"Version 3.0.0.2",	"link"=>"<a href='down/hik/tools/SADPTool_v3.0.0.2build20150911.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"Panoramic Player", 					"desc"=>"Version 1.0.0.1",	"link"=>"<a href='down/hik/tools/PanoramicPlayer.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"Disk Space Calculator", 				"desc"=>"Version 4.0.0.2",	"link"=>"<a href='down/hik/tools/DiskCalculator_v4.0.0.2build20150911.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"USSC Web Video Plugin For DVR / NVR","desc"=>"Version 3.05.26",	"link"=>"<a href='down/hik/tools/USSC_Web_Video_Plugin_ For_DVRNVR_v3.05.26.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"DSFilters V", 						"desc"=>"Version 6.1.2.2 - Directshow Filters player plug-in is a COM component developed based on Microsoft® DirectShow® technology, and it can be used to extract, analyze and decode digital video/audio signals from Hikvision devices. Users can playback Hikvision format media files and streams via standard players such as Windows Media Player. The OS has been tested: win7/vista/xp 32/64 bit, Server2003/2008.",	"link"=>"<a href='down/hik/tools/Hik_MFPlugins_Setup_EN.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"MAC Web Component For IP Cameras", 	"desc"=>"Version 3.0.5.26",	"link"=>"<a href='down/hik/tools/MAC_web_component_For_IPC_v3.0.5.26.zip' download>Download</a>" );
			
				$pagination = '
				<ul class="pagination">
					<li class="disabled" ><a href="#" >&laquo;</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=tools&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=tools&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=tools&nop=2" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '2' ){
				$menu[]	 =  array( "com"=>"HIK", "title"=>"Format Converter", 					"desc"=>"Version 4.0.1 - The Format Convert V4.0 supports converting multiple streams of the various kinds of devices, such as DVR, encoder,network camera, network speed dome, etc.The Format Convert V4.0 also supports multiple file formats to convert to, including HIK, MPEG2-PS, MPEG2-TS, RTP, MP4,3GPP, MOV, AVI, ASF, and MKV. We sincerely hope that this Format Convert 4.0 software would help our customers in daily application requirements.",	"link"=>"<a href='down/hik/tools/FormatConverterV4.0.0Build20141215.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"PowerHi TeamViewer Quick Support",	"desc"=>"Version 1.0.1.0",	"link"=>"<a href='down/hik/tools/TeamViewerQuickSupport.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"VSPlayer for Mac OS", 				"desc"=>"VSPlayer is a free media player designed for Mac OS. It provides an intuitive, easy to use interface to play digital media file, and supports a myriad of audio and video formats. In addition, it offers many advanced features, is extremely customizable, and is available in both Chinese and English.",	"link"=>"<a href='down/hik/tools/VSPlayer for Mac.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"IP Camera Calculator", 				"desc"=>"The IPC Calculator software can be used to calculate the number of NVRs or HDVRs needed to manage the available IP cameras, and calculate the number of IP cameras which can be connected to the specified NVRs or HDVRs.",	"link"=>"<a href='down/hik/tools/IPC Calculator V1.0.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"PowerCCTVHik Tools V1.0.0.2",		"desc"=>"The Hikvision Tools are the collection of several assisting software, including SADP (search active device protocol), IPC Calculator software, Disk Calculator software and Bandwidth Calculator software.",	"link"=>"<a href='down/hik/tools/Hikvision Tools(V1.0.0.2) Setup.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"Bandwidth Calculator V2.0", 			"desc"=>"The Bandwidth Calculator software can be used to calculate the bandwidth needed when the device is in main stream live view, sub-stream live view or main stream playback, and calculate the recommended encoding parameters when the bandwidth and the other conditions of the device are given.",	"link"=>"<a href='down/hik/tools/Bandwidth Calculator V2.0.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"HIK", "title"=>"Disk Calculator V2.0", 				"desc"=>"The Disk Calculator software can be used to calculate the recording time when the disk space is given and calculate the disk space when the recording time is given. In the software, you are also allowed to configure the device parameters including device type, video standard and channel number, and the channel parameters including image quality, resolution, frame rate and bitrate. The software displays the recommended bitrate after resolution and frame rate are selected for the configuration.",	"link"=>"<a href='down/hik/tools/Disk Calculator V2.0.zip' download>Download</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=tools&nop=1" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=tools&nop=1">1</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=tools&nop=2">2</a></li>
					<li class="disabled" ><a href="#" >&raquo;</a></li>
				</ul>';
			}
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td><p class="textJustify" >'.$valArray['desc'].'</p></td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
			echo $pagination;
		}
		/**** SDK
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "sdk" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			if( $_GET['nop'] == '1' ){
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Windows SDK V6.52 (for windows X64)", 			"desc"=>"Hikvision card Windows SDK V6.52 supports to develop software for DS-4X00 series card under the Windows X64 environment. It contains SDK, drivers, demo, and user manual.",	"link"=>"<a href='down/hik/sdk/Card_SDK_Win_X64_V6.52.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Windows Driver for DS-4000/4100/4200/4300 Card", 		"desc"=>"Windows 32-bit and 64-bit card drivers are included, please read the Hikvision Card Windows Driver install Notes and FAQs(included in the downloading file) before installation.",	"link"=>"<a href='down/hik/sdk/Driver.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Windows SDK V6.0 (For DS-4200&DS-4000 Series)", 	"desc"=>"Hikvision Card Windows SDK V6.0 supports to develop software for DS-4200, DS-4100 & DS-4000 series card under the Windows environment. It contains SDK, drivers, demo and user manual.",	"link"=>"<a href='down/hik/sdk/setupEn_V6.0.exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Windows SDK V6.5 (For DS-4300 Series Card)", 	"desc"=>"Hikvision card Windows SDK V6.5 supports to develop software for DS-4300 series card under the Windows environment. It contains SDK, drivers, demo, and user manual.",	"link"=>"<a href='down/hik/sdk/setupEn_V6.5.exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Player SDK V7.0.4.4 (for Mac)", 						"desc"=>"SDK released under Mac;Video display using OpenGL, and the audio play using OpenAL;Please ensure the driving is install correctly.",	"link"=>"<a href='down/hik/sdk/Player SDK V7.0.4.4 (for Mac).zip' download>Mac</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Player SDK V7.0.2.1 (for iOS)", 						"desc"=>"Support MPEG2 decoding of Video, Support G726,amr,mpeg,aac decoding of Audio and Optimize the decoding of standard H.264",	"link"=>"<a href='down/hik/sdk/Player SDK V7.0.2.1 for iOS.zip' download>IOS</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Player SDK and Demo V6.4.1.1 (for Windows 32-bit)", 	"desc"=>"The Player SDK (hereby referred to as “The SDK” or “The player SDK”) is the secondary development kit for HIKVISION DVR, Encoder and Decoder, IP devices and compression cards, etc (Please refer to the programmer manual for detail support list of HIKVISION devices).",	"link"=>"<a href='down/hik/sdk/PlayCtrl_6.4.1.1.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"DS-4000 Linux SDK v4.3", 								"desc"=>"DS-4000 Linux SDK supports to develop software for DS-4000 series card under the Linux environment.",	"link"=>"<a href='down/hik/sdk/EN-Hikvision DS-4000 Linux SDK v4.3.zip' download>Linux</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Linux SDK V5.1(For DS-4200 & DS-4000 Series)", 	"desc"=>"Hikvision Card Linux SDK supports to develop software for DS-4200 & DS-4000 series card under the Linux environment.",	"link"=>"<a href='down/hik/sdk/EN-Hikvision Card Linux SDK V5.1.zip' download>Windows</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li class="disabled" ><a href="#" >&laquo;</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=sdk&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=sdk&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=sdk&nop=2" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '2' ){
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Windows SDK V6.52 (for windows X64)", 			"desc"=>"Hikvision card Windows SDK V6.52 supports to develop software for DS-4X00 series card under the Windows X64 environment. It contains SDK, drivers, demo, and user manual.",	"link"=>"<a href='down/hik/sdk/Card_SDK_Win_X64_V6.52.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Windows Driver for DS-4000/4100/4200/4300 Card", 		"desc"=>"Windows 32-bit and 64-bit card drivers are included, please read the Hikvision Card Windows Driver install Notes and FAQs(included in the downloading file) before installation.",	"link"=>"<a href='down/hik/sdk/Driver.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Windows SDK V6.0 (For DS-4200&DS-4000 Series)", 	"desc"=>"Hikvision Card Windows SDK V6.0 supports to develop software for DS-4200, DS-4100 & DS-4000 series card under the Windows environment. It contains SDK, drivers, demo and user manual.",	"link"=>"<a href='down/hik/sdk/setupEn_V6.0.exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Windows SDK V6.5 (For DS-4300 Series Card)", 	"desc"=>"Hikvision card Windows SDK V6.5 supports to develop software for DS-4300 series card under the Windows environment. It contains SDK, drivers, demo, and user manual.",	"link"=>"<a href='down/hik/sdk/setupEn_V6.5.exe' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Player SDK V7.0.4.4 (for Mac)", 						"desc"=>"SDK released under Mac;Video display using OpenGL, and the audio play using OpenAL;Please ensure the driving is install correctly.",	"link"=>"<a href='down/hik/sdk/Player SDK V7.0.4.4 (for Mac).zip' download>Mac</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Player SDK V7.0.2.1 (for iOS)", 						"desc"=>"Support MPEG2 decoding of Video, Support G726,amr,mpeg,aac decoding of Audio and Optimize the decoding of standard H.264",	"link"=>"<a href='down/hik/sdk/Player SDK V7.0.2.1 for iOS.zip' download>IOS</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Player SDK and Demo V6.4.1.1 (for Windows 32-bit)", 	"desc"=>"The Player SDK (hereby referred to as “The SDK” or “The player SDK”) is the secondary development kit for HIKVISION DVR, Encoder and Decoder, IP devices and compression cards, etc (Please refer to the programmer manual for detail support list of HIKVISION devices).",	"link"=>"<a href='down/hik/sdk/PlayCtrl_6.4.1.1.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"DS-4000 Linux SDK v4.3", 								"desc"=>"DS-4000 Linux SDK supports to develop software for DS-4000 series card under the Linux environment.",	"link"=>"<a href='down/hik/sdk/EN-Hikvision DS-4000 Linux SDK v4.3.zip' download>Linux</a>" );
				$menu[]	 =  array( "com"=>"HI", "title"=>"Card Linux SDK V5.1(For DS-4200 & DS-4000 Series)", 	"desc"=>"Hikvision Card Linux SDK supports to develop software for DS-4200 & DS-4000 series card under the Linux environment.",	"link"=>"<a href='down/hik/sdk/EN-Hikvision Card Linux SDK V5.1.zip' download>Windows</a>" );
				
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=sdk&nop=1" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=sdk&nop=1">1</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=sdk&nop=2">2</a></li>
					<li class="disabled" ><a href="#" >&raquo;</a></li>
				</ul>';
			}
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
			echo $pagination;
		}
		/**** CLIENT SOFTWARE
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "clientsoft" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			$menu[]	 =  array( "com"=>"HI", "title"=>"iVMS-4200(v2.5.0.5) (Windows)", 				"desc"=>"iVMS-4200 is a versatile video management software for the DVRs, NVRs, IP cameras, encoders decoders, etc. It provides multiple functionalities, including real-time live view, video recording, remote search and playback, file backup, etc., for the connected devices to meet the needs of monitoring task. With the flexible distributed structure and easy-to-use operations, the client software is widely applied to the surveillance projects of medium or small scale.",	"link"=>"<a href='down/hik/client/iVMS-4200v2.5.0.5Download_Package_contains_Lite_&_Full_versions.zip' download>Windows</a>" );
			$menu[]	 =  array( "com"=>"HI", "title"=>"iVMS-4200(v2.4.1.3) (Windows)", 				"desc"=>"iVMS-4200 is a versatile video management software for the DVRs, NVRs, IP cameras, encoders decoders, etc. It provides multiple functionalities, including real-time live view, video recording, remote search and playback, file backup, etc., for the connected devices to meet the needs of monitoring task. With the flexible distributed structure and easy-to-use operations, the client software is widely applied to the surveillance projects of medium or small scale.",	"link"=>"<a href='down/hik/client/iVMS-4200(v2.4.1.3).zip' download>Windows</a>" );
			$menu[]	 =  array( "com"=>"HI", "title"=>"iVMS-4200(v2.4.0.6) (Windows)", 				"desc"=>"iVMS-4200 is a versatile video management software for the DVRs, NVRs, IP cameras, encoders decoders, etc. It provides multiple functionalities, including real-time live view, video recording, remote search and playback, file backup, etc., for the connected devices to meet the needs of monitoring task. With the flexible distributed structure and easy-to-use operations, the client software is widely applied to the surveillance projects of medium or small scale.",	"link"=>"<a href='down/hik/client/iVMS-4200v2.4.0.6.zip' download>Windows</a>" );
			$menu[]	 =  array( "com"=>"HI", "title"=>"iVMS-4200 v1.02.02.02(for 10.10 MAC OS X)", 	"desc"=>"VMS-4200 Intelligent Video Management System is a newly designed colligation software for the remote setup, management, live view, playback and other functions of HIKVISION NVR, DVR, DVS/Decoder, IP camera and IP Speed Dome.",	"link"=>"<a href='down/hik/client/Mac-v1.02.02.02.zip' download>MAC</a>" );			
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
		}
		if( $_GET['subpage'] == "manuals" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			$menu[]	 =  array( "com"=>"EA", "title"=>"IPC/DVR/NVR", 	"desc"=>"API Document for  V1.4 PDF",	"link"=>"<a href='down/prog/TVTAPI1.4.pdf' download>Download</a>" );
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
		}
		/**** MOBILE APPLICATIONS
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "programs" 	 ){
			
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			if( $_GET['nop'] == '1' ){
				$menu[]	 =  array( "com"=>"PC", "title"=>"IPScan24", 					"desc"=>"PowerCCTV IPScan24",					"link"=>"<a href='down/prog/ipscan24.rar' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"NVMS7000", 					"desc"=>"CMS client software",					"link"=>"<a href='down/prog/NVMS7000.pkg' download>Mac</a> / <a href='down/prog/NVMS7000.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"Platinum Toolset V1.2.0.50", 	"desc"=>"Bandwidth calculator and more tools",	"link"=>"<a href='down/prog/Platinum_Toolset.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"Platinum IP Portal", 			"desc"=>"Discover online devices",				"link"=>"<a href='down/prog/Platinum IP Portal.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"Video Player", 				"desc"=>"Playback video clips",					"link"=>"<a href='down/prog/VSPlayer_Mac.zip' download>Mac</a> / <a href='down/prog/VSPlayer.zip' download>Windows</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"Codec for Media Player", 		"desc"=>"Codec for Windows Media Player",		"link"=>"<a href='down/prog/Platinum_Codec_for_Media_Player.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"Web Component for IP Camera", "desc"=>"Web component for web browser",		"link"=>"<a href='down/prog/WebVideoPlugin_IPC_V3.0.5.43.pkg' download>Download</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"Web Component for DVR/NVR", 	"desc"=>"Web component for web browser",		"link"=>"<a href='down/prog/WebVideoPlugin_NVR.pkg' download>Download</a>" );
				$menu[]	 =  array( "com"=>"LT", "title"=>"CMS", 						"desc"=>"Version 1.8.6.0",						"link"=>"<a href='down/prog/CMS20130705172632-1.8.6.0.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"Config Tool", 				"desc"=>"Version 2.0.0",						"link"=>"<a href='down/prog/General_ConfigTool_Eng_V2.00.0.R.140410.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"IP Tool", 					"desc"=>"Version 1.8.3.7",						"link"=>"<a href='down/prog/IPTool1.8.3.7.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"IP Tool 2.0", 				"desc"=>"Version 2.0.1.5",						"link"=>"<a href='down/prog/InstallIPTool V2.0.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"IPC Update Tool", 			"desc"=>"Version 1.0.0.1",						"link"=>"<a href='down/prog/UpdateTool.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"IVMS-4200 (Inter Ver.)", 		"desc"=>"Version 2.4.1.3",						"link"=>"<a href='down/prog/iVMS-4200(v2.4.1.3).rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"IVMS-4200 (USA Ver.)", 		"desc"=>"Version 2.4.0.6",						"link"=>"<a href='down/prog/iVMS-4200v2.4.0.6.zip' download>Download</a>" );

				$pagination = '
				<ul class="pagination">
					<li class="disabled" ><a href="#" >&laquo;</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=programs&nop=1">1</a></li>
					<li><a href="support.php?page=download&subpage=programs&nop=2">2</a></li>
					<li><a href="support.php?page=download&subpage=programs&nop=2" >&raquo;</a></li>
				</ul>';
			}
			
			if( $_GET['nop'] == '2' ){
				$menu[]	 =  array( "com"=>"EA", "title"=>"IVMS-4200 MAC (USA Ver.)", 		"desc"=>"Version 1.02.02.02",	"link"=>"<a href='down/prog/Mac-v1.02.02.02.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"IVMS-4200 MAC (Inter Ver.)", 		"desc"=>"Version 1.02.01.03",	"link"=>"<a href='down/prog/v1.02.01.03-iVMS-4200(Mac10.10).rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"NVMS1000 - 1", 					"desc"=>"Version 3.3.0.51103",	"link"=>"<a href='down/prog/NVMS1000 Ver3.3.0.51103_EN.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"NVMS1000 - 2", 					"desc"=>"Version 3.3.1",		"link"=>"<a href='down/prog/NVMS1000 Ver3.3.1.60127_EN.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"NVMS1200", 						"desc"=>"Version 2.1",			"link"=>"<a href='down/prog/NVMS-1200.rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"SADP (International Ver.)", 		"desc"=>"Version 3.0.0.2",		"link"=>"<a href='down/prog/SADPTool_v3.0.0.2build20150911.exe.part' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"SDK for DVR/NVR", 				"desc"=>"Version 1.2.0.62",		"link"=>"<a href='down/prog/SDK20160127(version 1.2.0.62).rar' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"SDK (USA Ver.)", 					"desc"=>"Version 2.2.3.6",		"link"=>"<a href='down/prog/SADPT V2.2.3.6.zip' download>Download</a>" );
				$menu[]	 =  array( "com"=>"EA", "title"=>"SmartPSS", 						"desc"=>"Version 1.11.1",		"link"=>"<a href='down/prog/NVMS1000 Ver3.1.0.41122_EN.rar.part' download>Mac</a> / <a href='down/prog/DH_Smart-PSS_Eng_IS_V1.11.1.R.20140910.exe.part' download>Windows</a>" );	
				$menu[]	 =  array( "com"=>"EA", "title"=>"DVST PRESTIGE SERIES", 			"desc"=>"Version All series",	"link"=>"<a href='down/eye/DVST PRESTIGE SERIES/CMS Package MAC.rar' download>CMS Mac</a> / <a href='down/eye/DVST PRESTIGE SERIES/CMS Package Windows.rar' download>CMS Windows</a> <br/>
																																<a href='down/eye/DVST PRESTIGE SERIES/Prestige_Client_1.3.2.3A.zip' download>Client</a> / <a href='down/eye/DVST PRESTIGE SERIES/Flash.rar' download>Flash</a> <br/>
																																<a href='down/eye/DVST PRESTIGE SERIES/Firmware_PR_1.1.0.9C.zip' download>Firmware</a> / <a href='down/eye/DVST PRESTIGE SERIES/Manuals.rar' download>Manuals</a>" );				
																																
				$pagination = '
				<ul class="pagination">
					<li><a href="support.php?page=download&subpage=programs&nop=1" >&laquo;</a></li>
					<li><a href="support.php?page=download&subpage=programs&nop=1">1</a></li>
					<li class="active" ><a href="support.php?page=download&subpage=programs&nop=2">2</a></li>
					<li class="disabled" ><a href="#" >&raquo;</a></li>
				</ul>';
			}
				
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
			echo $pagination;
		}
		/**** MOBILE APPLICATIONS
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "mobile" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			$menu[]	 =  array( "com"=>"LT", "title"=>"NVMS7000 Mobile App", 	"desc"=>"Remote view, remote playback",	"link"=>"<a href='https://play.google.com/store/apps/details?id=com.LTS.NVMS7000&hl=en' target='_blank' >Android</a> / <a href='https://itunes.apple.com/us/app/nvms7000/id659216417?mt=8' target='_blank' >iPhone</a>" );
			$menu[]	 =  array( "com"=>"LT", "title"=>"BroView Mobile App", 		"desc"=>"Remote view, remote playback",	"link"=>"<a href='https://play.google.com/store/apps/details?id=com.bro.network&hl=en' target='_blank' >Android</a> / <a href='https://itunes.apple.com/us/app/broview/id591704643?mt=8' target='_blank' >iPhone</a>" );
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
		}
		/**** REMOTE PROGRAMS
		******************************************************************************************************************************************************/
		if( $_GET['subpage'] == "remotepro" 	 ){
			$string  =  '<table class="tableDownload marginUp10"  >';
			$string .=  '<tr class="trFirstRed" ><td><strong>COM</strong></td><td><strong>Software</strong></td><td><strong>Description</strong></td><td><strong>Action</strong></td></tr>';
			
			$menu[]	 =  array( "com"=>"PC", "title"=>"Teamviewer", 				"desc"=>"Remote Access with Teamviewer",	"link"=>"<a href='https://www.teamviewer.com/en/download/mac/' target='_blank' >Mac</a> / <a href='https://www.teamviewer.com/en/download/windows/' target='_blank' >Windows</a>" );
			$menu[]	 =  array( "com"=>"PC", "title"=>"LogMeIn by PowerCCTV", 	"desc"=>"Remote Access with LogMeIn",		"link"=>"<a href='down/prog/PowerCCTV_Remote.msi' download>Windows</a>" );
			
			$max	 =  sizeof($menu);							
			for( $i=0 ; $i<$max ; $i++ ) {
				$valArray  = $menu[$i];
				$string   .= '<tr><td>'.$valArray['com'].'</td><td>'.$valArray['title'].'</td><td>'.$valArray['desc'].'</td><td>'.$valArray['link'].'</td></tr>';
			}
			unset($menu);
			
			$string .= '</table>';
			echo $string;
		}
		?>	
		<?php 
			$link_social_media = "support.php?page=download&subpage=".$_GET['subpage']."";
			include( "include/social_media.php" ); 
		?>	
	</div>
	
	<?php /*************************************************************************************************************************************/ ?>
	<!-- Modal -->
	<div class="modal fade bs-example-modal-sm modalMSG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">PowerCCTV</h4>
		  </div>
		  <div class="modal-body"></div>
		  <div class="modal-footer"></div>
		</div>
	  </div>
	</div>
	<!-- Modal --> 
</div>	