<?php
  // ==================
  // Logical operators 
  // ==================
  // Logical operators combine conditional statements.
  // *** ogical operators are similar to those used in JavaScript. ***

  // && (the "and" operator)
  // ||  (the "or" operator)
  // ! (the "not" operator)
  
  // ===========
  // Examples: 
  // ===========

  // The "and" operator &&
  // Checks if both conditions are true. 
  // If so, then the overall expression is true. Otherwise, it is false.
  
  // Example:
  
  // $a = 10;
  // $b = 2;

  // if ($a > $b && $b > 0) ... this will evaluate to true, otherwise it will evaluate to false.

  // ****************************************

  // The "or" operator ||
  // The 'or' operator || checks if at least one condition is true
  // if (condition_01 || condition_02) ... this will evaluate to true if at least one condition is true.
  
    // Example:

    // $isOnline = false;
    // $isIdle = true;

    // if ($isOnline || $isIdle) ... this evaluates to true, because at least one condition, $isIdle, is true.

  // ****************************************
  
  // The "not" operator !
  // The 'not' ! operator reverses a condition. In other words, if a condition was 
  // true or "true-sy", you can use the ! operator in front of it, which will result in  the condition 
  // becoming becoming false or "false-y".
  
  // Example:
  // $allanIsCool = false;
  // $allanIsCool = !$allanIsCool; 
  // echo $allanIsCool; 
  
  // Meanings per line (41-43):
  // 1) $allanIsCool is initialized as false.
  // 2) $allanIsCool is then "reversed" due to it being set as !$allanIsCool (the "not" operator is placed in the front). 
  // 3) $allanIsCool will be displayed as 1 in the browser. 
  //   - Remember, true and false boolean values are not displayed in the browser.
  //   - Instead, the boolean true is shown as the number 1, and the boolean false is shown as nothing (blank).
  
  // ****************************************

  // Use Case - Example 1

  echo "
  ================= <br> 
  Use Case - Example 1 <br> 
  ================= <br>";
  $temp = 15; // Using celsius.
  $cloudy = true;

  // if ($temp >= 0 && $temp <= 30) {
  //   echo "The weater is good.";
  // } else {
  //   echo "The weater is bad.";
  // }

  if ($temp < 0 || $temp > 30) {
    echo "The temperature is bad. <br>";
  } else {
    echo "The weather is good. <br>";
  }
 
  if (!$cloudy) {
    echo "It's cloudy.";
  } else {
    echo "It's sunny.";
  }

  // Use Case - Example 2
  echo "
  <br><br> ================= <br> 
  Use Case - Example 2 <br> 
  ================= <br><br>";

  $age = 28;
  $isUSCitizen = true;

  if ($age >= 18 && $isUSCitizen) {
    echo "You can vote in the U.S.";
  } else {
    echo "You cannot vote in the U.S.";
  }

  // Use Case - Example 3
  echo "
  <br><br> ================= <br> 
  Use Case - Example 3 <br> 
  ================= <br><br>";

  $child = false;
  $senior = false;
  $ticketPrice = null;

  if ($child || $senior) {
    $ticketPrice = number_format(10, 2);
  } else {
    $ticketPrice = number_format(15, 2);
  }

  echo "The ticket price is \${$ticketPrice}.";
?>