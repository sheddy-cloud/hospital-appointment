<?php
include('databaseconn.php');


$message="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

   $sql = "SELECT *FROM usertable where username = '$username' AND password = '$password'";



$result = $conn->query($sql);

if($result->num_rows>0){
      
    echo "WELCOME LOGIN success!";
 
}

else{

    
    echo "INVALID CREDENTIALS!";
}

}






?>

