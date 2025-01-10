<?php 
  // =================
  // About this file: 
  // =================
  // The purpose of this file is to display the syntax for php variables, as well as SOME common data types used.
  // This file also shows different ways to mix and match variables when displaying output with echo.

  // =================
  // php variables
  // =================
  // To declare a variable in php, type a dollar sign ($) followed by a unique variable name. This is required.
  // Variable names can contain numbers, letters, and underscores.
  // Variable names cannot start a number, and they cannot have spaces or any special characters.

  // Example 1: $name
  // Example 2: $firstName
  // Example 3: $email_address

  // string data types.
  $language = "php";
  $firstName = "Allan";
  $lastName = "Viray";
  $food = "pizza";
  
  // integer (int) data types. int data types are whole numbers.
  $oldAge = 100;
  $users = 24;
  $quantity = 11;

  // float data types. floats are numbers that contain a decimal portion.
  $foodPrice = 3.99;
  $percentage = 99.9;
  $tax_rate = 8.25;

  // boolean data type. booleans are either true or false.
  $employed = true;
  $isOnline = false; // Note that the false boolean when outputted, are shown in the browser as a blank.
  $lovesCoding = true; // Note that the true boolean when outputted, is shown in the browser as the number 1.
  
  $total = null;
  $totalWithTax = null;
  
  echo"$firstName <br>";
  echo"$lastName <br/>";
  echo"{$firstName} {$lastName} likes {$food}. <br>";

  echo"{$firstName} is less than {$oldAge} years old. <br>";
  echo"There are {$users} users online. <br>";
  echo"You purchased {$quantity} items today. <br>";

  echo"A {$food} is \${$foodPrice}. Wow! <br>"; // Need to escape the $ by preceding it with a backslash, otherwise you will receive an error.
  echo"A {$food} is {$percentage}% genuine {$food}. <br>";
  echo"The tax rate in Houston, TX is {$tax_rate}%. Wonderful! <br>";

  echo"Online status: {$isOnline} <br>"; // false boolean will not display anything in the browser
  echo"Does {$firstName} love writing code? {$lovesCoding} <br>"; // true boolean will be displayed as the number 1 in the browser.

  echo"You ordered {$quantity} {$food}s. <br>";
  $total = $quantity * $foodPrice;
  echo"Your total is \${$total} without tax. Great! <br>";
  $totalWithTax = round($total + ($total * ($tax_rate / 100)), 2); // The round() method is used to round a float to a specified number of decimal places.   
  echo"Your total for the {$food}s with tax included is \${$totalWithTax}. Still ok!<br>";
?>