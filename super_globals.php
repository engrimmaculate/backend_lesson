<?php

// Super global Variables are built-in PHP variables that  
// are available to you in all scopes

// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV : use to manage environment variable data $_ENV["DB_DATABASE]
// $_COOKIE; Stores small piece of data into the user browser of device cache 
// $_SESSION :  Used for session management

// $_ENV["DB_DATABASE"];

// print($_SERVER['HTTP_CLIENT_IP']);
// print($_SERVER['HTTP_CLIENT_IP']);



// $_REQUEST

// is a PHP Super global variables which 
// contains submitted form data
// The $_REQUEST variable can also be used to process 
// that sent from Cookies

// $_REQUEST['username'];
if(isset($_REQUEST['submit'])){
    $user = $_POST['username'];
    $pswd =  $_POST['password'];
    $data = $user."\n";
    $myfile = fopen("credentials.txt","w");
    if(fwrite($myfile,$data)){
        echo "File Written successfully";
    };
    if(fwrite($myfile,$pswd)){
        echo "File Written successfully";
    };

    if(fwrite($myfile,$data)){
        echo "File Written successfully";
    };
    if(fwrite($myfile,$pswd)){
        echo "File Written successfully";
    };

    if(fwrite($myfile,$data)){
        echo "File Written successfully";
    };
    if(fwrite($myfile,$pswd)){
        echo "File Written successfully";
    };

    if(fwrite($myfile,$data)){
        echo "File Written successfully";
    };
    if(fwrite($myfile,$pswd)){
        echo "File Written successfully";
    };

    if(fwrite($myfile,$data)){
        echo "File Written successfully";
    };
    if(fwrite($myfile,$pswd)){
        echo "File Written successfully";
    };

    if(fwrite($myfile,$data)){
        echo "File Written successfully";
    };
    if(fwrite($myfile,$pswd)){
        echo "File Written successfully";
    };

    if(fwrite($myfile,$_FILES["passport"]["name"])){
        echo "Passport File Written successfully";
    };
    // $pswd
    fclose($myfile);
}


// $_POST 
// The Post Super Globals is used to process data sent from a form


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form with Request variables</title>
</head>
<body>
    <h2> PHP $_REQUEST </h2>
    <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="Passport">Passport</label>
        <input type="file" name="passport" id="passport">
        
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>