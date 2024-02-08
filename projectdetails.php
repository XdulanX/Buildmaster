
<?php
if(isset($_POST['submit'])){
    $projectid= $_POST['id'];
    $location= $_POST['location'];
    $startdate= $_POST['startdate'];
    $enddate= $_POST['enddate'];
    $leadername= $_POST['leadername'];
    
    require 'config.php'; 

    $conn = mysqli_connect($host='localhost',$user='root',$password='',$dbname='buildmaster');

    $sql = "INSERT INTO p_details(P_id,P_location,start_date,end_date,leader_name)values('$projectid',' $location','$startdate','$enddate','$leadername')";
    mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/logo.jpg">
   
    <title>Project Details </title>
    <link rel="stylesheet" type="text/css" href="projectdetails.css">
   

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

    <form id="project-form" action="#" method="POST">
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

        <input type="submit" name="submit" value="Submit">
    </form>
    <br>

    <div class="form-group">
    <button class="button-update" onclick="window.location.href='update_project.php'">Update Project Details</button>
    <br>
    <button class="button-delete" onclick="window.location.href='delete_project.php'">Delete Project Details</button>
    <br>
    <button class="button-view" onclick="window.location.href='view_project_details.php'">View Project Details</button>
    <br>
</div>
<script src="projectdetails.js"></script>

<footer>
<?php include 'footer.php';?>
</footer>

</body>
</html>
