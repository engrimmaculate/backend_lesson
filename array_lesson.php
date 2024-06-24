<?php
// What is an Array?

// An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
// PHP Array Types

// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays

/*
Working With Arrays

In this tutorial you will learn how to work with arrays, including:

    Create Arrays
    Access Arrays
    Update Arrays
    Add Array Items
    Remove Array Items
    Sort Arrays



    Array Items

Array items can be of any data type.

The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.

You can have different data types in the same array.
Example

Array items of four different data types:
*/

$courses = ['web dev', 'front-end','backend','Bootstrap'];
print("Printed from the Array: ".$courses[2]);
echo "<br />";
// $courses = array("Volvo", 15, ["apples", "bananas"],['JS','CSS','HTML']); // array
print_r($courses[0]);
echo "<br />";
print($courses[1]);
echo "<br />";
print_r($courses[2]);
echo "<br />";
print($courses[3]);

// Associative Array: Array with a named Keys 
$students =array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);

// Associative Array: Array with a named Keys 
$students2 =array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);
echo "<br />";
echo "Student Name: " .  $students['name'];
echo "<br />";
echo "Student Age: ". $students['age'];
echo "<br />";
echo "Student City : ". $students['city'];

echo "<br />";
$students['gender'] = "Female";
print_r($students);

// Updating array values 
$students['gender'] = "Male";
echo "<br />";
print_r($students);

// Looping through an array elements
echo "<br />";
foreach($students as $key => $value) {
echo "$key:  $value <br />";
}

// Removing an item from an Array by using PHP unset()
unset($students['gender']);
echo "<br />";
print_r($students);

echo "<br />";
foreach($students as $key => $value) {
echo "$key:  $value <br />";
}

// Adding an item to an Array by using PHP array_push()
// Removing an Items from an Array by using PHP array_pop(), array_splice
// array_pop($students);

echo "<br />";
foreach($students as $key => $value) {
echo "$key:  $value <br />";
}

// using array_splice()

// array_splice($students, 0, 2);
echo "<br />";
foreach($students as $key => $value) {
echo "$key:  $value <br />";
}
// array_shift() removes the 1ST Item, and array_diff() works with associative arrays  are also useful functions to manipulate arrays

// $newstd= array_diff($students, array('name' => 'John', 'age' => 30));
// echo "<br />";
// foreach($newstd as $key => $value) {
// echo "$key:  $value <br />";
// }

// array_shift() removes the first element
// $student = array_shift($students);
// echo "<br />";
// foreach($students as $key => $value) {
// echo "$key:  $value <br />";
// }


// Sorting an Array by using PHP sort()
echo "<br />";
echo  sort($students);
echo "<br />";
foreach($students as $key => $value) {
echo "$key:  $value <br />";
}

// Sorting an Array by using PHP rsort() sorts data in descending order

echo "<br />";
 rsort($students);
echo "<br />";
foreach($students as $key => $value) {
    echo "$key:  $value <br />";
    }

    // ksort() - Sorts an array by key in ascending order
    echo "<br />";
    arsort($students);
    print_r($students);
    krsort($students);
    echo "<br />";
    print_r($students);
    foreach($students as $key => $value) {
        echo "$key:  $value <br />";
        }

    // Multidimensional Array: Array containing one or more arrays
    $courses = array(
                        "FRONT END", 
                        "BACKEND", 
                        ["HTML", "CSS","JS"],
                        ["PHP","MYSQL","JAVASCRIPT","AJAX","JQUERY"],
                        ["PYTHON","GOLANG","RUBY ON RAILS","DJANGO"]
                    ); // multidimentional array

    print_r($courses);


    // 

    echo "<br />";
    $baknd = $courses[1];
    print($baknd. "Modules are: "."<br />".
                    $courses[3][0]. "<br />".
                    $courses[3][1]. "<br />".
                    $courses[4][0]. "<br />".
                    $courses[4][1]. "<br />".
                    $courses[4][2]. "<br />".
                    $courses[4][3]. "<br />"
                    
);
$backend =[];



$backend = 
$courses[3][0].
$courses[3][1]. 
$courses[4][0]. 
$courses[4][1]. 
$courses[4][2]. 
$courses[4][3];

print($backend);
echo "<br />";
echo "<br />";
// EXERCISE 1:
// exercise : Print out list of All Courses that are for FRONT-END DEVELOPMENT
// EXERCISE 2:
//  create a Check Box List of Courses that are for FRONT-END DEVELOPMENT and Backend Categories
?>

<form action="" method="post">
    <h1>PHP FORM for <?php echo $students2['name']; ?></h1>
    <select>
        <option value="">...Select Course</option>
        <?php 
            foreach($courses as $course)
            if(is_array($course)) {
                foreach($course as $cours)
                echo "<option value='$cours'> $cours</option>";
                }else{
                    echo "<option value='$course'> $course</option>";  
                }

        ?>
    </select>
</form>