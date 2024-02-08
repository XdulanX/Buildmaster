<?php
session_start();
include "config.php" ;
if(isset($_POST['ID']) && isset($_POST['password'])) {

function validate($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
    }
 
$id = validate(($_POST['ID']));
$pass = validate(($_POST['password']));

if (empty($id)){
   header("Location: login.php?error=User ID is Required");
   exit();
}else if(empty($pass)){
    header("Location: login.php?error=Password is Required");
    exit();

}else{
    $sql = "SELECT ID,password FROM emp_pool WHERE ID = '$id' AND password = '$pass' ";
    

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) === 1) {
$row=mysqli_fetch_assoc($result);
if($row['ID'] === $id && $row['password'] === $pass) {
    header("Location:/buildmaster/home.php");
exit();

    }else{
        header("Location: login.php?error=Incorrect User name or Password");
        exit();
    }
    } else{
        header("Location: login.php?error=Incorrect User name or Password");
        exit();

    }
}

}else{
    header("Location: login.php");
}












?>