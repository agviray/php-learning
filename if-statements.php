<?php
  // =================
  // if statements
  // =================
  // Works like JavaScript!!

  // Note: The double equals == is the comparison operator. 
  // Note: Generally, elseif and else if will only be considered exactly the same when using 
  // curly brackets {}.
  //   - However, when using a colon to define if/elseif conditions, the use of elseif in a single word 
  //     becomes necessary. PHP will fail with a parse error if else if is split into two words.

  // If condition is true, do something.
  // If condition is false, don't do it.

  // ==========
  // Example 1
  // ==========

  // $age = 21;
  // $age = 15;
  // $age = 0;
  // $age = -2;
  
  // if ($age >= 18) {
  //   echo "You may enter this site.";
  // } elseif ($age == 0) {
  //   echo "You were just born.  -__-";
  // } elseif ($age <= 0) {
  //   echo "That was not a valid age.";
  // } else {
  //   echo "You must be over 18 to enter this site.";
  // }

  // ==========
  // Example 2
  // ==========

  // $adult = true;

  /*
  if ($adult) { // Can also write: if ($adult == true) {
    echo "You may enter, you adult, you.";
  } else {
    echo "You may not enter, young one.";
  }
  */

  // ==========
  // Example 3
  // ==========
  // The number_format() function is a built-in PHP function that formats a given number by another given number of decimals.
  // number_format(number, decimals)
  
  $hours = 50;
  $pay_rate = 15;
  $weekly_pay = null;
  
  if ($hours <= 0) {
    $weekly_pay = number_format(0,2);
  } elseif ($hours <= 40) {
    $weekly_pay = number_format($hours * $pay_rate, 2);
  } else {
    // Calculates overtime pay.
    $weekly_pay = number_format(($pay_rate * 40) + (($hours - 40) * ($pay_rate * 1.5)),2); // In U.S., overtime pay is typically 1.5 * pay rate.
  }

  echo "You made \${$weekly_pay} this week.";
?>
