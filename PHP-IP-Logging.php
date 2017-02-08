<?php
if (!preg_match('/bot|spider|crawler|curl|Verification|Yahoo|Favicon|^$/i', $_SERVER['HTTP_USER_AGENT'])){
	$IPADDR = $_SERVER['REMOTE_ADDR']; 
	$ploc = fopen("iplog.txt", "a"); 
	fwrite($ploc,$IPADDR . " \t\t ".date('dMy H:i:s')." \t ".$_SERVER['HTTP_USER_AGENT']."\t".$_SERVER['HTTP_REFERER']."\t".$_SERVER['HTTP_ACCEPT_LANGUAGE']." \n"); 
	fclose($ploc);
}?>