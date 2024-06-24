<?php
$result ="";
// protect the dashboard from unauthorized users
if(!isset($_GET['msg'])){
 header('Location:login.php?msg=you have not logged in yet') ;
}else { 
  require('connection.php');
  // perform user authentication
// check if a username  and password combination already exists
$sql = "SELECT *  FROM users";
// execute the query to pull user data from db
$result = mysqli_query($con, $sql);
setcookie('user',$_GET['msg']);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #sidebar {
            width:150px;
        }
    </style>
</head>
<body>
 <div class="row">
    <div class="header bg-secondary px-4 py-2 d-flex justify-content-between align-items-center">
        <h1 class="text-white">
           <a href="dashboard.php" class="text-decoration-none font-weight-bold text-white">Dashboard</a> 
        </h1>
      <span class="text-white h-2 bg-primary px-4 py-2">Welcome:  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; }else { echo  $_COOKIE['user']; }   ?> !</span> 
    <a href="dashboard.php" class="btn btn-primary flex-end">Logout</a>
    </div>
    <div class="row">
        <div class="col-md-2 bg-secondary d-flex flex-column">
                <ul class="list-style-none d-flex flex-column  text-white p-4 font-weight-900 ">
                
                    <li class="btn btn-primary mb-1">Home</li>
                    <li class="btn btn-primary mb-1 "><a href="users.php"> Users</a></li>
                    <li class="btn btn-primary mb-1 ">Manage Orders</li>
                    <li class="btn btn-primary mb-1 ">Manage Items</li>
                    <li class="btn btn-primary mb-1 ">Shipping</li>
                    <li class="btn btn-primary mb-1 ">Manage Vendors</li>
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
                        <div>
                            <table class="table bordered responsive">
                                <thead>
                                    <td>ID</td>
                                    <td>Fullname</td>
                                    <td>Username</td>
                                    <td>Email</td>
                                    <td>Status</td>
                                    <td>Action</td>

                                </thead>
                                <tbody>
                                    <?php
                                   $results ="";
                                    if(mysqli_num_rows($result) > 0){
                                        // print_r($result);
                                        while($row = mysqli_fetch_array($result)){
                                             $id = $row['id'];
                                              $results .="<tr>
                                             <td>" .$row["id"]. "</td>
                                        <td>". $row["name"]. "</td>
                                        <td>". $row["username"]."</td>
                                        <td>". $row["email"]. "</td>
                                        <td>
                                        <button class='btn btn-success'>Active</button>
                                            <button class='btn btn-warning'>Suspended</button>
                                        </td>
                                        <td class='d-flex '>
                                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal$id' data-bs-whatever='@$id'>View @$id</button>

                                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editexampleModal$id' data-bs-whatever='@$id'>Edit @$id</button>
                                            
                                            <a href='edit_user.php?del_id=$id' class='btn btn-danger'>Delete</a>
                                        </td>
                                    </tr>".
                                     // <!--  Edit User View Modal Begins here -->
                                     "<div class='modal fade' id='editexampleModal$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                     <div class='modal-dialog'><div class='modal-content'>
                                         <div class='modal-header'><h1 class='modal-title fs-5' id='exampleModalLabel'>User View for : &nbsp; ". $row["name"]. "</h1>
                                             <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                         </div>
                                         <div class='modal-body'><form method='post' action='edit_user.php' class='editUser' name='editUser'><div class='mb-3'>
                                         <label for='name' class='col-form-label'>Full Name:".$row["name"].
                                             "</label>
                                             <input type='text' value=".$row["name"] ." />
                                             </div>
                                             <div class='mb-3'>
                                                 <label for='email' class='col-form-label'>Email:". $row['email'] ."</label>
                                                 <input type='text' value=".$row['email'] ." /> 
                                             </div>
                                             <div class='mb-3'>
                                                 <label for='name' class='col-form-label'>Username:".  $row['username']."</label>
                                                 <input type='text' value=".$row['username'] ." />  
                                             </div>
                                              <div class='mb-3'>
                                                 <label for='name' class='col-form-label'>Username:".  $row['password']."</label>
                                                 <input type='text' value=".$row['password'] ." />  
                                             </div>
                                             <button type='submit' class='btn btn-primary' name='update_user' >Update User</button>
                                             <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>CANCEL</button>
                                             </form>
                                         </div>
                                         <div class='modal-footer'>
                                             
                                              
                                         </div>
                                         </div>
                                     </div>
                                     </div>".
                                //  <!-- end Edit user View Modal here -->
                                    // <!-- User View Modal Begins here -->
                                        "<div class='modal fade' id='exampleModal$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'><div class='modal-content'>
                                            <div class='modal-header'><h1 class='modal-title fs-5' id='exampleModalLabel'>User View for : &nbsp; ". $row["name"]. "</h1>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'><form ><div class='mb-3'>
                                            <label for='name' class='col-form-label'>Full Name:".$row['name'].
                                                "</label></div>
                                                <div class='mb-3'>
                                                    <label for='email' class='col-form-label'>Email:". $row['email'] ."</label> 
                                                </div>
                                                <div class='mb-3'>
                                                    <label for='name' class='col-form-label'>Username:".  $row['username']."</label>  
                                                </div>
                                                
                                                </form>
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    <!-- end user View Modal here -->
                                    ";
                                    
                                        }
                                    }  
                                    echo  $results;
                                    ?>
                                </tbody>
                                <tfoot>
                                    <td>ID</td>
                                    <td>Fullname</td>
                                    <td>Username</td>
                                    <td>Email</td>
                                    <td>Status</td>
                                    <td>Action</td>

                                </tfoot>
                            </table>
                        </div>
                    </div>
            </div>
    </div>
    
 </div> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
 <script>
    $(document).ready(function(){ 	
	$("button#submit").click(function(){
		$.ajax({
			type: "POST",
			url: "update_user.php",
			data: $('form.editUser').serialize(),
			success: function(message){
				$("#feedback").html(message)
				$("#feedback-modal").modal('hide'); 
			},
			error: function(){
				alert("Error");
			}
		});
	});	
});
</script>
</body>
</html>
<?php  } ?>