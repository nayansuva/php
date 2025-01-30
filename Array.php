<?php

$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

echo $days[0]."<br>";
echo $days[1]."<br>";
echo $days[2]."<br>";
echo $days[3]."<br>";
echo $days[4]."<br>";
echo $days[5]."<br>";
echo $days[6]."<br>";

echo "<hr>";
echo "This is another way!<br><hr>";
// it's normally used to print every array 
foreach($days as $day)
{
	echo $day."<br>";
}

//Extra Notes:

//There is an count funtion that can count values.
echo "<hr>".count($days).": days totle";

//There is an pop function that can remove the last value of your array.
//but it's not in use in this code.
//array_pop($days,);

//There is an shift function that can remove the first value of your array.
//but it's not in use in this code.
//array_shift($days,);


//There is an puch function that can add more values to your array.
//but it's not in use in this code.
//array_push($days,"Sunday");

//There is an reverse function that can reverse the array,but only be used in a new array.
//but it's not in use in this code.
//$reversed array_reverse($days);

?>