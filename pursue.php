<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	.php
Date: 			
Description:	
-->
 
<?php
$BR = "<br>";									//variable for HTML line break
$EL = "."; 										//variable for end line
$ES = " ";										//variable for extra space
$string1 = "Hello World!";						//string with no HTML
$string2 = "Hello World! + <BR />";				//string with internal HTML
$string3 = "Hello World! + '<BR />'";			//string with HTML in single quotes

$string4 = 'Hello World!';						//single quote string of $string1
$string5 = 'Hello World! + <BR />';				//single quote string of $string2
$string6 = 'Hello World! + "<BR />"';			//single quote string with HTML in double quotes

printf($string1 . $BR);
printf($string2);
printf($string3);
printf($string4);
printf($string5);
printf($string6);
?>