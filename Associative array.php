<?php
//Associative arrays are used to call value by a key(name) and not by 0,1,2,3...
$capitals = array("USA" => "Washington D.C.",
		"Japan"=>"Kyoto",
		"South Korea"=>"Seoul",
		"India"=>"New Delhi");

echo $capitals["USA"]."<br><hr>"; //echo $capitals["USA"]; will generate an warning.

//To add new keys and values you can do this.
$capitals["China"]="Beijing";
//All the normal function are the same as array.
//array_flip can flip keys to values and values to keys.

foreach($capitals as $key => $value)
{
	echo "{$key}-{$value} <br>";
}
?>