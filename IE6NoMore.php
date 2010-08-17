<?php
/*
Example: [[!IE6NoMore]]

Place in the header of the page so a to be able to give a warning to IE6 users with out having ugly "<!--[if lt IE 7]><![endif]-->" tags in the head!
*/
$Message = isset($Message)? $Message : '[[$IE6NoMore]]';

	$userAgent = strtolower($_SERVER["HTTP_USER_AGENT"]);
	if ( eregi("msie 6", $userAgent) || eregi("msie 5", $userAgent) ) {
	  echo "$Message"; 
	}
?>