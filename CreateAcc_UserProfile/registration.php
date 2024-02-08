

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="Registation.css" />
</head>
<script src="js/registation.js"></script>
<body>
    <section class="container">
        <header>Registration Form</header>
        <form method="post" action="regi.php" class="form">
            <div class="input-box">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Enter First Name" required />
            </div>
            <div class="input-box">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Enter the Last Name" required />
            </div>

            <div class="input-box">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="phone-number">Phone Number</label>
                    <input type="text" id="phone-number" name="phone-number" placeholder="Enter phone number" required />
                </div>
                <div class="input-box">
                    <label for="birth-date">Birth Date</label>
                    <input type="date" id="birth-date" name="birth-date" placeholder="Enter birth date" required />
                </div>
            </div>

            <div class="input-box">
                <label for="nic">NIC</label>
                <input type="text" id="nic" name="nic" placeholder="Enter the NIC number" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>
                <div class="input-box">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required/>
                </div>
            </div>
            <div class="employee-box">
                <h3>Employee Type</h3>
                <div class="employee-option">
                    <div class="employee">
                        <input type="radio" name="employee" checked value="Engineer" />
                        <label for="check-Engineer">Engineer</label>
                    </div>
                    <div class="employee">
                        <input type="radio" name="employee" value="Supplier" />
                        <label for="check-Supplier">Supplier</label>
                    </div>
                    <div class="employee">
                        <input type="radio" name="employee" value="Architect" />
                        <label for="check-archieture">Architect</label>
                    </div>
                    <div class="employee">
                        <input type="radio" name="employee" value="Accountant" />
                        <label for="check-accounten">Accountant</label>
                    </div>
                </div>




                <button onclick="validateForm(submitBtn)" id="submitBtn">Submit</button>
                <div class="link-section">
                    <center>
                        <a href="C:/xampp/htdocs/Buildmaster/login.php" class="login-page-btn">
                I already have a account
              </a>
                    </center>
        </form>
    </section>

</body>

</html>