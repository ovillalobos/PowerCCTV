<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>PowerCCTV - Accesories</title>
	<meta name="description" 	content="PowerCCTV - Find accessories for your surveillance security system.">
	<?php 
		include( "include/head.php" );
	?>
</head>
<body oncontextmenu="return false" onkeydown="return false">
	<?php include_once("include/analyticstracking.php") ?>
	<!-- HEAD
	-------------------------------------------------------------------------------------------->
	<?php 
		include( "include/h_top.php" );
		include( "include/h_menu.php" );
		include( "include/h_callus.php" );
	?>	
	<!-- BODY
	-------------------------------------------------------------------------------------------->
	<div class="container marginUp10 treeBody">
		<div class="col-lg-9 treeData">				
			<a href="index.php" class="linkTree" >Home )</a> Accessories
		</div>
	</div>
	<div class="container marginUp">
	<?php
	$contador = 0;
	/*** HIKVISION
	****************************************************************************************************************************************************************************************/
	/*** DIGITAL
	**********************************************************************/
	$descProd 	= array( 
				"title"=>"Lockbox 18", 
				"desc"=>"Security Box for: <br/>(DVR) Digital Video Recorder<br/>(NVR) Network Video Recorder <br/> Size 18 Inch", 
				"urlLink"=>"lockbox18",
				"srcimg"=>"images/depro/acce/menu/PCCLT-DVRLB18-18-5TV.png", 
				"altimg"=>"PCCLT-DVRLB18-18-5TV"); 
				$product[$contador] = $descProd; $contador ++;		
	$descProd 	= array( 
				"title"=>"Lockbox 21", 
				"desc"=>"Security Box for: <br/>(DVR) Digital Video Recorder<br/>(NVR) Network Video Recorder <br/> Size 21 Inch", 
				"urlLink"=>"lockbox21",
				"srcimg"=>"images/depro/acce/menu/PCCLT-DVRLB21-21-8TV.png", 
				"altimg"=>"PCCLT-DVRLB21-21-8TV"); 
				$product[$contador] = $descProd; $contador ++;	
	$descProd 	= array( 
				"title"=>"RCS Series Rack", 
				"desc"=>"Model: PCCRCS-2724TV-KO <br/>The Essex RCS Series Residential Configured Rack System offers exceptional quality and value at cost-effective prices for residential installers.", 
				"urlLink"=>"rack27",
				"srcimg"=>"images/depro/acce/menu/PCCRCS-2724TV.png", 
				"altimg"=>"PCCRCS-2724TV"); 
				$product[$contador] = $descProd; $contador ++;		
	$descProd 	= array( 
				"title"=>"RCS Series Rack", 
				"desc"=>"Model: PCCRCS-3524TV-KO <br/>The Essex RCS Series Residential Configured Rack System offers exceptional quality and value at cost-effective prices for residential installers.", 
				"urlLink"=>"rack35",
				"srcimg"=>"images/depro/acce/menu/PCCRCS-3524TV.png", 
				"altimg"=>"PCCRCS-3524TV"); 
				$product[$contador] = $descProd; $contador ++;		
	$descProd 	= array( 
				"title"=>"RCS Series Rack", 
				"desc"=>"Model: PCCRCS-4224TV-KO <br/>The Essex RCS Series Residential Configured Rack System offers exceptional quality and value at cost-effective prices for residential installers.", 
				"urlLink"=>"rack42",
				"srcimg"=>"images/depro/acce/menu/PCCRCS-4224TV.png", 
				"altimg"=>"PCCRCS-4224TV"); 
				$product[$contador] = $descProd; $contador ++;	
	
	/*** PROCESO
	****************************************************************************************************************************************************************************************/
	$max = sizeof($product);
	for( $i=0 ; $i<$max ; $i++ ) {
		$valueArray = $product[$i];
		$nameClase 	= "";
		if( $i <= 5 ){ $nameClase = "fadeInOVVC"; } else { $nameClase = "animationLeft"; }
		echo '<div class="col-lg-6 menuProducts"  >
				<div class="productMain '.$nameClase.'" >
					<div class="row">
						<div class="col-md-5">
							<h2 class="pro_title">'.$valueArray['title'].'</h2>
							<p>'.$valueArray['desc'].'</p>
						</div>
						<div class="col-md-7">
							<img style="margin: 15px auto; width: 100%;" src="'.$valueArray['srcimg'].'" alt="'.$valueArray['altimg'].'" >
							<a href="detail_acce.php?pack='.$valueArray['urlLink'].'" class="btn btn-primary btn-lg btnMenuDesk openModalMenu" >Know more...</a>
						</div>
					</div>
				</div>
			</div>';
	}
	?>
	</div>
	<!-- FOOTER
	-------------------------------------------------------------------------------------------->
	<?php include( "include/f_footer_warranty.php" ); ?>
	<?php include( "include/f_footer_bottom.php" ); ?>
	<!-- JSS -- JQUERY -- JAVASCRIPT 
	-------------------------------------------------------------------------------------------->
	<?php include( "include/f_jquery.php" ); ?>
    
</body>
</html>