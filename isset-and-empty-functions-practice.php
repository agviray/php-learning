<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Helpful PHP Functions: isset() and empty()</title>
</head>
<body>
  <form action="isset-and-empty-functions-practice.php" method="post">
    <div>
      <label>Username:</label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password:</label>
      <input type="text" name="password">
    </div>
    <br>
    <input type="submit" name="login" value="Log in">
    <br>
  </form>
</body>
</html>

<?php
  // Remember, $_POST is a predefined or superglobal variable in PHP. 

  // $_POST is an associative, meaning it's an array whose elements are key=>value pairs.
  // - The "name" attributes of the <input> tags are the keys of the key=>value pairs in $_POST associative array. 
  // - The "value" attributes of the <input> tags (if provided) are the values of the key=>value pairs. 

  // Since $_POST is an associative array, we can use it along with the isset() and empty()
  // functions to determine if the form fields are filled out.
//  /*
  foreach($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
  }
  // */

  // ****************************************************
  // Using isset() to check if a button was clicked
  // ****************************************************
  // You can check if a button was clicked using isset().
  // You do this by writing something like: if (isset($_POST["login"])) { ...some code.. }
  // The if statement is essentially saying "If the HTML tag that you're referencing has a key with a set value, then run some code."
  // In this situation, the HTML tag with the "login" key is the element, <input type="submit" name="login" value="Log in">. 
  // Remember, the name attribute becomes a key in the $_POST variable (which gets created as an associative array), once a PHP file
  // gets sent a POST request.
  // This tag also has a value attribute which is "Log in". This means that the key=>value pair of the <input type="submit"> element
  // is "login"=>"Log in"
  // This further means that isset($_POST["login"]) evaluates to true.
  // You can then finally use this true evaluation to write code that's based on the Submit button being clicked.

  // if (isset($_POST["login"])) { 
  //   echo "You tried to log in.";
  // }
    
  // ****************************************************
  // Using empty() to check
  // ****************************************************
  // You can use the empty() function to check the value of an <input type="text"> field.

  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username)) {
      echo "Please enter your username. <br>";
    } else if (empty($password)) {
      echo "Please enter your password.";
    } else {
      echo "Hello, {$username}";
    }
  }
?>