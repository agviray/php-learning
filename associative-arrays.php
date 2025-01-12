<?php
  // ========================
  // associative arrays
  // ========================
  // Associative arrays are made of key=>value pairs (each array element is a key=>value pair)

  // *****************************
  // Examples of key-value pairs:
  // *****************************

  // countries => capitals
  // id => username
  // item => price

  // *****************************
  // Associative array examples:
  // *****************************

  $capitals = array("Philippines"=>"Manila", "Vietnam"=>"Hanoi", "USA"=>"Washington D.C.", "Canada"=>"Ottawa", "Japan"=>"Kyoto", "South Korea"=>"Seoul", "India"=>"New Delhi");

  // The $capitals array above can also be written as:

  // $capitals = array(
  //  "Philippines"=>"Manila",
  //  "Vienam"=>"Hanoi", 
  //  "USA"=>"Washington D.C.", 
  //  "Canada"=>"Ottawa", 
  //  "Japan"=>"Kyoto", 
  //  "South Korea"=>"Seoul", 
  //  "India"=>"New Delhi");

  // **********************************************
  // Access the value of key=>value pairs like so:
  // **********************************************
  // echo $capitals["USA"] . "<br>";
  // echo $capitals["Japan"] . "<br>";

  // **********************************************************
  // Changing a value of associative array's key => value pair 
  // **********************************************************
  // $capitals["USA"] = "Las Vegas";
  
  // ****************************
  // Add new key => value pair
  // ****************************
  // $capitals["China"] = "Beijing";

  // *******************************************************
  // Adding and Removing delements of an associative array
  // *******************************************************
  // Just like regular arrays, you can use:
  // array_pop($capitals); to remove the LAST key=>value pair of the associative array.
  // array_shift($capitals);  to remove the FIRST key=>value pair of the associative array.

  // ******************************************
  // Get all KEYS only of an associative array
  // ******************************************
  // Note: The array_keys() function creates a NEW array consisting of the associative array's keys only.
  // To view the contents of the new array, you cannot do something like: echo array_keys($capitals); 
  // You must set the new array as a value to a new variable. Then you can use something like foreach to loop
  // over it and print out the contents. 
  
  // echo "<br><br> ==================================================== <br>
  // Below are the KEY names of the \$capitals associative array.
  // <br> ==================================================== <br><br>";
  // $keys = array_keys($capitals);
  // foreach($keys as $key) {
  //   echo "{$key} is a KEY name in the \$capitals array.<br>";
  // }
  
  // *********************************************
  // Get all VALUES only of an associative array
  // *********************************************
  // Note: The array_values() function creates a NEW array consisting of the associative array's values only.
  // To view the contents of the new array, you cannot do something like: echo array_values($capitals); 
  // You must set the new array as a value to a new variable. Then you can use something like foreach to loop
  // over it and print out the contents.
  
  // echo "<br><br> ==================================================== <br>
  // Below are the VALUES of each key in the \$capitals associative array.
  // <br> ==================================================== <br><br>";
  // $values = array_values($capitals);
  // foreach($values as $value) {
  //   echo "{$value} is a VALUE of a key in the \$capitals array.<br>";
  // }
    
  // ****************************************************
  // Flip an associate area. 
  // - In other words, the key name will become the value,
  // and the value will become the key.
  // ****************************************************
  // Note: The array_flip() function creates a NEW associative array.
  // To view the contents of the new associative array, you cannot do something like: echo array_flip($capitals); 
  // You must set the new associative array as a value to a new variable. Then you can use something like foreach to loop
  // over it and print out the contents.
  // You can also reassign the new associative array as the value of the original variable, $capitals, if you want to.

  // $flipped_associative_array = array_flip($capitals);
  // foreach($flipped_associative_array as $key => $value) {
  //   echo "The flipped key => value pair is: {$key} => {$value} <br>";
  // }

  // ******************************
  // Reverse an associative array
  // ******************************
  // Reverse the order of the key => value pairs in an associative array
  // using array_reverse($capitals);
  // This works the same as with a regular array.

  // ************************************************************
  // Count number of key => value pairs in an associative array
  // ************************************************************
  // Count the number of key => value pairs in an associative array.
  // using array_count($capitals);
  // This works the same as with a regular array.


  // ******************************************
  // Print all capitals using foreach function
  // ******************************************
  // Note the condition syntax in the foreach parentheses!!

  echo "<br><br> =================================================================== <br>
  Below are the KEYS and their VALUES of the \$capitals in the associative array.
  <br> =================================================================== <br><br>";
  foreach($capitals as $key => $value) {
    echo "
    {$key}'s capital is: {$value} <br>
    The key is {$key}, and it's value is: {$value}<br>";
  }
?>