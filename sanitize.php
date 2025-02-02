<!DOCTYPE html>
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
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);// stop any code to run and print it.
$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); //only pass the numbers.
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); // filter the email.
echo $username."<br>";
echo $age;
echo $email;
?>