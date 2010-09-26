<?php
/*

h1. IE6NoMore

h2. About

* By Cameron Gilroy
* IE6NoMore
* Version: 1.0
* Creator: Cameron Gilroy http://www.camerongilroy.com
* Support URL: http://www.camerongilroy.com/
* GitHub: http://github.com/camgill/IE6NoMore

The aim of this plugin is to help remind users of IE6 that they need to upgrade their browser!

By Cameron Gilroy

h3. Usage

Place [[!IE6NoMore]] just after the first @<body>@ tag to give a warning to IE6 users without having ugly @<!--[if lt IE 7]><![endif]-->@ tags in your html code!

You can also call the contents of your own chunk like this @[[!IE6NoMore? &Message=`[[$Your_Chunk_Name]]`]]@

You can also use a string of text like @[[!IE6NoMore? &Message=`<h1>Go Away IE6!!</h1>`]]@

h3. Thanks!

Thanks Emmanuel for helping!

*/
$Message = isset($Message)? $Message : '[[$IE6NoMore]]';

	$userAgent = strtolower($_SERVER["HTTP_USER_AGENT"]);
	if( strpos($userAgent,'msie 6') || strpos($userAgent,'msie 5')) {
	  echo "$Message"; 
	}
?>