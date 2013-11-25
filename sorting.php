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
Filename: 	 	sorting.php
Date: 			11/21/2013
Description:	Exploring sorting methods in PHP.  Using sort (keys reset), asort (sort with keys), ksort (sort by key value),
				rsort (reverse sort with no keys), arsort (reverse sort with keys), krsort (reverse sort by key value).
-->

<table border="0" cellspacing="8" cellpadding="3" align="center">
<tr>
	<td><h2>Rating</h2></td>
	<td><h2>Title</h2></td>
</tr>

<?php     #Script 2.8 - sorting.php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$movies = array(
	'Casablanca' => 10,
	'To Kill a Mockingbird' => 10,
	'The English Patient' => 2,
	'Stranger Than Fiction' => 9,
	'Story of the Weeping Camel' => 5,
	'Donnie Darko' => 7
	);

//print out the array as it is
print('<tr><td colspan="2"><b>In their orginal order: </b></td></tr>');
foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}

//sort by title (key value)
ksort($movies);
print('<tr><td colspan="2"><b>Sorted by Title:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}

//sort in reverse order by title (key value)
krsort($movies);
print('<tr><td colspan="2"><b>Reverse Sorted by Title:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>");
}
//sort by numerically by descending rating
arsort($movies);
print('<tr><td colspan="2"><b>Sorted by Rating:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}

//reverse the sort by rating
asort($movies);
print('<tr><td colspan="2"><b>Sorted from Worst Rrating to Best:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}

//randomize the order of the ratings
shuffle($movies);
print('<tr><td colspan="2"><b>Shuffle the ratings:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}


//sort without regard to key
sort($movies);
print('<tr><td colspan="2"><b>Sorted rating seperately from Title:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}

//reverse sort without regard to key
rsort($movies);
print('<tr><td colspan="2"><b>Reversed order from above:</b></td></tr>');

foreach($movies as $title => $rating)
{
	print("<tr><td>$rating</td>
			<td>$title</td></tr>\n");
}

?>
</table>
</body>
</html>