<?php
  // ===========================================================================
  // This file is associated with the sessions lesson. See sessions.php file.
  // ===========================================================================
  // User will log in, then be redirected to sessions-home-page.php 

  // **********************
  // How to use a session 
  // **********************
  // 1) Create a session before displaying any HTML, using the session_start() function in a PHP script.
  session_start();

  // 2) After starting a session, you can add HTML, as shown below.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sessions Login Page</title>
</head>
<body>
  <h1>This is the Sessions Login Page</h1>
  <a href="sessions-home-page.php">This goes to the Sessions Home Page</a>
</body>
</html>
<?php
  // 3) Create session key=>value pairs within the $_SESSION superglobal variable.

  // Here, you stored a username and password in the $_SESSION superglobal variable.
  // You can access their values using their keys.

  $_SESSION["username"] = "agv123";
  $_SESSION["password"] = "password123";

  echo "<br>";
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";

  // 4) You now want to be able to access these values in the sessions-home-page.php 
?>