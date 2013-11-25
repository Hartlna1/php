<!DOCTYPE html>
<html> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Explode and Implode</title>
</head>
<body>

<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	explode_implode.php
Date: 			11/19/2013
Description:	Exploration of implode and explode functions to turn arrays into strings and vice versa.
-->

<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

print("Yo! <br>");

$s1 = 'Mon-Tue-Wed-Thu-Fri';
print("The string \$s1 is: $s1. <br>");

$days_array = explode('-', $s1);
print("The array \$days_array is: ");
print_r($days_array);
print("$EL $BR");
print("The array \$days_array is: $days_array[0] $days_array[1] $days_array[2] $days_array[3] $days_array[4]. $BR");

$s2 = implode (',', $days_array);
printf("The string \$s2 is: $s2$EL $BR");

?>
</body>
</html>