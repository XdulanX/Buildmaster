<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "config.php";

        $employeeID = $_POST["emp_id"];
        $projectID = $_POST["pro_id"];
        $senderEmail = $_POST["sender_email"];
        $receiverEmail = $_POST["receiver_email"];
        $messages = $_POST["messages"];

        $sql = "UPDATE Contact_team SET Pro_id='$projectID', Email='$senderEmail', Emp_mail='$receiverEmail', Messages='$messages' WHERE Emp_id='$employeeID'";
       
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Record Updated Successfully!')</script>";
        } else {
            echo "<script>alert('Error in Update!')</script>";
        }

        mysqli_close($conn);
    }
?>

    