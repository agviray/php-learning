<?php
  // ==========
  // arrays
  // ==========
  // *** Similar usage in JavaScript ***
  
  // Arrays are "variables" that can hold more than one value at a time.
  
  // You can use arraqy to store or hold more than one value in a single variable, without
  // having to create separate variables to store those values. 

  // The built-in array() function is used to create an array. You can pass elements as the arguments
  // to determine the array's contents.

  $foods = array("apple", "orange", "banana", "coconut");

  // To access an array element, indicate the position using the element's index.
  echo $foods[0] . "<br>";
  echo $foods[1] . "<br>";
  echo $foods[2] . "<br>";
  echo $foods[3] . "<br>";
  echo $foods[4] . "<br>"; // This will give a warning.

  // Change an element in an array using the target element's index:
  $foods[0] = "pineapple"; // Element at index 0 is now "pineapple"

  // =============================
  // Built-in array functions
  // =============================

  // Add an element to an array by using the array_push() function.
  array_push($foods, "apple");
  array_push($foods, "watermelon", "kiwi"); // Can add multiple new items to the array.

  // Remove the LAST element in the array using array_pop() function.
  array_pop($foods);
  
  // Remove the FIRST element in the array using array_shift() function.
  array_shift($foods);

  // Reverse the order of the array using array_reverse() function.
  // The original array that you are trying to reverse will not change. 
  // To see the reversed array, you must assign the value of array_reverse() to a variable.
  // Then you can see that the value of the variable will be a reversed array of the original array. 

  $reversedFoods = array_reverse($foods);
  // foreach($reversedFoods as $food) {
  //   echo $food . "<br>";
  // }
  
  // Count elements in an array using the count() function.
  echo count($foods);

  // foreach loop usage to echo each element in the $foods array.
  echo "<br> Using foreach loop <br> =================== <br>";
  foreach($foods as $food) { // use singular version of the array to represent the current element being iterated over.
    echo $food . "<br>";
  }
?>