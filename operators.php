<?php
  // ======================
  // Arithmetic operators
  // ======================
  // The arithmetic operators are: 
  // + - * / ** %

  $x = 10;
  $y = 2;
  $z = null;

  // $z = $x + $y;
  // $z = $x - $y;
  // $z = $x * $y;
  // $z = $x / $y;
  
  /* 
  Use double asterisks to raise a base to a given number.
  Below, we are saying raise $x to the power of $y. In other words $x to the $yth power.
  // $z = $x ** $y; 
  */

  /* 
  The modulus % operator gives you the remainder of any division. If there is no remainder, the 
  value would be 0.  
  $z = $x % $y; 
  */

  echo $z;

  // ======================================
  // Increment/decrement operators.
  // ======================================

  // The increment and decrement operators are the following, respectively.
  // ++, --
  // Usage is the same as in JavaScript.
  
  $counter = 0;

  // The ++ is the increment operator. It increments (adds to) a value by one.
  // The increment operator can be used instead of writing something like:
  // $counter = $counter + 1; 
  // Instead, if you want to increment $counter by 1, just write $counter++
  
  // The same goes for the decrement -- operator.
  // The -- is the decrement operator. It decrements (subtracts from) a value by one.
  // The decrement operator can be used instead of writing something like:
  // $counter = $counter - 1; 
  // So, if you want to decrement $counter by 1, just write $counter--

  // If you want to increment or decrement a value more than 1, you can use += or -=
    
  // $counter++;
  // $counter--;

  // This will increment $counter by 2:
  // $counter+=2;
  // This will decrement $counter by 100.
  // $counter-=100;
  echo $counter; 

  // ====================
  // Operator Precedence
  // ====================
  // These operators are used when determining what operations to perform first, when
  // given a complex arithmetic expression.
  // Essentially, PEMDAS (parentheses, exponents, multiplication, division then modulus if applicable, addition, subtraction).
  // ()
  // **
  // * / %
  // + - 

  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  echo $total;
?>