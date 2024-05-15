<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="imgs/image4.jpeg">
    <title>Delete Form</title>
    <link rel="stylesheet" type="text/css" href="contact_team.css">
    <style>
         .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #262521;
            width: 100%;
            font-family: "Open Sans";
            padding-top: 5px;
            color: #fff;
            z-index: 9999;
        }
    </style>
    
</head>
<body>
    <?php include 'sidebar.php';?>
    <?php include 'header.php';?>
    <h1>Delete Form</h1>
    <div class="container">
        <form method="POST" action="delete_form.php">
            <label for="emp_id">Employee ID:</label>
            <input type="text" id="emp_id" name="emp_id" required>
            
            <input type="submit" value="Delete" name="delete">
        </form>
    </div>

    <div class="footer">
    <?php include 'footer.php';?>
    </div>

</body>
</html>
