<?php

// logical operators = combine conditional statements

// && = true if both conditions are true
// || = true if at least one condition is true
// ! = true if false. or false if true.

$ageA=21;
$ageB=21;
$ageC=14;

if($ageA>=18 && $ageA<=40)
{
	echo "You Are Young!<br>";
}

if($ageB>=18 || $ageB<=40)
{
	echo "You Are Young!<br>";
}

if(!($ageC>=18 && $ageC<=40))
{
	echo "Baby!, You Are Not Young!";
}
