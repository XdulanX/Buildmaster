<?php
$hostname = "localhost";  
$username = "root";  
$password = "";  
$database = "BuildMaster";  
$conn=new mysqli("localhost","root","","BuildMaster");
if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}
?>