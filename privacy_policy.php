<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>	
	<?php 	
	$showPage 	= "yes";
	$fa_link 	= "http://powercctv.com/services.php";
	$fa_desc 	= "Privacy and Policy";
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
			<a href="index.php" class="linkTree" >Home )</a> Privacy Policy
		</div>
	</div>
	<?php 
		$nameCompany 	= "PowerCCTV Corp."; 
		$webSiteCompany	= "www.powercctv.com";
	?>
	<div class="container marginUp10">		
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Privacy Policy</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">								
				Welcome to <?php echo $nameCompany; ?> When you visit <?php echo $webSiteCompany; ?>, we are committed to protecting your privacy and to developing technology that gives 
				you the most powerful and secure online experience. In order to do so, we may obtain information about you so that we may provide you with all 
				of the benefits that we offer. That information may include your name, address(s), phone number, email address, products ordered 
				and website usage statistics. Because we respect your privacy, we will always handle your information in a safe and responsible manner. 
				We will never sell your personal information to anyone for any reason. When you provide information about yourself or anyone else, that 
				information is safely stored in our secure web server.
			</p>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><hr/></div>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Control of your Personal Information</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">
				When you register, or otherwise give us personal information, <?php echo $nameCompany; ?> will not share that information with third parties without your permission, 
				other than for the limited exceptions already listed. It will only be used for the purposes stated above.
				<br/><br/>
				Registering also allows you to tell us how or whether you want <?php echo $nameCompany; ?> to communicate with you.
				<br/><br/>
				<?php echo $nameCompany; ?> occasionally allows other companies to offer our registered customers information about their products and services, using postal mail only.
				<br/><br/>
				<?php echo $nameCompany; ?> may send out periodic e-mails informing you of technical service issues related to a product or service you requested. 
				You will not be able to choose to unsubscribe to these mailings, as they are considered an essential part of the service you have chosen.
			</p>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><hr/></div>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Security of your Personal Information</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">
				<?php echo $nameCompany; ?> strictly protects the security of your personal information and honors your choices for its intended use. We carefully protect your data from 
				loss, misuse, unauthorized access or disclosure, alteration, or destruction.
				<br/><br/>
				Inside the company, data is stored in password-controlled servers with limited access. You also have a significant role in protecting your information. 
				No one can see or edit your personal information without knowing your login and password, so do not share these with others.
			</p>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><hr/></div>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Protection of Children's Personal Information</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">
				The <?php echo $nameCompany; ?> site does not collect or publish content that is targeted to children.
			</p>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><hr/></div>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Use of Cookies</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">
				To ensure we are publishing content customers need and want, <?php echo $nameCompany; ?> collects site-visitation statistics using cookies. We only use this information 
				in aggregated form and only use site-visitation statistics for improving our site.
				<br/><br/>
				When someone visits the site, a cookie is placed on the customer's machine (if the customer accepts cookies) or is read if the customer has visited 
				the site previously.If you choose to not have your browser accept cookies from the <?php echo $webSiteCompany; ?> web site, you will be able to view the 
				text on the screens, however you will not experience a personalized visit nor will you be able to subscribe to the service offerings on the site. 
			</p>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><hr/></div>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Changes to this Statement</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">
				<?php echo $nameCompany; ?> will occasionally update this privacy statement. When we do, we will also revise the "last updated" date at the top of the privacy statement. 
				For material changes to this Statement, <?php echo $nameCompany; ?> will notify you by placing prominent notice on the web site.
			</p>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess"><hr/></div>
		<div class="col-lg-12 marginUp10 midReAccess"><table width="100%" ><tr><td align="left" ><p class="sz24 boldTxt colorBlue">Contact Information</p></td></tr></table></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10">
			<p class="bodyProd">
				<?php echo $nameCompany; ?> welcomes your comments regarding this Statement of Privacy, please <a href="contact.php?page=contactus" >contact us</a>.
			</p>
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