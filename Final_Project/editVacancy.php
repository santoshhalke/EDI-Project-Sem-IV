<?php

require_once "includes/connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vacancy</title>
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
        <h2>Edit Vacancy</h2>
        <form action="includes/editvacancyhandler2.php" method="post">
            <div class="form-group">
                <label for="username">Post Name:</label>
                <input type="text" id="username" name="PostName" required>
            </div>
            <div id="passwordupdate" class="form-group">
                <!-- This will be injected by php 
                    <label for="password">Number of Vacancies:</label>
                <input type="number" id="password" name="Vacancies" required> -->
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#username').on('input', function() {
            var searchValue = $(this).val();

            $.ajax({
                url: 'includes/editvacancyhandler.php',
                method: 'POST',
                data: { search: searchValue },
                success: function(response) {
                    $('#passwordupdate').html(response);
                }
            });
        });
    });
</script>
    </html>

<?php
}else{
    header("Location: activejobs");
}

?>
