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

        <form method="POST" action="submit_form.php" >
            <fieldset>
            <legend>Submit Form</legend>
            <br  />
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
            </fieldset>

            <input type="submit" value="SEND">
            <dev class="button-container">
            <a href="update_contact_team.php" class="button">Update Messages</a>
            <a href="delete_contact_team.php" class="button">Delete Messages</a>
            <a href="view_contact_team.php" class="button">View My Messages</a>
            </dev>
        </form>
    </div>
    <br>
    <hr>
    <div class="team-members">
        <div class="team-member">
            <img src="imgs/person1.jpg" alt="Team Member 1">
            <p>Name: Lisa Jane</p>
            <p>Designation: Project Manager</p>
            <p>Email: jane@gmail.com</p>
        </div>
        <div class="team-member">
            <img src="imgs/person2.jpg" alt="Team Member 2">
            <p>Name: Jane Smith</p>
            <p>Designation: Engineer</p>
            <p>Email: janesmith@yahoo.com</p>
        </div>
        <div class="team-member">
            <img src="imgs/person3.jpg" alt="Team Member 3">
            <p>Name: Alex Johnson</p>
            <p>Designation: Supplier</p>
            <p>Email: alexjohnson@gmail.com</p>
        </div>
        <div class="team-member">
            <img src="imgs/person4.jpeg" alt="Team Member 3">
            <p>Name: Anand Perera</p>
            <p>Designation: Architecturer</p>
            <p>Email: anandperera@yahoo.com</p>
        </div>
    </div>
    <?php include 'footer.php';?>

</body>
</html>
