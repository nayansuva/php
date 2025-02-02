!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sanitize</title>
</head>
<body>
<form action="sanitize-validate.php" method="post">
	username:<br>
	<input type="text" name="username"><br>
	age:<br>
	<input type="text" name="age"><br>
	email:<br>
	<input type="text" name="email"><br>
	<input type="submit" name="login" value="login">
	
</form>
</body>
</html>
<?php
// $username = $_POST['username'];
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // if it's not a number it will be empty.
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); // if it's not a email it will be empty.
echo $username."<br>";
echo $age;
echo $email;
?>