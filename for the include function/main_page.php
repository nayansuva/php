<?php

  session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main Page</title>
</head>
<body>
<a href="page1.html">go to page 1.</a><br>
<a href="page2.html">go to page 2.</a><br>
<a href="page3.html">go to page 3.</a><br>
</body>
</html>

<?php
$_SESSION['username'] = "nayansuva";
$_SESSION['password'] = "nayan1234";

echo $_SESSION['username']."<br>";
echo $_SESSION['password']."<br>";
?>