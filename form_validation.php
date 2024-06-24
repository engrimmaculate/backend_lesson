<?php
/*
PHP Form Validation

Think SECURITY when processing PHP forms!

These pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!
The HTML form we will be working at in these chapters, contains various input fields: required and optional text fields, radio buttons, and a submit button:

    

*/

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";


// form proccessing of user data to be safe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = validate_input($_POST["name"]);
  $email = validate_input($_POST["email"]);
  $website = validate_input($_POST["website"]);
  $comment = validate_input($_POST["comment"]);
  $gender = validate_input($_POST["gender"]);
}

// Clean Form Data to be safe for server use, and database storage
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = striptags($data);
    return $data; #return a clean and safe data
  }



  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <style>
        .div_desig{
            justify-content: center;
            align-items: center;
            display: grid;
        }
    </style>
</head>
<body>
    <h2>Form Validation</h2>
    <div id="div_desig">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        Website: <input type="text" name="website">
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <button type="submit">Submit</button>
    </form>
    </div>
    
</body>
</html>