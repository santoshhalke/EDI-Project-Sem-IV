<?php

require_once 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $postid = $_POST["postid"];
    $sql = "SELECT * FROM reviewpost WHERE postid=$postid;";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $recuitername = $row["Recruiter"];
        $company = $row["Company"];
        $postName = $row["PostName"];
        $salary = $row["Salary"];

        $sql = "INSERT INTO applyforjob VALUES($postid, '$recuitername', '$company', '$postName',$salary);";
        $result = mysqli_query($conn, $sql);
        $sql = "DELETE FROM reviewpost WHERE postid=$postid;";
        $result = mysqli_query($conn, $sql);
        header("Location: ../reviewpost.php");
    }else{
        echo "Unable to Verify";
    }
}else{?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Post</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
    </head>
    <body>
    <div class="login-container">
        <h2>Delete Data</h2>
        <form action="deletepost.php" method="post">
            <div class="form-group">
                <label for="username">Enter Post Id Here :-</label>
                <input type="number" name="postid" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Delete">
            </div>
        </form>
    </div>
    </body>
    </html>
    <?php
}