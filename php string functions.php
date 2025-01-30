<?php

$username = "Bro Code";
$username = strtolower($username); // make all characters in lower case.
echo $username;

echo "<br>";

$username = strtoupper($username); // make all characters in upper case.
echo $username;

echo "<br>";

$trim = "it's      trim       ";
$trim = trim($trim); // remove any white spaces.
echo $trim;

echo "<br>";

$username = "Bro Code";
$username = str_pad($username, 20, "0"); // adds extra words or symbols.
echo $username;

echo "<br>";

$username = "Bro Code";
$phone = "123-456-7890";
$phone = str_replace("-", "/", $phone); // replace any characters. //str_replace("WHAT U WANT TO REPLACE", "WITH WHAT..", IN WHICH VARIABLE);
echo $phone;

echo "<br>";

$username = "Bro Code";
$username = strrev($username); // reverse the string.
echo $username;

echo "<br>";

$username = "Bro Code";
$username = str_shuffle($username); // replace rendomly.
echo $username;

echo "<br>";

$me = "nayan";
$coder = "nayan";
$equals = strcmp($me, $coder); // if the 2 strings are same it returns 0(true) otherwise 1 or -1(fulse).
echo $equals;

echo "<br>";

$count = strlen($phone); //tells how many characters are in the string.
echo $count;

echo "<br>";

$position = strpos($phone, "/"); // tells the position of the first character. // strpos(IN WHICH, "WHAT");
echo $position;
?>