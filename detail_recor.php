<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
include( "mod/prod_detail/detail_reco.php" );
?>
<html lang="en">
<head>	
	<?php 	
	if ( $showPage == "yes" ){
		$fa_link = "http://powercctv.com/detail_recor.php?pack=".$_GET["pack"];
		include("include/fa_metatags.php");
	}

	include( "include/head.php" ); 
	$typeMenu	= "menuProd";
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
			<a href="index.php" class="linkTree" >Home )</a> <?php echo $title; ?>
		</div>
	</div>
	<div class="container marginUp10">
		<div class="col-lg-8 marginDown10">	
			<div id="gallery" class="eagle-gallery gallery500" style="margin-top: 0px;">
				<div class="owl-carousel">
					<?php
					for( $i=1 ; $i<$totalIm ; $i++ ){
						echo '<img src="images/depro/'.$typeRecor.'/sm/rec_'.$numPack.'.'.$i.'.png" data-medium-img="images/depro/'.$typeRecor.'/md/rec_'.$numPack.'.'.$i.'.png" data-big-img="images/depro/'.$typeRecor.'/bg/rec_'.$numPack.'.'.$i.'.png" alt="">';						
					}
					echo '<img src="images/depro/gen/sm/remote.png" data-medium-img="images/depro/gen/md/remote.png" data-big-img="images/depro/gen/bg/remote.png" alt="">';
					?>					
				</div>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-4" >	
			<p class="deproTitle" ><?php echo $title; ?></p>
			<p class="deproModel" ><?php echo $model; ?></p>
			<hr/>
			<center><img src="images/icon/byhikvision.png" class="img70por" ></center><br/><br/>	
			<div class="brdIncludeMobile" >
				<p class="titleProd"><?php echo $title; ?></p>
				<p class="bodyProd"><?php echo $detail; ?></p>
			</div>
			<div class="brdIncludeDesktop" >
				<img src="images/depro/icon/warranty.png" class="depWarranty" ><br/><br/>
				<?php 
					$link_social_media = $fa_link;
					include( "include/social_media_detail.php" ); 
				?>
			</div>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 brdIncludeDesktop">
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($channels){
					case "4" : 	echo '<img src="images/icon/channel_4.png" class="img70por" >' ; break;
					case "8" : 	echo '<img src="images/icon/channel_8.png" class="img70por" >'; break;
					case "16": 	echo '<img src="images/icon/channel_16.png" class="img70por" >'; break;
					case "32": 	echo '<img src="images/icon/channel_32.png" class="img70por" >'; break;
				}
				?>
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($channels){
					case "4" : 	echo '<img src="images/icon/hd_1tb.png" class="img70por" >' ; break;
					case "8" : 	echo '<img src="images/icon/hd_2tb.png" class="img70por" >'; break;
					case "16": 	echo '<img src="images/icon/hd_4tb.png" class="img70por" >'; break;
					case "32": 	echo '<img src="images/icon/hd_4tb.png" class="img70por" >'; break;
				}
				?>
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($resolution){
					case "720" : 	echo '<img src="images/icon/hd_720.png" class="img70por" >' ; break;
					case "1080": 	echo '<img src="images/icon/hd_1080.png" class="img70por" >'; break;
					case "2048": 	echo '<img src="images/icon/hd_2048.png" class="img70por" >'; break;
					case "3072": 	echo '<img src="images/icon/hd_3072.png" class="img70por" >'; break;
					case "4000": 	echo '<img src="images/icon/megapixel_4k.png" class="img70por" >'; break;
				}
				?>
				</center>
			</div>					
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>
				<?php
				switch($typeRecor){
					case "dvr": echo '<img src="images/icon/hdtvi.png" class="img70por" >'; break;
					case "nvr": echo '<img src="images/icon/hdip.png" class="img70por" >'; break;					
				}
				?>	
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes bordeRightGray">
				<center>				
					<img src="images/icon/ulListed.png" class="img70por" >
				</center>
			</div>
			<div class="col-lg-2 marginUp10 padding10 borderBoRes">
				<center>
				<img src="images/icon/remote_access.png" class="img70por" >
				</center>
			</div>
		</div>		
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOverview animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Overview</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<br/>
			<div class="col-md-5">
				<img src=<?php echo "images/depro/".$typeRecor."/bg/".$imgProduct; ?> width="100%" >
			</div>
			<div class="col-md-7">
				<p class="titleProd"><?php echo $titleProd; ?></p>
				<p class="bodyProd"><?php echo $description; ?></p>
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
		<div class="col-lg-12 marginUp10 midFeatures animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Features</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-12">
				<p class="titleProd"><?php echo $title; ?></p>
				<p class="bodyProd"><?php echo $detail; ?></p><br/><br/>			
			</div>				
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midVideos animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Videos</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">		
			<div class="col-md-6">
				<center><video width="100%" style="max-width: 1100px; margin: 10px auto;" controls  poster="videos/WDPurple.png" ><source src="videos/WDPurple.mp4" type="video/mp4">Your browser does not support the video tag.</video></center>
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