<?php
include('databaseconn.php');


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $hpass = password_hash($password,PASSWORD_DEFAULT);

    $sql= "INSERT INTO usertable(username,password) VALUES (?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss",$username,$hpass);

    if($stmt->execute()){
       echo "registred successfully!";
    }
else{
    echo "not success";
}



}


?>