<?php
  // ==================================
  // The isset() and empty() functions
  // ==================================
  // The isset() and empty() functions are important functions to know!
  // These functions are used to determine if HTML elements are filled in or otherwise
  // interacted with.

  // isset() returns true if a variable is declared/set and not null.
  // - You can check to see if a button was clicked using isset(). See the isset-and-empty-functions-practice.php file.
  // empty() returns true if a variable is not declared, false, null, or an empty string ""

  // ***************************
  // isset() function example:
  // ***************************
  $username01 = "agviray";
  $username02 = null; 
  $username03 = "";
  $username04 = false;
  
  echo "<br><br> ========================== <br>
  Example of isset() function usage
  <br> ========================== <br><br>";

  /*
  echo isset($username01) . "<br>"; // returns 1 in browser (1 represents true value)
  echo isset($username02) . "<br>"; // returns blank in browser, because this user is declared/set to null. 
  echo isset($username03) . "<br>"; // still returns 1 (true) in browser, because an empty string is not null.
  echo isset($username04) . "<br>"; // still returns 1 (true) in browser, because $username04 is set to have a value of false. (false is not the same as null) 
 */

  if (isset($username04)) { // Note: isset($username11) will result to "This variable IS NOT set", because $username11 does not exist and is therefore null.
    echo "This variable IS set.";
  } else {
    echo "This variable IS NOT set.";
  }
  
  // ***************************
  // empty() function example:
  // ***************************
  $user01 = "agviray";
  $user02 = null; 
  $user03 = "";
  $user04 = false;
  $user05 = true;
  
  echo "<br><br> ========================== <br>
  Example of empty() function usage
  <br> ========================== <br><br>";

  if (empty($user02)) { // Note: empty($user09) will result as "This variable is EMPTY." because $user09 is not declared.
    echo "This variable is EMPTY.";
  } else {
    echo "This variable is NOT EMPTY.";
  }
?>