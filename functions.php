<?php
  // ====================
  // Functions in PHP
  // ====================
  // *** Similar usage to JavaScript functions ***
  // Functions in PHP are reusable code that perform a specific task.
  // - To create a function, use the function keyword before the function name.
  // - To invoke (call) a function, type parentheses after the function name.
  // Functions can be be declared with parameters, which are essentially temporary variables
  // that you create when defining the function.
  // - When you add parameters to a function definition, you can pass arguments to the function 
  //   when you invoke (call) it.
  // - You can also declare a "type" for the parameters.
  // Functions can return something too, using a return statement.
  
  // ************************************************
  // Example: Declaring a function and invoking it
  // ************************************************
  function greetWorld() {
    echo "Hello, world! <br>";
  }  
  greetWorld();

  // ************************************************
  // Example: Defining a function with parameters
  // and passing arguments to it when invoked.
  // ************************************************
  function doSomething($x, $y) {
    echo "Do something with {$x} and {$y}! <br>";
  };
  doSomething("beer","pizza");
  doSomething("brain","laptop");

  // ************************************************
  // Examples: Returning something from a function
  // ************************************************
  // Example 1:
  function is_even($number) {
    return $number % 2 == 0 ? "{$number} is even!" : "{$number} is odd! <br>"; // This is a ternary expression!
  }
  echo is_even(11);
  
  // Example 2:
  function hypotenuse($a, $b) {
    $c = sqrt($a ** 2 + $b ** 2);
    return $c . "<br>";
  }
  echo hypotenuse(3, 4);

  // *****************************************************
  // Examples: Declaring functions with parameter types
  // *****************************************************
  function addTwoNumbers(float $x, float $y) {
    $sum = $x + $y;
    return "{$x} plus {$y} is: {$sum} <br>";
  }

  echo addTwoNumbers(3, 4);
  echo addTwoNumbers(10, 9);
?>