<?php

include "../config.php";
?>


<?php
$query_show_emp= "select * from accounts";
$result_show_emp= mysqli_query($conn, $query_show_emp);


if(isset($_GET['emp_id'])){
    $id = $_GET['emp_id'];
    $delete = mysqli_query($conn, "DELETE FROM accounts WHERE emp_id = '$id'");
}

?>
 

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        
<title>buildmaster</title>

    <link rel="stylesheet" href="adminPanel.css">
    <link rel="icon" href="/Buildmaster/resources/logo.">
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <?php
include "common/header.php" ;
include "common/sidebar.php" ;   
?> 
<body class=body>


<container class= container>
<?php 
// Query for table "emp_pool"
$sql_emp_pool = "SELECT COUNT(*) AS count FROM emp_pool";
$result_emp_pool = $conn->query($sql_emp_pool);

if ($result_emp_pool === false) {
    die("Error executing the query: " . $conn->error);
}


$row_emp_pool = $result_emp_pool->fetch_assoc();
$emp_pool_count = $row_emp_pool['count'];


// Query for table "project_details"
$sql_project_details = "SELECT COUNT(*) AS count FROM project_details";
$result_project_details = $conn->query($sql_project_details);


if ($result_project_details === false) {
    die("Error executing the query: " . $conn->error);
}


$row_project_details = $result_project_details->fetch_assoc();
$project_details_count = $row_project_details['count'];



// Query for table "supplier"
$sql_supplier = "SELECT COUNT(*) AS count FROM supplier";
$result_supplier = $conn->query($sql_supplier);

if ($result_supplier === false) {
    die("Error executing the query: " . $conn->error);
}

$row_supplier = $result_supplier->fetch_assoc();
$supplier_count = $row_supplier['count'];



$conn->close();
?>


</container>

<div class="container">
    <div>
      <div class="circle">
        <?php
          echo $emp_pool_count;
        ?>
      </div>
      <div class="title">Workers</div>
    </div>
    <div>
      <div class="circle">
        <?php
          $text = "Circle 2";
          echo $project_details_count;
        ?>
      </div>
      <div class="title">Projects</div>
    </div>
    <div>
      <div class="circle">
        <?php
          $text = "Circle 3";
          echo $supplier_count;
        ?>
      </div>
      <div class="title">Suppliers</div>
    </div>
  </div>
 

<div class="container">
    <div class="row mt-5">
        <div class= "col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">NEW EMPLOYEES</h2>
                
            </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
<tr class="bg-dark text-white">
    <th>Employee ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Birth Date</th>
    <th>NIC</th>
    <th>Password</th>
    <th>Type</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
<tr>
    <?php
    
    while($row = mysqli_fetch_assoc($result_show_emp))
     {
?> 
<td><?php echo $row['emp_id']; ?></td>
<td><?php echo $row['firstName']; ?></td>
<td><?php echo $row['lastName']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phoneNum']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['nic']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['emp_type']; ?></td>


<form action="edit.php" method="post">
  <input type="hidden" name="emp_id" value="<?php echo $row['emp_id']?>"/>
<td><input type="submit" name="edit" class="btn btn-primary" value="EDIT"></td>
</form>

<form action="delete.php" method="post">
  <input type="hidden" name="emp_id" value="<?php echo $row['emp_id'] ?>"/>
  <td><input type="submit" name="delete" class="btn btn-danger" value="DELETE"></td>
</form>



     </tr>
<?php

    }

    ?>
 
</table>
<form action="gen_id.php" method="post">
  <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>"/>
  <td><input type="submit" name="delete" class="btn btn-danger" value="Genarate ID"></td>
</form>
</div>
        </div>
</div>
</div>
</div>


<footer><?php
include "common/footer.php";
?>  </footer>
</body>

</html>
