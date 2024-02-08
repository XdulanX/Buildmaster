
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us page</title>
       
        
<style>
    .container {
      display: flex;
      gap: 10px;
      background-color:white;
      justify-content:flex-start;
      margin-left:200px;
      width:250%;
    
      
    }
    
    .section {
      flex: 1;
      padding: 10px;
      border-radius: 15px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .contact {
      background-color:white;
     padding:50px;
     width:50px;
   
     
    
 
    

    }
  
    .inquiry {
    
      background-color:white;
      padding:10px;
      width:50px;
    }
    
    .map {
      background-color:#262521;
  padding:10px;
    }
    h1 {
  text-align:auto;
}

form {
  width:250%;
  max-width:500px;
  margin: 10px auto;
}
input, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
}

input[type=submit]{
  background-color:#ff7200;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: black;
}
    
.mapouter{
  position:relative;
  text-align:right;
  width:auto;
  height:auto;
}
.gmap_canvas {
  overflow:hidden
  ;background:none;
  width:auto;
  height:auto;
}
.gmap_iframe {
  width:100%;
  height:500px;
}
  
  </style>
       
    </head>
    <body>
    <?php
  include "header.php";
  include "sidebar.php";
  include "footer.php";
    ?>

<div class="container">
  <div class="section contact-section">  
      
        <h1>Contact Us</h1>
  <form action="" method="post">
    <input type="text" name="Name" placeholder="Name" required>
    <input type="Email" name="Email" placeholder="Email"required>
    <textarea name="message" placeholder="Your message" required></textarea>
    <input type="submit" value="Submit">
</form>
</div>
   
<div class="container">
    <div class="section inquiry-section">

	<h1>Send Inquiry</h1>
  <form action="php 1.php" method="post">
    <input type="text" name="Name" placeholder="Name" required>
    <input type="Email" name="Email" placeholder="Email"required>
    <input type="Phone_number" name="Phone_number" placeholder="Phone_number"required>
    <input type="number" name="Budget" placeholder="Budget"required>
    <input type="text" name="Goals" placeholder="Goals">
    <select name="construction_type">
      <option value="Residential">Residential</option>
      <option value="Commercial">Commercial</option>
      <option value="Industrial">Industrial</option>
    </select>
    <input type="submit" value="Submit">
    
  </form>
</div>

<div class="container">
<div class="section map-section">

<h1>Location</h1>

  <div class="mapouter"><div class="gmap_canvas">
<iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
</iframe>
</div>

</div>

</div>



  <script src="style.js"></script>


    </body>
</html>