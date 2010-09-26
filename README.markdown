# IE6NoMore

## About

* By Cameron Gilroy
* IE6NoMore
* Version: 1.1
* License: GNU GPL v2
* Based in part on http://www.ie6nomore.com/
* Creator: Cameron Gilroy http://www.camerongilroy.com
* Support URL: http://www.camerongilroy.com/
* GitHub: http://github.com/camgill/IE6NoMore

The aim of this plugin is to help remind users of IE6 that they need to upgrade their browser!

By Cameron Gilroy

### Usage

Place [[!IE6NoMore]] just after the first @<body>@ tag to give a warning to IE6 users without having ugly @<!--[if lt IE 7]><![endif]-->@ tags in your html code!

You can also call the contents of your own chunk like this @[[!IE6NoMore? &Message=`[[$Your_Chunk_Name]]`]]@

You can also use a string of text like @[[!IE6NoMore? &Message=`<h1>Go Away IE6!!</h1>`]]@

### Thanks!

Thanks Emmanuel for helping, and those that have sent suggestions!

### History

*Version 1*
	The first release.
	
*Version 2*
	Changed from eregi to strpos