<?php
/****************************************************************************************************************************************
CLAVE	AUTOR		FECHA		DESCRIPTION
-------	-----------	-----------	---------------------------------------------------------------------------------------------------------
QUIINCL OVVC		10/27/2016	QUITAR INCLUDE DE LA PARTE DE ABAJO Y MOSTRARLA SIEMPRE PARA LOS DOS DISPOSITIVOS
-------	-----------	-----------	---------------------------------------------------------------------------------------------------------
*****************************************************************************************************************************************/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
include( "mod/prod_detail/detail_pack.php" );
?>
<html lang="en">
<head>	
	<?php 	
	if ( $showPage == "yes" ){
		$fa_link = "http://powercctv.com/detail_pack.php?pack=".$_GET["pack"];
		include("include/fa_metatags.php");
	}

	include( "include/head.php" ); 
	$typeMenu	= "menuPackDetail";
	?>
</head>
<?php include( "include/protectHTML.php" );?>
	<?php if ( $showPage == "yes" ){ ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php include_once("include/analyticstracking.php"); ?>
	<?php 
	/* HEAD
	***************************************************************************************************************/?>
	<?php 
		include( "include/h_top.php" );
		include( "include/h_menu.php" );
		include( "include/h_callus.php" );
	?>
	<?php 
	/* BODY
	***************************************************************************************************************/?>
	<div class="container marginUp10 treeBody">
		<div class="col-lg-9 treeData">				
			<a href="index.php" class="linkTree" >Home )</a> <?php echo $titleProd; ?>
		</div>
	</div>
	<div class="container marginUp10">
		<div class="col-lg-8 marginDown10">	
			<div id="gallery" class="eagle-gallery gallery500" style="margin-top: 0px;">
				<div class="owl-carousel">
					<?php
					for( $i=1 ; $i<$totalIm ; $i++ ){
						echo '<img src="images/depro/pack/sm/pk_'.$numPack.'.'.$i.'.png" data-medium-img="images/depro/pack/md/pk_'.$numPack.'.'.$i.'.png" data-big-img="images/depro/pack/bg/pk_'.$numPack.'.'.$i.'.png" alt="">';						
					}
					echo '<img src="images/depro/pack/sm/include.png" data-medium-img="images/depro/pack/md/pk_'.$numPack.'.'.$totalIm.'.png" data-big-img="images/depro/pack/bg/pk_'.$numPack.'.'.$totalIm.'.png" alt="">';
					echo '<img src="images/depro/gen/sm/remote.png" data-medium-img="images/depro/gen/md/remote.png" data-big-img="images/depro/gen/bg/remote.png" alt="">';
					?>					
				</div>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-4" >	
			<h1 class="deproTitle" ><?php echo $titleProd; ?></h1>
			<h3 class="deproModel" ><?php echo $model; ?></h3>
			<hr/>
			<center><img src="images/icon/powercctv.png" class="img70por" ></center><br/><br/>
			<?php
			/************************************************************************
			CLAVE:  QUIINCL
			<div class="brdIncludeMobile" >
				<h1 class="boldTxt" >What's Include?</h1>
				<ul>
					<li><?php echo $marcaRecord." ".$recorder." ".$channel." Channel"; ?></li>
					<li><?php echo "<span class='txtRed'>".$cameras." cameras ".$shortCamDesc."</span>"; ?></li>
					<li><?php echo $shortQuaCam; ?></li>
					<li><?php echo "<span class='txtRed'>".$hdStorage." TB WD Purple Hard Drive"."</span>"; ?></li>
					<li><?php echo "Night Vision Smart IR ".$nightVision." FT"; ?></li>
					<li><?php echo "<span class='txtRed'>".$place."</span>"; ?></li>
					<li>Remote View Configuration</li>
					<li><span class="txtRed">Installation Included</span></li>
					<li>3 years warranty equipment (cameras & <?php echo $recorder; ?>)</li>
					<li><span class="txtRed">6 moths warranty labor</span></li>
					<li>FREE tech support</li>
					<li><span class="txtRed">Monitor Not Included</span></li>
				</ul>
			</div>
			***********************************************************************/
			?>
			<div class="brdIncludeDesktop" >
				<img src="images/depro/icon/warranty.png" class="depWarranty" ><br/><br/>
			</div>
			<?php 
				$link_social_media = $fa_link;
				include( "include/social_media_detail.php" ); 
			?>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 brdIncludeDesktop">
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				echo '<img src="images/icon/nighVisin_'.$nightVision.'.png" class="img70por" >';
				/*
				switch($nightVision){
					case "65" : echo '<img src="images/icon/nighVisin_65.png" class="img70por" >' ; break;
					case "100": echo '<img src="images/icon/nighVisin_100.png" class="img70por" >'; break;
					case "130": echo '<img src="images/icon/nighVisin_130.png" class="img70por" >'; break;
					case "131": echo '<img src="images/icon/nighVisin_131.png" class="img70por" >'; break;
					case "165": echo '<img src="images/icon/nighVisin_165.png" class="img70por" >'; break;
					case "200": echo '<img src="images/icon/nighVisin_200.png" class="img70por" >'; break;
				}*/
				?>
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($channel){
					case "4" : echo '<img src="images/icon/channel_4.png" class="img70por" >' ; break;
					case "8" : echo '<img src="images/icon/channel_8.png" class="img70por" >' ; break;
					case "16": echo '<img src="images/icon/channel_16.png" class="img70por" >'; break;
				}
				?>				
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($channel){
					case "4" : echo '<img src="images/icon/cameras_4.png" class="img70por" >' ; break;
					case "8" : echo '<img src="images/icon/cameras_8.png" class="img70por" >' ; break;
					case "16": echo '<img src="images/icon/cameras_16.png" class="img70por" >'; break;
				}
				?>	
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($resoMP){
					case "2.1 MP": echo '<img src="images/icon/megapixel_2.1.png" class="img70por" >'; break;
					case "3.0 MP": echo '<img src="images/icon/megapixel_3.0.png" class="img70por" >'; break;
					case "4.1 MP": 
					case "4K MP" : echo '<img src="images/icon/megapixel_4k.png" class="img70por" >' ; break;
					case "5.0 MP": echo '<img src="images/icon/megapixel_5.0.png" class="img70por" >' ; break;
				}
				?>	
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				echo '<img src="images/icon/hd_'.$hdStorage.'tb.png" class="img70por" >';
				/*
				switch($hdStorage){
					case "1": echo '<img src="images/icon/hd_1tb.png" class="img70por" >'; break;
					case "2": echo '<img src="images/icon/hd_2tb.png" class="img70por" >'; break;
					case "4": echo '<img src="images/icon/hd_4tb.png" class="img70por" >'; break;
				}
				*/
				?>
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes">
				<center>
				<img src="images/icon/remote_access.png" class="img70por" >
				</center>
			</div>
		</div>		
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 posMidMenu1">
			<div class="cssmenu_midd middMenu"><?php include( "include/mid_menu.php" ); ?></div>
		</div>
		
		<?php
		/************************************************************************
		CLAVE:  QUIINCL
		*************************************************************************/
		?>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOverview animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">What's Include?</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="brdInclude" >
				<ul>
					<li><?php echo $marcaRecord." ".$recorder." ".$channel." Channel"; ?></li>
					<li><?php echo "<span class='txtRed'>".$cameras." cameras ".$shortCamDesc."</span>"; ?></li>
					<li><?php echo $shortQuaCam; ?></li>
					<li><?php echo "<span class='txtRed'>".$hdStorage." TB WD Purple Hard Drive"."</span>"; ?></li>
					<li><?php echo "Night Vision Smart IR ".$nightVision." FT"; ?></li>
					<li><?php echo "<span class='txtRed'>".$place."</span>"; ?></li>
					<li>Remote View Configuration</li>
					<li><span class="txtRed">Installation Included</span></li>
					<li>3 years warranty equipment (cameras & <?php echo $recorder; ?>)</li>
					<li><span class="txtRed">6 moths warranty labor</span></li>
					<li>FREE tech support</li>
					<li><span class="txtRed">Monitor Not Included</span></li>
				</ul>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOverview animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Overview</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<br/>
			<div class="col-md-5">
				<img src=<?php echo "images/depro/pack/bg/".$imgProduct; ?> width="100%" >
				<img src="images/depro/icon/harddrive.png" width="100%" >
			</div>
			<div class="col-md-7">
				<p class="titleProd"><?php echo $titleProd; ?></p>
				<p class="bodyProd"><?php echo $description; ?></p>
			</div>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midNightVision animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Night Vision</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-12">
				<!--img src="images/depro/icon/night_vision_<?php //echo $nightVision; ?>.png" width="100%" -->
				<?php echo '<img src="images/depro/pack/bg/pk_'.$numPackGen.'.nightvision.png" width="100%" >'; ?>
			</div>			
			<!--div class="col-md-4">
				<p class="bodyProd">Feel confident that your property is safe throughout the night, the camera from PCCTV comes with a night vision functionality that can see up to 60ft / 18m in the dark. An automatic infrared cut filter (ICR) works to ensure that true-to-life colors are represented naturally during the day, and that black and white infrared images at night are as detailed as possible. This allows you to rest assured with the knowledge that your security cameras will be there for you when you need them most, even during the darkest hours of the night.</p>				
			</div-->
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midIndoor animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Indoor</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-9">
				<?php echo '<img src="images/depro/pack/bg/pk_'.$numPackGen.'.indoor.png" width="100%" >'; ?>
				<br/><br/>
			</div>			
			<div class="col-md-3">
				<p class="bodyProd">Protect your home and family adding a set of eyes inside with this high-definition indoor camera, featuring wireless connectivity, crisp image quality and 24/7 surveillance. You can use the Indoor Camera to monitor a baby, check in on your kids, or capture video evidence of a home intruder.</p>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOutdoor animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Outdoor</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-9">
				<?php echo '<img src="images/depro/pack/bg/pk_'.$numPackGen.'.outdoor.png" width="100%" >'; ?>
				<br/><br/>
			</div>			
			<div class="col-md-3">
				<p class="bodyProd">Weatherproof security cameras built for the outdoors. High powered winds, torrential downpours or even full fledged snowstorms are no match for the security camera. These weatherproof security cameras can persevere through the most unforgiving climates.</p>
			</div>
		</div>
		<?php
		/*************************************************************************************************************************************/
		if( $vandalPro 	== "si" ){
			echo '	<div class="col-lg-12 marginUp10 midOutdoor animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Vandal Proof</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>';
			echo '	<div class="col-lg-12 marginUp10 animationRight">
						<div class="col-md-12">
							<img src="images/depro/pack/bg/pk_'.$numPackGen.'.vandalproof.png" width="100%" ><br/><br/>
						</div>			
					</div>';
		}
		/*************************************************************************************************************************************/
		?>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midRemoteA animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Remote Access</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-12">
				<img src="images/depro/icon/remote_hand_2.png" width="100%" >
			</div>
			<div class="col-md-12">
				<img src="images/depro/icon/works-with.jpg" width="100%" >
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midResolution animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Full <?php echo $resoPixel; ?> resolution</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-9">
			<?php echo '<img src="images/depro/pack/bg/pk_'.$numPackGen.'.hd.png" width="100%" >'; ?>
			</div>
			<div class="col-md-3">
				<p class="bodyProd">Receive full <?php echo $resoPixel; ?> high definition video footage thanks to the <?php echo $resoMP; ?> image sensor within each of your security cameras. You can also expect smooth on-screen motion from your cameras. They are capable of delivering real-time video (even at <?php echo $resoPixel; ?> resolution).</p>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midHardDrive animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Hard Drive</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-4">
				<img src="images/depro/icon/hd_purple_<?php echo $hdStorage; ?>.png" width="100%" >
			</div>	
			<div class="col-md-8">
				<p class="titleProd">WD Purple hard drive - Superior surveillance</p>
				<p class="bodyProd">WD Purple drives are built for 24/7, always-on, high-definition security systems. With support for up to 8 hard drives and 32 cameras, WD Purple drives are optimized for surveillance. WD Purple surveillance storage also comes with WD's exclusive AllFrame technology, so you can confidently create a security system tailored to the needs of your business. Using AllFrame technology, WD Purple drives improve ATA streaming to reduce errors, pixilation, and video interruptions that happen when the wrong drive is used in your video recorder system.</p>				
				<p class="bodyProd">WD Purple drives have been engineered specifically for surveillance, so they're able to withstand the extreme heat fluctuations and equipment vibrations within an DVR environment. An average desktop drive is built to run for only short intervals, not the harsh 24/7 always-on environment of a high-definition surveillance system. A disruption to a drive could result in a failure that impacts multiple users, your security archive, or even the entire system. With WD Purple, you get reliable, surveillance-class storage that's tested for compatibility in a wide-range of security systems.</p>
			</div>		
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midFeatures animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Features</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-12">
				<p class="titleProd"><?php echo $titleRecord; ?></p>
				<p class="bodyProd"><?php echo $detailRecord; ?></p><br/><br/>
				<p class="titleProd"><?php echo $titleCamera; ?></p>
				<p class="bodyProd"><?php echo $detailCamera; ?></p><br/><br/>		
				<?php
				/************************************************************************
				CLAVE:  QUIINCL				
				<p class="titleProd">Includes</p>
				<p class="bodyProd">
					<ul>
						<li><?php echo "<span class='txtRed boldTxt' >".$marcaRecord."</span> ".$recorder." ".$channel." Channel"; ?></li>
						<li><?php echo $cameras." cameras ".$shortCamDesc; ?></li>
						<li><?php echo $shortQuaCam; ?></li>
						<li><?php echo $hdStorage." TB WD Purple Hard Drive"; ?></li>
						<li><?php echo "<span class='txtRed boldTxt' > Night Vision</span> Smart IR ".$nightVision." FT"; ?></li>
						<li><?php echo $place; ?></li>
						<li>Remote View Configuration</li>
						<li>Installation Included</li>
						<li>3 years warranty equipment (cameras & <?php echo $recorder; ?>)</li>
						<li>6 moths warranty labor</li>
						<li><span class="txtRed boldTxt">FREE</span> tech support</li>
						<li><span class="txtRed boldTxt">Monitor Not Included</span></li>
					</ul>
				</p>
				************************************************************************/
				?>
			</div>				
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midVideos animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Videos</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-6">
				<center><video width="100%" style="max-width: 1100px; margin: 10px auto;" controls  poster="videos/WDPurple.png" ><source src="videos/WDPurple.mp4" type="video/mp4">Your browser does not support the video tag.</video></center>
			</div>
			<div class="col-md-6">
				<center><video width="100%" style="max-width: 1100px; margin: 10px auto;" controls  poster="videos/nighVision.png" ><source src="videos/nighVision.mp4" type="video/mp4">Your browser does not support the video tag.</video></center>
			</div>
		</div>
		<?php 
		/*************************************************************************************************************************************/ 
		if( $docsPDF != '' ){
			echo'<div class="col-lg-12 marginUp10 midDocument animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Download</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>';
			echo'<div class="col-lg-12 marginUp10 animationRight">
					<div class="col-md-12">
						<p class="titleProd">Documentation</p>
						<p class="bodyProd"><table class="tableDownload" style="border: 1px solid #E7E7E7;" width="100%" >'.$docsPDF.'</table></p>
					</div>
				 </div>';
		}
		
		echo '<div class="col-lg-12 marginUp10 posMidMenu"><div class="cssmenu_midd middMenuBottom">';
				include( "include/mid_menu.php" );
		echo '</div></div>';
		/*************************************************************************************************************************************/
		?>
	</div>	
	<?php 
	/* FOOTER
	***************************************************************************************************************/?>
	<?php include( "include/f_footer_warranty.php" ); ?>
	<?php include( "include/f_footer_bottom.php" ); ?>
	<?php 
	/* JSS -- JQUERY -- JAVASCRIPT
	***************************************************************************************************************/?>
	<?php include( "include/f_jquery.php" ); ?>    
	
	<script type="text/javascript" src="js/gallery/eagle.gallery.min.js"></script>		
	<script>
		$(document).ready(function() {
			$("#gallery").eagleGallery({
				changeMediumStyle: true,
				autoPlayMediumImg: false,
				openGalleryStyle: 'transform',
				bottomControlLine: false
			});
		});
	</script>
	<?php } ?>
</body>
</html>