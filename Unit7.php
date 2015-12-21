// Functions, Part I

// Get the length of your own name
<html>
  <p>
    <?php
      // Get the length of your own name and print it to the screen!
      $length=strlen("Wien Wong");
      print $length;
    ?>
  </p>
</html>
//
// 9

// Get a partial string from within your own name and print it to the screen. 
<html>
  <p>
    <?php
      // Get a partial string from within your own name and print it to the screen!
      print substr("Wien Wong", 0, 4);
    ?>
  </p>
  <p>
    <?php
      // Make your name upper case and print it to the screen:
      print strtoupper("Wien Wong");
    ?>
  </p>
  <p>
    <?php
      // Make your name lower case and print it to the screen:
      print strtolower("Wien Wong");
    ?>
  </p>
</html>
//
// Wien
// WIEN WONG
// wien wong

// strpos() find the position of the first occurrence of a substring in a string.
<html>
    <p>
    <?php
      // Print out the position of a letter that is in your own name
      print strpos("Wien Wong", " ");
    ?>
    </p>
    <p>
    <?php
      // Check for a false value of a letter that is not in your own name and print out an error message
      if (strpos("Wien Wong", "h") == false){
          print "Sorry, no 'h' in 'Wien Wong'";
        }
    ?>
    </p>
</html> 
//
// 4
// Sorry, no 'h' in 'Wien Wong'

// Math Functions I
<html>
    <p>
    <?php
      // Try rounding a floating point number to an integer and print it to the screen
      $num = round(M_PI);
      print $num;
    ?>
    </p>
    <p>
    <?php
      // Try rounding a floating point number to 3 decimal places and print it to the screen
      $num = round(M_PI, 3);
      print $num;
    ?>
    </p>
</html>
//
// 3
// 3.142

// Math Functions II
<html>
    <p>
    <?php
      // Use rand() to print a random number to the screen
      print rand(1, 10);
    ?>
    </p>
    <p>
    <?php
      // Use your knowledge of strlen(), substr(), and rand() to print a random character from your name to the screen.
      $name="Jack";
      print substr($name, 0, rand(strlen($name)-4, strlen($name)-3) );
    ?>
    </p>
</html>
//
// 10
// J

// Array Functions I
<html>
  <p>
    <?php
      // Create an array and push 5 elements on to it, then print the number of elements in your array to the screen
      $fav_bands = array();
      array_push($fav_bands, "Maroon 5");
      array_push($fav_bands, "Bruno Mars");
      array_push($fav_bands, "Nickelback");
      array_push($fav_bands, "Katy Perry");
      array_push($fav_bands, "Macklemore");
      print count($fav_bands);
    ?>
  </p>
</html>
//
// 5

// Array Functions II
<html>
  <p>
    <?php
      // Create an array with several elements in it, then sort it and print the joined elements to the screen
      $the_array = array(19, 32, 11, 97, 34);
      sort($the_array);
      print join(",", $the_array);
    ?>
  </p>
  <p>
    <?php
      // Reverse sort your array and print the joined elements to the screen
      rsort($the_array);
      print join(",", $the_array);
    ?>
  </p>
</html>
//
// 11,19,32,34,97
// 97,34,32,19,11

//
<html>
  <p>
    <?php
      // Create an array and push on the names of your closest family and friends
      $families = array();
      array_push($families, "Maroon 5");
      array_push($families, "Bruno Mars");
      array_push($families, "Nickelback");
      array_push($families, "Katy Perry");
      array_push($families, "Macklemore");
      // Sort the list
      sort($families);
      // Randomly select a winner!
      $randselected = rand(0, count($families)-1 );
      // Print the winner's name in ALL CAPS
      print strtoupper($families[$randselected]);
    ?>
  </p>
</html>
