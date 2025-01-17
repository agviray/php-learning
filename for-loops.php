<?php
  // =================
  // for loops in PHP
  // =================
  // *** Same usage as in JavaScript ***
  // A for loop in PHP will repeat some code a certain number of times.
  /*
  for ($i = 10; $i >= 0; $i -= 2) {
    // echo "Hello <br>";
    // echo $i . "<br>";
    echo $i . "<br>";
  }
*/
  // The code below is a note for browser display.
  echo "
  <br> ========================================== <br>
  Above is PHP code HTML example is below <br>
  ========================================== <br><br>
  ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="for-loops.php" method="post">
    <label>Enter a number to count DOWN to:</label>
    <input type="text" name="count-down-counter">
    <input type="submit" value="Start counting down">
  </form>
</body>
</html>

<?php
  for ($i = $countDownCounter; $i >= 0; $i--) {
    echo $i . "<br>";
  }
?>