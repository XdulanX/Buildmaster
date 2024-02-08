
        <?php

include "config.php";



if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $pmID = $_POST['Project_ID'];
  $empID = $_POST['Employee_ID'];



  // Insert data into the database
  $sql = "INSERT INTO  P_team_members (Pro_id, Emp_id) VALUES ('$pmID', '$empID')";
  if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}



//Retrieve data from the database
$sql = "SELECT * FROM P_team_members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["No."] . "</td>";
    echo "<td>" . $row["Pro_id"] . "</td>";
    echo "<td>" . $row["Emp_id"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "No data available.";
}

$conn->close();
?>


    

    