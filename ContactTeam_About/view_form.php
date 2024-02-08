<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="imgs/image4.jpeg">
    <title>Contact Team View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .no-records {
            color: #888;
        }
        
        .footer{
            position: fixed;
            bottom: 10px;
            left: 10px;
            right: 0;
            background: #262521;
            width: 100%;
            font-family: "Open Sans";
            padding-top: 5px;
            color: #fff;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <?php include "sidebar.php";?>
    <?php include "header.php";?>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["emp_id"])) {
        $employeeID = $_GET["emp_id"];

        $sql = "SELECT * FROM Contact_team WHERE Emp_id='$employeeID'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>View Records</h2>";
            echo "<table>";
            echo "<tr><th>Employee ID</th><th>Project ID</th><th>Sender Email</th><th>Receiver Email</th><th>Messages</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row["Emp_id"]."</td>";
                echo "<td>".$row["Pro_id"]."</td>";
                echo "<td>".$row["Email"]."</td>";
                echo "<td>".$row["Emp_mail"]."</td>";
                echo "<td>".$row["Messages"]."</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p class='no-records'>No records found.</p>";
        }

        mysqli_close($conn);
    }
    ?>
    <dev class="footer">
    <?php include "footer.php";?>
    </dev>
</body>
</html>
