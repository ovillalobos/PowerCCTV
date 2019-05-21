<?php
$request = "";

switch( $_POST["product"] ){
/*** HIKVISION
****************************************************************************************************************************************************************************************/
	/*** DIGITAL
	**********************************************************************/
	case "tviIRTurrent":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=irTurrent4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_1.1.png" /><br/><span>Package 4 &<br/> Turbo HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=irTurrent8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_2.1.png" /><br/><span>Package 8 &<br/> Turbo HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=irTurrent16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_3.1.png" /><br/><span>Package 16 &<br/> Turbo HD TVI DVR</span></a></div>
		</div>
		';
	break;
	case "PWTurrent_IP_5MP_EXIR_100ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWTurrent_IP_5MP_EXIR_100ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_55.1.png" /><br/><span><br/>4 IP Cameras PWTurrent <br/>&<br/> Turbo HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWTurrent_IP_5MP_EXIR_100ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_56.1.png" /><br/><span><br/>8 IP Cameras PWTurrent <br/>&<br/> Turbo HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWTurrent_IP_5MP_EXIR_100ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_57.1.png" /><br/><span><br/>16 IP Cameras PWTurrent <br/>&<br/> Turbo HD NVR</span></a></div>
		</div>
		';
	break;
	case "PWDome_Mini_IP_5MP_IR_30ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_Mini_IP_5MP_IR_30ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_58.1.png" /><br/><span><br/>4 IP Mini PWDome <br/>&<br/> IR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_Mini_IP_5MP_IR_30ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_59.1.png" /><br/><span><br/>8 IP Mini PWDome <br/>&<br/> IR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_Mini_IP_5MP_IR_30ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_60.1.png" /><br/><span><br/>16 IP Mini PWDome <br/>&<br/> IR HD NVR</span></a></div>
		</div>
		';
	break;
	case "PWDome_WIFI_5MP_IR_30ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_Mini_WIFI_5MP_IR_30ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_76.1.png" /><br/><span><br/>4 IP Mini PWDome <br/>&<br/> IR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_Mini_WIFI_5MP_IR_30ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_77.1.png" /><br/><span><br/>8 IP Mini PWDome <br/>&<br/> IR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_Mini_WIFI_5MP_IR_30ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_78.1.png" /><br/><span><br/>16 IP Mini PWDome <br/>&<br/> IR HD NVR</span></a></div>
		</div>
		';
	break;
	case "PWCube_WIFI_3MP_IR_33ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWCube_WIFI_3MP_IR_33ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_79.1.png" /><br/><span><br/>4 IP HD PWCube <br/>&<br/> IR WIFI NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWCube_WIFI_3MP_IR_33ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_80.1.png" /><br/><span><br/>8 IP HD PWCube <br/>&<br/> IR WIFI NVR</span></a></div>
			<!-- div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWCube_WIFI_3MP_IR_33ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_81.1.png" /><br/><span><br/>16 IP HD PWCube <br/>&<br/> IR WIFI NVR</span></a></div-->
		</div>
		';
	break;
	case "PWDome_IP_5MP_EXIR_100ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_IP_5MP_EXIR_100ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_61.1.png" /><br/><span><br/>4 IP Cameras PWDome <br/>&<br/> EXIR-WDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_IP_5MP_EXIR_100ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_62.1.png" /><br/><span><br/>8 IP Cameras PWDome <br/>&<br/> EXIR-WDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWDome_IP_5MP_EXIR_100ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_63.1.png" /><br/><span><br/>16 IP Cameras PWDome <br/>&<br/> EXIR-WDR HD NVR</span></a></div>
		</div>
		';
	break;
	case "PWBullet_IP_5MP_CMOSIR_100ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_CMOSIR_100ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_64.1.png" /><br/><span><br/>4 IP Cameras PWBullet <br/>&<br/> CMOS-IR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_CMOSIR_100ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_65.1.png" /><br/><span><br/>8 IP Cameras PWBullet <br/>&<br/> CMOS-IR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_CMOSIR_100ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_66.1.png" /><br/><span><br/>16 IP Cameras PWBullet <br/>&<br/> CMOS-IR HD NVR</span></a></div>
		</div>
		';
	break;
	case "PWBullet_IP_5MP_VARIFOCUS_100ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_VARIFOCUS_100ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_67.1.png" /><br/><span><br/>4 IP Cameras PWBullet <br/>&<br/> Vari-Focus-WDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_VARIFOCUS_100ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_68.1.png" /><br/><span><br/>8 IP Cameras PWBullet <br/>&<br/> Vari-Focus-WDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_VARIFOCUS_100ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_69.1.png" /><br/><span><br/>16 IP Cameras PWBullet <br/>&<br/> Vari-Focus-WDR HD NVR</span></a></div>
		</div>
		';
	break;
	case "PWBullet_IP_5MP_EXIR_100ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_EXIR_100ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_70.1.png" /><br/><span><br/>4 IP Cameras PWBullet <br/>&<br/> EXIR-WDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_EXIR_100ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_71.1.png" /><br/><span><br/>8 IP Cameras PWBullet <br/>&<br/> EXIR-WDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_5MP_EXIR_100ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_72.1.png" /><br/><span><br/>16 IP Cameras PWBullet <br/>&<br/> EXIR-WDR HD NVR</span></a></div>
		</div>
		';
	break;	
	case "PWBullet_IP_8MP_4K_100ft":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_8MP_4K_100ft_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_73.1.png" /><br/><span><br/>4 IP Cameras PWBullet <br/>&<br/> 4K Smart DWDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_8MP_4K_100ft_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_74.1.png" /><br/><span><br/>8 IP Cameras PWBullet <br/>&<br/> 4K Smart DWDR HD NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=PWBullet_IP_8MP_4K_100ft_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_75.1.png" /><br/><span><br/>16 IP Cameras PWBullet <br/>&<br/> 4K Smart DWDR HD NVR</span></a></div>
		</div>
		';
	break;	
	case "tviVandalProof":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=vandalPro4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_4.1.png" /><br/><span>Package 4 &<br/> Turbo HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=vandalPro8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_5.1.png" /><br/><span>Package 8 &<br/> Turbo HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=vandalPro16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_6.1.png" /><br/><span>Package 16 &<br/> Turbo HD TVI DVR</span></a></div>
		</div>
		';
	break;
	case "tviTurboTurrent":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=fullHD4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_7.1.png" /><br/><span>Package 4 &<br/> Turbo HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=fullHD8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_8.1.png" /><br/><span>Package 8 &<br/> Turbo HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=fullHD16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_9.1.png" /><br/><span>Package 16 &<br/> Turbo HD TVI DVR</span></a></div>
		</div>
		';
	break;
	/*** IP
	**********************************************************************/
	case "ipExirTurrent":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipExirTurren4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_10.1.png" /><br/><span>Package 4 &<br/> Turbo IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipExirTurren8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_11.1.png" /><br/><span>Package 8 &<br/> Turbo IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipExirTurren16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_12.1.png" /><br/><span>Package 16 &<br/> Turbo IP NVR</span></a></div>
		</div>
		';
	break;
	case "ipFixedDome":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipFixedDome4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_13.1.png" /><br/><span>Package 4 &<br/> Turbo IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipFixedDome8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_14.1.png" /><br/><span>Package 8 &<br/> Turbo IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipFixedDome16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_15.1.png" /><br/><span>Package 16 &<br/> Turbo IP NVR</span></a></div>
		</div>
		';
	break;
	case "ipVarifocal":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipVarifocal4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_16.1.png" /><br/><span>Package 4 &<br/> Turbo IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipVarifocal8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_17.1.png" /><br/><span>Package 8 &<br/> Turbo IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ipVarifocal16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_18.1.png" /><br/><span>Package 16 &<br/> Turbo IP NVR</span></a></div>
		</div>
		';
	break;
/*** LTSecurity
****************************************************************************************************************************************************************************************/
	/*** DIGITAL
	**********************************************************************/
	case "ltsTVITurrent":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVITurrent4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_25.1.png" /><br/><span>Package 4 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVITurrent8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_26.1.png" /><br/><span>Package 8 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVITurrent16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_27.1.png" /><br/><span>Package 16 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
		</div>
		';
	break;
	case "ltsTVIDomeVandal":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVIDomeVandal4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_22.1.png" /><br/><span>Package 4 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVIDomeVandal8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_23.1.png" /><br/><span>Package 8 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVIDomeVandal16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_24.1.png" /><br/><span>Package 16 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
		</div>
		';
	break;
	case "ltsTVILensBu":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVILensBu4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_31.1.png" /><br/><span>Package 4 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVILensBu8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_32.1.png" /><br/><span>Package 8 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVILensBu16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_33.1.png" /><br/><span>Package 16 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
		</div>
		';
	break;
	case "ltsTVIVFDome":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVIVFDome4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_28.1.png" /><br/><span>Package 4 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVIVFDome8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_29.1.png" /><br/><span>Package 8 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsTVIVFDome16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_30.1.png" /><br/><span>Package 16 HD-TVI Cameras &<br/> HD TVI DVR</span></a></div>
		</div>
		';
	break;
	/*** IP
	**********************************************************************/
	case "ltsIPTurrent":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsIPTurrent4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_19.1.png" /><br/><span>Package 4 IP Cameras &<br/> IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsIPTurrent8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_20.1.png" /><br/><span>Package 8 IP Cameras &<br/> IP NVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=ltsIPTurrent16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_21.1.png" /><br/><span>Package 16 IP Cameras &<br/> IP NVR</span></a></div>
		</div>
		';
	break;
	/*** 3MP
	**********************************************************************/
	case "lts_3MP_34":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_34_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_34.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_34_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_35.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_34_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_36.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "lts_3MP_37":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_37_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_37.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_37_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_38.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_37_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_39.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "lts_3MP_40":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_40_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_40.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_40_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_41.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_40_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_42.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "lts_3MP_43":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_43_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_43.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_43_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_44.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_43_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_45.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "lts_3MP_46":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_46_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_46.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_46_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_47.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_46_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_48.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "lts_3MP_49":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_49_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_49.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_49_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_50.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_49_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_51.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "lts_3MP_52":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_52_4" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_52.1.png" /><br/><span>Package 4  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_52_8" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_53.1.png" /><br/><span>Package 8  Cameras &<br/>  DVR</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_pack.php?pack=lts_3MP_52_16" class="linkMenu" ><img class="width100por" src="images/depro/pack/md/pk_54.1.png" /><br/><span>Package 16  Cameras &<br/>  DVR</span></a></div>
		</div>
		';
	break;
	case "cam_1_1":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_1_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_1.1.png" /><br/><span>Fisheye IP Camera Indoor<br/>  3.0 Megapixel</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"></div>
		</div>
		';
	break;
	case "cam_2_1":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_2_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_2.1.png" /><br/><span>Fisheye IP Camera <br/>Indoor - 3.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_3_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_3.1.png" /><br/><span>Fisheye IP Camera <br/>Indoor - 6.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_4_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_4.1.png" /><br/><span>Fisheye IP Camera <br/>Outdoor - 6.0 MP Vandal Proof</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_5_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_5.1.png" /><br/><span>Fisheye IP Camera <br/>Outdoor/Indoor - 12.0 MP Vandal Proof</span></a></div>
		</div>
		';
	break;
	case "ipDomes":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_6_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_10.1.png" /><br/><span>WDR Fixed Dome IP<br/>Outdoor/Indoor - 4.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_7_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_11.1.png" /><br/><span>Vari-Focal Dome IP<br/>Outdoor/Indoor - 4.0 MP</span></a></div>
		</div>
		';
	break;
	case "ipTurrents":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_8_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_12.1.png" /><br/><span>Fixed Lens Turrent IP <br/>Outdoor/Indoor - 4.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_9_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_9.1.png" /><br/><span>Turrent IP <br/>Outdoor/Indoor - 4.0 MP</span></a></div>
		</div>
		';
	break;
	case "ipFisheyes3mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_2_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_2.1.png" /><br/><span>Fisheye IP Camera <br/>Indoor - 3.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_1_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_1.1.png" /><br/><span>Fisheye IP Camera Indoor<br/>  3.0 Megapixel</span></a></div>
		</div>
		';
	break;
	case "ipFisheyes6mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_3_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_3.1.png" /><br/><span>Fisheye IP Camera <br/>Indoor - 6.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_4_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_4.1.png" /><br/><span>Fisheye IP Camera <br/>Outdoor - 6.0 MP Vandal Proof</span></a></div>
		</div>
		';
	break;
	case "ipFisheyes12mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_5_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_5.1.png" /><br/><span>Fisheye IP Camera <br/>Outdoor/Indoor - 12.0 MP Vandal Proof</span></a></div>
		</div>
		';
	break;
	case "ipPtzs":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_27_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_27.1.png" /><br/><span>IP PTZ 10 IR <br/>20X Zoom - 2.1 MP<br/>Indoor/Outdoor</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_28_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_28.1.png" /><br/><span>IP PTZ 6 IR <br/>30X Zoom - 2.1 MP<br/>Indoor/Outdoor</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_29_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_29.1.png" /><br/><span>IP PTZ 4 Matrix IR <br/>20X Zoom - 2.1 MP<br/>Indoor/Outdoor</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_30_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_30.1.png" /><br/><span>IP PTZ SMART IR <br/>20X Zoom - 2.1 MP<br/>Indoor/Outdoor</span></a></div>
		</div>
		';
	break;
	case "ipPinhole":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_31_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_31.1.png" /><br/><span>IP WDR Pinhole Covert<br/>Network Camera 2.1 MP<br/>Indoor/Outdoor</span></a></div>
		</div>
		';
	break;
	case "ipDomes7mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_32_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_32.1.png" /><br/><span>IP Panoramic Dome<br/>Multi-Sensor 7.3 MP<br/>Indoor/Outdoor</span></a></div>
		</div>
		';
	break;
	case "tviPtzs":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_25_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_25.1.png" /><br/><span>HD-TVI PTZ 6 IR<br/>30X Zoom - 2.1 MP<br/>Indoor/Outdoor</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_26_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_26.1.png" /><br/><span>HD-TVI PTZ 4 Matrix IR<br/>20X Zoom - 2.1 MP<br/>Indoor/Outdoor</span></a></div>
		</div>
		';
	break;
	case "tviLicense":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_24_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_24.1.png" /><br/><span>License Plate HD-TVI Camera <br/>Outdoor - 1.3 MP</span></a></div>
		</div>
		';
	break;
	case "tviBullets2mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_10_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_16.1.png" /><br/><span>Fixed Lens Bullet <br/>Outdoor/Indoor - 2.0 MP</span></a></div>
		</div>
		';
	break;
	case "tviBullets3mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_11_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_21.1.png" /><br/><span>Fixed Lens Bullet <br/>Outdoor/Indoor - 3.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_12_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_22.1.png" /><br/><span>Motorized Bullet <br/>Outdoor/Indoor - 3.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_13_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_23.1.png" /><br/><span>HD-TVI Camera Bullet <br/>Outdoor/Indoor - 3.0 MP</span></a></div>
		</div>
		';
	break;
	case "tviDomes2mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_14_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_15.1.png" /><br/><span>Motorized VF<br/> Vandal Proof Dome <br/>Outdoor/Indoor - 2.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_15_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_13.1.png" /><br/><span>Camera Dome<br/> Vandal Proof<br/>Outdoor/Indoor - 2.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_16_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_7.1.png" /><br/><span>Camera Dome<br/> Vandal Proof IR Dome <br/>Outdoor/Indoor - 2.0 MP</span></a></div>
		</div>
		';
	break;
	case "tviDomes3mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_17_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_20.1.png" /><br/><span>Motorized VF<br/> Vandal Proof Dome <br/>Outdoor/Indoor - 3.0 MP</span></a></div>
		</div>
		';
	break;
	case "tviTurrens2mp":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_18_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_14.1.png" /><br/><span>Platinum HD-TVI<br/> Turret Camera<br/>Outdoor/Indoor - 2.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_19_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_8.1.png" /><br/><span>HD-TVI Camera<br/>Turbo Turret<br/>Outdoor/Indoor - 2.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_20_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_6.1.png" /><br/><span>HD-TVI Camera<br/>IR Turret<br/>Outdoor/Indoor - 2.0 MP</span></a></div>
		</div>
		';
	break;
	case "tviTurrens3mp":
		$request = '
		<div class="row">			
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_21_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_17.1.png" /><br/><span>HD-TVI Camera<br/> Motorized Turrent<br/>Outdoor/Indoor - 3.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_22_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_18.1.png" /><br/><span>HD-TVI Camera<br/> Turrent<br/>Outdoor/Indoor - 3.0 MP</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_prod.php?pack=cam_23_1" class="linkMenu" ><img class="width100por" src="images/depro/cam/md/cam_19.1.png" /><br/><span>HD-TVI Camera<br/> IR Turret<br/>Outdoor/Indoor - 3.0 MP</span></a></div>
		</div>
		';
	break;
	case "recNVR":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_6_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_1.1.png" /><br/><span>Network Video Recorder<br/>(DVR) 4 Channel</span></a></div>
		</div>
		';
	break;
	case "recDVR":
		$request = '
		<div class="row">
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_1_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_1.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 4 Channel</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_2_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_2.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 8 Channel</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_3_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_3.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 16 Channel</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_4_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_4.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 32 Channel U1</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_5_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_5.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 32 Channel U2</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_6_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_6.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 4 Channel 4K</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_7_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_7.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 8 Channel 4K</span></a></div>
			<div class="col-lg-4 padding10 itemMenu"><a href="detail_recor.php?pack=rec_8_1" class="linkMenu" ><img class="width100por" src="images/depro/dvr/md/rec_8.1.png" /><br/><span>Digital Video Recorder<br/>(DVR) 16 Channel 4K</span></a></div>
		</div>
		';
	break;
/*** DEFAULT
****************************************************************************************************************************************************************************************/
	default:
		$request = '';
	break;
} 

echo $request;
?>