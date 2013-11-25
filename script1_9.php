<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Comments</title>
</head>
<body>
<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	.php
Date: 			
Description:	
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

define ('TODAY', 'October 5, 2013');			//define constant Today

printf('<p>Today is '.TODAY.'.<br />  This server is running version <b>'.PHP_VERSION.'</b> of PHP on the <b>'.PHP_OS.'</b> operating system.</p>');

?>
</body>
</html>
