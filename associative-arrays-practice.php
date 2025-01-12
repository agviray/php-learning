<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array Practice</title>
</head>
<body>
  <h1>Associative Array Practice</h1>
  <div>
    <p><b>NOTE:</b> Reference the <b><em>associative-arrays.php</em></b> file if necessary.</p>
  </div>
  <div>
    <h2>Instructions</h2>
    <ol>
      <li><p>In the text input, enter a country from the provided list of countries.</p></li>
      <li><p>Click submit.</p></li>
      <li><p>The capital of that country will be displayed (via the PHP echo command).</p></li>
</ol>
<br/>
<br/>
    <h3>Countries:</h3>
    <ul>
      <li>Philippines</li>
      <li>Vietnam</li>
      <li>USA</li>
      <li>Canada</li>
      <li>Japan</li>
      <li>South Korea</li>
      <li>India</li>
    </ul>
  </div>
  <br/>
  <br/>
  <div>
    <form action="associative-arrays-practice.php" method="post">
      <label>Enter a country from the list:</label>
      <input type="text" name="country">
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>

<?php
  $capitals = array(
    "Philippines"=>"Manila", 
    "Vietnam"=>"Hanoi", 
    "USA"=>"Washington D.C.", 
    "Canada"=>"Ottawa", 
    "Japan"=>"Kyoto", 
    "South Korea"=>"Seoul", 
    "India"=>"New Delhi");

  $country = $_POST["country"];
  $capital = $capitals[$country];
  echo "The capital of {$country} is: {$capital}";

  // ***************************************
  // Instead of above, you can also write:
  // ***************************************
  // $capitals[$_POST["country"]];
  // echo "The capital of {$_POST["country"]} is {$capitals[$_POST["country"]]}";
?>