<?php

include "config.php";
?>


<?php
$query_show_mem= "select * from emp_pool";
$result_show_mem= mysqli_query($conn, $query_show_mem);


if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    $delete = mysqli_query($conn, "DELETE FROM emp_pool WHERE ID = '$id'");
}

?>
<?php

include "config.php";
?>

<?php

$query_show_mem= "SELECT * FROM emp_pool";
$result_show_mem= mysqli_query($conn, $query_show_mem);


if(isset($_GET['update']))
{
  $id = $_POST["ID"];
  $empid = $_POST["password"];
  $new_date = $_POST["new_date"];
  
  $update_query = "UPDATE emp_pool SET ID = '$id', password = '$empid', date_column = '$new_date' WHERE No = 'your_no_value'";
  $query_run = mysqli_query($conn, $update_query);

}
 

?> 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

  
  
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: auto;}

title {
  margin-top: 50px; 
  padding-top:50px;
}


input[type=text], select, textarea {
  width: auto;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
  margin-top: 10px;
  margin-bottom: 16px;
  margin-right:80px;
  margin-left:20px;
  resize: vertical;
}

input[type=submit]{
  background-color:#ff7200;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: black;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
  margin-left: 150px;
}
input[type=Search]{
    background-color:#ff7200;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:20px;
}
input[type=Search]:hover {
  background-color: black;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left: 80px;
  position:relative;
  top: -80px;
}

td, th {
  border: 1px solid #dddddd;
  border-collapse:collapse;
  text-align: "left";
  padding: (0, 0,0);
}

tr:nth-child(even) {
  background-color: #dddddd;
}
tr:hover{
  background-color: #f2f2f2;
}
input tr[type=text], select, textarea {
  width:10%;
  height: 20%;
  box-sizing: border-box;
}

</style>
</head>

<body>

  <?php
  include "common/header.php";
  include "common/sidebar.php";
  
    ?>
 

<div class="container">

<h2 class="display-6 text-center">Genrate ID</h2>


  <form action="gen_id_procc.php" method="POST">
    <label for="PID">ID</label>
    <input type="text" id="pmID" name="Project_ID" placeholder="ID" required>

    <label for="EmpID">Password</label>
    <input type="text" id="EmpID" name="Employee_ID" placeholder="Password" required>
    <input type="submit" value="Submit">
    
	<hr>
  </form>
</div>

<div class="container">
    <div class="row mt-5"></div>
        <div class= "col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center"></h2>
                
            </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
<tr class="bg-dark text-white">
    <th>Number</th>
    <th>ID</th>
    <th>Password</th>
    <th>Delete</th>
    
</tr>
<tr>
    <?php
    
    while($row = mysqli_fetch_assoc($result_show_mem))
     {
?>
<td><?php echo $row['eno']; ?></td>
<td><?php echo $row['ID']; ?></td>
<td><?php echo $row['password']; ?></td>



<form action="id_delete.php" method="post">
  <input type="hidden" name="eno" value="<?php echo $row['eno'] ?>"/>
  <td><input type="submit" name="delete" class="btn btn-danger" value="DELETE"></td>
</form>

     </tr>
<?php

    }

    ?>
   
</table>
</div>
        </div>
</div>
</div>
<?php
include "common/footer.php";

?>
</body>

</html>


