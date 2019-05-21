<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
include( "mod/prod_detail/detail_prod.php" );
?>
<html lang="en">
<head>	
	<?php 	
	if ( $showPage == "yes" ){
		$fa_link = "http://powercctv.com/pack_detail.php?pack=".$_GET["pack"];
		include("include/fa_metatags.php");
	}

	include( "include/head.php" ); 
	$typeMenu	= "menuProd";
	?>
</head>
<body class="fadeInOVVC" oncontextmenu="return false" onkeydown="return false">
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
						echo '<img src="images/depro/cam/sm/cam_'.$numPack.'.'.$i.'.png" data-medium-img="images/depro/cam/md/cam_'.$numPack.'.'.$i.'.png" data-big-img="images/depro/cam/bg/cam_'.$numPack.'.'.$i.'.png" alt="">';						
					}
					echo '<img src="images/depro/gen/sm/remote.png" data-medium-img="images/depro/gen/md/remote.png" data-big-img="images/depro/gen/bg/remote.png" alt="">';
					?>					
				</div>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-4" >	
			<p class="deproTitle" ><?php echo $titleProd; ?></p>
			<p class="deproModel" ><?php echo $model; ?></p>
			<hr/>
			<center><img src="images/icon/hikvision.png" class="img70por" ></center><br/><br/>	
			<div class="brdIncludeMobile" >
				<p class="titleProd"><?php echo $titleCamera; ?></p>
				<p class="bodyProd"><?php echo $detailCamera; ?></p>
			</div>
			<div class="brdIncludeDesktop" >
				<img src="images/depro/icon/warranty.png" class="depWarranty" ><br/><br/>
				<table width="100%" >
					<tr>
						<td><div class="fb-like" 			data-href="<?php echo $fa_link;?>" 	data-layout="button_count" data-action="like" data-show-faces="true" ></div></td>
						<td><div class="fb-share-button" 	data-href="<?php echo $fa_link;?>"	data-layout="button_count" data-mobile-iframe="true"></div></td>
						<td><div class="fb-follow" 			data-href="https://www.facebook.com/Power-CCTV-627055747368725/" 	data-layout="button_count" data-show-faces="true"></div></td>
					</tr>
				</table>
			</div>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 brdIncludeDesktop">
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($nightVision){
					case "65" : echo '<img src="images/icon/nighVisin_65.png" class="img70por" >' ; break;
					case "100": echo '<img src="images/icon/nighVisin_100.png" class="img70por" >'; break;
					case "130": echo '<img src="images/icon/nighVisin_130.png" class="img70por" >'; break;
					case "131": echo '<img src="images/icon/nighVisin_131.png" class="img70por" >'; break;
					case "165": echo '<img src="images/icon/nighVisin_165.png" class="img70por" >'; break;
					case "200": echo '<img src="images/icon/nighVisin_200.png" class="img70por" >'; break;
				}
				?>
				</center>
			</div>
			<?php
			if( $ip66 == 'si' ){
				echo '<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray"><center><img src="images/icon/ip66.png" class="img70por" ></center></div>';
			} else {
				echo '<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray"><center><img src="images/icon/ulListed.png" class="img70por" ></center></div>';
			}
			if( $vandalPro == 'si' ){
				echo '<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray"><center><img src="images/icon/vandalProof.png" class="img70por" ></center></div>';
			} else {
				echo '<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray"><center><img src="images/icon/wdr.png" class="img70por" ></center></div>';
			}
			?>						
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($resoMP){
					case "1.3 MP": echo '<img src="images/icon/megapixel_1.3.png" class="img70por" >'; break;
					case "2.0 MP": echo '<img src="images/icon/megapixel_2.1.png" class="img70por" >'; break;
					case "3.0 MP": echo '<img src="images/icon/megapixel_3.0.png" class="img70por" >'; break;
					case "4.0 MP": 
					case "4K MP" : echo '<img src="images/icon/megapixel_4k.png" class="img70por" >' ; break;
					case "6.0 MP": echo '<img src="images/icon/megapixel_6.0.png" class="img70por" >'; break;
					case "12.0 MP": echo '<img src="images/icon/megapixel_12.0.png" class="img70por" >'; break;
				}
				?>	
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($resoMP){
					case "1.3 MP": echo '<img src="images/icon/hd_720.png" class="img70por" >'; break;
					case "2.0 MP": echo '<img src="images/icon/hd_1080.png" class="img70por" >'; break;
					case "3.0 MP": echo '<img src="images/icon/hd_2048.png" class="img70por" >'; break;
					case "4.0 MP": echo '<img src="images/icon/hd_2048.png" class="img70por" >'; break;
					case "6.0 MP": echo '<img src="images/icon/hd_3072.png" class="img70por" >'; break;
					case "12.0 MP": echo '<img src="images/icon/hd_4000.png" class="img70por" >'; break;
				}
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
			<div class="cssmenu_midd middMenu"><?php include( "include/mid_menuProd.php" ); ?></div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOverview animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Overview</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<br/>
			<div class="col-md-5">
				<img src=<?php echo "images/depro/cam/bg/".$imgProduct; ?> width="100%" >
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
				<?php echo '<img src="images/depro/cam/bg/cam_'.$numPackGen.'.ni.png" width="100%" >'; ?>
			</div>			
		</div>
		<?php 
		/*************************************************************************************************************************************/
		if( $indoor == "si" ){
			echo '<div class="col-lg-12 marginUp10 midIndoor animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Indoor</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div><div class="col-lg-12 marginUp10 animationRight"><div class="col-md-9">';
			echo '<img src="images/depro/cam/bg/cam_'.$numPackGen.'.in.png" width="100%" >';
			echo '<br/><br/></div><div class="col-md-3"><p class="bodyProd">Protect your home and family adding a set of eyes inside with this high-definition indoor camera, featuring wireless connectivity, crisp image quality and 24/7 surveillance. You can use the Indoor Camera to monitor a baby, check in on your kids, or capture video evidence of a home intruder.</p></div></div>';
		}
		/*************************************************************************************************************************************/
		if( $outdoor == "si" ){
			echo '<div class="col-lg-12 marginUp10 midOutdoor animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Outdoor</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div><div class="col-lg-12 marginUp10 animationRight"><div class="col-md-9">';
			echo '<img src="images/depro/cam/bg/cam_'.$numPackGen.'.ou.png" width="100%" >';
			echo '<br/><br/></div><div class="col-md-3"><p class="bodyProd">Weatherproof security cameras built for the outdoors. High powered winds, torrential downpours or even full fledged snowstorms are no match for the security camera. These weatherproof security cameras can persevere through the most unforgiving climates.</p></div></div>';
		}		
		/*************************************************************************************************************************************/
		if( $vandalPro 	== "si" ){
			echo '<div class="col-lg-12 marginUp10 midVandalProof animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Vandal Proof</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>';
			echo '<div class="col-lg-12 marginUp10 animationRight">
					<div class="col-md-12">
						<img src="images/depro/cam/bg/cam_'.$numPackGen.'.va.png" width="100%" ><br/><br/>
					</div>			
				  </div>';
		}
		/*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midRemoteA animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Remote Access</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-12">
				<img src="images/depro/icon/remote_hand.png" width="100%" >
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
			<?php echo '<img src="images/depro/cam/bg/cam_'.$numPackGen.'.hd.png" width="100%" >'; ?>
			</div>
			<div class="col-md-3">
				<p class="bodyProd">Receive full <?php echo $resoPixel; ?> high definition video footage thanks to the <?php echo $resoMP; ?> image sensor within each of your security cameras. You can also expect smooth on-screen motion from your cameras. They are capable of delivering real-time video (even at <?php echo $resoPixel; ?> resolution).</p>
			</div>
		</div>		
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midFeatures animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Features</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-12">
				<p class="titleProd"><?php echo $titleCamera; ?></p>
				<p class="bodyProd"><?php echo $detailCamera; ?></p><br/><br/>			
			</div>				
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midVideos animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Videos</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-12">
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
				include( "include/mid_menuProd.php" );
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