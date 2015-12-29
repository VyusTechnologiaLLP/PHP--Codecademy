
// Advanced Arrays
/*
Review of Arrays
Arrays are a useful way to store multiple values, like numbers, strings, and even other arrays:

$myArray = array(1, 2, 3);
Here we create an array of three numbers. Remember that array positions start from 0; therefore 
to access the third item in this array, we type:

$myArray[2];
*/
<html>
  <head>
    <title>Array Review</title>
  </head>
  <body>
    <p>
      <?php
        $fruits = array('bananas', 'apples', 'pears');           
        echo 'I love eating ' . $fruits[1] . ' too!';
      ?>
    </p>
  </body>
</html>
// I love eating apples too!

/*
Associative Arrays
So far, you have been accessing the values of an array using integers. This is all well and good, 
but if you want to be more descriptive of your data, you can make use of something called an associative array.

An associative array makes use of (key => value) pairs. Some languages may separate arrays from 
associative arrays, but PHP treats both as the same.
*/
<html>
  <head>
    <title>Associate Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5);

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5);
            
        // This code will output "blue"...
        echo $myArray[1];
        echo '<br />';
            
        // ... and this will also output "blue"!
        echo $myAssocArray['colour'];
      ?>
    </p>
  </body>
</html>
// blue
// blue

/*
Using Arrays as Maps
You can think of an associative array (also called a map) as being the same as a normal array, but instead of 
using an integer to refer to the value, you use a defined key.

While numeric indices may be fine for looping through an array and listing all of the values, what if we need to 
change a certain value from an array?
*/
<html>
  <head>
    <title>Making the Connection</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices.
        // Add 'BMW' as the last element in the array!
        $car = array(2012, 'blue', 5, 'BMW');

        // This is an associative array.
        // Add the make => 'BMW' key/value pair!
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5,
                   'make' => 'BMW');
            
        // This code should output "BMW"...
        echo $car[3];
        echo '<br />';
            
        // ...and so should this!
        echo $assocCar['make'];
      ?>
    </p>
  </body>
</html>
// BMW
// BMW

/*
Accessing Associative Arrays
When accessing the values from either type of array, the only difference is whether you use an integer, or a specified key:

echo $car[1];
// prints 2012

echo $assocCar['year'];
// prints 2012
This exercise will demonstrate how useful specified keys in an array can be.
*/
<html>
  <head>
    <title>Accessing Associative Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br />';
            
        // Add your code here!
        echo $myAssocArray['year'];
      ?>
    </p>
  </body>
</html>
// blue
// 2012

/*
Loops + Arrays = ForEach
The foreach loop is used to iterate over each element of an object—which makes it perfect for use with arrays!

You can think of foreach as jumping from element to element in the array and running the code between {}s for each of those elements.
Check out the code in the editor. See how the $lang variable takes on the value of each of the elements in $langs, 
one by one, then echos that element to the page?
*/
<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Codecademy Languages</title>
  </head>
  <body>
    <h1>Languages you can learn on Codecademy:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          foreach ($langs as $lang) {
              echo "<li>$lang</li>";
          }
        
          unset($lang);
        ?>
      </ul>
    </div>
  </body>
</html>
/*
Languages you can learn on Codecademy:
JavaScript
HTML/CSS
PHP
Python
Ruby
*/

/*
Iterating Over Associative Arrays
Looping through an associative array is just as easy as looping through a normal array, but you obtain the 
value from a specified key, not an integer. Just like in the previous exercises!

If we only need to loop through the values of an array, we can use for. Have a look at the editor to see 
an example of this being used.

Remember, when using a for loop, calculate the length of the array first!

Then have a look at the foreach loop to see how we can get the key and value of each pair in the array.
*/

<html>
  <head>
    <title>Iteration Nation</title>
  </head>
  <body>
    <p>
      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
        // Looping through an array using "for".
        // First, let's get the length of the array!
        $length = count($food);
    
        // Remember, arrays in PHP are zero-based:
        for ($i = 0; $i < $length; $i++) {
          echo $food[$i] . '<br />';
        }
    
        echo '<br /><br />I want my salad:<br />';
    
        // Loop through an associative array using "foreach":
        foreach ($salad as $ingredient=>$include) {
          echo $include . ' ' . $ingredient . '<br />';
        }
    
        echo '<br /><br />';
    
        // Create your own array here and loop
        // through it using foreach!
        $hobbies = array('Matlab' => 'able',
                   'R' => 'able',
                   'Python' => 'able',
                   'C++' => 'able',
                   'PHP' => 'able',
                   'Data Science' => 'like',
                   'Space Science' => 'like',
                   'RadioCom' => 'like',
                   'Signal Processing' => 'like',
                   'Biology' => 'dislike');
        foreach ($hobbies as $item=>$include) {
          echo $include . ' ' . $item . '<br />';
        }
      ?>
    </p>
  </body>
</html>

/*
pizza
salad
burger


I want my salad:
with lettuce
without tomato
with onions


able Matlab
able R
able Python
able C++
able PHP
like Data Science
like Space Science
like RadioCom
like Signal Processing
dislike Biology
*/

/*
Multidimensional Arrays
Not only can you store integers and strings in arrays, you can also store... other arrays! This is called
 a multidimensional array.

How do we do this? Well, just like a normal array with comma-separated values, but you would put 
comma-separated arrays instead—just like the code in the editor.

$deck is an array which contains 3 rows, each being a playing card. Within each row, it has the name of 
the card, along with the value.

To retrieve a card, we would first get the row for that card, then get the value we require (either to 
display the card, or calculate the player's total).

If we access $deck[2], we would get the third row (remember, arrays start from 0 in PHP!)

That will return another array containing 2 values: the first (0) which is a string that has the value 
"7 of Diamonds", and the second (1) which is an integer that has the value 7.

If we want the "7 of Diamonds" string, we would simply use $deck[2][0];.
*/
<html>
  <head>
    <title>Blackjack!</title>
  </head>
  <body>
    <p>
      <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7),
                      array('4 of Diamonds', 4));
        
        // Imagine the first chosen card was the 7 of Diamonds.
        // This is how we would show the user what they have:
        echo 'You have the ' . $deck[3][1] . '!';
      ?>
    </p>
  </body>
</html>
// You have the 4!

/*
Putting it All Together
This is the time to practice everything you've learned so far about associative arrays. Here's some quick reminders:

Arrays in PHP are zero-based (this means the numeric ID of the first value in the array will always be 0, not 1).

An array can contain values ("val1", "val2", etc... )

As an associative array, it can contain keys and values ("key1" => "val1", "key2" => "val2", etc... )

A multidimensional array can contain arrays within arrays!

To loop through an array containing values only, you can use the for loop. For an array containing keys and values, 
you can use the foreach loop.
*/
<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
        // On the line below, create your own associative array:
        $myArray = array ("R", "Python", "Matlab", "PHP", "HTML", "Javascript", "C++", "Java", "C#");  

        // On the line below, output one of the values to the page:
        echo $myArray[2];
          
        // On the line below, loop through the array and output
        // *all* of the values to the page:
        for($k=0; $k < count($myArray)-1; $k++){
            echo $myArray[$k];
            echo '<br />';
        }
      ?>
    </p>
  </body>
</html>
/*
MatlabR
Python
Matlab
PHP
HTML
Javascript
C++
Java
*/
