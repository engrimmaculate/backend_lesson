<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #sidebar {
            width:200px;
        }
    </style>
</head>
<body>
 <div class="row">
    <div class="header bg-secondary px-4 py-2 d-flex justify-content-between align-items-center">
        <h1 class="text-white">
           <a href="dashboard.php" class="text-decoration-none font-weight-bold text-white">Dashboard</a> 
        </h1>
      <span class="text-white h-2 bg-primary px-4 py-2">Welcome:  <?php if(isset($_GET['msg'])){ echo $_GET['msg']; }   ?> !</span> 
    <a href="dashboard.php" class="btn btn-primary flex-end">Logout</a>
    </div>
    <div class="row">
        <div class="col-md-4 bg-secondary d-flex flex-column">
                <ul class="list-style-none d-flex flex-column  text-white p-4 font-weight-900 ">
                
                    <li class="btn btn-primary mb-1">Home</li>
                    <li class="btn btn-primary mb-1 ">Manage Users</li>
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
                            <table>
                                <thead>
                                    <td>ID</td>
                                    <td>Fullname</td>
                                    <td>Username</td>
                                    <td>Status</td>
                                    <td>Action</td>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                            </table>
                        </div>
                    </div>
            </div>
    </div>
    
 </div> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>