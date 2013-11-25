<!--
Programmer: 	Nanette K. Hartley
Language: 		PHP
Filename: 	 	pursue_numbers.php
Date: 			10/08/2013
Description:	Playing with numbers in JavaScript.
-->
 
<?php
$BR = "<br>";		//variable for HTML line break
$EL = "."; 			//variable for end line
$ES = " ";			//variable for extra space

$float = 3.141592653589793238462643383279502884197169399375105820974944592307816406286;
$ceilFloat = ceil($float);
$floorFloat = floor($float);
$pi = pi();
$difference = $ceilFloat - $floorFloat;
$add = $ceilFloat + $floorFloat;
$product = $ceilFloat * $floorFloat;
$divisor = $ceilFloat / $floorFloat;
$modulus = $ceilFloat % $floorFloat;


printf("This is the number: " . $float . $BR);
printf("This is the ceiling - rounds up: " . $ceilFloat . $BR);
printf("This is the floor - rounds down: " . $floorFloat . $BR);
printf("This is true value of pi: " . $pi . $BR);
printf("This is the difference between ceiling and floor: " . $difference . $BR);
printf("This is the addition of ceiling and floor: " . $add . $BR);
printf("This is the product of ceiling and floor: " . $product . $BR);
printf("This is the result of division of ceiling by floor: " . $divisor . $BR);
printf("This is the remainder of the division of ceiling by floor: " . $modulus . $BR);
?>