<?php
$protectWebSite = "no";

if( $protectWebSite == "si" ){
	echo '<body oncontextmenu="return false" onkeydown="return false">';
} else {
	echo '<body>';
}
?>