<?php
if(isset($_POST['submit'])){
    $wid = $_POST['emp_id'];
    $id = $_POST['wid'];
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['mail'];
    $phoneNum = $_POST['phoneNum'];
    $dob = $_POST["dob"];
    $nic = $_POST['nic'];
    $pass = $_POST['pass'];
    $type = $_POST['wType'];

    require 'login/config.php'; 

    $conn = mysqli_connect($host='localhost',$user='root',$password='',$dbname='buildmaster');

    // Prepare the statement
    $sql = "UPDATE accounts SET ID=?, firstName=?, lastName=?, email=?, phoneNum=?, dob=?, nic=?, password=?, emp_type=? WHERE emp_id=?";
    $stmt = mysqli_prepare($conn, $sql);

  
    mysqli_stmt_bind_param($stmt, 'sssssssssi', $id, $fName, $lName, $email, $phoneNum, $dob, $nic, $pass, $type, $wid);

    mysqli_stmt_execute($stmt);

    // Check if the update was successful
    if(mysqli_stmt_affected_rows($stmt) > 0) {

       // echo "Update successful.";
    } else {
   
       // echo "Update failed.";
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


}
?>


<!DOCTYPE html>

<head>
<link rel="icon" href="images/logo.jpg">
    <title>Project Details</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<header>
  <?php include 'common/header.php';?>
</header>
<body>

<?php include 'common/sidebar.php';?>

<div class="box1">
        <form action="" method="post">
        <input type="hidden" id="emp_id" name="emp_id">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname"  placeholder="Enter First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname"  placeholder="Enter Last Name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mail">Email</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter Password">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nic">NIC</label>
                    <input type="text" class="form-control" id="nic" name="nic"  placeholder="Enter NIC">
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob"  placeholder="Enter Date of Birth">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phoneNum">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNum" name="phoneNum"  placeholder="Enter Phone Number">
                </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="wType">Type</label>
                    <input type="text" class="form-control" id="wType" name="wType"  placeholder="Employee Type">
                </div>
                <div class="form-group col-md-2">
                    <label for="wid">ID</label>
                    <input type="text" class="form-control" id="wid" name="wid"  placeholder="User ID">
                </div>
            
            <input type="submit" id="submit" name="submit" class="btn btn-dark" value="UPDATE">
        </form>
    </div>

<footer>
  <?php include 'common/footer.php';?>
</footer>


</body>
</html>
