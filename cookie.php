<?php 
  // ==================
  // About cookies
  // ==================
  // A cookie is info about a user stored in a user's web-browser.

  // **************************
  // Examples of cookie usage
  // **************************
  // - Advertisers can use cookies to track user behavior and interests, and then 
  //   show ads that are relevant to that user. This is known as "targeted advertising". 
  // - Platforms like YouTube use  cookies to store info about your browsing preferences.
  // - Cookies can also be used to store other non-sensitive data like user preferences, browsing
  //   history, and site settings on a user's device.

  // *******************
  // Creating a cookie 
  // *******************
  // Use the setcookie() function to create a cookie in PHP.
  // The cookies will be stored in an associative array. (Reference associative-arrays.php if necessary)
  // setcookie takes in 4 arguments: 
  // 1) The key, 
  // 2) The value,
  // 3) An expiration time (note that cookies expire after a certain amount of time)
  // 4) The file path

  // ********
  // Example
  // ********
  // In setcookie() below, you are using the time() function to set expiration time of the cookie.
  // - You set it to specifically expire in 2 days (86400 sec in a day * 2)
  // You are also using a forward slash "/" to specify the default file path.
  // - Doing this results in making the cookie accessible from any page within the 
  //   entire domain.
  setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
  
  // *******************
  // To see the cookie:
  // *******************
  // 1) Make sure you start at the url of the file that you created the cookie in, to ensure that the setcookie() function
  //    gets called, in order to create the cookie.
  //    - In this case, start at: http://localhost/website/cookie.php
    // 2) Go to your browser, open DevTools, and click on the Application tab.
    // 3) On the side panel, click on Cookies, then your url.
    // 4) A table will be displayed that shows your cookie Name, Value, Domain, Path, Expiry date, and other properties.
    //    - See cookie-in-browser.png file for reference.
    // 5) The cookie will still exist even when visiting other parts of the website. This is because you set "/"
    //    as the path arg in setcookie().
    //    - Remember, setting "/" as the path results in making the cookie accessible from any page within the 
    //   entire domain. However, setcookie() must be called first, which is why you navigated to the cookie.php page to start with.
    
    // *********************************
    // You can create multiple cookies
    // *********************************
    // Create multiple cookies using the setcookies() function.
    setcookie("fav_movie_genre", "horror", time() + (86400 * 3), "/");
    setcookie("fav_video_game_genre", "Souls-borne", time() + (86400 * 4), "/");
    
    // *******************
    // Deleting a cookie
    // *******************
    // To delete a cookie, set the expiry argument to be time() - 0.
    // Note that you can also just clear cookies using the browser devtools: open DevTools, click Application, click Cookies, click url, right click cookie to delete, click "Delete" from the options menu.)
    // setcookie("fav_movie_genre", "horror", time() - 0, "/");
    // setcookie("fav_video_game_genre", "Souls-borne", time() - 0, "/");

    // *************************************************************************
    // Accessing the created cookies using PHP's $_COOKIE superglobal variable
    // *************************************************************************
    // Remember, cookies are stored in an associative array after they are created.
    // You can access this associative array using the superglobal variable, $_COOKIE.
    foreach($_COOKIE as $key => $value) {
      echo "Key: {$key} = value: {$value} <br>";
    }
    
    // *****************************************
    // Accessing the values of the cookie keys
    // *****************************************
    if (isset($_COOKIE["fav_food"])) {
      $fav_food = $_COOKIE["fav_food"];
      $fav_food = strtoupper($fav_food);
      echo "BUY SOME {$fav_food}!!!<br>";
    } else {
      echo "I don't know your favorite food.";
    }  
    ?>