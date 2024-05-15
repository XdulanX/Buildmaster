<?php
require "config.php" ;

    $employeeID = $_POST["emp_id"];
    $projectID = $_POST["pro_id"];
    $senderEmail = $_POST["sender_email"];
    $receiverEmail = $_POST["receiver_email"];
    $messages = $_POST["messages"];

    $sql = "INSERT INTO Contact_team(Emp_id,Pro_id,Email,Emp_mail,Messages) VALUES ('$employeeID', '$projectID', '$senderEmail', '$receiverEmail', '$messages')";
   
    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Record Inserted Successfully!!')</script>";

        header('location: contact_team.php');
    } 
    else {
        echo "<script>alert('Error in Insertion!!')</script>";
    }

    mysqli_close($conn);

?>
