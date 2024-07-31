<?php
require_once 'includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Tests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .subject-box {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .subject-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .subject-stats {
            font-size: 16px;
            margin-top: 10px;
        }
        .take-test-button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-top: 20px;
        }
        .take-test-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Take a Test</h1>
        
        <!-- Database Management System -->
        <div class="subject-box">
            <div class="subject-title">Database Management System</div>
            <div class="subject-stats">
                Tests Taken: <span>0</span><br>
                Average Score: <span>N/A</span>
            </div>
            <div>
                <a href="dbms.php" class="take-test-button">Take a Test</a>
            </div>
        </div>
        
        <!-- Object Oriented Programming -->
        <div class="subject-box">
            <div class="subject-title">Object Oriented Programming</div>
            <div class="subject-stats">
                Tests Taken: <span>0</span><br>
                Average Score: <span>N/A</span>
            </div>
            <a href="oops.php" class="take-test-button">Take a Test</a>
        </div>
        
        <!-- Data Structure and Algorithm -->
        <div class="subject-box">
            <div class="subject-title">Data Structure and Algorithm</div>
            <div class="subject-stats">
                Tests Taken: <span>0</span><br>
                Average Score: <span>N/A</span>
            </div>
            <a href="dsa.php" class="take-test-button">Take a Test</a>
        </div>

        <!-- Computer Networks -->
        <div class="subject-box">
            <div class="subject-title">Computer Networks</div>
            <div class="subject-stats">
                Tests Taken: <span>0</span><br>
                Average Score: <span>N/A</span>
            </div>
            <a href="#" class="take-test-button">Take a Test</a>
        </div>
        
        <!-- Operating System -->
        <div class="subject-box">
            <div class="subject-title">Operating System</div>
            <div class="subject-stats">
                Tests Taken: <span>0</span><br>
                Average Score: <span>N/A</span>
            </div>
            <a href="#" class="take-test-button">Take a Test</a>
        </div>
        
    </div>
</body>
</html>
