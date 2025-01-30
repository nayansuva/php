<?php

function result(int $num)
{
	if($num % 2 == 0)
	{
		echo " it's even!";
	}
	else if($num % 2 == 1)
	{
		echo " it's odd!";
	}
}

result(10);
?>