<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="imgs/image4.jpeg">
    <title>View Data</title>
    <link rel="stylesheet" type="text/css" href="contact_team.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid black;
            padding: 8px;
        }

        table th {
            background-color: #f2f2f2;
        }

        .footer{
            position: fixed;
            bottom: 10px;
            left: 10px;
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
    <h1>View Data</h1>
    <div class="container">
        <form method="GET" action="view_form.php">
            <label for="emp_id">Enter Employee ID:</label>
            <input type="text" id="emp_id" name="emp_id" required>
            <input type="submit" value="View">
        </form>
    </div>
    <div class="footer">   
    <?php include 'footer.php';?>
    </div> 
</body>
</html>
