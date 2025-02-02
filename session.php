<?php
// Notes:

/*session = super globel varibel used to store information on a user to be used across multiple pages.
a user is assigned a session-id ex. login credentials.*/


  session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>page 1</title>
 </head>
 <body>
 This is page 1!<br>
 <a href="for the include function\main_page.php">go to main page.</a><br>
 </body>
 </html>

 <?php
$_SESSION['username'] = "nayansuva";
$_SESSION['password'] = "nayan1234";

echo $_SESSION['username']."<br>";
echo $_SESSION['password']."<br>";
?>