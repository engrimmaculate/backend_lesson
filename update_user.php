<?php




if(isset($_POST['update_user'])){

    $id = $_POST['id'];
    $first = $_POST['firstname'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($password ==''){
        $password = 'password';
    }
    $email = $_POST['email'];
    // Update Data
    // build name 
    $fullname = $surname . " " . $first;
    $sql = "UPDATE users SET 
    name='$fullname',
    username = '$username',
    password = '$password',
    email = '$email'

    WHERE id=$id";
    if(mysqli_query($con, $sql)){
        echo $msg=  "Record update successfully";
            } else{
               echo  $msg=  "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
        
}

?>