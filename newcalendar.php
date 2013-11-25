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

//Generate the month pull down menu
echo '<select name="month">';
foreach($months as $key => $value) 
{
	echo "<option value=\"$key\">$value</option>\n";
}
echo '<select>';

//Generate the day pull down menu
echo '<select name="day">';
for($day = 1; $day <= 31; $day++)
{
	print("<option value=\$day\">$day</option>\n");
}
print('</select>');

//Generate the year pull down menu
echo '<select name="year">';
for($year = 2011; $year <= 2021; $year++)
{
	print("<option value=\"$year\">$year</option>\n");
}
print('</select>');

?>
</form>
</body>
</html>