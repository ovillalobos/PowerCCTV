<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>	
	<?php 	
	$showPage 	= "yes";
	$fa_link 	= "http://powercctv.com/services.php";
	$fa_desc 	= "Services - Contact Us Today for a FREE estimate and FREE support.";
	$fa_title	= "Kwno our services!!!";
	$fa_images	= "http://powercctv.com/images/services/fa_ourservices.png";			
	include("include/fa_metatags.php");
	include( "include/head.php" );
	
	$typeMenu	= "menuServices";
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
			<a href="index.php" class="linkTree" >Home )</a> Our services
		</div>
	</div>
	<div class="container marginUp10">		
		<?php /* /?code=322f18c639c34add9be91a7dd5885f63
		************************************************************************************************************************************/ ?>
		
		<div class="col-lg-12 marginUp10 posMidMenu">
			

		<div style="width:100%;height:500px;text-align:center;margin:auto;" ><object width="100%" height="500" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"> <param name="flashvars" value="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2F145449688%2540N08%2Fshow&amp;page_show_back_url=%2Fphotos%2F145449688%2540N08%2F&amp;user_id=145449688@N08" /> <param name="allowFullScreen" value="true" /> <param name="src" value="https://www.flickr.com/apps/slideshow/show.swf?v=71649" /> <embed width="100%" height="500" type="application/x-shockwave-flash" src="https://www.flickr.com/apps/slideshow/show.swf?v=71649" flashvars="offsite=true&amp;lang=en-us&amp;page_show_url=%2Fphotos%2F145449688%2540N08%2Fshow&amp;page_show_back_url=%2Fphotos%2F145449688%2540N08%2F&amp;user_id=145449688@N08" allowFullScreen="true" /> </object><br /><small>Created with <a href="http://www.flickrslideshow.com">flickr slideshow</a>.</small></div>
		
		</div>
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
	<?php } ?>
</body>
</html>