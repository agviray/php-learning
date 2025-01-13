<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkboxes In PHP</title>
</head>
<body>
  <h1>Checkboxes in PHP</h1>
  <!-- <form action="checkboxes.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">
    Pizza <br>  
    <input type="checkbox" name="hamburger" value="Hamburger">
    Hamburger <br>  
    <input type="checkbox" name="hotdog" value="Hotdog">
    Hotdog <br>  
    <input type="checkbox" name="taco" value="Taco">
    Taco <br>
    <input type="submit" name="submit" value="Submit">
  </form> -->
  <!-- You can place all checkboxes in an array, but they all need the same "name" attr -->
 <!-- The "name" attr must be changed to a name followed by square brackets [] -->
  <form action="checkboxes.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">
    Pizza <br>  
    <input type="checkbox" name="foods[]" value="Hamburger">
    Hamburger <br>  
    <input type="checkbox" name="foods[]" value="Hotdog">
    Hotdog <br>  
    <input type="checkbox" name="foods[]" value="Taco">
    Taco <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>

<?php 
  // if (isset($_POST["submit"])) {
  //   if (isset($_POST["pizza"])) {
  //     echo "You like pizza! <br>";
  //   } 
  //   if (isset($_POST["hamburger"])) {
  //     echo "You like hamburgers! <br>";
  //   } 
  //   if (isset($_POST["hotdog"])) {
  //     echo "You like hotdogs! <br>";
  //   } 
  //   if (isset($_POST["taco"])) {
  //     echo "You like tacos! <br>";
  //   } 
  // }
  if (isset($_POST["submit"])) {
    $foods = $_POST["foods"];
    foreach($foods as $food) {
      echo "{$food} <br>";
    }
  }
?>