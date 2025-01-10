<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="math-functions.php" method="post">
    <label>x</label>
    <input type="text" name="x">
    <br>
    <label>y</label>
    <input type="text" name="y">
    <br>
    <label>z</label>
    <input type="text" name="z">
    <br>
    <input type="submit" value="Total">
  </form>
</body>
</html>

<?php
  // =======================
  // Math Functions in php
  // =======================
  // There are several "built-in" functions that php has available for use.

  $x = $_POST["x"];
  $y = $_POST["y"];
  $z = $_POST["z"];

  $total = null;
  
  // The absolute value function, abs(), will return the absolute value of a number.
  // $total = abs($x);

  // The round function, round(), rounds a number up or down, as appropriate.
  // $total = round($x);

  // The floor function, floor(), will always round a number down.
  // $total = floor($x);
  
  // The ceiling function, ceil(), will always round a number up.
  // $total = ceil($x);
  
  // The power function, pow(), will raise the base to a given power.
  // $total = pow($x, $y);
  
  // The square root function, sqrt(), will give the square root of a number.
  // $total = sqrt($x);

  // The max function, max(), will the give the greatest value out of all values (or variables) placed inside 
  // the function's parentheses.
  // $total = max($x, $y, $z);

  // The min function, min(), will the give the smallets value out of all values (or variables) placed inside 
  // the function's parentheses.
  // $total = min($x, $y, $z);

  // The pi function, pi(), will the print 3.14 (and whatever remaining digits come after the 4).
  // $total = pi();

  // The random function, rand(), will give a random integer (whole number).
  // If you want a random integer between a minimum and maximum, you can provide the
  // min and max values inside the parentheses.
  // If no min/max values are entered in the parentheses, then the randomly generated number will
  // be between 0 and the value of getrandmax(), which is a sytem-dependent integer that represents 
  // the largest possible random number that can be generated on your system.
  // $total = rand();
  // $total = rand(1, 6);


  echo $total;
?>