<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href="forms.css" rel="stylesheet" type="text/css"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css" title="text/css" media="all">
	.error
	{
		font-weight: : bold;
		color: #C00;
	}
	</style>

	<title>FORM FEEDBACK</title>
</head>
<body>

<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	handle_form.php
Date: 			10/12/2013
Description:	Practice handling data from HTML forms.
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space


//validate the name:
if(!empty($_REQUEST['name']))
{
	$name=$_REQUEST['name'];
}
else
{
	$name=NULL;
	printf('<p class="error">You forgot to enter your name!</p>');
}

//validate the email:
if(!empty($_REQUEST['email']))
{
	$email=$_REQUEST['email'];
}
else
{
	$email=NULL;
	printf('<p class="error">You forgot to enter your email!</p>');
}

//validate the comments:
if(!empty($_REQUEST['comments']))
{
	$comments=$_REQUEST['comments'];
}
else
{
	$comments=NULL;
	printf('<p class="error">You forgot to enter any comments!</p>');
}

//validate the gender
if(isset($_REQUEST['gender']))
{
	$gender=$_REQUEST['gender'];
	if($gender=='M')
	{
		printf('<p class="male">Good day, Sir!</p>');
	}
	elseif($gender=='F')
	{
		printf('<p class="female">Good day, Madam!</p>');
	}
	else //gender is neither M nor F
	{
		$gender=NULL;
		printf('<p class="error"><b>Gender should be either "M" or "F"! </b></p>');
	}
}
else  //gender is not set
{
	$gender = NULL;
	printf('<p class="error">You forgot to select your gender!</p>');
}
//if everything is OK, lprint the message:
if ($name && $email && $gender && $comments)
{
	printf("<p>Thank you, <b>$name</b>, for the following comments:<br />
		<tt>$comments</tt></p>
		<p>We will reply to you at <i>$email</i>.</p> \n");
}
else //Missing form value
{
	printf('<p class="error">Please go back and fill out the form again.</p>');
}

?>
</body>
</html>
