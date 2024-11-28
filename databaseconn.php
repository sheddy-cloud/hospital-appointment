<?php
$SERVER_NAME='localhost';
$USER_NAME='root';
$PASSWORD='';
$DATABASE='hospital';

$conn = new mysqli($SERVER_NAME,$USER_NAME,$PASSWORD,$DATABASE);

if($conn==false){
    echo "not connected";
}
