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
  <br><br>
  <form action="sessions-login-page.php" method="post">
    <span style="display: block;"><label>Username</label></span>
    <span style="display: block;"><input type="text" name="username"></span>
    <span style="display: block;">Password</span>
    <span style="display: block;"><input type="password" name="password"></span>
    <span style="display: block;"><input type="submit" name="login" value="login"></span>
  </form>
</body>
</html>
<?php
  // 3) Create session key=>value pairs within the $_SESSION superglobal variable.

  // Here, you stored a username and password in the $_SESSION superglobal variable, after checking if a user entered them in the form.
  // You can access their values using their keys.
  if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];

      // You can redirect the browser to the sessions-home-page using PHP's built-in header() function.
      header("location: sessions-home-page.php");
    } else {
      echo "Please check your credentials. <br>";
    }
  }

  // 4) You now want to be able to access these values in the sessions-home-page.php 
?>