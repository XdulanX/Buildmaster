<?php

require 'config.php'; 


$conn = mysqli_connect($host='localhost',$user='root',$password='',$dbname='buildmaster');

$sql = "SELECT * FROM p_details";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/logo.jpg">
    <title>View Project Details</title>
    <link rel="stylesheet" type="text/css" href="view_project_details.css">
</head>
<body>
<header>
  <?php include 'header.php';?>
</header>
    <div class="container">
        <h2>Project Details</h2>

        <table>
            <tr>
                <th>Project ID</th>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Leader Name</th>
            </tr>
            
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['P_id']."</td>";
                    echo "<td>".$row['P_location']."</td>";
                    echo "<td>".$row['start_date']."</td>";
                    echo "<td>".$row['end_date']."</td>";
                    echo "<td>".$row['leader_name']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No project details found.</td></tr>";
            }
            ?>
        </table>
    </div>
    <footer>
  <?php include 'footer.php';?>
</footer>
<script src="view_project_details.js"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>
