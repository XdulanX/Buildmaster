
<?php
if(isset($_POST['submit'])){
    $id= $_POST['Pro_id'];
    $empid= $_POST['Emp_id'];

    

    require 'config.php'; 


    $sql = "UPDATE P_team_members SET Pro_id='$id', Emp_id='$empid' ";
    mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>

<head>
<link rel="icon" href="images/logo.jpg">
    <title>Project Details</title>

    
</head>
<body>

<header>
  <?php include 'header.php';?>
</header>



<form action="#" method="POST">

    <label for="Pro_id">Project id:</label><br>
    <input type="text" id="Pro_id" name="Pro_id"><br>

    <label for="Emp_id">employee id:</label><br>
    <input type="text" id="Emp_id" name="Emp_id"><br>
    
    
    <form action="update.php" method="post">
  
    <input type="submit" name="submit" value="Update" onclick="showSuccessMessage()">

</form>
<br>
<script>
    function showSuccessMessage() {
      alert("Update successful!");
    }
  </script>

<footer>
  <?php include 'footer.php';?>
</footer>


</body>
</html>