
// OBJECT-ORIENTED PROGRAMMING, PART I
/*
When talking about objects, you refer to variables belonging to these objects as properties
(or attributes or fields), and functions are called methods. These objects are essential when
dealing with PHP, as almost everything is an object: for example, functions or arrays are 
objects, too!
And this shows why we use objects: we can bundle our functions and data in one place, we can 
create objects easily using classes (object constructors), so we can create lots of instances 
(objects, which have been constructed via a class), which contain mostly the same data, except 
some little nuances.
*/
<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
      <p>
      <?php
        // The code below creates the class
        class Person {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            // Assigning the values
            public function __construct($firstname, $lastname, $age) {
              $this->firstname = $firstname;
              $this->lastname = $lastname;
              $this->age = $age;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
            }
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me = new Person('boring', '12345', 12345);
        
        // Printing out, what the greet method returns
        echo $me->greet(); 
      ?>
      </p>
    </body>
</html>
/*
Hello, my name is boring 12345. Nice to meet you! :-)

Above code: there is a Person class, so every new Person has some properties, like $isAlive or $firstname, 
and a method greet(). Right now there is only one instance of the Person class: $me. But we'll reconstruct 
this class and you'll even create another instance of the class, so your name will be echod, too.
*/

/*
The basic class syntax looks like the following:

class Classname {

}
The class keyword means that you create a new class; the syntax is quite similar to the function syntax.

And you can create new instances of this class using the following syntax:

$obj1 = new Classname();
The new keyword means that you create a new object and ensures that your arguments are added as properties, 
so it initializes the constructor (which we are going to deal with later).

We don't need to pass in any arguments, as we haven't added any properties (which can store different values 
depending on the instance) quite yet.
*/
<!DOCTYPE html>
<html>
  <head>
    <title>Reconstructing the Person Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
    <p>
    <?php
      class Person {
        $teacher = new Person();
        $student = new Person();
      }
    ?>
    </p>
  </body>
</html>

/*
As you remember, properties are pieces of data bound to an object, and you can imagine an object as a bundle 
of information and actions.

class Fruit {
  public $count = 3;
  public $type;
}

$apple = new Fruit();
$apple->type = "apple";
print $apple->count; // 3
print $apple->type;  // apple

In the example above, we first create a new class called Fruit.
Then we add a property, $count, and set its value to 3.
Next, we add a property, $type, but don't store anything in it yet.
After the class definition, we create new instance of Fruit and store it in $apple.
Then we set the $type property of $apple to the string "apple".
Finally, we print out the two properties of $apple.
*/
<!DOCTYPE html>
<html>
  <head>
    <title>Reconstructing the Person Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
    <p>
    <?php
      class Person {
        public $isAlive=true;
        public $firstname;
        public $lastname;
        public $age;
      }
      $teacher = new Person();
      $student = new Person();
      echo $teacher->isAlive;
    ?>
    </p>
  </body>
</html>
// 1

/*
Good job, now we have some properties.
But right now $teacher and $student are the same, which should be changed immediately, correct? :-)

The solution: we have to create a constructor to create different objects. This constructor is also a method, 
but you don't need to worry about this fact just yet.

The syntax:

public function __construct($prop1, $prop2) {
  $this->prop1 = $prop1;
  $this->prop2 = $prop2;
}
So you should remember the public keyword and the arrow notation.

Some new things:

You're creating a function bound to a class (a method).
The constructor method has to be called __construct().
Finally, the weird way to assign the values: $this->prop1 = $prop1 means that the value you pass in the 
__construct() function via the new keyword is assigned to $this, which represents the object you are 
dealing with, and ->prop1 is the actual property of the object.
By creating a new instance using the new keyword, you actually call this __construct() method, which 
constructs the object. And that's why we have to pass in some arguments when we create an instance 
of a class, since this is how the properties get set!
*/
<!DOCTYPE html>
<html>
  <head>
    <title>Reconstructing the Person Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
      <p>
      <?php
        class Person {
            public $isAlive=true;
            public $firstname;
            public $lastname;
            public $age;
            public function __construct($firstname, $lastname, $age){
                $this->firstname = $firstname;
                $this->lastname  = $lastname;
                $this->age       = $age;
            }
        }
        $teacher = new Person("boring", "12345", 12345);
        $student = new Person("Jack", "Smith", 12);
        echo $teacher->isAlive;
        echo '<br />';
        echo $student->age;
      ?>
      </p>
  </body>
</html>
// 1
// 12

/*
As you've seen, methods—functions bundled into objects—have the following syntax:

public function funcname($optionalParameter) {
  // Do something
}
And now we know the __construct function is a special one, which is called when a new object is created using a new keyword.
Furthermore, we've learnt we have to use the $this keyword, if we want to access some properties in a class.

So if we want a method to return a sentence containing the firstname, we would have to use $this->firstname.
(As you see, there is no $ when you access a property in a class.)

Calling a method is similar to accessing a property, you just have to add the parentheses:

$obj1 -> meth1();
*/
<!DOCTYPE html>
<html>
  <head>
    <title>Reconstructing the Person Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
	<body>
      <p>
      <?php
        class Person {
            public $isAlive=true;
            public $firstname;
            public $lastname;
            public $age;
            public function __construct($firstname, $lastname, $age){
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
            }
            public function greet() {
                return " Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)"; }
        }
        $teacher = new Person("boring", "12345", 12345);
        $student = new Person("Jack", "King", 12);
        echo $teacher->greet();
        echo '<br />';
        echo $student->greet();
      ?>
      </p>
  </body>
</html>
/*
Hello, my name is boring 12345. Nice to meet you! :-)
Hello, my name is Jack King. Nice to meet you! :-)
*/

<!DOCTYPE html>
<html>
  <head>
    <title> Practice makes perfect! </title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
      <p>
      <?php
        class Dog {
            public $numLegs = 4;
            public $name;
            public function __construct($name){
                $this->name = $name;
            }
            public function bark(){
                return "Woof";
            }
            public function greet(){
                return "Hello, my name is " . $this->name . ". Nice to see you!";
            }
        }
        $dog1 = new Dog("Barker");
        $dog2 = new Dog("Amigo");
        echo $dog1->bark();
        echo "<br />";
        echo $dog2->greet();
      ?>
      </p>
  </body>
</html>
// Woof
// Hello, my name is Amigo. Nice to see you!

<!DOCTYPE html>
<html>
  <head>
    <title> Challenge Time! </title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  </head>
  <body>
      <p>
      <?php
        class Cat {
          public $isAlive = true;
          public $numLegs = 4;
          public function __construct($name){
              $this->name = $name;
          }
          public function meow(){
              return "Meow meow";
          }
        }
        $cat1 = new Cat("CodeCat");
        echo $cat1->meow();
        echo "<br />";
        echo $cat1->name;
      ?>
      </p>
  </body>
</html>
// Meow meow
// CodeCat

