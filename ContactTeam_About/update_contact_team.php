<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="imgs/image4.jpeg">
<title>Connect with Team Members</title>
    <link rel="stylesheet" type="text/css" href="contact_team.css">
</head>
<body>
    <?php include 'sidebar.php';?>
    <?php include 'header.php';?>
    <h1>Connect with Team Members</h1>
    <div class="container">

        <form method="POST" action="update_form.php" >
            <label for="emp_id">Employee ID:</label>
            <input type="text" id="emp_id" name="emp_id" required>
            
            <label for="pro_id">Project ID:</label>
            <input type="text" id="pro_id" name="pro_id" required>
            
            <label for="sender_email">Your Email</label>
            <input type="email" id="sender_email" name="sender_email" required>
            
            <label for="receiver_email">Receiver's Email:</label>
            <input type="email" id="receiver_email" name="receiver_email" required>
            
            <label for="messages">Message:</label>
            <textarea id="messages" name="messages" rows="4" required></textarea>

            <input type="submit" value="Update" name="update">
        </form>
    </div>
    <?php include 'footer.php';?>
</body>
</html>
