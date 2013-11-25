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
Filename: 	 	script1_8.php
Date: 			10/05/2013
Description:	Script to begin playing with numbers
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space


//Declare variables
$quantity = 30;		//number of items
$price = 119.95;	//price of items
$taxrate = 0.05;	//tax rate of 5%

//Processing of variables
$total = $quantity * $price;					//calculate the total for the order
$total = $total + ($total * $taxrate);			//adds the tax for the order
$total = number_format ($total, 2);				//formats the total to have 2 decimal places

//output the result of the calculations
printf('<p>You are purchasing <b>' . $quantity . ' </b> widget(s) at a coast of <b>$' . $price . '</b> each.  With tax, the total comes to <b>$' .$total. '</b></p>');
?>
</body>
</html>
