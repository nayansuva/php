<?php

$grade = "A";

switch($grade)
{
	case "A":
	{
		echo "You did great.";
		break;
	}
	case "B":
	{
		echo "You did good.";
		break;
	}
	case "C":
	{
		echo "You did okay!<br> Better luck next time!";
		break;
	}
	case "D":
	{
		echo "You did it poorly!<br>Give more efforts next time.";
		break;
	}
	case "F":
	{
		echo "Sorry baby, <br> You Failed";
		break;
	}
	default:
	{
		echo "<b>{$grade}</b> - Not valid input.";
		break;
	}
}

?>