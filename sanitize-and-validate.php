<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanitize and Validate User Input</title>
</head>
<body>
  <h1>Sanitize and Validate User Input</h1>
  <form action="sanitize-and-validate.php" method="post">
    <label>Username</label>
    <input type="text" name="username">
    <br/>
    <br/>
    <label>Age</label>
    <input type="text" name="age">
    <br/>
    <br/>
    <label>Email</label>
    <input type="text" name="email">
    <br/>
    <br/>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>

<?php
  if(isset($_POST["login"])) {
    // You can sanitize user input in different ways.
    // One way is by using a filter to sanitize user input. To do this, use the filter_input() function.

    // ********************************************** 
    // Example of sanitizing user input with 
    // a filter, by using filter_input() function
    // **********************************************
    // filter_input() takes three arguments:
    // 1) INPUT_POST (or INPUT_GET, if using the get method).
    // 2) The name attribute of the input.
    // 3) The filter to apply. This could be a built-in PHP filter, or a custom filter by 
    //    implementing the built-in FILTER_CALLBACK.

    // ***************************************************
    // Filter text by converting special characters in
    // user's input.
    // ***************************************************
    // Here, the filter being used is a built-in PHP filter, FILTER_SANITIZE_SPECIAL_CHARS.
    // This filter converts certain special characters to their corresponding HTML entities.
    // Essentially, it's used to prevent basic cross-site scripting (XSS) attacks by
    // making it more difficult for attackers to injecdt malicious HTML or JS into a website. 
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hello, {$username}! <br>";
    
    // ***************************************
    // Filter all characters besides numbers
    // ***************************************
    // To filter out all characters besides numbers, use FILTER_SANITIZE_NUMBER_INT
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // echo "You are {$age} years old. <br>";
    
    // **********************************
    // Filter all illegal characters in
    // email addresses
    // **********************************
    // To filter illegal characters in an email address, use FILTER_SANITIZE_EMAIL
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    // echo "Your email is {$email}. <br>";
    
    // *******************************************
    // Validating inputs using a VALIDATE filter 
    // *******************************************
    // If an input doesn't pass a validate filter, it will return an empty string.
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // Validates an integer.
    $email = filter_input(INPUT_POST, "age", FILTER_VALIDATE_EMAIL); // Validates an email address.

    if (empty($age)) {
      echo "That number wasn't valid. <br>";
    } else {
      echo "You are {$age} years old. <br>";
    }
    if (empty($email)) {
      echo "That email wasn't valid.";
    } else {
      echo "Your email is {$email}";
    }
  }
?>