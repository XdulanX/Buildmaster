<?php
if(isset($_POST['delete'])){
    $projectid= $_POST['delete_id'];

   require 'config.php'; 


   $conn = mysqli_connect($host='localhost',$user='root',$password='',$dbname='buildmaster');

    $sql = "DELETE FROM p_details WHERE P_id='$projectid'";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link rel="stylesheet" type="text/css" href="delete_project.css">
    
</head>
<body>
<header>
  <?php include 'header.php';?>
</header>
    <div class="container">
        <div class="form-wrapper">
            <h2>Project Details</h2>
            <form action="#" method="POST">
                <label for="delete_id">Project ID:</label>
                <input type="number" id="delete_id" name="delete_id">
                <input type="submit" name="delete" value="Delete">
            </form>
        </div>
    </div>

    <footer>
  <?php include 'footer.php';?>
</footer>

</body>
</html>
