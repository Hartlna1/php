<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Form Feedback</title>
</head>
<body>

<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	handle_form.php
Date: 			11/14/2013
Description:	Use of arrays in handling form data
-->
 
<?php # Script 2.5 - handle_form.php #4
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

if(!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']))
{
	echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments: <br /> 
		<tt>{$_POST['comments']}</tt></p>
		<p>We will reply to you at <i>{$_POST['email']}</i>. </p> \n";
}
else 		//Missing form data
{
	echo '<p>Please go back and fill out the form again.</p>';
}
?>
</body>
</html>