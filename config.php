<?php
//The connection object
$conn=new mysqli("localhost","root","","buildmaster");
// Check connection
if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}else{
    //echo "Connected successfully";
}
?>
