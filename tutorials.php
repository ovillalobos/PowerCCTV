<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<?php
	$showPage = "no";
	$linkCont = "";
	if( isset($_GET["page"]) ){
		$linkCont = $_GET["page"];
		/* EASTERN DVR SUPER LIVE PRO
		************************************************************************************************/
		if( $linkCont == "eastern_search" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - EADVRLIVEPRO Search Event in DVR.";
			$fa_title	= "Tutorials - EADVRLIVEPRO Search";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		
		if( $linkCont == "eastern_backup" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - EADVRLIVEPRO Backup Event in DVR.";
			$fa_title	= "Tutorials - EADVRLIVEPRO Backup";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		/* LTSECURITY IVMS-4500
		************************************************************************************************/
		if( $linkCont == "hilts_dvr_backup" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 Backup Event in DVR";
			$fa_title	= "Tutorials - LTDVRIVMS450 Backup";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_dvr_search" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 Search Event in DVR";
			$fa_title	= "Tutorials - LTDVRIVMS450 Search";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_dvr_network" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to get the network information";
			$fa_title	= "Tutorials - LTDVRIVMS450 Network";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_dvr_user" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to edit User";
			$fa_title	= "Tutorials - LTDVRIVMS450 Users";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_dvr_recording" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to changes the settings of recording";
			$fa_title	= "Tutorials - LTDVRIVMS450 Recording";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_dvr_areamo" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to setting the motion area";
			$fa_title	= "Tutorials - LTDVRIVMS450 Motion Area";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_dvr_privacy" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to setting the privacy mask";
			$fa_title	= "Tutorials - LTDVRIVMS450 Privacy Mask";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		/*********************************************************************************************/
		if( $linkCont == "hilts_mob_howset" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to setting a smart phone";
			$fa_title	= "Tutorials - LTDVRIVMS450 Backup";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		if( $linkCont == "hilts_mob_playback" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to do a easy playback";
			$fa_title	= "Tutorials - LTDVRIVMS450 Backup";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
		/*********************************************************************************************/
		if( $linkCont == "hilts_pc_playback" ){
			$showPage 	= "yes";
			$fa_link 	= "http://powercctv.com/tutorials.php?page=".$linkCont;
			$fa_desc 	= "Tutorials - LTDVRIVMS450 How to do a easy playback";
			$fa_title	= "Tutorials - LTDVRIVMS450 Backup";
			$fa_images	= "http://powercctv.com/images/support/fa_tutorials.png";			
			include("include/fa_metatags.php");
		}
	}
	?>
	<?php  include( "include/head.php" ); ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<?php 
	include( "include/protectHTML.php" );
	if ( $showPage == "yes" ){?>
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
		***************************************************************************************************************/
		include( "mod/tutorials/".$linkCont.".php" );
		/* FOOTER
		***************************************************************************************************************/?>
		<?php include( "include/f_footer_warranty.php" ); ?>
		<?php include( "include/f_footer_bottom.php" ); ?>
		<?php 
		/* JSS -- JQUERY -- JAVASCRIPT
		***************************************************************************************************************/?>
		<?php include( "include/f_jquery.php" ); ?>    	
	<?php }?>
</body>
</html>