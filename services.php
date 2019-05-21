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
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 posMidMenu">
			<img src="images/services/ba_our_services.png" width="100%" >
		</div>
		<div class="col-lg-12 marginUp10 posMidMenu">
			<div class="cssmenu_midd middMenuServ"><?php include( "include/mid_menu_serv.php" ); ?></div>
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOurService animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Our Services</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<br/>
			<div class="col-md-5">
				<img src="images/services/op_our_services.png" width="100%" >
			</div>
			<div class="col-md-7">
				<p class="bodyProd">
				We understand the everyday difficulties that can come from owning a business, but worrying about security shouldn’t be one of them. Backed by 20 years of experience, PowerCCTV has the knowledge, professionalism and desire to provide your business with the absolute best in security cameras.
				<br/><br/>At PowerCCTV, we don’t just work for you; we create a partnership with our customers offering uncompromising, dedicated and personalized customer service. Whether you’re in need of security cameras, first class technical support on your standalone DVR/NVR system or CCTV systems, we here at PowerCCTV are committed to delivering the highest standard of protection for all of your business needs.
				<br/><br/>Our commitment to providing you with excellent customer service extends long after you’ve completed your purchase. Our After Sales Support policies provide you with a minimum 3-year warranty on all products. Toll-free numbers make it convenient for you to contact our offices. Plus free in-warranty advance exchanges are available on our most popular offerings, allowing you to quickly resolve in-warranty product issues at no cost. These are just a few of the after-sales services. 
				</p>
			</div>
		</div>	
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midIPCameras animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">IP Cameras</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-5">
				<p class="bodyProd">
					IP Cameras are the newest technology to carry High Definition Images in the CCTV Technology, Ip Cameras have a lot of advantages, but also can be a nightmare for a regular Security Camera user.
					When you want to buy IP Cameras, you don’t only have to think about the Ip Cameras, but also have to think about an NVR, and a POE or independent power supply. The Ip Cameras have great advantages when your need of layout require a decentralized system where you can have some or many cameras that can integrate to a system or more than one CCTV system, but to be able to make this CCTV network work, you require some networking skills, and IP knowledge in order to successfully configure, and maintain your IP Camera System running.
				</p>
				<p class="titleProd">POE</p>
				<p class="bodyProd">The POE acronym stand for Power Over Ethernet, which is a technology where you can use the same ethernet cat5 or cat6 cable to supply the power to IP cameras or other devices compatible with this technology, keep in mind that not all the IP cameras come with POE connection, therefore there is a need of an independent power supply and or wire to Power those IP cameras.</p>
				<p class="titleProd">POE Router</p>	
				<p class="bodyProd">This is the device that ultimately will supply the POE power for those Ip cameras with POE connection, and when you decide to connect a POE router to an IP camera or set of CCTV Cameras, you might have to contemplate the number of POE ports that a router comes with, in order to plan your layout. You can use one or more POE router to connect a set of IP cameras, and all of the POE routers don’t have to be in the same location, as long as the are connected, and belong to the same Network.</p>
			</div>
			<div class="col-md-7">
				<img src="images/services/op_ip_cameras.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midPTZCameras animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">PTZ Cameras</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-7">
				<p class="bodyProd">PTZ Cameras are recommended for areas where there are far objects to cover, and locations where would be impossible to set as many cameras as require to cover the entire place, like parking lots, constructions lots, or similar places. these moving cameras are also popular for convenience or retail stores where there will be a security person tracking multiple areas from a Security Room.</p>
				<p class="titleProd">PTZ Cameras</p>
				<p class="bodyProd">When you start looking for a PTZ camera you might or might not be sure what the PTZ term stands for in the CCTV language, PTZ stands for ( Pan Tilt Zoom ), meaning that these three words describe the most relevant features of this robotic style cameras. PTZ Cameras are a great tool for those locations where there is not fixed point to watch, and there are many variables or situations that you want to cover with just one surveillance camera.</p>
				<p class="titleProd">PTZ Camera Types</p>	
				<p class="bodyProd">PTZ cameras come available in Analog technology ( TV Lines ), CVI Technology ( High Definition Analog) TVI ( High Definition Analog ), and IP. All PTZ cameras Pan and Tilt by default but the main difference to keep in mind when choosing a PTZ camera is the zooming capability, the most common PTZ cameras can zoom in a range from 10x ~ 32x, and the zooming is also different if is digital or optical, being optical the best zooming resolution, as it means real zooming vision made through the camera lenses, while digital zooming is made through software.</p>
			</div>
			<div class="col-md-5">
				<img src="images/services/op_ptz_cam.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midWCameras animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Wireless Cameras</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-6">
				<p class="bodyProd">Wireless Cameras are on high demand for Home Applications, as Security Camera Experts we have tried many different types, and brands of Wireless CCTV Cameras, and so far none of them can give us the speed communication performance, Image Quality or Link Stability to build our confidence to offer them and install them to our customers having peace of mind of not receiving warranty service calls.
				Professional Wifi transmitters combined with HQ CCTV Cameras can provide Solutions to interconnect video communication from a few hundred feet up to several miles depending on the outdoor conditions, layout, and equipment. Video Security can provide your with a professional wireless Camera solution for a commercial CCTV application.</p>
				<p class="titleProd">Wireless Surveillance System</p>
				<p class="bodyProd">Is a combination of an HD IP Cameras Mounting Pole with specific bracket, Electrical Junction box, wireless network commercial transmitter, NVR, and CMS Software. When this set of hardware and configured software are set properly, the results are amazing, and they are worthy.
				CCTV Wireless System Solutions are mainly recommended when there are no other alternatives handy, the cost of the equipment, and setup require more dedicated and experienced CCTV service provider, that is why they are not recommended for Home Security Applications.</p>
			</div>
			<div class="col-md-6">
				<img src="images/services/op_wi_cam.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midReAccess animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">Remote Access</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-6">
				<p class="bodyProd">Video Security Cameras Remote Access Configuration Service and Router Programming, you don’t need to have a Static IP address to maintain your remote configuration as we will use a dedicated service that refreshes your IP address every time it changes, holding this way the connection for unlimited time. 
				Most DVRs are capable of handling remote connectivity, but there are some minimum requirements to make it possible. You don’t need an NVR ( Network Video Recorder ) or IP camera to remote access a Security System, all you need is a capable DVR, a CMS Software or Phone application, and a high-Speed internet connection.</p>
			</div>
			<div class="col-md-6">
				<img src="images/services/op_remote.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midCCTVupd animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">CCTV System Upgrade</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-6">
				<p class="bodyProd">If you need to fix/upgrade your Security Cameras or DVR/NVR we might offer you the service, but often fixing a CCTV Recorder might not be worthy, Upgrading has been lately the best option.
				<br/><br/>In the past, you had to spend on getting the same type of older resolution cameras or DVR/NVR to replace the one that wasn’t working, today with Hybrid CCTV DVRs/NVRs, and Cameras you can get back in business without spending a fortune, and upgrade running high definition Quality on your existing wiring.
				<br/><br/>Around 2012 we started to see the first high definition cameras, the first HD Cameras were based on IP technology, IP cameras were really expensive, and mostly installed for commercial high-end applications, the installation would require specific equipment, and matching cameras, camera’s configuration was tricky, and often there were annual licensing fees involved.
				</p>				
			</div>
			<div class="col-md-6">
				<img src="images/services/op_upgrade.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midCCTVnew animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">CCTV New Installation</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-6">
				<p class="bodyProd">CCTV Services is a full-service security company. We professionally install, service, and maintain everything we install, and never use subcontractors. Our thousands of clients recognize that we are passionate about providing the highest quality systems and unprecedented support, which is what sets us apart drastically in the industry. As specialists in video surveillance systems and technology, our clients rely on our SMART security camera systems to protect their investments. We offer you SMART technology like:</p>
				<p class="bodyProd"><strong>Unlimited Video Data Storage</strong> Imagine having the ability to review video recordings from as far back as you’d like. This technology is now available through CCTV Services and can protect you from all sorts of claims, accusations, and possible lawsuits. Learn more about Unlimited Video Data Storage Technology.</p>
				<p class="bodyProd"><strong>Wireless Remote Viewing</strong> Being able to view through your cameras 24/7 (worldwide) gives you the freedom and flexibility to grow and manage your business effectively. Now you can be there even when you are not. Wireless Remote Viewing the peace of mind you need.</p>
			</div>
			<div class="col-md-6">
				<img src="images/services/op_new_installation.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midCCTVrep animationRight"><hr/><table width="100%" ><tr><td align="left" ><p class="titleProd2">CCTV System Repair</p></td><td align="right" ><img src="images/icon/menu_icon.png" class="iconMidMenu" ></td></tr></table><hr/></div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 animationRight">
			<div class="col-md-6">
				<p class="bodyProd">CCTV repair service is our business and as the Nations largest Independent Repair Center for CCTV Equipment, we can get your equipment back in service quickly to minimize your downtime and at the same time save you and your company money. We have been doing CCTV surveillance equipment repairs for over 20 years and are very familiar with all major brands of CCTV equipment and control systems. Whether it is DVR Repair, PTZ Dome Camera Repair, IP Camera Repair, Raid Storage DVR Repair, Raid Power Supply Repair, or any other CCTV equipment Repair you need, we can help you work out a repair program to fit your needs. We have very reasonable and competitive pricing so just give us a call and we will be happy to speak with you. We have thousands of satisfied customers and will be glad to provide references if requested. Next time your CCTV Surveillance Equipment needs Repair, give us a call.</p>
			</div>
			<div class="col-md-6">
				<img src="images/services/op_repair.png" width="100%" >
			</div>			
		</div>
		<?php /*************************************************************************************************************************************/ ?>
		<div class="col-lg-12 marginUp10 midOverview animationRight">
			<div class="col-md-6 marginUp10 midOverview">
			</div>
			<div class="col-md-6 marginUp10 midOverview">
				<center>
				<table width="100%" >
					<tr>
						<td align="center" ><div class="fb-like" 			data-href="http://powercctv.com/services.php" 	data-layout="button_count" data-action="like" data-show-faces="true" ></div>&nbsp;</td>
						<td align="center" ><div class="fb-share-button" 	data-href="http://powercctv.com/services.php"	data-layout="button_count" data-mobile-iframe="true"></div>&nbsp;</td>
						<td align="center" ><div class="fb-follow" 			data-href="https://www.facebook.com/Power-CCTV-627055747368725/" 	data-layout="button_count" data-show-faces="true"></div>&nbsp;</td>
					</tr>
				</table>
				<center>
			</div>
			<br/><br/><br/>		
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