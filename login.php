<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>buildmaster</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../resources/logo.png">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<body>
    <div class="main">
  
<head>
    <link rel="stylesheet" href="header.css">
</head>
 

        <div class="navbar">
            <div class="icon">
            <img class="logo_img" src="../resources/logo.png">

                <h2 class="logo">BuildMaster</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PROJECTS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">ABOUT</a></li>

                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <img class="logo2" src="../resources/logo.png">
        <div class="content">
            <h1>Create a Design & <br><span>Develop</span> <br>your Dreams</h1>
            <p class="par">Buildmaster: Since 2000, we've excelled in extreme construction, completing 100+ projects.
                </br>Our team exceeds expectations,crafting high-quality buildings, <br> from skyscrapers to unique homes. Join us in building a better future.</p>

            <button class="cn"><a href="#">Explore More</a></button>


            <form action="loginProcess.php" method="post" enctype="multipart/form-data">
            <div class="form">
                <h2>Login Here</h2>
                <?php if(isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>


                

                <input type="text" name="ID" placeholder="Enter Employee ID Here" required="required">
                <input type="password" name="password" placeholder="Enter Password Here" required="required">
                <button class="btnn"><a href="#">Login</a></button>
</form>
                <p class="link">Don't have an account<br>
                <a href="CreateAcc_UserProfile/Registration.html">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
                </div>
              
            </div>
           
        </div>
        <div class="cprght" ><p>&copy; 2023 BuildMaster(PVT).LTD.  All Rights Reserved.</p></div>
    </div>
    </div>
    </div>
   
    <script src="script.js"></script>
    
</body>

</html
