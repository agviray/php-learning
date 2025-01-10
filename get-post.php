<?php 
  // =============================
  // $_GET and $_POST variables
  // =============================

  // The $_GET and $_POST variables are special variables in php, used to collect data from an HTML form.
  // Data is sent to a .php file in the action attribute of <form>
  // Form example:  <form action="some_file.php" method="get">

  // ============
  // About $_GET
  // ============
  // Data is appended to the url.
  // $_GET is not secure, because the form data would be displayed in the url.
  // character limit
  // Bookmark is possible with values.
  // GET requests can be cached.
  // Better for a search page.
  
  // ==============
  // About $_POST
  // ==============
  // Data is packaged inside the body of the HTTP request.
  // $_POST is more secure.
  // No data limit.
  // Cannot bookmark.
  // Requests are not cached.
  // Better for submitting credentials.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <!-- <h2>This form uses the get method</h2>
    <form action="get-post.php" method="get">
      <label>username:</label><br>
      <input type="text" name="username"><br>
      <label>password:</label><br>
      <input type="text" name="password"><br>
      <input type="submit" value="Log in">
    </form>
  </div> -->
  <div>
    <h2>This form uses the post method</h2>
    <!-- <form action="get-post.php" method="post">
      <label>username:</label><br>
      <input type="text" name="username"><br>
      <label>password:</label><br>
      <input type="text" name="password"><br>
      <input type="submit" value="Log in">
    </form> -->
    <form action="get-post.php" method="post">
      <label>quantity:</label><br>
      <input type="text" name="quantity">
      <input type="submit" value="total">
    </form>
  </div>
</body>
</html>

<?php
  // ==================================
  // For <form> that uses post method
  // ==================================
  // The $_GET variable contains an array of variables received via the HTTP GET method.
  // You can specify what information to get by typing in the name attribute's value of a form element in double quotes, within
  // square brackets.
  
  // echo "{$_GET["username"]} <br>";
  // echo "{$_GET["password"]} <br>";

  // =====================================
  // For <form> that uses the post method
  // =====================================
  // echo "{$_POST["username"]} <br>";
  // echo "{$_POST["password"]} <br>";

  $item = "pizza";
  $price = 5.99;
  $total = null;
  $quantity = $_POST["quantity"];

  $total = $quantity * $price;
  echo"You have ordered {$quantity} {$item}(s). <br>";
  echo"Your total is: \${$total}.";
?>