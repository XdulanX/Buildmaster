<?php

$ServerName="localhost";
$UserName="root";
$Password="";
$DataBase="buildmaster";

$conn= new mysqli($ServerName, $UserName, $Password, $DataBase);

if($conn->connect_error)
{
    die("Connection faild".$conn->connect_error);
}

echo "Connected successfully";
?>