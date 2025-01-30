<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
</head>
<body>
<form action="log in using isset and empty.php" method="post">
	<lable>Username:</lable>
	<input type="text" name="username"><br>
	<lable>Password   :</lable>
	<input type="text" name="password"><br>
	<input type="submit" name="login"value="Log in">
</form>
</body>
</html>

<?php
if($_POST["login"])
	{ echo "You tried to log in!<br><hr>";}

if(empty($_POST["username"]))
{ echo "The username is empty!<br><hr>";}

if(empty($_POST["password"]))
{ echo "The password is empty!<br><hr>";}

if(isset($_POST["username"]))
{ echo "The username is {$_POST["username"]}<br><hr>";}

if(isset($_POST["password"]))
{ echo "The password is {$_POST["password"]}<br><hr>";}



//extra if you want to try
/*if(empty($_POST))
{
	foreach ($_POST as $key => $value) {
		echo "{$key} = {$value}<br><hr>";
	}
}

if(isset($_POST))
{
	foreach ($_POST as $key => $value) {
		echo "{$key} = {$value}<br><hr>";
	}
}
*/
?>