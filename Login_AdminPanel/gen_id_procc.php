
        <?php

include "config.php";



if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $pmID = $_POST['Project_ID'];
  $empID = $_POST['Employee_ID'];



  // Insert data into the database
  $sql = "INSERT INTO  emp_pool (ID, Password) VALUES ('$pmID', '$empID')";
  if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}



//Retrieve data from the database
$sql = "SELECT * FROM emp_pool";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["eno"] . "</td>";
    echo "<td>" . $row["ID"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "No data available.";
}

$conn->close();
?>


    

    