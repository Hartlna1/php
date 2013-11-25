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
Filename: 	 	script1_7.php
Date: 			10/05/2013
Description:	This script is meant to allow exploration of concatenation of strings.  
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$first_name = 'Stephen';						//author's first name
$last_name = 'King';							//author's last name
$book = 'Doctor Sleep';							//name of book

$author = $first_name . ' ' .$last_name;		//concatenation of author name

printf("<p>The book <em>$book</em> was written by $author.</p>");

?>
</body>
</html>
