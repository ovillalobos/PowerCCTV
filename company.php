<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<?php
	$showPage = "no";
	$linkCont = "";
	if( isset($_GET["page"]) ){
		$linkCont = $_GET["page"];
		
		if( $linkCont == "aboutus" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/company.php?page=".$linkCont;
			$fa_desc 	= "Company About US - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "About us - the best company in US!!!";
			$fa_images	= "http://powercctv.com/images/company/powercctv_aboutus.png";
			include("include/fa_metatags.php");
			

		}
		
		if( $linkCont == "partner" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/company.php?page=".$linkCont;
			$fa_desc 	= "Company Partner - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Partners - Whit the best technology and partners!!!";
			$fa_images	= "http://powercctv.com/images/company/powercctv_partner.png";
			include("include/fa_metatags.php");		
		}
		
		if( $linkCont == "reviews" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/company.php?page=".$linkCont;
			$fa_desc 	= "Company Partner - Contact Us Today for a FREE estimate and FREE support.";
			$fa_title	= "Partners - Whit the best technology and partners!!!";
			$fa_images	= "http://powercctv.com/images/company/powercctv_partner.png";
			include("include/fa_metatags.php");		
		}
	}
	?>
	<?php  include( "include/head.php" ); ?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<?php include( "include/protectHTML.php" );?>
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
		***************************************************************************************************************/?>
		<?php 
		/* CONTACT US > ABOUT US
		***************************************************************************************************************/
		if( $linkCont == "aboutus" ){ include( "mod/company_aboutus.php" ); }
		/* CONTACT US > SEND EMAIL CONTACT
		***************************************************************************************************************/
		if( $linkCont == "partner" ){ include( "mod/company_partner.php" ); }
		/* CONTACT US > REVIEWS
		***************************************************************************************************************/
		if( $linkCont == "reviews" ){ include( "mod/company_reviews.php" ); }
		?>				
		<?php 
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