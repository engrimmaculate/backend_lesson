<?php 
// Form Processing
// Create Connection to the DB server
$con = mysqli_connect("localhost", "root", "", "backend_db");

$msg="";
if(!$con){
    echo  "Unable to Connect";
}else{
    echo "Conenction Was Successful";
}
// $_POST
// The Post Super Globals is used to process data sent from a form

if(isset($_POST['create-account'])){
   echo  "<h1> Welcome to the backend! </h1>";

   
//    print_r($_POST);
if(empty($_POST['firstname'])){
    echo $fn_error = "First Name is required <br>";
}else{
   $fn = $_POST['firstname'];
}



if(empty($_POST['surname'])){
    echo $fn_error = "Surname is required <br>";
}else{
     $sn = $_POST['surname'];
}


if(empty($_POST['email'])){
    echo $em_error = "Email is required. <br>";
}else{
    $email = $_POST['email'];
}


if(empty($_POST['username'])){
    echo $user_error = "Username is required <br>";
}else{
    $username = $_POST['username'];
}
if(empty($_POST['password'])){
    echo $password = "Password is required <br>";
}else{
     $password = $_POST['password'];
}

echo  $fn . " ".$sn . " ". $username. " " .$password;

// Save user Data to the Database here
$name = $fn . " " . $sn;
// encrypt the password with MD5, SHA1
$password = sha1($password); //secure the password before storage
$sql = "INSERT INTO users (name, email, password)
                        VALUES ('$name', '$email' , '$password')";
                        if(mysqli_query($con, $sql)){
                            $msg = "New record created successfully";
                            // redirect back to registration form with message notification
                            header('Location:http://localhost/backend_lesson/create-user.php?msg='.$msg);
                        } else{
                            $msg =  "Error: " . $sql . "<br>" . mysqli_error($con);
                            header('Location:http://localhost/backend_lesson/create-user.php?msg='.$msg);
                        }


}

?>