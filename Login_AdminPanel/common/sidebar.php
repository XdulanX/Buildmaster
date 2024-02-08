<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav {
  position: relative;
}

#mySidenav a {
  position: absolute;
  left: -70px;
  transition: 0.3s;
  padding: 15px;
  width: 150px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  margin-top:0;
}

#mySidenav a:hover {
  left: 0;
}

#mySidenav:before {
  content: "Menu";
  position: absolute;
  top: 0;
  left: 0px;
  padding: 10px 20px;
  font-size: 20px;
  color: black;
  border-radius:5px;
  font-weight: bold;
}

#navbar-title {
  text-align: center;
  font-size: 24px;
  margin-top: 20px;
  margin-bottom: 10px;
}

#about {
  top: 50px;
  background-color: #ff7200;
}

#blog {
  top: 110px;
  background-color: black;
}

#projects {
  top: 170px;
  background-color: #ff7200;
}

#contact {
  top: 230px;
  background-color: black;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="../user_account/user_account.php" id="about">User Profile</a>
  <a href="#" id="blog">Blog</a>
  <a href="#" id="projects">Projects</a>
  <a href="#" id="contact">Contact</a>
</div>
</body>
</html>
