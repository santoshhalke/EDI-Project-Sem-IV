<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $role = $_POST["use"];
    $email = $_POST["email"];
    $pass =$_POST["pass"];

    $sql = "INSERT INTO signup(firstname, lastname, signupas, email, pass) values('$fname', '$lname', '$role', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM signup WHERE email = '$email' and Pass = '$pass';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $row['id'];

}else{
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Handler</title>
</head>
<body>
<?php 
if($role == "admin"){?>
    <form action="typehandler.php" method="post">
        <input type="text" placeholder="Enter Name of College" name="type">
    </form>
<?php
}elseif ($role == "recruiter") {?>
    <form action="typehandler.php" method="post">
        <input type="text" placeholder="Enter Name of Company" name="type">
    </form>
<?php    
}else{?>
    <form action="typehandler.php" method="post">
        <input type="text" placeholder="Enter Name of College" name="type">
    </form>
<?php
}
?>
</body>
</html>