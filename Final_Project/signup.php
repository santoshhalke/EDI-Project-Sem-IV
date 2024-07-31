<?php
require_once "includes/logout.php";
logout();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <script src="./sign.js" defer></script>
    <title>Sign Up</title>
</head>
<body>
    <ul style="list-style-type: none;">
        <li><a href="./index.php"><u>HOME</u></a></li>
        <li><a href=""><u>SERVICES</u></a></li>
        <li><a href=""><u>ABOUT US</u></a></li>
        <li><a href="./contact.html"><u>CONTACT</a></li>
         </ul> 
    <h1>Create Account Now</h1>
   <div class="container">
    <form class="sign-up" action="includes/signup.php" method="POST">
        <label for="fname" >Enter Your First Name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname" >Enter Your Last Name:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="use" >Use as:student/admin/recruiter-</label>
        <input type="text" id="use" name="use"><br><br>
        <label for="uname" class="email" > Enter Your Email Id:</label>
        <input type="text" id="uname"  class="email" name="email"><br><br>
        <label for="pass" class="pass">Create password:</label>
        <input type="text" id="pass"  class="pass" name="pass"><br><br>
        <p>Terms and Conditions:Please read the refund policy of the website,before buying the ticket.Once payment is done ,there will refund available or 50% will be return as per the policy.</p>
     <br>
     <label for="policy" class="term">I AGREE</label>
     <input type="checkbox" id="policy" class="policy">
        <input type="submit" value="Create Account" class="cre" name="submit">
    </form>
    
</div>
</body>
</html>