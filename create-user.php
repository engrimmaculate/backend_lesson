<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>
<body>
    <div class="div_center">
        <div>
            <form action="php_forms.php" method="post">
                <h2 style="color:red;"><?php  if(isset($_GET['msg'])) echo $_GET['msg'];   ?></h2>
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                
                <div>
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" id="firstame">
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="userame">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    
                    <button type="submit" name="create-account">Create Account</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>