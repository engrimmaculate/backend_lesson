<?php 

$con = mysqli_connect("localhost", "root", "", "backend_db");

$msg="";
if(!$con){
    $msg= "Unable to Connect";
}

?>