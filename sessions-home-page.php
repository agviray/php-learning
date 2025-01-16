<?php
  // ===========================================================================
  // This file is associated with the sessions lesson. See sessions.php file.
  // ===========================================================================
  // Once a user logs in via sessions-login-page.php, then will be redirected to this page.

  // *****************************************************************
  // Steps continue from step 4 in the sessions-login-page.php file
  // *****************************************************************
  // 5) After you created the session and stored a username and password in it, you'll want
  //    to make their values accessible in this file.

  // 6) Create another session before any HTML. 
  //    - You will always need to create a session if you want to access its key=>value pairs.
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sessions Home Page</title>
</head>
<body>
  <h1>This is the Sessions Home Page</h1>
  <form action="sessions-home-page.php" method="post">
    <input type="submit" name="logout" value="logout">
  </form>
</body>
</html>
<?php
  // Now you can access the session's key=value data that was created in the sessions-login-page.php file.
  echo "<br>";
  echo "Welcome back, {$_SESSION["username"]}! <br><br>";
  echo "Current username: {$_SESSION["username"]} <br>";
  echo "Current password: {$_SESSION["password"]} <br>";
  
  

  // PHP code for logging out
  if (isset($_POST["logout"])) {
    // Use the session_destroy() function to destroy the session.
    session_destroy();
    // Navigate back to login page upon successful logout.
    header("location: sessions-login-page.php");
  }
?>