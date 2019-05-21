<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<?php
	$showPage = "no";
	$linkCont = "";
	if( isset($_GET["page"]) ){
		$linkCont = $_GET["page"];
		
		if( $linkCont == "ddns" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/support.php?page=ddns";
			$fa_desc 	= "Support DDNS - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Welcome to DVRLists.com!!!";
			$fa_images	= "http://powercctv.com/images/support/fa_dvrlist.png";			
			include("include/fa_metatags.php");
		}
		
		if( $linkCont == "videos" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/support.php?page=videos";
			$fa_desc 	= "Support Videos - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Kwno about our products and services!!!";
			$fa_images	= "http://powercctv.com/images/support/fa_videos.png";
			include("include/fa_metatags.php");
		}
		
		if( $linkCont == "download" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/support.php?page=download";
			$fa_desc 	= "Support Download - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Find application and programs for CCTV!!!";
			$fa_images	= "http://powercctv.com/images/support/fa_download.png";
			include("include/fa_metatags.php");
		}
		
		if( $linkCont == "download1" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/support.php?page=download";
			$fa_desc 	= "Support Download - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Find application and programs for CCTV!!!";
			$fa_images	= "http://powercctv.com/images/support/fa_download.png";
			include("include/fa_metatags.php");
		}
		
		if( $linkCont == "tutorials" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/support.php?page=tutorials";
			$fa_desc 	= "Support Tutorials - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Tutorials - Get the complete information about our products";
			$fa_images	= "http://powercctv.com/images/support/fa_download.png";
			include("include/fa_metatags.php");
		}
	}
	?>
	<?php  include( "include/head.php" ); ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="fadeInOVVC" oncontextmenu="return false" onkeydown="return false">
	<?php if ( $showPage == "yes" ){?>
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
		switch($linkCont){
			case "ddns":		include( "mod/support_ddns.php" );			break;
			case "download":	include( "mod/support_download.php" );		break;
			case "download1":	include( "mod/support_download_back.php" );		break;
			case "tutorials":	include( "mod/support_tutorials.php" );		break;
			case "videos":		include( "mod/support_videos.php" );		break;			
		}		
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