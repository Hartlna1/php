<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href="forms.css" rel="stylesheet" type="text/css"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>FORM FEEDBACK</title>
</head>
<body>

<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	form.php
Date: 			10/12/2013
Description:	Practice handling data from HTML forms.
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments=$_REQUEST['comments'];
$age=$_REQUEST['age'];

if(isset($_REQUEST['gender']))
{
	$gender = $_REQUEST['gender'];
}
else
{
	$gender=NULL;
}
/*$_REQUEST['submit'];*/

printf("<p>Thank you, <b>$name</b>, for the following comments: <br />
	<tt>$comments</tt></p> 
	<p>We will reply to you at <i>$email</i>.  </p>\n");

if($gender=='M')														//response if male is selected
{
	printf('<p><b>Good day, Sir!</b></p>');
}
elseif ($gender=='F')													//response if female is selected
{
	printf('<p><b>Good day, Madam!</b></p>');
}
else 																	//response if gender is NULL
{
	printf('<p><b>You forgot to enter your gender!</b></p>');
}
?>