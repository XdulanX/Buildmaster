<?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require "config.php";

        $employeeID = $_POST["emp_id"];

        $sql = "DELETE FROM Contact_team WHERE Emp_id='$employeeID'";

        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Record Deleted Successfully!')</script>";
        } else {
            echo "<script>alert('Error in Delete!')</script>";
        }

        mysqli_close($conn);
    }
?>
