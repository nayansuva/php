<?php

// isset() = Returns TRUE if a variable is declared and not null
// empty() = Returns TRUE if a variable is not declared, false, null ""

$username1 = "neow";
$username2;

echo isset($username1)."<br>"; // 1 = TRUE, 0 or nothing = FALSE

if(isset($username1))
{
	echo "This variable is set<br>";
}
else
{
	echo "This variable is not set<br>";
}

if(empty($username2))
{
	echo "This variable is not set";
}
else
{
	echo "This variable is set";
}
?>