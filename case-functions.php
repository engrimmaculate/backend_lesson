<?php

// LESSON 5

// PHP String Functions

// The PHP string functions are part of the PHP core. No installation is required to use these functions.


// CASE MANIPULATION FUNCTION : Are functions used to
//  manipulate character case.
// 1. strtoupper() converts lower or mixed characters to upper cap
// 2. strtolower() converts upper or mixed characters to lower cap
// 3. ucfirst () converts th first character of a string to upper case
// 4. ucwords() converts all the first character of each word to upper case

// example for strtoupper()

$x = "Hello World";
print(strtoupper($x));

echo "<br />";
// Example for strtolower()
print(strtolower($x));
// ucfirst converts to sentence case
echo "<br />";
print(ucfirst($x));
echo "<br />";
// ucwords converts to title case
print(ucwords($x));
echo "<br />";


// Character Manipuplation FUnction: 
// substr() : it Extract Characters from a string
// instr(): it returns the position of the first occurrence of a Character or sequence of characters within another string

// Example for substr()
print(substr($x,0,2));  // substr extracts characters of a determined length

// example of instr(): it retuerns the position of the first occurrence of a Character or sequence of characters within another string
// Return the numeric postion of a character

// print(instr($x,"l"));

echo "<br />";
print(strpos($x,"l"));
echo "<br />";
// strip_tags() removes or strips Tags from a string

$x1 = "<p>Hello World from paragraph</p>";
$x2 = strip_tags($x1);
print($x2);

echo "<br />";

// stripslashes() removes backslashes from a string
$y = "Hello \n World again";
print(stripslashes($y));

// md5 () function returns a 128-bit hash value as a hexadecimal number
// useful for creating a unique ID, password or any other string
echo "<br />";
$x = "Hello World";
print(md5($x));


// sha1() function returns a 160-bit hash value as a hexadecimal number

echo "<br />";
$x = "Hello World";
print(sha1($x));
print "<br />";
$password = sha1('0a4d55a8d778e5022fab701977c5d840bbc486d0');
print "<br />";
// password_get_info() function returns information about the password
print(password_get_info('$password'));
// password_hash() function returns a hashed string
// password_verify() function verifies a password

// nl2br() function converts a string to a newline
print(nl2br($x));

// str_replace() function replaces all occurrences of the search string with the replacement string
print("<br />");

$x = "Hello World";
$y = str_replace("l","L",$x);
print($y);

echo "<br />";
$username = "Jayeoba";
$greetings = "H1 $username, welcome to my website";
print($greetings);
echo "<br />";
$salutation = "H1 user, welcome to my website";

$y = str_replace("user","$username",$salutation);

print($y);

echo "<br />";
// str_ireplace() function replaces all occurrences of the search string with the replacement string
print("<br />");
$x = "Hello World";
$y = str_ireplace("l","L",$x);
print($y);

// switch ($username) {    
// case 'user':
//     echo "Welcome to my website";

// }
// crypto_rand_secure() function returns a random number between 0 and 32767
// crypt(): crypt() returns a random number between 0 and 32767
echo "<br />";
// $rounds = 0;
// $x = crypt("Hello World","$5$rounds=5000$");
// print($x);




?>