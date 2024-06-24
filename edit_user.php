<?php

$result ="";
// protect the dashboard from unauthorized users
// if(isset($_GET['msg'])){
//  header('Location:login.php?msg=you have not logged in yet') ;
// }else { 
  require('connection.php');
  // perform user authentication
// check if a username  and password combination already exists
if(isset($_GET['edit_id'])){
  $edit_id =$_GET['edit_id'];
  $id = setcookie('id',$edit_id);
  $sql = "SELECT *  FROM users where id=$edit_id";
// execute the query to pull user data from db
$result = mysqli_query($con, $sql);
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
    
    $row = mysqli_fetch_assoc($result);
         
    }else{
        header('Location:dashboard.php?msg=User not found');
    }
// }  
}else{

}
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
        $msg=  "Record update successfully";
            } else{
                $msg=  "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
        
}


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create User</title>
    <style>
      
        label{
            display: inline-block;
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
        }
        .div_center{
            text-align: center;
            padding-top: 30px;
            justify-content: center;
            align-items: center;
        }
        #sidebar {
            width:250px;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="header bg-secondary px-4 py-2 d-flex justify-content-between align-items-center">
        <h1 class="text-white">
           <a href="dashboard.php?msg=<?php if(isset($_COOKIE['id'])){ echo $_COOKIE['id']; } ?>" class="text-decoration-none font-weight-bold text-white">Dashboard</a> 
        </h1>
      <span class="text-white h-2 bg-primary px-4 py-2">Welcome:  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; }elseif(isset($msg)) { echo  $msg;  }   ?> !</span> 
    <a href="dashboard.php" class="btn btn-primary flex-end">Logout</a>
    </div>
    <div class="row">
        <div class="col-md-4 bg-secondary d-flex flex-column">
                <ul class="list-style-none d-flex flex-column  text-white p-4 font-weight-900 ">
                    <a href="dashboard.php">
                        <li class="btn btn-primary mb-1">Home</li>
                    </a>
                    <a href="users.php">
                        <li class="btn btn-primary mb-1 "> Users</li>
                    </a>
                    <a href="orders.php">
                        <li class="btn btn-primary mb-1 ">Manage Orders</li>
                    </a>
                    <a href="items.php">
                        <li class="btn btn-primary mb-1 ">Manage Items</li>
                    </a>
                    <a href="dashboard.php">
                        <li class="btn btn-primary mb-1 ">Shipping</li>
                    </a>
                    <a href="dashboard.php">
                        <li class="btn btn-primary mb-1 ">Manage Vendors</li>
                    </a>
                </ul>
            </div>
            <div class="col-md content bg-light p-3">
                    <div class="row justify-content-between space-between">
                        <div class="col-md-3 p-2 bg-success ml-2">Orders</div>
                        <div class="col-md-3 p-2 bg-secondary ml-2">Users</div>
                        <div class="col-md-3 p-2 bg-info ml-2">Items</div>
                        <div class="col-md-3 p-2 bg-danger ml-2">Vendors</div>
                    </div>
                    <div class="row">
    <div class="div_center">
        <div>
            <span class="text-danger"> <?php if(isset($msg)) { echo  $msg;  }  ?></span>
            <form action="edit_user.php" method="post">
                <h2 style="color:red;"><?php  if(isset($_GET['msg'])) echo $_GET['msg'];   ?></h2>
                <input type="text" name="id" id="firstname" 
                    value="<?php if(isset($row['id'])) { echo $row['id']; }  ?>"
                    >
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" 
                    value="<?php if(isset($row['name'])){ echo $row['name']; } ?>"
                    >
                </div>
                
                <div>
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" id="firstame" 
                    value="<?php if(isset($row['name'])){ echo $row['name']; }  ?>">
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="userame" 
                    value="<?php if(isset($row['username'])){ echo $row['username']; }  ?>">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" 
                    value="<?php if(isset($row['email'])){ echo $row['email'] ; } ?>">
                </div>
                <div>
                    
                    <button class="btn btn-danger" type="submit" name="update_user">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    
 </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>