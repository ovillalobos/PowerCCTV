<ul>
	<li class='has-sub'><a class="midMenu" id="midOverview" 	href='#'><span>Overview</span></a></li>
	<li class='has-sub'><a class="midMenu" id="midNightVision" 	href='#'><span>Night Vision</span></a></li>
	<?php
	if( $indoor == 'si' ){
		echo '<li class="has-sub"><a class="midMenu" id="midIndoor" href="#"><span>Indoor</span></a></li>';
	}
	if( $outdoor == 'si' ){
		echo '<li class="has-sub"><a class="midMenu" id="midOutdoor" href="#"><span>Outdoor</span></a></li>';
	}
	if( $vandalPro == 'si' ){
		echo '<li class="has-sub"><a class="midMenu" id="midVandalProof" href="#"><span>Vandal Proof</span></a></li>';
	}
	?>
	<li class='has-sub'><a class="midMenu" id="midRemoteA" 		href='#'><span>Remote Access</span></a></li>
	<li class='has-sub'><a class="midMenu" id="midResolution" 	href='#'><span>Resolution</span></a></li>	
	<li class='has-sub'><a class="midMenu" id="midFeatures" 	href='#'><span>Features</span></a></li>
	<li class='has-sub'><a class="midMenu" id="midVideos" 		href='#'><span>Videos</span></a></li>
	<?php
	if( $docsPDF != '' ){
		echo '<li class="has-sub"><a class="midMenu" id="midDocument" href="#"><span>Download</span></a></li>';
	}
	?>	
</ul>