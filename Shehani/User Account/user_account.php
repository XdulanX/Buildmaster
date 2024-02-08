<!DOCTYPE html>
<html>
<head>
    <title>User Account Profile</title>
    <link rel="stylesheet" href="user account.css" />
</head>
<body>
<?php

$ServerName="localhost";
$UserName="root";
$Password="";
$DataBase="buildmaster";

$conn= new mysqli($ServerName, $UserName, $Password, $DataBase);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `employee_table` WHERE 1"; // Assuming user ID 1 for demonstration purposes
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<div class="profile">
    <center>
        <h1>User Account Profile</h1>
        <img src=".jpg" alt="Image Description">
    </center>
    <p>First Name   : <?php echo $row['firstName']; ?><p>
    <p>Last Name    : <?php echo $row['lastName']; ?><p>
    <p>Email        : <?php echo $row['email']; ?></p>
    <p>NIC          : <?php echo $row['nic']; ?></p>
    
    <button onclick="showEditForm()">Edit Profile</button>
</div>


<div id="editForm" style="display: none;">
    <h2>Edit Profile</h2>
    <form method="POST" action="">
        <label for="first-name">Name:</label>
        <input type="text" id="first-name" name="first-name" value="<?php echo $row['firstName']; ?>">
        <br>
        <br>
      
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" value="<?php echo $row['lastName']; ?>">
        <br>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>">
        <br>
        <br>

        <label for="nic">NIC:</label>
        <input type="text" id="nic" name="nic" value="<?php echo $row['nic']; ?>">
        <br>
        <br>

        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
       
</div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update"])) {
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $nic = $_POST['nic'];
      
        $updateSql = "UPDATE `employee_table` SET `firstName` = '{$firstName}', `lastName` = '{$lastName}', `email` = '{$email}' WHERE `nic` = '{$nic}'";
        
        if ($conn->query($updateSql) === TRUE) {
            echo "Profile updated successfully.";
            // Fetch the updated profile data
            $updatedResult = $conn->query("SELECT * FROM `employee_table` WHERE `nic` = '{$nic}'");
            if ($updatedResult->num_rows > 0) {
                $updatedRow = $updatedResult->fetch_assoc();
                $row = $updatedRow; // Update the row variable with the new data
            }
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update"])) {
        // Update logic

        // Assuming the update was successful
        echo "<script>alert('Profile update successful.');</script>";
    } elseif (isset($_POST["delete"])) {
        $nic = $_POST['nic'];

        // Check if user exists before deleting
        $checkSql = "SELECT * FROM `employee_table` WHERE `nic` = '{$nic}'";
        $result = $conn->query($checkSql);

        if ($result->num_rows > 0) {
            // User found, proceed with deletion
            $deleteSql = "DELETE FROM `employee_table` WHERE `nic` = '{$nic}'";

            if ($conn->query($deleteSql) === TRUE) {
                // Profile deleted successfully
                echo "<script>alert('Profile deleted successfully.');</script>";
            } else {
                // Error deleting profile
                echo "<script>alert('Error deleting profile: " . $conn->error . "');</script>";
            }
        } else {
            // User not found
            echo "<script>alert('User not found.');</script>";
        }
    }
}


// Display the form or next person's details only if not deleted
if (!isset($_POST["delete"]) || (isset($_POST["delete"]) && $result->num_rows == 0)) {
    // Display form or next person's details here
}
?>

<?php
} else {
    echo "No user found.";
}

$conn->close();
?>

<script>
    function showEditForm() {
      document.getElementById("editForm").style.display = "block";
    }
</script>

</body>
</html>