<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Useful Math Functions</title>
</head>
<body>

		<!--ignore the warnings plz! -->

	<form action="Useful Math Functions.php" method="post">
		<label>X :</label>
		<input type="text" name="x"><br>
		<label>Y : </label>
		<input type="text" name="y"><br>
		<label>Z :</label>
		<input type="text" name="z"><br>
		<input type="submit" name="Answers"><br><br>
	</form>
</body>
</html>

<?php
 $x = $_POST["x"];
 $y = $_POST["y"];
 $z = $_POST["z"];
 
    $abs = abs($x)."<br>";
    $round = round($x)."<br>";
    $ceil = ceil($x)."<br>";
    $floor = floor($x)."<br>";
    $max = max($x, $y, $z)."<br>";
    $min = min($x, $y, $z)."<br>";
    $sqrt = sqrt($x)."<br>";
    $pow = pow($x, $y)."<br>";
    $pi = pi()."<br>"; //don't know why this thing even exist !
    $rand = rand(1, 6)."<br>";



    echo "-Absulute (+) velue = <b><u>{$abs}</b></u>";   //gives absulute (+) velue.
    echo "-Rounds of velue = <b><u>{$round}</b></u>";  //Rounds a floating-point number to the nearest integer.
    echo "-Ceil of velue = <b><u>{$ceil}</b></u>";   //Always rounds a number up to the nearest integer.
    echo "-Floor of velue = <b><u>{$floor}</b></u>";  //Always rounds a number up down the nearest integer.
    echo "-Largest value = <b><u>{$max}</b></u>";   //Returns the largest value among the arguments.
    echo "-Smallest value = <b><u>{$min}</b></u>";   //Returns the smallest value among the arguments.
    echo "-Quare root of a number = <b><u>{$sqrt}</b></u>";  //Calculates the square root of a number.
    echo "-Power of the two velues = <b><u>{$pow}</b></u>";    //Raises a number $x to the power of $y. //or //$x ni $y ghaat in gujrati
    echo "-Pi (π) = <b><u>{$pi}</b></u>";    //Returns the value of π (pi).
    echo "-Random number = <b><u>{$rand}</b></u>";  //Generates a random integer between the specified range (1 to 6 in this case).
?>

