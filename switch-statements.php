<?php
  // ==================
  // switch statements
  // ==================
  // *** Used similar to JavaScript!!! ***
  // PHP switch statements are a replacement to using many elseif statements.
  // They are more efficient and require less code to write.

  // **********************************  
  // WITHOUT using switch statements:
  // **********************************  
  /*
  $grade = "A";

  if ($grade == "A") {
    echo "You did great.";
  } elseif ($grade == "B") {
    echo "You did well.";
  } elseif ($grade == "C") {
    echo "You did ok.";
  } elseif ($grade == "D") {
    echo "You did poorly.";
  } elseif ($grade == "F") {
    echo "You failed.";
  } else {
    echo "{$grade} is not a valid grade.";
  }
  */

  // **********************************  
  // WITH using switch statements:
  // **********************************  
  
  // Use Case - Example 1:
    echo "
    <br><br> ================= <br> 
    Use Case - Example 1 <br> 
    ================= <br><br>";
    $grade = "A";

  switch ($grade) {
    case "A":
      echo "You did great.";
      break;
    case "B":
      echo "You did well.";
      break;
    case "C":
      echo "You did ok.";
      break;
    case "D":
      echo "You did poorly.";
      break;
    case "F":
      echo "You did failed.";
      break;
    default: 
      echo "{$grade} is not a valid grade.";
  }

  // Use Case - Example 2:
    echo "
    <br><br> ================= <br> 
    Use Case - Example 2 <br> 
    ================= <br><br>";
  
    // Note: The date() function is a built-in PHP function.

    $date = date("l"); // passing lowercase "l" as the argument will return the current day of the week. 
    
    switch($date) {
      case "Monday": 
        echo "Today is Monday! Why do people hate Monday? =/";     
        break;
      case "Tuesday": 
        echo "I guess it's \"Taco Tuesday!\"!!";     
        break;
      case "Wednesday": 
        echo "It's Wednesday today? The workweek is halfway done!";     
        break;
      case "Thursday": 
        echo "Is it really Thursday? It's almost the weekend!";     
        break;
      case "Friday": 
        echo "Today is Friday! The weekend is here!";     
        break;
      case "Saturday": 
        echo "It's Saturday today! Time to party! (Or run errands)";     
        break;
      case "Sunday": 
        echo "Today is Sunday! Time to relax =)";
        break;
      default:
        echo "{$date} is not a day.";
    }
?>