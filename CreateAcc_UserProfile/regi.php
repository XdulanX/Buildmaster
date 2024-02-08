<?php
include_once'conn.php';
?>

<?php

$firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phone-number"];
  $birthDate = $_POST["birth-date"];http://localhost/phpmyadmin/index.php?route=/database/structure&db=buildmaster
  $nic = $_POST["nic"];
  $password = $_POST["password"];

  $employeeType = isset($_POST["employee"]) ? $_POST["employee"] :"";

  $sql="INSERT INTO accounts(emp_id,firstName,lastName,email,phoneNum,dob,nic,password,emp_type) VALUES('','$firstName','$lastName','$email','$phoneNumber','$birthDate','$nic','$password','$employeeType')";

  if(mysqli_query($conn,$sql)) {
    echo "<script>alert('Record Inserted Successfully!!')</script>";
    echo "<script>window.location.href ='../homepage.php';</script>";
  }

  else {
    echo "<script>alert('Error In Insertion!!')</script>";
  }
 
  mysqli_close($conn);


?>

