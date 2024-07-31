<?php
require_once "includes/connection.php";
$sql = "SELECT id,CONCAT(firstname , ' ', lastname) as fullName, email FROM signup WHERE signupas ='student';";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Student</title>
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

        .job-list {
            list-style-type: none;
            padding: 0;
        }

        .job-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="conatiner">
        <ul id="jobList" class="job-list">
            <div class="container">
                <h1>Student List</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Remove Student</th>
                        </tr>
                    </thead>
                    <tbody><?php
                    foreach ($result as $row) { ?>
                            <tr>
                                <form action="includes/studenthandler.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <td><?php echo htmlspecialchars($row["fullName"]); ?></td>
                                    <td><?php echo htmlspecialchars($row["email"]); ?></td>
                                    <td><button>Remove</button></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </ul>
    </div>
</body>

</html>