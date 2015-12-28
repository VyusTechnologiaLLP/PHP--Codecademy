
// FUNCTIONS, PART II

// use the strlen() function to echo the number of characters in your name.
<html>
    <head>
      <title></title>
    </head>
    <body>
      <p>
        <?php
          echo strlen("Jack");
        ?>
      </p>
    </body>
</html>

// a simple 'helloWorld' function
<html>
    <head>
      <title></title>
    </head>
    <body>
      <p>
        <?php
          // Here we define the function...
          function helloWorld() {
            echo "Hello world!";
          }
          // ...and here we call it!
          helloWorld();
        ?>
      </p>
    </body>
</html>

// a simple 'displayName' function
<html>
    <head>
      <title></title>
    </head>
    <body>
      <p>
        <?php
          // Write your function below!
          function displayName(){
            echo "My name is displayed";
          }
          displayName();
        ?>
      </p>
    </body>
</html>

// In PHP, the return keyword does just that. It returns to us a value that we can work with.
// The difference between this and echo or print is that it doesn't actually display the value.
<html>
    <head>
      <title></title>
    </head>
    <body>
      <?php
        function returnName(){
          return "Name";
        }
      ?>
    </body>
</html>

// Parameters and Arguments
<html>
    <head>
      <title></title>
    </head>
    <body>
      <p>
        <?php
          function greetings($name){
            echo "Greetings, ". $name . "!";
          }
          greetings("PHP Programmer");
        ?>
      </p>
    </body>
</html>
// Greetings, PHP Programmer!

// Practice 
<html>
    <head>
      <title></title>
    </head>
    <body>
      <p>
        <?php
          function aboutMe($name, $age){
            echo "Hello! My name is $name, and I am $age years old.";
          }
          aboutMe("Jack", 100);
        ?>
      </p>
    </body>
</html>
// Hello! My name is Jack, and I am 100 years old.

