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
Filename: 	 	script1_5.php
Date: 			10/5/2013
Description:	Allows the user to use predefined varaibles in PHP
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];

printf("<p>You are running the file: <br /><b>$file</b>.</p>\n");

printf("<p>You are viewing this page using: <br /><b>$user</b></p> \n");

printf("<p>This server is running: <br /> <b>$server</b></p> \n");


?>
</body>
</html>
