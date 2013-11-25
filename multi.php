<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Multidimensional Arrays</title>
</head>
<body>

<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	multi.php
Date: 			11/14/2013
Description:	Work with multidimensional arrays.  Script 2.7 of PHP and MySQL for Dynamic Web Sites.  
-->
 

<p>Some North American States, Provinces, and Territories:</p>
<?php 				# Script 2.7 - multi.php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

//Array of Mexican States
$mexico = array(
	'YU' => 'Yucatan',
	'BC' => 'Baja California',
	'OA' => 'Oaxaca'
	);
echo "<p>Mexico array is done.</p>\n";

//Array of US States
$us = array(
	'MD' => 'Maryland',
	'IL' => 'Illinois',
	'PA' => 'Pennsylvania',
	'IA' => 'Iowa',
	'SC' => 'South Carolina',
	'CA' => 'California',
	'NY' => 'New York',
	'NJ' => 'New Jersey',
	'WA' => 'Washington'
	);
echo "<p>US array is done.</p>\n";

//Array of Canadian Provinces
$canada = array(
	'QC' => 'Quebec',
	'AB' => 'Alberta',
	'NT' => 'Nothwest Territories',
	'YT' => 'Yukon',
	'PE' => 'Prince Edward Island'
	);
echo "<p>Canada array is done.</p>\n";

//Pull all arrays into one
$n_america = array(
	'Mexico' => $mexico,
	'United States' => $us,
	'Canada' => $canada
	);
echo "<p>Multidimensional array is done.</p>\n";

//primary foreach loop
foreach ($n_america as $country => $list)
{
	//print a heading
	echo "<h2>$country</h2><ul>";

	//print each state, province or territory
	foreach ($list as $k => $v)					//secondary foreach loop.  Stores key as abbreviation and value as full name
	{
		echo "<li>$k - $v</li>\n";
	}

	//close the list
	echo '</ul>';
}//end of main foreach loop
?>
</body>
</html>