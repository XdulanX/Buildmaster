<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuildMaster</title>
    
<style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
}

.wrapper {
    display: flex;
    position: relative;
}

.wrapper .sidebar {
    width: 200px;
    height: 100%;
    background: #262521;
    padding: 30px 0px;
    position: fixed;
}

.wrapper .sidebar h2 {
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;
}

.wrapper .sidebar ul li {
    padding: 15px;
    border-bottom: 1px solid #bdb8d7;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.wrapper .sidebar ul li a {
    color: #bdb8d7;
    display: block;
}

.wrapper .sidebar ul li a .fas {
    width: 25px;
}

.wrapper .sidebar ul li:hover {
    background-color: #ff7200;
}

.wrapper .sidebar ul li:hover a {
    color: #fff;
}

.wrapper .main_content {
    width: 100%;
    margin-left: 200px;
}

.wrapper .main_content .header {
    padding: 20px;
    background: #fff;
    color: #717171;
    border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info {
    margin: 20px;
    color: #717171;
    line-height: 25px;
}

.wrapper .main_content .info div {
    margin-bottom: 20px;
}

@media (max-height: 500px) {
    .social_media {
        display: none !important;
    }
}
</style>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   

    <div class="wrapper">
        <aside class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li class="active"><a href="../homepage.php"><i class="fa fa-home">&nbsp;</i>Home</a></li>
                <li><a href="About_Us.php"><i class="fa fa-user">&nbsp;</i>About</a></li>
                <li><a href="../ConnectUs_AssignTeams/index.php"><i class="fa fa-address-card">&nbsp;</i>Contact</a></li>
                <li><a href="contact_team.php"><i class="fa fa-cog">&nbsp;</i>Contact Team</a></li>
            </ul>
        </aside>
    </div>
</body>
</html>