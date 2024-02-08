<?php

 include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Phone_number = $_POST['Phone_number'];
  $Budget = $_POST['Budget'];
  $Goals = $_POST['Goals'];
  

  $sql = "INSERT INTO inquiry (Name,Email,Phone_number,Budget,Goals) VALUES ('$Name','$Email','$Phone_number','$Budget','$Goals')";
      
  $conn=new mysqli("localhost","root","","buildmaster");
  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Form submitted successfully");</script>';
  } 
  
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql = "SELECT * FROM inquiry";
$result = $conn->query($sql);


  // Close the database connection
  mysqli_close($conn);
}


  
