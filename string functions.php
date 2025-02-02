<?php
echo "<b>strtolower-Function</b><br>";
$username = "Bro Code";
$username = strtolower($username); // make all characters in lower case.
echo $username;


echo "<br><hr>";
echo "<b>strtoupper-Function</b><br>";
$username = strtoupper($username); // make all characters in upper case.
echo $username;

echo "<br><hr>";
echo "<b>trim-Function</b><br>";
$trim = "it's      trim       ";
$trim = trim($trim); // remove any white spaces.
echo $trim;

echo "<br><hr>";
$username = str_pad($username, 20, "0"); // adds extra words or symbols.
echo "<b>-Function</b><br>";
$username = "Bro Code";
$username = str_pad($username, 20, "0"); // adds extra words or symbols.
echo $username;

echo "<br><hr>";
echo "<b>str_replace-Function</b><br>";
$username = "Bro Code";
$phone = "123-456-7890";
$phone = str_replace("-", "/", $phone); // replace any characters. //str_replace("WHAT U WANT TO REPLACE", "WITH WHAT..", IN WHICH VARIABLE);
echo $phone;

echo "<br><hr>";
echo "<b>strrev-Function</b><br>";
$username = "Bro Code";
$username = strrev($username); // reverse the string.
echo $username;

echo "<br><hr>";
echo "<b>str_shuffle-Function</b><br>";
$username = "Bro Code";
$username = str_shuffle($username); // replace rendomly.
echo $username;

echo "<br><hr>";
echo "<b>strcmp-Function</b><br>";
$me = "nayan";
$coder = "nayan";
$equals = strcmp($me, $coder); // if the 2 strings are same it returns 0(true) otherwise 1 or -1(fulse).
echo $equals;

echo "<br><hr>";
echo "<b>strlen-Function</b><br>";
$count = strlen($phone); //tells how many characters are in the string.
echo $count;

echo "<br><hr>";
echo "<b>strpos-Function</b><br>";
$position = strpos($phone, "/"); // tells the position of the first character. // strpos(IN WHICH, "WHAT");
echo $position;

echo "<br><hr>";
echo "<b>substr-Function</b><br>";
$name = "nayan suva";
$fname = substr($name, 0, 5); //create a string from a existing string(string name, where to start, where to end);
echo $fname;

echo "<br><hr>";
echo "<b>explode-Function</b><br>";
$forexplode = "first second third fourth";
$toexplode = explode(" ", $forexplode); //convert variable into string. 
echo $toexplode[0];

echo "<br><hr>";
echo "<b>implode-Function</b><br>";
$anarray = array('one','two','three'); //mix all the arrys in one variable.
$anarray = implode(' ', $anarray);
echo $anarray;

?>