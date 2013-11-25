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
Filename: 	 	script1_6.php
Date: 			10/05/2013
Description:	This is an introduction to string use.  
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$first_name = 'Stephen';
$last_name = 'King';
$book = 'Doctor Sleep';

printf("<p>The book <em>$book</em> was written by $first_name $last_name. </p>");
?>
</body>
</html>
