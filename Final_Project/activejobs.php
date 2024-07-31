<?php
require_once "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACtive Jobs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Active Jobs</h1>
        <table>
            <thead>
                <tr>
                    <th>Post Name</th>
                    <th>Vacancies</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM activejobs;";
                $results = mysqli_query($conn, $sql);
                if (!empty($results)) {
                    foreach ($results as $row) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row["PostName"]); ?></td>
                            <td><?php echo htmlspecialchars($row["Vacancies"]); ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <form method="post" action="addVacancy.php">
            <button class="btn" type="submit">Add Vacancy</button>
        </form>
        <form method="post" action="editVacancy.php">
            <button class="btn" type="submit">Edit Vacancy</button>
        </form>
        <form method="post" action="deleteVacancy.php">
            <button class="btn" type="submit">Delete Vacancy</button>
        </form>
    </div>
</body>

</html>