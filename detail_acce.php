<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
include( "mod/prod_detail/detail_acce.php" );
?>
<html lang="en">
<head>	
	<?php 	
	if ( $showPage == "yes" ){
		$fa_link = "http://powercctv.com/detail_acce.php?pack=".$_GET["pack"];
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
						echo '<img src="images/depro/acce/sm/pk_'.$numPack.'.'.$i.'.png" data-medium-img="images/depro/acce/md/pk_'.$numPack.'.'.$i.'.png" data-big-img="images/depro/acce/bg/pk_'.$numPack.'.'.$i.'.png" alt="">';
					}
					?>					
				</div>
			</div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-4" >	
			<p class="deproTitle" ><?php echo $titleProd; ?></p>
			<p class="deproModel" ><?php echo $model; ?></p>
			<hr/>
			<center><img src="images/icon/powercctv_acce.png" class="img70por" ></center><br/><br/>
			<div class="brdIncludeDesktop" >
				<img src="images/depro/icon/warranty.png" class="depWarranty" ><br/><br/>				
				<?php 
					$link_social_media = $fa_link;
					include( "include/social_media_detail.php" ); 
				?>
			</div>
		</div>		
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOverview"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Overview</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<br/>
			<div class="col-md-5">
				<img src=<?php echo "images/depro/acce/bg/pk_".$numPack.".1.png"; ?> width="100%" >
			</div>
			<div class="col-md-7">
				<p class="titleProd"><?php echo $titleProd; ?></p>
				<p class="bodyProd"><?php echo $description; ?></p>
			</div>
		</div>			
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOutdoor animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Description</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-9">
				<?php echo '<img src="images/depro/acce/bg/pk_'.$numPackGen.'_desc.png" width="100%" >'; ?>
				<br/><br/>
			</div>			
			<div class="col-md-3">
				<p class="titleProd"><?php echo $titleDesc; ?></p>
				<p class="bodyProd"><?php echo $detailDesc; ?></p>
			</div>
		</div>		
		<?php //echo $whatInclude; ?>
		<?php echo $docsPDF; ?>
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