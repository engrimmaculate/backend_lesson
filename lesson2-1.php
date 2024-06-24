<?php
$name = 'Jayeoba';
// PHP Case Sensitivity
// In PHP, keywords (e.g. if,else,while, echo, etc) are not classes, functions, and user-defined functions are not case-sensitive.

ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

// php Variables Lesson

$x = 2;
$y = 4;
$z = $x + $y;
 print('2+4 = ');
print($z);
echo  "<br />";

$_X2= 4;
$_y2 =6;
$z2 = $_X2 + $_y2;
 print('4+6 = ');
 print($z2);
 echo  "<br />";







// Note: However; all variable names are case-sensitive!
$color = "red";
echo "My car is " . $color . "<br>";
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";

// Look at the example above; only the first statement will display the value of the $color, variable! This is because $color, $COLOR, $colOR  are treated as three different variables:

    //  WHAT IS VARIABLE

    // Variables are "containers" for storing information.

    // Creating (Declaring) PHP Variables

// In PHP, a variable starts with the "$" sign, followed by the name of the variable:

$x = 5;
$y = "John";


// In the example above, the variable  $x   will hold the value  5, and the variable $y would hold the value of "John", 

// Note: When you assign a text value to a variable, put quotes around the value.

// Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

// Think of variables as containers for storing data.
// PHP Variables
// A variable can have a short name (like $x, $y), and can alos have a more descriptive name  like $name, $total, $age
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE,are two different variables)

$txt = "Classicsystemsinfotech.com";
echo "I love " . $txt . "!";

// You can also perform some arithmetic with Variables 

$x = 5;
$y = 4;
echo $x + $y; // gives 9
// It Uses Derived Datatype 

// PHP is a Loosely Typed Language

// In the example above, notice that we did not have to tell PHP which data type the variable is.

// PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

// In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

$x = "Jayeoba";

echo ($x.$y);


// Variable Types

// PHP has no command for declaring a variable, and the data type depends on the value of the variable.

// PHP supports the following data types:

//     String
//     Integer
//     Float (floating point numbers - also called double)
//     Boolean (True or False)
//     Array (Data Collecton)
//     Object (Key Value Pair Collection Object)
//     NULL (Not Assigned)
//     Resource

//  T Get the Datatype of Variable
// Get the Type

// To get the data type of a variable, use the "var_dump()" function
$x = 5;
echo  "<br />";
echo  "Data Type of Jayeoba: <br />";
$student = "Jayeoba";
var_dump($student);
echo  "<br />";
echo  "Datatype of 25: <br />";
$student = 25;
var_dump($student);
echo  "<br />";
// x='2';
var_dump($x);
echo "<br />";
var_dump(5);
echo "<br />";
var_dump("John");
echo "<br />";
var_dump(3.14);
echo "<br />";
var_dump(true);
echo "<br />";
var_dump([2, 3, 56]);
echo "<br />";
var_dump(NULL);

// Assign String to a Variable

// Assigning a string to a variable is done with the variable name followed by an equal sign and the string:

$x = "John";
echo $x;

// Assign Multiple Values

// You can assign the same value to multiple variables in one line:

// Example

// All three variables get the value "Fruit":

$x = $y = $z = "Fruit";
$jayeoba_course=$isioma_course=$silvia_course ='Php Web Development';
echo "<br />";
print("Jayeoba's Course:".$jayeoba_course);

// PHP Variables Scope

// In PHP, variables can be declared anywhere in the script.

// The scope of a variable is the part of the script where the variable can be referenced/used.

// PHP has three different variable scopes:

//     local
//     global
//     static

// Global and Local Scope

// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:


// Example of Global Scope of varibale
$score =5; //global scope

function  square($score){
    global $total ;
    $total = $score*$score; // local scope
    print("Total is: ". $total);
}

echo square($score);
echo "<br />";
print($total);
echo $GLOBALS['total'];

echo "<br />";
function  myFunc(){
    // global $x;
      static $x22 = 0; // decalre x
    print $x22; //print x
    $x22++; // increment
    // print $x22; //print x
}

echo "<br />";
myFunc(); echo "<br />";
// print($x);
myFunc();echo "<br />";
// print($x);
myFunc();echo "<br />";
// print($x);
myFunc();echo "<br />";


// PHP STring

// PHP Strings are arrays of characters
// A string is a sequence of characters, like "Hello world!".
?>