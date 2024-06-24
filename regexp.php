<?php
/*
What is a Regular Expression?

A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.

A regular expression can be a single character, or a more complicated pattern.

Regular expressions can be used to perform all types of text search and text replace operations.

Regular Expression Functions

PHP provides a variety of functions that allow you to use regular expressions.

The most common functions are:

preg_match() =>  Returns 1 if the pattern was found in the string and 0 if no

preg_match_all() =>  Returns the number of times the pattern was found in the string, which may also be 0


preg_replace() => preg_replace function Returns a new string where matched patterns have been replaced with another string





*/

// preg_match()
$str = "PHP MYSQL WEB DEVELOPMENT";
$pattern = "/PHP MYSQL/i";
echo preg_match($pattern, $str); // return 1 if PHP MYSQL was found in string, or 0 if not


// preg_match_all()
$str = "PHP MYSQL WEB DEVELOPMENT is a PHP MYSQL STACK for PHP Developers";
$pattern = "/PHP/i";
echo preg_match_all($pattern, $str); // return the number of times if PHP MYSQL was found in string, or 0 if not


// preg_replace()  => function will replace all of the matches of the pattern in a string with another string.

$str = "PHP MYSQL WEB DEVELOPMENT is a PHP MYSQL STACK for PHP Developers";
$pattern = "/PHP/i";
echo preg_match_all($pattern,'PYTHON', $str); //  function will replace all of the matches of the pattern in a string with another string.


?>