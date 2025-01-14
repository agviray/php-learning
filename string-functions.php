<?php
  // ====================
  // String functions
  // ====================
  // PHP has several built-in functions that can be used to manipulate strings.

  // **********************
  // strtolower() function
  // **********************
  // Converts all applicable characters in a string to lowercase.
  $username = "AGVALLANGV";
  $username = strtolower($username);
  echo $username . "<br>";
  
  // **********************
  // strtoupper() function
  // **********************
  // Converts all applicable characters in a string to uppercase.
  $favJunkFood = "pizza";
  $favJunkFood = strtoupper($favJunkFood);
  echo $favJunkFood . "<br>";
  
  // **********************
  // trim() function
  // **********************
  // Removes any whitespace before or after a string.
  $nameWithSpace = "             Allan       <br>";
  $nameWithSpace = trim($nameWithSpace);
  echo $nameWithSpace;

  // **********************
  // str_pad() function
  // **********************
  // Pad a string up to a specified amount of characters, with a specified character.
  // Note that the letters in the original string are included in the specified amount
  // of characters to use as padding.
  $nameToPad = "Allan";
  $nameToPad = str_pad($nameToPad, 10, "7");
  echo $nameToPad; 
  // You specified to pad $nameToPad with ten "7" characters.
  // However, only five "7"'s will trail to the right of "Allan", because the letters in "Allan" account for the other five characters.
  
  
  // **********************
  // str_replace() function
  // **********************
  // str_replace() replaces one character with another.
  echo "<br>"; // This echo statement used only to separate other echo outputs.
  $phoneNumber = "123-456-7890";
  $changedPhoneNumber = str_replace("-", "**", $phoneNumber);
  echo $changedPhoneNumber;
  
  // **********************
  // strrev() function
  // **********************
  // strrev() reverses a string.
  echo "<br>"; // This echo statement used only to separate other echo outputs.
  echo $changedPhoneNumberReversed = strrev($changedPhoneNumber);
  echo "<br>"; // This echo statement used only to separate other echo outputs.
  
  // **********************
  // str_shuffle() function
  // **********************
  // str_shuffle() shuffles a string.
  $strToShuffle = "Pizza";
  echo $strToShuffle = str_shuffle($strToShuffle);

  // **********************
  // strcmp() function
  // **********************
  // strcmp() compares a string or variable, against another string or variable.
  // If the function returns 0, that means the two strings are equal. 
  $dogName = "Nugget";
  $equals = strcmp($dogName, "Allan");
  echo $equals;

  // **********************
  // strlen() function
  // **********************
  // strlen() returns the length of the string, which is the amount of characters in the string.
  $dog = "pomeranian";
  $dogStatement = "I have a pomeranian";
  echo "<br>" . strlen($dog);
  echo "<br>" . strlen($dogStatement);

  // **********************
  // strpos() function
  // **********************
  // strpos() finds the position of a character.
  // Note that this function finds the position of only the first instance of the character. 
  echo "<br>" . strpos($dog, "n");

  // **********************
  // substr() function
  // **********************
  // substr() creates a new string from a portion of another string.
  $cityAndState = "Houston, Texas";
  $city = substr($cityAndState, 0, 7);
  $state = substr($cityAndState, 9); // Not specifying the third value will create the string using the second value, to the end of the original string.
  echo "<br>" . $city . "<br>";
  echo $state . "<br>";
   
  // ********************************************
  // explode() and implode() functions
  // ********************************************
  // explode() can be used to assign each portion of a string into an array, at a specified character.
  // implode() can be used to create a string out of an array.

  // **********************
  // explode() example
  // **********************
  $movieTitle = "The Dark and the Wicked";
  $movieTitleWords = explode(" ", $movieTitle);
  foreach($movieTitleWords as $word) {
    echo $word . "<br>";
  }
  
  // **********************
  // implode() example
  // **********************
  $jobTitle = array("Software", "Developer");
  $jobTitle = implode("---", $jobTitle); // You can specify a character to add between each element in the array.
  echo $jobTitle;
  ?>