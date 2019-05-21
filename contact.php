<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<?php
	$showPage = "no";
	$linkCont = "";
	if( isset($_GET["page"]) ){
		$linkCont = $_GET["page"];
		
		if( $linkCont == "location" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/contact.php?page=".$linkCont;
			$fa_desc 	= "Contact Location";
			$fa_title	= "Find Us!!!";
			$fa_images	= "http://powercctv.com/images/contact/fa_location.png";			
			include("include/fa_metatags.php");
		}
		
		if( $linkCont == "contactus" ){
			$showPage = "yes";
			$fa_link 	= "http://powercctv.com/contact.php?page=".$linkCont;
			$fa_desc 	= "Contact US";
			$fa_title	= "Contact Us right now!!!";
			$fa_images	= "http://powercctv.com/images/contact/fa_contactus.png";
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
		***************************************************************************************************************/?>
		<?php 
		/* CONTACT US > LOCATION
		***************************************************************************************************************/
		if( $linkCont == "location" ){ include( "mod/contact_location.php" ); }?>
		<?php 
		/* CONTACT US > SEND EMAIL CONTACT
		***************************************************************************************************************/
		if( $linkCont == "contactus" ){ include( "mod/contact_contactus.php" ); }?>		
		<?php 
		/* FOOTER
		***************************************************************************************************************/?>
		<?php include( "include/f_footer_warranty.php" ); ?>
		<?php include( "include/f_footer_bottom.php" ); ?>
		<?php 
		/* JSS -- JQUERY -- JAVASCRIPT
		***************************************************************************************************************/?>
		<?php include( "include/f_jquery.php" ); ?>    
	
		<?php if( $linkCont == "location" ){ ?>
			<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
			<script type="text/javascript">
			//ARRAY LOCATION - var locations = [ ['PowerCCTV Corp.', 34.0281372, -118.155213, 4],['PowerCCTV Corp.', 34.0281372, -118.155213, 4]  ];
			/*** CONTENIDO EN MARKER
			*********************************************************************************************************/
			var locations = [ ['PowerCCTV Corp.', 34.0281372, -118.155213, 4] ];			
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 14,
				center: new google.maps.LatLng(34.0281372, -118.155213),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var infowindow = new google.maps.InfoWindow();
			var marker, i;
			/*** CONTENIDO EN MARKER
			*********************************************************************************************************/
			var contentString = 
			'<div id="content">'+
				'<div id="siteNotice"></div>'+
				'<h1 id="firstHeading" class="firstHeading">PowerCCTV Corp.</h1>'+
				'<div id="bodyContent">'+
					'<p><b>Address: </b>445 S Atlantic Blvd, East Los Angeles, CA 90022.</p>'+
					'<p><b>Horary: </b>Monday to Saturday of 8:00 am - 6:00 pm.</p>'+
					'<p><b>Phone: </b>(323) 893-8224.</p>'+
				'</div>'+
			'</div>';
			var infowindow = new google.maps.InfoWindow({ content: contentString });


			for (i = 0; i < locations.length; i++) {
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					title:"PowerCCTV Corp.",
					animation: google.maps.Animation.DROP
				});
				marker.setIcon('images/icon/marker.png');

				//google.maps.event.addListener(marker, 'click', funcionClick());
				marker.addListener('click', function(){ infowindow.open(map, marker); });
				

				/*
				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						infowindow.setContent(locations[i][0]);
						infowindow.open(map, marker);
					}
				})(marker, i));
				*/
			}
			function funcionClick(){
				if (marker.getAnimation() != null) { marker.setAnimation(null); } else { marker.setAnimation(google.maps.Animation.BOUNCE); }
			}
			</script>
		<?php }
		if( $linkCont == "contactus" ){ ?>
			<script src="js/jquery_form.js"></script>
		<?php }?>
	<?php }?>
</body>
</html>