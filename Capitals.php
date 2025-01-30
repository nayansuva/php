<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Capitals</title>
</head>
<body>
	<form action="Capitals.php" method="post">
		<label>Enter the name of the contry</label>
		<input type="text" name="country">
		<input type="submit" value="Check">

	</form>
</body>
</html>

<?php

$capitals = array("USA" => "Washington D.C.",
					"Japan"=>"Kyoto",
					"South Korea"=>"Seoul",
					"India"=>"New Delhi");

$capital = $_POST["country"];

$capital = $capitals[$capital];

echo $capital;


?>