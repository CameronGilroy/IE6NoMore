<?php
/*
Example: [[!IE6Warning]]

Place in the header of the page so a to be able to give a warning to IE6 users with out having ugly "<!--[if lt IE 7]><![endif]-->" tags in the head!
*/
	$userAgent = strtolower($_SERVER["HTTP_USER_AGENT"]);
	if ( eregi("msie 6", $userAgent) || eregi("msie 5", $userAgent) ) {
	  echo "<script src='http://static.turnwheel.com/ie6/warning.js'></script><script>window.onload=function(){_ie6('http://static.turnwheel.com/ie6/')}</script>";
	  
	}
?>