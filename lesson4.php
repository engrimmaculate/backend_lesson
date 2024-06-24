<?php
// PHP STring

// PHP Strings are arrays of characters
// A string is a sequence of characters, like "Hello world!".

// Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
// 

// Note: There is a big difference between double quotes and single quotes in PHP.

// Double quotes process special characters, single quotes does not.

$x = "Hello World!";
echo  "$x From PHP Web Development <br />"; 
echo '$x Php Web Development <br />';

// Strng Functions 
// 1.STRLEN function:  is used to get the lemfght of string
echo strlen($x);
echo "<br />";

// Word Count function is used to returns the number of words in a string
// 2. STR_WORD_COUNT

echo str_word_count($x);

echo "<br />";
// 3. strpos() function is used to search the position of 
// a sequence of charecter in a string 
// This function takes 2 parametres , the String and the search condition
echo strpos($x,"World");
echo "<br />";
echo strpos($x,"world");

// echo is a string function

// explode function breaks a string into an array
$image = "https://www.w3schools.com/images/w3schools_green.jpg";
$str = "explode function. breaks a string into an array.";
$explod = explode(".",$image);
print_r(explode(".",$image));
echo "<br />";
echo "<br />";
echo $explod [4];
// implode function returns a striing from the element of an array
echo "<br />";
echo "<br />";
$str = array("implode function"," returns a striing", "from the element of an array");
echo  implode(" ",$str);

echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
$stri ="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste enim excepturi, molestias aliquid eveniet accusantium animi tempore eos earum repudiandae cupiditate, est perspiciatis, dolore ratione voluptates dolores nulla sed vitae!.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste enim excepturi, molestias aliquid eveniet accusantium animi tempore eos earum repudiandae cupiditate, est perspiciatis, dolore ratione voluptates dolores nulla sed vitae!.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste enim excepturi, molestias aliquid eveniet accusantium animi tempore eos earum repudiandae cupiditate, est perspiciatis, dolore ratione voluptates dolores nulla sed vitae!.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste enim excepturi, molestias aliquid eveniet accusantium animi tempore eos earum repudiandae cupiditate, est perspiciatis, dolore ratione voluptates dolores nulla sed vitae!.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste enim excepturi, molestias aliquid eveniet accusantium animi tempore eos earum repudiandae cupiditate, est perspiciatis, dolore ratione voluptates dolores nulla sed vitae!.
";

print_r(explode(".", $stri));
echo "<br />";

$data = "NAme Gender Age Jaye male 20";
print_r(explode(" ", $data));
echo "<br />";
$details = explode(" ",$data);
echo "$details[0] =  $details[3] <br />";
echo "$details[1] =  $details[4] <br />";
echo "$details[2] =  $details[5] <br />";

echo "<br />";
print(str_word_count($stri));

echo "<br />";
$t = 2;
$k = "Two";
print($t . "=" .$k);







?>