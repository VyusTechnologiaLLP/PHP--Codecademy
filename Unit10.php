 
// OBJECT-ORIENTED PROGRAMMING, PART II

/*
We're demoing three useful built-in methods: is_a(), which we use to find out if a particular object is an instance 
of a given class; property_exists(), to see if an object has a given property; and method_exists(), to see if an 
object has a given method.

Note that the first argument is the object we're checking, and the second is the class, property, or method name as a "string".
*/
<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>
    <p>
      <?php
        class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
        }
        
        $me = new Person("Shane");
        if (is_a($me, "Person")) {
          echo "I'm a person, ";
        }
        if (property_exists($me, "name")) {
          echo "I have a name, ";
        }
        if (method_exists($me, "dance")) {
          echo "and I know how to dance!";
        }
      ?>
    </p>
  </body>
</html>
// I'm a person, I have a name, and I know how to dance!

/*
Inheritance
As you've been thinking about classes and objects, you might have realized that one class might actually be a specialized type 
of another class. For instance, you might have a Vehicle class and a Truck class, and it would probably save you an awful lot 
of typing if you could somehow specify that Truck instances should automatically have many of the same properties and methods 
as Vehicle instances.

PHP allows us to accomplish this through a process called inheritance. Inheritance is a way for one class to take on the 
properties or methods of another class. You could say that the one class extends the other. This is used to express an 
"is-a" relationship—for example, a Truck "is-a" Vehicle, so it could inherit from Vehicle, but a Motorcycle isn't a 
Truck, so it shouldn't inherit from Truck (though both could inherit from Vehicle).

We can cause one PHP class to inherit from another with the extends keyword.
*/
<html>
  <head>
    <title>The Shape of Things to Come</title>
  </head>
  <body>
    <p>
      <?php
        class Shape {
          public $hasSides = true;
        }
        
        class Square extends Shape {
        
        }
        
        $square = new Square();
        // Add your code below!
        if ( property_exists($square, "hasSides") ) {
          echo "I have sides!";
        }
      ?>
    </p>
  </body>
</html>
// I have sides!

/*
Overriding Parent Methods
Nice work!

Sometimes we want a child class (or subclass) to be able to override a property or method of its parent class (or superclass).

For instance, we might have a Shape class with a $sides property set to true, but we might want Square to override this property 
and set $sides to 4 (since a square always has four sides). That would look something like this:

class Shape {
  $sides = true;
}

class Square extends Shape {
  $sides = 4;
}
It's pretty easy—you just create a new property or method in the child class with the same name as the one in the parent class, 
and the child's version will always take precedence over the inherited version.
*/
<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle {
            public function honk(){
                return "Beep beep!";
            }
        }
        $bicycle = new Bicycle();
        echo $bicycle->honk();
        
      ?>
    </p>
  </body>
</html>
// Beep beep!

/*
In PHP, a parent class can prevent its methods from being overridden by its children with—you guessed it—the final keyword.

You'd want to use the final keyword in your code to control what methods can be modified by a class' subclasses. For instance, 
you might want all Vehicles to have the same drive() method no matter what, so you would prefix its method definition with final, 
like so:

class Vehicle {
  final public function drive() {
    return "I'm drivin' here!";
  }
}
*/
<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          final public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        class Bicycle extends Vehicle {
            public function honk(){
                return "Beep beep!";
            }
        }
        $bicycle = new Bicycle();
        echo $bicycle->honk();
        
      ?>
    </p>
  </body>
</html>

/*
Class Constants and Scope Resolution
PHP lets us set constants on a class-by-class basis! Each class has its own scope, which is the context in which its variables can be used.

class Immortal extends Person {
  // Immortals never die!
  const alive = true;
}

// If true...
if (Immortal::alive) {
  echo "I live forever!";
}
// echoes "I live forever!"
In the example above, we use :: to access the alive constant inside the Immortal class.

Note that constants do not start with $.
*/
<html>
  <head>
    <title>Scope it Out!</title>
  </head>
  <body>
    <p>
      <?php
      class Person {
      }
      class Ninja extends Person {
        const stealth = "MAXIMUM";
      }
      echo Ninja::stealth;
      ?>
    </p>
  </body>
</html>
// MAXIMUM

/*
The Static Keyword
You probably noticed that we could access the Ninja class constant without actually creating an instance of Ninja, and if 
you're particularly precocious, you might be wondering whether it's possible to access class properties or methods without
creating an instance of the class. The answer: yes!

The static keyword lets you use a class' property or method without having to create an instance of that class. It works like this:

class Person {
  public static $isAlive = "Yep!"
  public static function greet() {
    echo "Hello there!";
  }
}

echo Person::$isAlive;
// prints "Yep!"
Person::greet();
// prints "Hello there!"
When combined with the scope resolution operator, this lets us access class information without having to instantiate anything.
*/
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class King {
          // Modify the code on line 10...
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        echo King::proclaim();
      ?>
    </p>
  </body>
</html>
// A kingly proclamation!

/*
Putting It All Together
Great work! You've learned a lot so far, including:

Useful object and class methods, like property_exists() and method_exists();
Inheritance;
How child classes can override the behavior of their parents;
How parent classes can prevent this with the final keyword;
What class constants are and how to reach them using the scope resolution operator, ::;
How to access class methods and properties without creating an instance of the class by using the static keyword and the scope 
resolution operator together.
*/
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {
          public static function say(){
              echo "Here are my thoughts! ";
          }
      }
      class Blogger extends Person {
          const cats = 50;
      }
      Person::say();
      echo "<br />";
      Blogger::say();
      echo "<br />";
      echo Blogger::cats;
      ?>
    </p>
  </body>
</html>
// Here are my thoughts! 
// Here are my thoughts! 
// 50

