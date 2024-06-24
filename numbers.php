<?php
$x =2;
print(is_int($x));
print(is_integer($x)); // checks if a variable is an integer
print(is_long($x));  // checks if avariable is a long/ integer variable
$x = 22.4;
print(is_float($x)); // checks if a variabale is a float or double
$x = 66.5e411;
var_dump($x); // return the datatype and the value of the variable
print(is_finite($x)); // checks if a variable has a finite value
print(is_infinite($x)); //checks if avariable has a infnite value

$x = acos(10);
var_dump($x);
print(is_nan($x)); // checks if a variable is a number or not
is_numeric($x); 

// Php Casting the strings and Floats into Integer


$x='200';
print(is_int($x));
$x = (int)$x;
print(is_int($x));


$x = "200";
$x= (integer)$x; // casting strings into integer
print(is_int($x));
$x = "22.4";
$x=intval($x); //casting floats into integer
// PHP Casting
// Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.
// Change Data Type
// Casting in PHP is done with these statements:
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;
// Cast to Boolean

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

// Cast to Array

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

?>