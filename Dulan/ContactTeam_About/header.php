<!DOCTYPE html>
<head>
    <title>BuildMaster</title>
<style>

header .navbar {

    width: 87%;
    height: 75px;
    background-color: #000;
    margin-left:200px;
    margin-right:80px;
   
}

header .navbar .icon {
    width: 200px;
    float: left;
    height: 70px;
}

header .navbar .logo {
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    padding-top: 10px;
    margin-top: 5px;
    display: inline-block;
}

header .navbar .menu {
    width: 400px;
    float: left;
    height: 70px;
}

header .navbar ul {
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

header .navbar ul li {
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

header .navbar ul li a {
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

header .navbar ul li a:hover {
    color: #ff7200;
}

header .navbar .search {
    float: right;
    height: 70px;
}

header .navbar .search .srch {
    height: 30px;
    width: 180px;
    margin-top: 20px;
    margin-right: 10px;
    padding: 5px;
}

header .navbar .search .btn {
    height: 40px;
    width: 60px;
    background: #ff7200;
    border: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    cursor: pointer;
    margin-right: 40px;
}</style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="icon">
                <h1 class="logo">BuildMaster</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../homepage.php">Home</a></li>
                    <li><a href="About_Us.php">About</a></li>
                    <li><a href="../projects.php">Project</a></li>
                    <li><a href="../ConnectUs_AssignTeams/index.php">Contact</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="text" placeholder="Search">
                <input class="btn" type="button" value="Search">
            </div>
        </nav>
    </header>
</body>
</html>