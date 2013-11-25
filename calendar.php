<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Calendar</title>
</head>
<body>
<form action="calendar.php" method="post">


<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	calendar.php
Date: 			11/14/2013
Description:	Calendar has 3 pull down menus created from arrays.  Script 2.6 in PHP and MySQL for Dynamic Web Sites.
-->
 
<?php # Script 2.5 - calendar.php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

//aray for the months of the year
$months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 
	'October', 'November', 'December');

//array for the days of the month using a range from 1 to 31
$days = range(1, 31);

//array for the years we are interested in listing, using a range from 2011-2021
$years = range(2011, 2021);


//Generate the month pull down menu
echo '<select name="month">';
foreach($months as $key => $value) 
{
	echo "<option value=\"$key\">$value</option>\n";
}
echo '<select>';

//Generate the day pull down menu
echo '<select name="day">';
foreach($days as $value)
{
	echo "<option value =\"$value\">$value</option>\n";
}
echo '<select>';

//Generate the year pull down menu
echo '<select name="year">';
foreach ($years as $value)
{
	echo "<option value =\$value\">$value</option>\n";
}
echo '<select>';
?>
</form>
</body>
</html>