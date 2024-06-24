<?php
// Form Processing
// Create Connection to the DB server
if(isset($_POST['login'])){
    session_start();
require('connection.php');


// processform Data

if(empty($_POST['username'])){
     $user_error = "Username is required";
}else{
    $username = $_POST['username'];
}
if(empty($_POST['password'])){
     $pswd_error = "Password is required ";
}else{
     $password = $_POST['password'];
     $password = sha1($password);
}

// perform user authentication
// check if a username  and password combination already exists
$sql = "SELECT name,email FROM users where email='$username' AND password = '$password'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_assoc($result)){
         $data =  $row["name"];
         $_SESSION['user']= $row["email"];
         $user = $row["email"];
        header("Location:dashboard.php?msg=$data & user=$user");
    }
}
else{
    $msg =  "Wrong username or Password";
}

// Close connection
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
      body {
        background-color: #000;
      }
        label{
            display: inline-block;
            color:#fff
        }
        input[type="text"]{
            width: 200px;
            padding: 10px;
            margin-bottom: 10px;
        }
        button{
            width: 200px;
            padding: 10px;
            background-color: #000;
            color:#fefe;
            font-weight: bold;
            margin: auto;
            top: 200px;
            left: 200px;
        }
        .div_center{
            text-align: center;
            padding-top: 30px;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <div class="div_center">
        <h1>
            Sign In Page

        </h1>
        <div>
            <span style="color: red;"><?php if(isset($msg)){ echo  $msg; } ?></span>
            <form action="login.php" method="post">
                <h2 style="color:red;"><?php  if(isset($_GET['msg'])) echo $_GET['msg'];   ?></h2>
                
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="userame">
                    <span style="color:red"><?php if(isset($user_error)){ echo $user_error; }  ?></span>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                    <span style="color:red"><?php if(isset($user_error)){ echo $pswd_error; }  ?></span>
                </div>
                
                <div>
                    
                    <button type="submit" name="login" style="background-color:red; padding:5px; color:#fff;">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
