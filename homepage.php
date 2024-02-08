<!DOCTYPE html>
<html>
<head>
    <title>Build Master</title>
    <link rel ="icon" href="images/logo.jpg">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <style>
        /* Sidebar styles */
        .sidebar {
            width: 150px; 
            background-color: #000;
            padding: 10px;
            float: left;
        }

        .sidebar-title {
            margin-top: 10px;
            color: #ff7200;;
            font-size: 30px;
            font-family: Arial;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .sidebar a {
            display: block;
            margin-top: 60px;
            margin-bottom: 10px;
            font-family: Arial;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: orange;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php include 'header.php';?>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
    <div class="sidebar-title">Menu</div>
        <a href="CreateAcc_UserProfile/user_account.php">USER PROFILE</a>
        <a href="Login_AdminPanel/Admin_Panel.php">SYSTEM ADMIN</a>
        <a href="projectdetails.php">PROJECT MANAGER</a>
        <a href="ContactTeam_About/contact_team.php">EMPLOYEE</a>
        <a href="ConnectUs_AssignTeams/PM.php">Assign Teams</a>
    </div>
     
    <div class="wrapper">
        <div class="slider-container">
        <?php
        /*slider*/
        $images = array('image1.jpg', 'image2.jpg', 'image3.jpg','image4.jpg', 'image5.jpg', 'image6.jpg','image7.jpg', 'image8.jpg', 'image9.jpg', 'image10.jpg');
        foreach ($images as $image) {
            echo '<div class="slide"><img src="images/' . $image . '" alt="Slide Image"></div>';
        }
        ?>
        </div>
    </div>

    <div class="slider-text">
        <h2>Build Master <br>is a multi-disciplinary design <br>
            and construction company <br>focused on 
            serving our clients,<br> empowering our 
            employee-owners,<br> and enhancing our communities.
       </h2>
    </div>

    <script src="script.js"></script>
    <br>
    


    <br>
</body>
</html>
