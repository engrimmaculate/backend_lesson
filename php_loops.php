<?php
// PHP Loops


// Loops are used to execute the same block of code again and again, as long as a certain condition is true.

// Types of Loops:
// 1. While Loop :=>  loops through a block of code as long as the specified condition is true


// 2. Do .. While....  Loop : =>loops through a block of code once, and then repeats the loop as long as the specified condition is true


// 3. For Loop - => loops through a block of code a specified number of times


// 4. Foreach Loop - => loops through a block of code for each element in an array

//  this code loops to 100 by increment of 10

$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i."<br>";
}


// alternative way with conitnue keyword

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}


// do.. while 

// loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.


$i = 8;

do {
  echo $i;
  $i++;
} while ($i< 6 );



// The break Statement

// with the break statement, we can stop the loop even if the condition is still true
$i=1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);



// The continue Statement statement we can stop the current iteration, and continue with the next iteration

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);


// The for Loop
// The PHP for Loop loop is used when you know how many times the script should run.


for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  

//   PHP foreach Loop

// Loops through a block of code for each element in an array or each property in an object.

$courses = array("HTML", "CSS", "JS", "PHP");

foreach ($courses as $x) {
  echo "$x <br>";
}
// For every loop iteration, the value of the current array element is assigned to the variabe $x. The iteration continues until it reaches the last array element.


/*  
Keys and Values

The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.

Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
*/


$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x's Age is : $y <br>";
}


// NEXT CLASS IS PHP Forms


?>