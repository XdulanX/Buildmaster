<?php
if(isset($_POST['submit'])){
    $projectid= $_POST['id'];
    $location= $_POST['location'];
    $startdate= $_POST['startdate'];
    $enddate= $_POST['enddate'];
    $leadername= $_POST['leadername'];

    require 'config.php'; 


   
    $conn = mysqli_connect($host='localhost',$user='root',$password='',$dbname='buildmaster');

    $sql = "UPDATE p_details SET P_location='$location', start_date='$startdate', end_date='$enddate', leader_name='$leadername' WHERE P_id='$projectid'";
    mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>

<head>
<link rel="icon" href="images/logo.jpg">
    <title>Project Details</title>
    <link rel="stylesheet" type="text/css" href="update_project.css">
    
</head>
<body>

<header>
  <?php include 'header.php';?>
</header>

<div class="sidebar">
    <div class="sidebar-title">Menu</div>
    <a href="page1.html">USER PROFILE</a>
    <a href="page2.html">SYSTEM ADMIN</a>
    <a href="page3.html">PROJECT MANAGER</a>
    <a href="page4.html">EMPLOYEE</a>
    <a href="page5.html">ACCOUNTANT</a>
</div>

<form action="#" method="POST">
    <label for="id">Project id:</label><br>
    <input type="number" id="id" name="id"><br>

    <label for="location">Project location:</label><br>
    <input type="text" id="location" name="location"><br>

    <label for="startdate">Start date:</label><br>
    <input type="date" id="startdate" name="startdate"><br>

    <label for="enddate">End date:</label><br>
    <input type="date" id="enddate" name="enddate"><br>

    <label for="leadername">Leader name:</label><br>
    <input type="text" id="leadername" name="leadername"><br>

    <input type="submit" name="submit" value="Update">
</form>
<br>


<footer>
  <?php include 'footer.php';?>
</footer>


</body>
</html>
