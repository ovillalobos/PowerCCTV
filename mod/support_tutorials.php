<div class="container marginUp10 treeBody">
	<div class="col-lg-9 treeData">				
		<a href="index.php" class="linkTree" >Home )</a> Support - Tutorials
	</div>
</div>
<div class="container marginUp10">		
	<?php /*************************************************************************************************************************************/ ?>
	<div class="col-lg-12 marginUp10 midOverview">
		<img src="images/support/ba_tutorials.png" width="100%" >
	</div>
	<div class="col-lg-12 marginUp10 midOverview">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php /*************************************************************************************************************************************/ ?>
			<div class="panel panel-default">
				<a class="linkDecoNone" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<div class="panel-heading blueTab" role="tab" id="headingOne"><h4 class="panel-title"><img src="images/general/hand.png" alt="Omar Villalobos" />TUTORIALS - DVR</h4></div>
				</a>
				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body" >
						<table class="tableDownload" >					
							<?php /* GENERAL TITTLE
							************************************************************************************************/ 
							$cont 	= 0;
							?>
							<tr>
								<td><strong><span class="visible-sm visible-md visible-lg" >MODEL/</span>MOBILE APP</strong></td>
								<td><strong>TITTLE</strong></td>
								<td><strong>DESCRIPTION</strong></td>
								<td><strong>ACTION</strong></td>
							</tr>
							<?php
							/* EASTERN DVR SUPER LIVE PRO
							************************************************************************************************/ 
							$imgDVR = "images/tuto/dvr/eastern/dvr.png";
							$imgAPP = "images/tuto/dvr/icon_mob_superlive.png";
							
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Playback", 	"link"=>"eastern_search",		"desc"=>"Find the event in your DVR" ); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Backup", 		"link"=>"eastern_backup",		"desc"=>"Backup your event in your USB to see your event wherever you want"); 
							
							$max	= sizeof($menu);							
							for( $i=0 ; $i<$max ; $i++ ) {
								$valArray = $menu[$i];
								echo '<tr><td><table><tr><td><img class="visible-sm visible-md visible-lg maxwi390px" src="'.$imgDVR.'" width="90%" alt="DVR Picture PowerCCTV" /></td><td><img src="'.$imgAPP.'" alt="Icon Mobile PowerCCTV" /></td></tr></table></td>
								<td><strong>'.$valArray['type'].'</strong><br/>'.$valArray['title'].'</td><?php /****/ ?><td>'.$valArray['desc'].'</td><td><a href="tutorials.php?page='.$valArray['link'].'" ><img src="images/general/kwno_more.png" alt="Omar Villalobos" /></a></td></tr>';
							}
							unset($menu);							
							/* LTSECURITY IVMS-4500
							************************************************************************************************/ 
							$imgDVR = "images/tuto/dvr/hikvision_lts/dvr.png";
							$imgAPP = "images/tuto/dvr/icon_mob_ivms4500.png";
							
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Playback", 	"link"=>"hilts_dvr_search",		"desc"=>"Find the event in your DVR"); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Backup", 		"link"=>"hilts_dvr_backup",		"desc"=>"Backup your event in your USB to see your event wherever you want"); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"User", 		"link"=>"hilts_dvr_user",		"desc"=>"How to setting and edit users"); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Network", 	"link"=>"hilts_dvr_network",	"desc"=>"How to see the network information"); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Motion", 		"link"=>"hilts_dvr_recording",	"desc"=>"How to change settings of recording continuous or motion"); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Motion Area", "link"=>"hilts_dvr_areamo",		"desc"=>"How to settings of motion area in each camera"); 
							$menu[]	= array( "type"=>"DVR", 	"title"=>"Privacy Mask","link"=>"hilts_dvr_privacy",	"desc"=>"How to settings the privacy mask if you wont to record something"); 
							$menu[]	= array( "type"=>"PC/MAC", 	"title"=>"Playback", 	"link"=>"hilts_pc_playback",	"desc"=>"Do a easy playback from your computer with mozilla or whatever explorer"); 
							$menu[]	= array( "type"=>"MOBILE", 	"title"=>"Settings", 	"link"=>"hilts_mob_howset",		"desc"=>"How to setting your DVR in your smart phone"); 
							$menu[]	= array( "type"=>"MOBILE", 	"title"=>"Playback", 	"link"=>"hilts_mob_playback",	"desc"=>"Do a easy playback from your smart phone"); 
							
							$max	= sizeof($menu);							
							for( $i=0 ; $i<$max ; $i++ ) {
								$valArray = $menu[$i];
								echo '<tr><td><table><tr><td><img class="visible-sm visible-md visible-lg maxwi390px" src="'.$imgDVR.'" width="90%" alt="DVR Picture PowerCCTV" /></td><td><img src="'.$imgAPP.'" alt="Icon Mobile PowerCCTV" /></td></tr></table></td>
								<td><strong>'.$valArray['type'].'</strong><br/>'.$valArray['title'].'</td><?php /****/ ?><td>'.$valArray['desc'].'</td><td><a href="tutorials.php?page='.$valArray['link'].'" ><img src="images/general/kwno_more.png" alt="Omar Villalobos" /></a></td></tr>';
							}
							unset($menu);
							?>
						</table>
					</div>
				</div>
			</div>			
			<?php /*************************************************************************************************************************************/ ?>
			<?php 
				$link_social_media = "support.php?page=tutorials";
				include( "include/social_media.php" ); 
			?>			
		</div>
	</div>
	<?php /*************************************************************************************************************************************/ ?>
	<!-- Modal -->
	<div class="modal fade bs-example-modal-sm modalMSG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">PowerCCTV</h4>
		  </div>
		  <div class="modal-body"></div>
		  <div class="modal-footer"></div>
		</div>
	  </div>
	</div>
	<!-- Modal --> 
</div>	